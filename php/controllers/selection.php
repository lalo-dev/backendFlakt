<?php
	session_start();
	
	require_once("../class/conexion.php");
		
	$vConn = new ConexionBD();
	
	if (isset($_POST['acc'])) {
		$vAcc = $_POST['acc'];
		
		switch($vAcc)
		{
			case "iniciaSeleccion":
					iniciaSeleccion();
				break;
			case "obtenerSlcCustomer":
					obtenerSlcCustomer();
				break;
			case "obtenerSlcContactPorCustomerId":
					obtenerSlcContactPorCustomerId($_POST['CustomerId']);
				break;
			case "actualizaSelection":
					actualizaSelection();
				break;
			case "consolidaSelection":
					consolidaSelection();
				break;
		}
	}

	function iniciaSeleccion(){

		global $vConn;
		
		/* Verificando si el usuario tiene selecciones sin terminar*/
		$vQuery = " SELECT 
						COUNT(selectionId) AS unfinished
					FROM 
						selections 
					WHERE
						userId = ".$_SESSION["userId"]."
						AND finished = 0";

		$vRes =  $vConn->ExecuteWithReturn($vQuery);

		//Si no hay Selection por terminar insertar una nueva
		if ($vRes[0]["unfinished"] == 0) {
			//Siguiente numero de seleccion
			$vQuery = "SELECT COUNT(1)+1 AS next FROM selections WHERE userId = ".$_SESSION["userId"];
			$vRes   =  $vConn->ExecuteWithReturn($vQuery);
			$vNext  = $vRes[0]["next"];

			//Insertando Selection valores predeterminados
			$vQuery = " 
						INSERT INTO selections
							( 
								userId,
								finished,
								noSelection,
								selectionDate,
								seller,
								reference,
								proposal
							)VALUES(
								'".$_SESSION["userId"]."',
								'0',
								'".$vNext."',
								NOW(),
								'".$_SESSION["completeUserName"]."',
								'XXXX-XXXX',
								'XXXX-XXXX'
							)
					";

			$vConn->ExecuteWithoutReturn($vQuery);
		}

		$vQuery = "SELECT * FROM selections  WHERE finished = 0 AND userId = ".$_SESSION["userId"]." ORDER BY selectionDate DESC LIMIT 0,1";
		$vRes =  $vConn->ExecuteWithReturn($vQuery);

		/*Formando JSON Respuesta segun Selection*/
		$vSeleccion = json_encode(array(
						"valX" => 4,
					    "Secc1" => array(
							"SelectionId"       => $vRes[0]["selectionId"],
							"NoSelection"       => $vRes[0]["noSelection"],
							"SelectionDate"     => date("d/m/Y", strtotime($vRes[0]["selectionDate"])),
							"CustomerId"        => $vRes[0]["customerId"],
							"CustomerContactId" => $vRes[0]["customerContactId"],
							"ContactName"       => $vRes[0]["contactName"],
							"Reference"         => $vRes[0]["reference"],
							"NoProposal"        => $vRes[0]["proposal"]
					     ),
				    	"Secc2" => array(
					        "Unit" => $vRes[0]["unit"]
					    ),
				    	"Secc3" => array(
					     	"Accessories" => array(
								"IvcIn_1"       => $vRes[0]["ivcIn_1"],
								"IvcOut_1"      => $vRes[0]["ivcOut_1"],
								"DmbgIn_1"      => $vRes[0]["dmbgIn_1"],
								"DmbgOut_1"     => $vRes[0]["dmbgOut_1"],
								"FlexibleIn_1"  => $vRes[0]["flexibleIn_1"],
								"FlexibleOut_1" => $vRes[0]["flexibleOut_1"],
								"ScreenIn_1"    => $vRes[0]["screenIn_1"],
								"ScreenOut_1"   => $vRes[0]["screenOut_1"],
								"DamperIn_1"    => $vRes[0]["damperIn_1"],
								"DamperOut_1"   => $vRes[0]["damperOut_1"],
								"DiffusorIn_1"  => $vRes[0]["diffusorIn_1"],
								"DiffusorOut_1" => $vRes[0]["diffusorOut_1"],
								"LouverIn_1"    => $vRes[0]["louverIn_1"],
								"LouverOut_1"   => $vRes[0]["louverOut_1"],
								"SilencerIn_1"  => $vRes[0]["silencerIn_1"],
								"SilencerOut_1" => $vRes[0]["silencerOut_1"],
								"InletBoxIn_1"  => $vRes[0]["inletBoxIn_1"],
								"InletBoxOut_1" => $vRes[0]["inletBoxOut_1"]
					     	)
					    ),
						"Secc4" => array(
							"BladeType"           => $vRes[0]["bladeType"],
							"FlowUnit"            => $vRes[0]["flowUnit"],
							"PressureUnit"        => $vRes[0]["pressureUnit"],
							"DensityNormalUnit"   => $vRes[0]["densityNormalUnit"],
							"FanArragment"        => $vRes[0]["fanArragment"],
							"AmbientPressure"     => $vRes[0]["ambientPressure"],
							"AmbientPressureUnit" => $vRes[0]["ambientPressureUnit"],
							"DefinitionIn"        => $vRes[0]["definitionIn"],
							"DefinitionOut"       => $vRes[0]["definitionOut"],
							"Connectionmav"       => $vRes[0]["connectionmav"],
							"ConnectionmavUnit"   => $vRes[0]["connectionmavUnit"],
							"ConnectionmavYn"     => $vRes[0]["connectionmavYn"],
							"Motor"               => $vRes[0]["motor"],
							"SpDistance"          => $vRes[0]["spDistance"],
							"SpMaxSound"          => $vRes[0]["spMaxSound"]
						)
					));

		$_SESSION["selection"] = $vSeleccion;

		echo $vSeleccion;
	}	

	/*
	function actualizaSelection(){
		global $vConn;

		//Obteniendo Selection actual de la sesion
		$vSeleccion = json_decode($_SESSION["selection"]);
		
		// Actualizando Selection
		$vQuery = " UPDATE 
						selections 
					SET
						customerId           = '".$vSeleccion->Secc1->CustomerId."',
						customerContactId    = '".$vSeleccion->Secc1->CustomerContactId."',
						contactName          = '".$vSeleccion->Secc1->ContactName."',
						reference            = '".$vSeleccion->Secc1->Reference."',
						proposal             = '".$vSeleccion->Secc1->NoProposal."',
						unit                 = '".$vSeleccion->Secc2->Unit."',
						ivcIn_1              = '".$vSeleccion->Secc3->Accessories->IvcIn_1."',
						ivcOut_1             = '".$vSeleccion->Secc3->Accessories->IvcOut_1."',
						dmbgIn_1             = '".$vSeleccion->Secc3->Accessories->DmbgIn_1."',
						dmbgOut_1            = '".$vSeleccion->Secc3->Accessories->DmbgOut_1."',
						flexibleIn_1         = '".$vSeleccion->Secc3->Accessories->FlexibleIn_1."',
						flexibleOut_1        = '".$vSeleccion->Secc3->Accessories->FlexibleOut_1."',
						screenIn_1           = '".$vSeleccion->Secc3->Accessories->ScreenIn_1."',
						screenOut_1          = '".$vSeleccion->Secc3->Accessories->ScreenOut_1."',
						damperIn_1           = '".$vSeleccion->Secc3->Accessories->DamperIn_1."',
						damperOut_1          = '".$vSeleccion->Secc3->Accessories->DamperOut_1."',
						diffusorIn_1         = '".$vSeleccion->Secc3->Accessories->DiffusorIn_1."',
						diffusorOut_1        = '".$vSeleccion->Secc3->Accessories->DiffusorOut_1."',
						louverIn_1           = '".$vSeleccion->Secc3->Accessories->LouverIn_1."',
						louverOut_1          = '".$vSeleccion->Secc3->Accessories->LouverOut_1."',
						silencerIn_1         = '".$vSeleccion->Secc3->Accessories->SilencerIn_1."',
						silencerOut_1        = '".$vSeleccion->Secc3->Accessories->SilencerOut_1."',
						inletBoxIn_1         = '".$vSeleccion->Secc3->Accessories->InletBoxIn_1."',
						inletBoxOut_1        = '".$vSeleccion->Secc3->Accessories->InletBoxOut_1."',
						bladeType            = '".$vSeleccion->Secc4->BladeType."',
						fanArragment         = '".$vSeleccion->Secc4->FanArragment."',
						ambientPressure      = '".$vSeleccion->Secc4->AmbientPressure."',
						ambientPressureUnit  = '".$vSeleccion->Secc4->AmbientPressureUnit."',
						definitionIn         = '".$vSeleccion->Secc4->DefinitionIn."',
						definitionOut        = '".$vSeleccion->Secc4->DefinitionOut."',
						connectionmav        = '".$vSeleccion->Secc4->Connectionmav."',
						connectionmavUnit    = '".$vSeleccion->Secc4->ConnectionmavUnit."',
						connectionmavYn      = '".$vSeleccion->Secc4->ConnectionmavYn."',
						motor                = '".$vSeleccion->Secc4->Motor."',
						spDistance           = '".$vSeleccion->Secc4->SpDistance."',
						spMaxSound           = '".$vSeleccion->Secc4->SpMaxSound."'
					WHERE
						selectionId = ".$vSeleccion->Secc1->SelectionId." ; ";

		$vRes =  $vConn->ExecuteWithoutReturn($vQuery);
	}
	*/

	function obtenerSlcCustomer(){
		global $vConn;

		$vQuery       = "";
		$vQuery       = "SELECT * FROM customers ORDER BY name ASC";
		$vRes         =  $vConn->ExecuteWithReturn($vQuery);
		$vSlcCustomer = "<option value=\"\">Select</option>";

		foreach($vRes as $vCat){
			$vSlcCustomer .= "<option value=\"".$vCat['customerId']."\">".$vCat['name']."</option>";
		}

		echo $vSlcCustomer;
	}

	function obtenerSlcContactPorCustomerId($customerId){
		global $vConn;

		$vQuery = "";
		$vQuery = " SELECT 
						* 
					FROM 
						customerContacts
					WHERE 
						customerId = ".$customerId." 
					ORDER BY 
						name ASC";

		$vRes =  $vConn->ExecuteWithReturn($vQuery);

		$vSlcCustContact = "<option value=\"\">Select</option>";

		foreach($vRes as $vCat){
			$vSlcCustContact .= 
				"<option value=\"".$vCat['customerContactId']."\">"
					.$vCat['name']." - ".$vCat['email']."</option>";
		}

		echo $vSlcCustContact;
	}

	/*
	function consolidaSelection(){

		// Obteniendo valores de la sesion
		$vSelSesion = json_decode($_SESSION["selection"]);
		// Obteniendo valores a consolidar
		$vSelActual = json_decode($_POST["selection"]);

		$vSelSesion->Secc1->NoSelection       = $vSelActual->Secc1->NoSelection;
		$vSelSesion->Secc1->CustomerId        = $vSelActual->Secc1->CustomerId;
		$vSelSesion->Secc1->Reference         = $vSelActual->Secc1->Reference;
		$vSelSesion->Secc1->NoProposal        = $vSelActual->Secc1->NoProposal;
		$vSelSesion->Secc1->CustomerContactId = $vSelActual->Secc1->CustomerContactId;
		$vSelSesion->Secc1->ContactName       = $vSelActual->Secc1->ContactName;

		$vSelSesion->Secc2->Unit = $vSelActual->Secc2->Unit;

		$vSelSesion->Secc3->Accessories->IvcIn_1       = $vSelActual->Secc3->Accessories->IvcIn_1;
		$vSelSesion->Secc3->Accessories->IvcOut_1      = $vSelActual->Secc3->Accessories->IvcOut_1;
		$vSelSesion->Secc3->Accessories->DmbgIn_1      = $vSelActual->Secc3->Accessories->DmbgIn_1;
		$vSelSesion->Secc3->Accessories->DmbgOut_1     = $vSelActual->Secc3->Accessories->DmbgOut_1;
		$vSelSesion->Secc3->Accessories->FlexibleIn_1  = $vSelActual->Secc3->Accessories->FlexibleIn_1;
		$vSelSesion->Secc3->Accessories->FlexibleOut_1 = $vSelActual->Secc3->Accessories->FlexibleOut_1;
		$vSelSesion->Secc3->Accessories->ScreenIn_1    = $vSelActual->Secc3->Accessories->ScreenIn_1;
		$vSelSesion->Secc3->Accessories->ScreenOut_1   = $vSelActual->Secc3->Accessories->ScreenOut_1;
		$vSelSesion->Secc3->Accessories->DamperIn_1    = $vSelActual->Secc3->Accessories->DamperIn_1;
		$vSelSesion->Secc3->Accessories->DamperOut_1   = $vSelActual->Secc3->Accessories->DamperOut_1;
		$vSelSesion->Secc3->Accessories->DiffusorIn_1  = $vSelActual->Secc3->Accessories->DiffusorIn_1;
		$vSelSesion->Secc3->Accessories->DiffusorOut_1 = $vSelActual->Secc3->Accessories->DiffusorOut_1;
		$vSelSesion->Secc3->Accessories->LouverIn_1    = $vSelActual->Secc3->Accessories->LouverIn_1;
		$vSelSesion->Secc3->Accessories->LouverOut_1   = $vSelActual->Secc3->Accessories->LouverOut_1;
		$vSelSesion->Secc3->Accessories->SilencerIn_1  = $vSelActual->Secc3->Accessories->SilencerIn_1;
		$vSelSesion->Secc3->Accessories->SilencerOut_1 = $vSelActual->Secc3->Accessories->SilencerOut_1;
		$vSelSesion->Secc3->Accessories->InletBoxIn_1  = $vSelActual->Secc3->Accessories->InletBoxIn_1;
		$vSelSesion->Secc3->Accessories->InletBoxOut_1 = $vSelActual->Secc3->Accessories->InletBoxOut_1;

		$vSelSesion->Secc4->BladeType           = $vSelActual->Secc4->BladeType;
		$vSelSesion->Secc4->FanArragment        = $vSelActual->Secc4->FanArragment;
		$vSelSesion->Secc4->AmbientPressure     = $vSelActual->Secc4->AmbientPressure;
		$vSelSesion->Secc4->AmbientPressureUnit = $vSelActual->Secc4->AmbientPressureUnit;
		$vSelSesion->Secc4->DefinitionIn        = $vSelActual->Secc4->DefinitionIn;
		$vSelSesion->Secc4->DefinitionOut       = $vSelActual->Secc4->DefinitionOut;
		$vSelSesion->Secc4->Connectionmav       = $vSelActual->Secc4->Connectionmav;
		$vSelSesion->Secc4->ConnectionmavUnit   = $vSelActual->Secc4->ConnectionmavUnit;
		$vSelSesion->Secc4->ConnectionmavYn     = $vSelActual->Secc4->ConnectionmavYn;
		$vSelSesion->Secc4->Motor               = $vSelActual->Secc4->Motor;
		$vSelSesion->Secc4->SpDistance          = $vSelActual->Secc4->SpDistance;
		$vSelSesion->Secc4->SpMaxSound          = $vSelActual->Secc4->SpMaxSound;

		$_SESSION["selection"] = json_encode($vSelSesion);

		actualizaSelection();

		echo "ready";
	}
	*/
?>