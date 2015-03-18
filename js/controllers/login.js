/*
 * Funciones de la pantalla LOGIN
 */

var Login = function() {

    // Function for switching form views (login, reminder and register forms)
    var switchView = function(viewHide, viewShow, viewHash){
        viewHide.slideUp(250);
        viewShow.slideDown(250, function(){
            $('input').placeholder();
        });

        if ( viewHash ) {
            window.location = '#' + viewHash;
        } else {
            window.location = '#';
        }
    };

    return {
        init: function() {
            /* Switch Login, Reminder and Register form views */
            var formLogin       = $('#form-login'),
                formReminder    = $('#form-reminder'),
                formRegister    = $('#form-register');

            $('#link-register-login').click(function(){
                switchView(formLogin, formRegister, 'register');
            });

            $('#link-register').click(function(){
                switchView(formRegister, formLogin, '');
            });

            $('#link-reminder-login').click(function(){
                switchView(formLogin, formReminder, 'reminder');
            });

            $('#link-reminder').click(function(){
                switchView(formReminder, formLogin, '');
            });

            // If the link includes the hashtag 'register', show the register form instead of login
            if (window.location.hash === '#register') {
                formLogin.hide();
                formRegister.show();
            }

            // If the link includes the hashtag 'reminder', show the reminder form instead of login
            if (window.location.hash === '#reminder') {
                formLogin.hide();
                formReminder.show();
            }

            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Login form - Initialize Validation */
            $('#form-login').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'login-email': {
                        required: true,
                        email: true
                    },
                    'login-password': {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    'login-email': 'Por favor introduce tu Email',
                    'login-password': {
                        required: 'Por favor introduce tu Contraseña',
                        minlength: 'Tu Contraseña debe tener minimo 8 caracteres'
                    }
                }
            });

            /* Reminder form - Initialize Validation */
            $('#form-reminder').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'reminder-email': {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    'reminder-email': 'Por favor introduce tu Email'
                }
            });

            /* Register form - Initialize Validation */
            $('#form-register').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    if (e.closest('.form-group').find('.help-block').length === 2) {
                        e.closest('.help-block').remove();
                    } else {
                        e.closest('.form-group').removeClass('has-success has-error');
                        e.closest('.help-block').remove();
                    }
                },
                rules: {
                    'register-firstname': {
                        required: true,
                        minlength: 2
                    },
                    'register-lastname': {
                        required: true,
                        minlength: 2
                    },
                    'register-email': {
                        required: true,
                        email: true
                    },
                    'register-password': {
                        required: true,
                        minlength: 8
                    },
                    'register-password-verify': {
                        required: true,
                        equalTo: '#register-password'
                    },
                    'register-terms': {
                        required: true
                    }
                },
                messages: {
                    'register-firstname': {
                        required: 'Por favor introduce tu Nombre',
                        minlength: 'Por favor introduce tu Nombre'
                    },
                    'register-lastname': {
                        required: 'Por favor introduce tu Apellido',
                        minlength: 'Por favor introduce tu Apellido'
                    },
                    'register-email': 'Por favor introduce un Email valido',
                    'register-password': {
                        required: 'Por favor introduce una Contraseña',
                        minlength: 'Tu Contraseña debe tener minimo 8 caracteres'
                    },
                    'register-password-verify': {
                        required: 'Por favor introduce una Contraseña',
                        minlength: 'Tu Contraseña debe tener minimo 8 caracteres',
                        equalTo: 'Por favor introduce la misma Contraseña'
                    },
                    'register-terms': {
                        required: 'Por favor acepta los terminos!'
                    }
                }
            });
        }
    };
}();

$(document).ready(function() {
	if(obtenerParametroUrl("acc") != null){

		var vKey   = obtenerParametroUrl("key");
		var vDatos = "acc=activaCuenta&key="+ vKey;
		var vUrl   = "php/controllers/login.php";

		peticionAjax(vDatos, vUrl).done(function(vRes) {
			if(vRes[0] == 0){
				$("#cMensajes").html(msjVerdeCerrable("<strong> Account activated successfully. </strong>"));
			}
		});
	}
});

// Function validate User
function validaUsuario() {
    $("#cMensajes").html("");
    
    var vUsuario     = htmlEntities($("#login-email").val());
    var vContrasenia = htmlEntities($("#login-password").val());
    var vDatos       = "acc=validaUsuario&email=" + vUsuario + "&password=" + vContrasenia;
    var vUrl         = "php/controllers/login.php";

    peticionAjax(vDatos, vUrl).done(function(vRes) {
        if(vRes == 1){
            window.location.href = "dashboard.php";
        }else if(vRes == 2){
            $("#cMensajes").html(msjRojoCerrable("<strong> Your account is inactive. </strong>"));
        }else{
            $("#cMensajes").html(msjRojoCerrable("<strong> Incorrect data. </strong>"));
        }
    });
}

function inicaRegister(){
    $("#mdlMensajes").html("");
    
    var vDatos = "acc=inicaRegister";
    var vUrl = "php/controllers/login.php";

    peticionAjax(vDatos, vUrl).done(function(vRes) {
        $("#btnGuardar").show();
        $("#mdlRegisterBody").html(vRes);
    });
}

function guardaRegister(){
    var vDatos = $('#frmRegister').serialize() + "&acc=guardaRegister";
    var vUrl = "php/controllers/login.php";

    peticionAjaxJSON(vDatos, vUrl).done(function(vRes) {

        if(vRes.Errores.length == 0){
            $("#btnGuardar").hide();
            $("#mdlRegisterBody").html(msjVerdeCerrable("<strong> Thank You!. A confirmation Email has been sent to your Email, please verify to activate your account. </strong>"));
        }else{
            $("#mdlMensajes").html(msjRojoCerrable("<strong> "+ vRes.Errores[0].ErrorDesc +" </strong>"));
        }
    });
}