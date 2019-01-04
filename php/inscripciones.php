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
 <title>ExpoMedia | Inscripciones</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124159094-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124159094-1');

</script>
</head>
<body class="BodyBg" onload="bloquearTalleres()">
  <!-- inicio header -->
  <header>
    <!-- navbar -->
 <?php @include('../includes/menu3.php'); ?>
      <!-- navbar -->
  </header>
 <br><br><br><br>
 <div id="contenido-pagina">
	 <div class="container fluid">
		 <div class="container" style="margin-bottom: 110px;">
		 	<div class="row">
			    <div class="col-12">
			        <h1 class="textoProductos">Horario de Talleres</h1>	
			        <h1 class="textoProductos" style="margin-bottom: 0px!important">Aulas:</h1>	
			    </div>
			</div>

			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-1 col-sm-1 col-lg-1">
				    </div>
				    <div class="col-5 col-sm-2 col-lg-2 pt-3">
				    	<button class="btn btn-sm btn-outline-secondary" type="button" onclick="document.getElementById('horariosAula').src = '../assets/images/p22.png'">
				        <h5>P-22</h5>
				        </button>
				    </div>
				    <div class="col-5 col-sm-2 col-lg-2 pt-3">
				    	<button class="btn btn-sm btn-outline-secondary" type="button" onclick="document.getElementById('horariosAula').src = '../assets/images/p23.png'">
				        <h5>P-23</h5>
				        </button>
				    </div>
				    <div class="col-4 col-sm-2 col-lg-2 pt-3">
				    	<button class="btn btn-sm btn-outline-secondary" type="button" onclick="document.getElementById('horariosAula').src = '../assets/images/p11.png'">
				        <h5>P-11</h5>
				        </button>
				    </div>
				    <div class="col-4 col-sm-2 col-lg-2 pt-3">
				    	<button class="btn btn-sm btn-outline-secondary" type="button" onclick="document.getElementById('horariosAula').src = '../assets/images/p12.png'">
				        <h5>P-12</h5>
				        </button>
				    </div>
				    <div class="col-4 col-md-2 col-sm-2 col-lg-2 pt-3">
				    	<button class="btn btn-sm btn-outline-secondary" type="button" onclick="document.getElementById('horariosAula').src = '../assets/images/p13.png'">
				        <h5>P-13</h5>
				        </button>
				    </div>
				    <div class="col-1 col-sm-1 col-lg-1">
				    </div>
				</div>
				<br><br>
				<div class="text-center">
				  <img id="horariosAula" src="../assets/images/p22.png" style="width:100%;" class="img-fluid editPhotos" alt="Responsive image">		
				  <small class="form-text text-muted">Los horarios cambian al clickear la lista de aulas</small>	
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
				    <input type="tel" class="form-control" id="telefono" aria-describedby="emailHelp" placeholder="Escribe tu número de teléfono">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Correo electrónico</label>
				    <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Escribe tu correo electrónico">
				  </div>
				  
				  <div class="form-group">
				    <label for="exampleSelect1">Escoge un taller</label>
				    <select class="form-control" id="taller">
				      <option id="taller1">¿Cómo se hizo la primera etapa de la mini-serie animada ´Felix el Robot´?</option>
				      <option id="taller2">Los videojuegos como un medio de vida</option>
				      <option id="taller3">Diseño y pintura digital de personajes</option>
				      <option id="taller4">Taller de Desarrollo Para Dispositivos Móviles</option>
				      <option id="taller5">Conversatorio con Fotógrafos</option>
				      <option id="taller6">Los juegos: Hijos de la guerra fría</option>
				      <option id="taller7">El dibujo y la pintura como herramientas de diseño y concurso</option>

				      <option id="taller8">Edición de OpenStreetMap, el mejor mapa que existe</option>
				      <option id="taller9">Taller de Servidor Web en CentOS</option>
				      <option id="taller10" disabled="disabled">Taller Introducción a cassandra</option>
				      <option id="taller11">Taller de Introducción a la Creación de Artículos Científicos por medio de LATEX</option>
				      <option id="taller12">Taller de Introducción a PixelArt</option>
				      <option id="taller13">Taller de Introducción al Desarrollo de Video Juegos con Unity</option>
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
</div>
<!-- Optional JavaScript        disabled="disabled"  -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script type="text/javascript" src="../js/registro.js"></script> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/js/scriptsNav3.js"></script>
</body>
<!-- Footer -->

</html>