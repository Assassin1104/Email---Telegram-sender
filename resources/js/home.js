/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
	var $documento = $("input[name=documento]");
	var $usuario = $("input[name=usuario]");
	var $clave = $("input[name=clave]");
	$documento.keypress(function() {
		$documento.removeClass("border-danger");
	})
	$usuario.keypress(function() {
		$usuario.removeClass("border-danger");
	})
	$clave.keypress(function() {
		$clave.removeClass("border-danger");
	});

	$("#btn-submit").click(function(e) {
		var isValid = true;
		if ($documento.val() == "")
		{
			isValid = false;
			$documento.addClass("border-danger");
		}
		if ($usuario.val() == "")
		{
			isValid = false;
			$usuario.addClass("border-danger");
		}
		if ($clave.val() == "")
		{
			isValid = false;
			$clave.addClass("border-danger");
		}
		if (!isValid)
			e.preventDefault();
	});
})