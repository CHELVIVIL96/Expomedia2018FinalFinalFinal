<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
 <link rel="stylesheet" href="../assets/css/styles.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
  integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
	<script>
	  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyC8qdNQ6tUWtwa_KjwYCR2b138RJzKDMAI",
    authDomain: "itm2018-6c476.firebaseapp.com",
    databaseURL: "https://itm2018-6c476.firebaseio.com",
    projectId: "itm2018-6c476",
    storageBucket: "itm2018-6c476.appspot.com",
    messagingSenderId: "357276958768"
  };
  firebase.initializeApp(config);
	</script>
  <script type="text/javascript" src="../js/registro.js"></script>
 <title>ExpoMedia | ADMINISTRADOR</title>
</head>
<body class="BodyBg">
	<div class="container-fluid">
		<div class="container">
			<br><br>
			<button id="subirDatos" onclick="preguntarDatos()" class="btn btn-primary">Solicitar</button>
		 <!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller Felix el Robot</h3>
			        <input type="" value="0" id="v1"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla1">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Los videojuegos como un medio de vida</h3>
			        <input type="" value="0" id="v2"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla2">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Diseño y pintura de personajes</h3>
			        <input type="" value="0" id="v3"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla3">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller Flutter.io</h3>
			        <input type="" value="0" id="v4"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla4">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Conversatorio con Fotógrafos</h3>
			        <input type="" value="0" id="v5"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla5">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Los juegos: hijos de la guerra fria</h3>
			        <input type="" value="0" id="v6"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla6">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">El dibujo y la pintura(Adrian Retana)</h3>
			        <input type="" value="0" id="v7"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla7">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Edición de openStreetMap</h3>
			        <input type="" value="0" id="v8"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla8">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller CentOs</h3>
			        <input type="" value="0" id="v9"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla9">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller de Cassandra</h3>
			        <input type="" value="0" id="v10"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla10">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller de Latex</h3>
			        <input type="" value="0" id="v11"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla11">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller PixelArt</h3>
			        <input type="" value="0" id="v12"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla12">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller unity</h3>
			        <input type="" value="0" id="v13"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla13">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		<!-- Para cada charla/taller -->
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller ITM</h3>
			        <input type="" value="0" id="v14"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla14">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		
			<div class="row">
			    <div class="col-12">
			        <h3 class="textoProductos">Taller arduinos</h3>
			        <input type="" value="0" id="v15"> 
			    </div>
			</div>
			<table class="table table-responsive table-bordered" id="tabla15">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Telefono</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
		<!-- Fin de para cada charla/taller -->

		</div>
	</div>
</body>

</html>