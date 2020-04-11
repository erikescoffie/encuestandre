$(document).ready(function(){
	// Consulta el puesto
	$.ajax({
		type: 'POST',
		url: 'consultas/consultaPuesto.php'
	})

	.done(function(nombrePuesto){
		$('#puestos').html(nombrePuesto).value;
	})

	.fail(function(){
	alert('Hubo un error')
	})

	// Consulta el depa
	$.ajax({
		type: 'POST',
		url: 'consultas/consultaDepto.php'
	})

	.done(function(nombreDepto){
		$('#departamento').html(nombreDepto).value;
	})

	.fail(function(){
	alert('Hubo un error')
	})

	// Consulta la gerencia
	$.ajax({
		type: 'POST',
		url: 'consultas/consultaGerencia.php'
	})

	.done(function(nombreGerencia){
		$('#gerencia').html(nombreGerencia).value
	})

	.fail(function(){
	alert('Hubo un error')
	})

	// Consulta la empresa
	$.ajax({
		type: 'POST',
		url: 'consultas/consultaEmpresa.php'
	})

	.done(function(nombreEmpresa){
		$('#empresa').html(nombreEmpresa)
	})

	.fail(function(){
	alert('Hubo un error')
	})
})