
	jQuery(function ($) {
		"use strict";

		$('form#wrapped').attr('action', 'survey.php');
		$("#wizard_container").wizard({
			stepsWrapper: "#wrapped",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		
		$("#progressbar").progressbar();
		$("#wizard_container").wizard({
			afterSelect: function (event, state) {
				$("#progressbar").progressbar("value", state.percentComplete);
				$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
			}
		});
		
		$('#wrapped').validate({
			ignore: [],
			rules: {
				select: {
					required: true
				}
			},
			errorPlacement: function (error, element) {
				if (element.is('select:hidden')) {
					error.insertAfter(element.next('.nice-select'));
				} else {
					error.insertAfter(element);
				}
			}
		});
	});
(function ($) {

	var floatlabels = new FloatLabels( 'form', {
		    style: 2
	});
	
})(window.jQuery); 


var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if(email.validity.typeMismatch) {
    email.setCustomValidity("Email Invalide");
  } else {
    email.setCustomValidity("");
  }
});

var nom = document.getElementById("nom");

nom.addEventListener("keyup", function (event) {
  if(nom.validity.typeMismatch) {
    nom.setCustomValidity("Erreur");
  } else {
    nom.setCustomValidity("");
  }
});

var prenom = document.getElementById("prenom");

prenom.addEventListener("keyup", function (event) {
  if(prenom.validity.typeMismatch) {
    prenom.setCustomValidity("Erreur");
  } else {
    prenom.setCustomValidity("");
  }
});




























