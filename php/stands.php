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
  <script type="text/javascript" src="../assets/js/productos.js"></script>
 <title>ExpoMedia | Torneos</title>
</head>
<body class="BodyBg">
  <!-- inicio header -->
  <header>
    <!-- navbar -->
 <?php @include('../includes/menu2.php'); ?>
      <!-- navbar -->

      <!-- Imagen del header -->
      <div class="container-fluid">
        <div class="row">
          <div class="imgHeader col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="../assets/images/ex08.png" alt="Estudiante mujer posando con un cartel que dice arrgh, para que le realicen una foto como parte de la actividad del stand de fotografia"></div>
        </div>
      </div>
      <!-- imagen del header -->
    </header>
    <!-- fin del header -->
    <!-- titulo Stands -->
    <div class="container-fluid">
     <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 titlePage">
       <h1>STANDS</h1>
     </div>
   </div>
 </div>
 <!-- fin titulo Stands -->
<!-- Mapa de los Stands -->
 <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10"><img class="img-fluid" src="../assets/images/mapa_stands.png" alt="Ganadores-pasados-del-torneo-de-League-of-Legends"></div>
        
      </div>
    </div>
<!-- Mapa de los Stands-->

<div class="row">
    <div class="col-12">
        <h1 class="textoProductos">Productos</h1>
    </div>
</div>

<div class="d-lg-none">
    <div class="row col-12" id="productosPhone"></div>
</div>

<div class="d-none d-lg-block">
    <div class="row col-12" id="productos"></div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">GTX 1080ti</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/produc/1.png">
           <p class="text-center">Tarjeta Grafica</p>
           <p class="text-center">100$</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal1 -->

<!-- Modal2 -->
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">Intel Basic</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/produc/2.png">
           <p class="text-center">Tarjeta Madre</p>
           <p class="text-center">200$</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal2 -->

<!-- Modal3 -->
<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">Redragon</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/produc/3.png">
           <p class="text-center">Mouse Gamer</p>
           <p class="text-center">20$</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal3 -->

<!-- Modal4 -->
<div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content contenedorModal">
      <div class="modal-header">
        <p class="modal-title tituloModal text-center" id="exampleModalLabel">Dell</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="d-block w-100 imagenModal" src="../assets/images/produc/4.png">
           <p class="text-center">PC Basica</p>
           <p class="text-center">500$</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal4 -->

<!-- Footer -->
<footer>
   <?php @include('../includes/footer.php'); ?>
</footer>
 
  

<!-- fin del footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/js/scriptsNav2.js"></script>
</body>
</html>