<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
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
 <title>ExpoMedia | Inscripciones</title>
</head>
<body class="BodyBg">
  <!-- inicio header -->
  <header>
    <!-- navbar -->
 <?php @include('../includes/menu3.php'); ?>
      <!-- navbar -->
  </header>
 
 <br><br><br><br>
 <div class="container fluid">
	 <div class="container" style="margin-bottom: 110px;">
	 	<div class="row">
		    <div class="col-12">
		        <h1 class="textoProductos">Horario de Talleres</h1>
		    </div>
		</div>

		<div class="container">
			<div class="text-center">
			  <img src="../assets/images/talleres.jpeg" class="img-fluid" alt="Responsive image">			
			</div>
		</div>

		<div class="row">
		    <div class="col-12">
		        <h1 class="textoProductos">Inscripciones</h1>
		    </div>
		</div>

		  <form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nombre completo</label>
			    <input type="text" class="form-control" id="nombreCompleto" aria-describedby="emailHelp" placeholder="Escribe tu nombre completo">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Número de teléfono</label>
			    <input type="text" class="form-control" id="telefono" aria-describedby="emailHelp" placeholder="Escribe tu número de teléfono">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Correo electrónico</label>
			    <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Escribe tu correo electrónico">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleSelect1">Escoge un taller</label>
			    <select class="form-control" id="taller">
			      <option>¿Cómo se hizo la primera etapa de la mini-serie animada ´Felix el Robot´?</option>
			      <option>Desarrollar videojuegos en Costa Rica ¿Cómo lograrlo?</option>
			      <option>Diseño y pintura digital de personajes</option>
			      <option>Desarrollo de aplicaciones móviles con Flutter.io</option>
			      <option>Documental paisajista</option>
			      <option>Los juegos: Hijos de la guerra fría</option>
			      <option>El dibujo y la pintura como herramientas de diseño y concurso</option>
			    </select>
			    <small id="formhelp" class="form-text text-muted">¡Cuidado inscribes 2 talleres a la misma hora!</small>
			  </div>
			  
			</form>
			<button id="subirDatos" onclick="subirDatos()" class="btn btn-primary">Enviar inscripción</button>
		</div>
	</div>
<br><br>
<footer>
   <?php @include('../includes/footer.php'); ?>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/js/scriptsNav3.js"></script>
</body>
<!-- Footer -->

</html>