$(document).ready(function() {
	validaSesion();
	
	cargaInicialSelection();
});

function cargaInicialSelection(){
	console.warn('Inicio de peticion Ajax');
	$.when(
		$.ajax({
			data: "acc=obtenerSlcCustomer",
			type: "POST",
			url: "php/controllers/selection.php"
		}),
		$.ajax({
			data:"acc=iniciaSeleccion",
			type: "POST",
			url: "php/controllers/selection.php",
			dataType: "json"
		})
	).done(function(vCustomers, vRes){
		console.warn('Despues del done');

		$("#slcCustomer").html(vCustomers);

		/*Cargando Select Contact cuando Customer cambie*/
		$("#slcCustomer").change(function() {
			var vCustomerId = $("#slcCustomer").val();
			var vDatos      = "acc=obtenerSlcContactPorCustomerId&CustomerId=" + vCustomerId;
			var vUrl        = "php/controllers/selection.php";

			peticionAjax(vDatos, vUrl).done(function(vRes) {
				$("#slcContact").html(vRes);
			});
		});
		
		
		//Asignando valores a la vista Selection
		//Seccion#1
		$("#spnSelectionId").val(vRes[0].Secc1.SelectionId);
		$("#spnNoSelection").text(vRes[0].Secc1.SelectionId);
		$("#spnSelectionDate").text(vRes[0].Secc1.SelectionDate);
		$("#slcCustomer").val(vRes[0].Secc1.CustomerId);
		$("#txtContact").val(vRes[0].Secc1.ContactName);
		
		if (vRes[0].Secc1.CustomerId != "") {
			cargaSlcCustomerContact(vRes[0].Secc1.CustomerId, vRes[0].Secc1.CustomerContactId);
		}

		$("#txtReference").val(vRes[0].Secc1.Reference);
		$("#txtNoProposal").val(vRes[0].Secc1.NoProposal);
		$("#slcContact").val(vRes[0].Secc1.CustomerContactId);
		
		
		//Seccion#2
		if(vRes[0].Secc2.Unit != ""){
			cambiarSeleccionUnidades(vRes[0].Secc2.Unit);
		}

		//Seccion#3
		//Accessories
		if (vRes[0].Secc3.Accessories.IvcIn_1  == 1) { $("#ivcIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.IvcOut_1  == 1) { $("#ivcOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.DmbgIn_1 == 1) { $("#dmbgIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.DmbgOut_1 == 1) { $("#dmbgOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.FlexibleIn_1 == 1) { $("#flexibleIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.FlexibleOut_1 == 1) { $("#flexibleOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.ScreenIn_1 == 1) { $("#screenIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.ScreenOut_1 == 1) { $("#screenOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.DamperIn_1 == 1) { $("#damperIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.DamperOut_1 == 1) { $("#damperOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.DiffusorIn_1 == 1) { $("#diffusorIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.DiffusorOut_1 == 1) { $("#diffusorOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.LouverIn_1 == 1) { $("#louverIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.LouverOut_1 == 1) { $("#louverOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.SilencerIn_1 == 1) { $("#silencerIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.SilencerOut_1 == 1) { $("#silencerOut_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.InletBoxIn_1 == 1) { $("#inletBoxIn_1").attr('checked', true); }
		if (vRes[0].Secc3.Accessories.InletBoxOut_1 == 1) { $("#inletBoxOut_1").attr('checked', true); }

		//Seccion#4
		$("#slcBladeType").val(vRes[0].Secc4.BladeType);
		$("#slcFlowUnit").val(vRes[0].Secc4.FlowUnit);
		$("#slcPressureUnit").val(vRes[0].Secc4.PressureUnit);
		$("#slcDensityNormalUnit").val(vRes[0].Secc4.DensityNormalUnit);
		$("#slcFanArragment").val(vRes[0].Secc4.FanArragment);
		$("#txtAmbientPressure").val(vRes[0].Secc4.AmbientPressure);
		$("#slcAmbientPressureUnit").val(vRes[0].Secc4.AmbientPressureUnit);
		$("#slcPressureIn").val(vRes[0].Secc4.DefinitionIn);
		$("#slcPressureOut").val(vRes[0].Secc4.DefinitionOut);
		$("#txtConnectionMax").val(vRes[0].Secc4.Connectionmav);
		$("#slcMaxAir").val(vRes[0].Secc4.ConnectionmavUnit);
		$("#slcMaxAirYn").val(vRes[0].Secc4.ConnectionmavYn);
		$("#slcMotor").val(vRes[0].Secc4.Motor);
		$("#txtSoundDistance").val(vRes[0].Secc4.SpDistance);
		$("#txtSoundMax").val(vRes[0].Secc4.SpMaxSound);
	});
}

function cargaSlcCustomerContact(customerId, customerContactId){
	var vCustomerId = customerId;
	var vDatos      = "acc=obtenerSlcContactPorCustomerId&CustomerId=" + vCustomerId;
	var vUrl        = "php/controllers/selection.php";

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$("#slcContact").html(vRes);		
		$("#slcContact").val(customerContactId);
	});	  
}

function cambiarSeleccionUnidades(seleccion){
	if(seleccion == "SI"){
		$("#hdnUnit").val("SI");
		$(".sistemaSA").removeClass("themed-color");		
		$(".sistemaSI").addClass("themed-color");
		
		$(".btnSistemaSI").addClass("btn-primary").removeClass("btn-default");
		$(".btnSistemaSA").removeClass("btn-primary").addClass("btn-default");

		//Solo se muestran las opciones SI en los combos
		$('.uSA').hide();
		$('.uSI').show();
	}else{
		$("#hdnUnit").val("SA");
		$(".sistemaSA").addClass("themed-color");
		$(".sistemaSI").removeClass("themed-color");

		$(".btnSistemaSA").addClass("btn-primary").removeClass("btn-default");
		$(".btnSistemaSI").removeClass("btn-primary").addClass("btn-default");

		//Solo se muestran las opciones SA en los combos
		$('.uSI').hide();
		$('.uSA').show();
	}
}

function actualizaSelection(resumen){

	/* Generar objeto Selection para enviar*/
	var vSelection = {
						"Secc1": {
							"SelectionId"       : $("#spnSelectionId").text(),
							"NoSelection"       : $("#spnNoSelection").text(),
							"SelectionDate"     : $("#spnSelectionDate").text(),
							"CustomerId"        : $("#slcCustomer").val(),
							"CustomerContactId" : $("#slcContact").val(),
							"ContactName"       : $("#txtContact").val(),
							"Reference"         : $("#txtReference").val(),
							"NoProposal"        : $("#txtNoProposal").val()
					    },
					    "Secc2": {
							"Unit": $("#hdnUnit").val()
					    },
					    "Secc3" : {
					     	"Accessories" : {
								"IvcIn_1"       : $("#ivcIn_1").is(':checked') ? 1 : 0,
								"IvcOut_1"      : $("#ivcOut_1").is(':checked') ? 1 : 0,
								"DmbgIn_1"      : $("#dmbgIn_1").is(':checked') ? 1 : 0,
								"DmbgOut_1"     : $("#dmbgOut_1").is(':checked') ? 1 : 0,
								"FlexibleIn_1"  : $("#flexibleIn_1").is(':checked') ? 1 : 0,
								"FlexibleOut_1" : $("#flexibleOut_1").is(':checked') ? 1 : 0,
								"ScreenIn_1"    : $("#screenIn_1").is(':checked') ? 1 : 0,
								"ScreenOut_1"   : $("#screenOut_1").is(':checked') ? 1 : 0,
								"DamperIn_1"    : $("#damperIn_1").is(':checked') ? 1 : 0,
								"DamperOut_1"   : $("#damperOut_1").is(':checked') ? 1 : 0,
								"DiffusorIn_1"  : $("#diffusorIn_1").is(':checked') ? 1 : 0,
								"DiffusorOut_1" : $("#diffusorOut_1").is(':checked') ? 1 : 0,
								"LouverIn_1"    : $("#louverIn_1").is(':checked') ? 1 : 0,
								"LouverOut_1"   : $("#louverOut_1").is(':checked') ? 1 : 0,
								"SilencerIn_1"  : $("#silencerIn_1").is(':checked') ? 1 : 0,
								"SilencerOut_1" : $("#silencerOut_1").is(':checked') ? 1 : 0,
								"InletBoxIn_1"  : $("#inletBoxIn_1").is(':checked') ? 1 : 0,
								"InletBoxOut_1" : $("#inletBoxOut_1").is(':checked') ? 1 : 0
					     	}
					    },
						"Secc4" : {
							"BladeType"           : $("#slcBladeType").val(),
							"FanArragment"        : $("#slcFanArragment").val(),
							"AmbientPressure"     : $("#txtAmbientPressure").val(),
							"AmbientPressureUnit" : $("#slcAmbientPressureUnit").val(),
							"DefinitionIn"        : $("#slcPressureIn").val(),
							"DefinitionOut"       : $("#slcPressureOut").val(),
							"Connectionmav"       : $("#txtConnectionMax").val(),
							"ConnectionmavUnit"   : $("#slcMaxAir").val(),
							"ConnectionmavYn"     : $("#slcMaxAirYn").val(),
							"Motor"               : $("#slcMotor").val(),
							"SpDistance"          : $("#txtSoundDistance").val(),
							"SpMaxSound"          : $("#txtSoundMax").val()
						}
					};

	var vDatos =  "acc=consolidaSelection&selection=" + jQuery.stringify(vSelection);
	
	var vUrl = "php/controllers/selection.php";

	/* Consolidando objeto Selection */
	peticionAjax(vDatos, vUrl).done(function(vRes) { 
		

		/* Si el parametro resumen == 'ok' se redirecciona a resume.php */
		if (resumen == 'ok') {
			//alert('done');
			location.href='resume.php';
		}
	});
	//alert(vDatos);
}