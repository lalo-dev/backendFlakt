<?php
	session_start();
	
	require_once("../class/conexion.php");
		
	$vConn = new ConexionBD();
	
	if (isset($_POST['acc'])) {
		$vAcc = $_POST['acc'];
		
		switch($vAcc)
		{
			case "validaUsuario":
					validaUsuario();
				break;
			case "validaSesion":
					validaSesion();
				break;
			case "cerrarSesion":
					cerrarSesion();
				break;
			case "guardaRegister":
					guardaRegister();
				break;
			case "activaCuenta":
					activaCuenta();
				break;
		}
	}

	function activaCuenta() {
		global $vConn;
		$vQuery = "
			UPDATE user
				SET ActiveAccount = 1
			WHERE UserId = ".$_POST['key']."
			";
		echo $vConn->ExecuteWithoutReturn($vQuery);
	}

	function guardaRegister() {
		global $vConn;

		$vOutRes = array( 'Errores' => array());
		
		//Validacion, mail ya esta registrado?.
		$vQuery  = " SELECT COUNT(UserId) AS EmailRepetido FROM user WHERE AEmail = '".$_POST['txtEmail']."' ";
		$vRes    =  $vConn->ExecuteWithReturn($vQuery);

		if ($vRes[0]["EmailRepetido"] >= 1) {
			array_push($vOutRes["Errores"], array("ErrorNo" => 1, "ErrorDesc" => "This E-mail is already registered."));			
			echo json_encode($vOutRes);
			exit();
		}

		//Insertar registro del usuario
		$vQuery = "
			INSERT INTO user(Name,FirstLastName,SecondLastName,AEmail,
				APassword,UserIdCreated,DateCreated,UserIdLastMod,DateLastMod) 
			VALUES(
				'".$_POST['txtName']."',
				'".$_POST['txtFirstLastName']."',
				'".$_POST['txtSecondLastName']."',
				'".$_POST['txtEmail']."',
				AES_ENCRYPT( '".$_POST['txtPassword']."' ,
					(SELECT Value FROM Configuration WHERE ConfigurationId = 1)),
				'1',NOW(),'1',NOW()
				)
			";
			
		$vRes =  $vConn->ExecuteWithoutReturn($vQuery);

		$vQuery = " SELECT * FROM user ORDER BY DateCreated DESC LIMIT 0,1; ";
		$vRes =  $vConn->ExecuteWithReturn($vQuery);

		require_once("../01Clases/01Util/phpmailer/class.phpmailer.php");
		//Enviar mail cofirmación.
		$mail = new PHPMailer();

		$mail->IsSMTP();
		$mail->SMTPDebug = 1;
		$mail->Port = 587;
		$mail->Host = 'smtp.live.com';
		$mail->SMTPSecure = 'tls';
		
		$mail->SMTPAuth = true;
		$mail->Username = '';
		$mail->Password = '';

		$mail->From = 'z.a.m@live.com.mx';
		$mail->FromName = 'Test app';
		$mail->AddAddress('z.a.m@live.com.mx', 'Sam');
		$mail->WordWrap = 50;
		$mail->IsHTML(true);

		$mail->Subject = 'Flakt Confirmation Email';
		$mail->Body    = 	'Hello, the last step to activate your account:
								<a href="http://localhost:81/flakt/login.php?acc=activaCuenta&key='.$vRes[0]["UserId"].'">
							  		Click activate account. =] 
						 		</a>
							';
		$mail->AltBody = 	'Hello, the last step to activate your account:
								<a href="http://localhost:81/flakt/login.php?acc=activaCuenta&key='.$vRes[0]["UserId"].'">
							  		Click activate account. =] 
						 		</a>
							';
			
		if ($mail->Send()) {
			echo json_encode($vOutRes);
		} else {
			array_push($vOutRes["Errores"], array("ErrorNo" => 2, "ErrorDesc" => "Email can't be send please try later. ".$mail->ErrorInfo ));			
			echo $vOutRes;
		}
	}

	function validaSesion() {
		$vEnSesion = "0";

		if (isset($_SESSION["UserId"])) {
			if ($_SESSION["UserId"] > 0) {
				$vEnSesion = "1";
			}
		}

		echo $vEnSesion;
	}

	function cerrarSesion() {
		$_SESSION = array();

		if (ini_get("session.use_cookies")) {
		    $params = session_get_cookie_params();
		    setcookie(session_name(), '', time() - 42000,
		        $params["path"], $params["domain"],
		        $params["secure"], $params["httponly"]
		    );
		}
		
		session_destroy();
		echo "0";
	}

	function validaUsuario() {
		global $vConn;
		
		$vQuery = "";
		$vQuery = " 
					SELECT *
					FROM
						user
					WHERE 						
						AEmail = '".$_POST['PUsuario']."'
						AND APassword = 
								AES_ENCRYPT( '".$_POST['PContrasenia']."' ,
									(SELECT Value FROM Configuration WHERE ConfigurationId = 1)) 
				";

		$vRes =  $vConn->ExecuteWithReturn($vQuery);

		if (count($vRes) === 1) {
			if($vRes[0]["ActiveAccount"] == 1){
				$_SESSION["UserId"]           = $vRes[0]["UserId"];
				$_SESSION["CompleteUserName"] = $vRes[0]["Name"]." ".$vRes[0]["FirstLastName"];
				$_SESSION["UserName"]         = $vRes[0]["Name"];
				echo "1";
			} else {
				echo "2";
			}
		} else {
			echo "0";
		}
	}	
?>