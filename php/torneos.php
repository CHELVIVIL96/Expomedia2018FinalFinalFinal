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
 <title>ExpoMedia | Torneos</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124159094-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124159094-1');
</script>
</head>
<body class="BodyBg">
  <!-- inicio header -->
  <header>
    <!-- navbar -->
 <?php @include('../includes/menu2.php'); ?>
      <!-- navbar -->
         <div id="contenido-pagina2" class="container-fluid">
        <div class="row">
          <div class="imgHeader col-xs-12 col-sm-12 col-md-12 col-lg-12 img-fluid"><img src="../assets/images/torneoHeader.png" alt="Ganadores-pasados-del-torneo-de-League-of-Legends"></div>
        </div>
      </div>
    </header>
    <!-- fin del header -->
<div id="contenido-pagina">
    <!-- Imagen del header -->
      
      <!-- imagen del header -->
      <!-- titulo torneos -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titlePage">
            <h1>TORNEOS</h1>
          </div>
        </div>
      </div>
   <!-- fin titulo torneos -->
 

 <!-- Sección de los campeones -->
 <section class="sectionTorneos">
  <!-- header seccion campeones(icono y texto) -->
  <div class="container-fluid">
    <div class="pl-3">
      <div class="row trofeo justify-content-center justify-content-md-start">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="justify-content-center" >
            <img class="img-responsive" src="../assets/images/iconTrophy.png" alt="iconTrophy">
          </div>
        </div>
      </div>
      <br>
      <div class="row justify-content-center justify-content-md-start">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 titlecampeones">
          <h3>Campeones</h3>
        </div>
        
      </div>
    </div>
    <!-- fin header seccion campeones(icono y texto) -->
<br>
    <!-- Ganador de los torneos -->
    <div class="row justify-content-sm-center">
      <div class="col-md-2 col-6">
        <img src="../assets/images/torneoGanador01.png" alt="ganador01">
      </div>
      <div class="col-md-3 col-6 mr-auto">
        <h6>TORNEO:</h6>
        <p>............</p>
        <h6>
          NOMBRE DEL EQUIPO:
        </h6>
        <p>
         ................
       </p><br>
     </div>

     <div class="col-md-2 col-6">
      <img src="../assets/images/torneoGanador02.png" alt="ganador02">
    </div>
    <div class="col-md-3 col-6 ">
      <h6>TORNEO:</h6>
      <p>............</p>
      <h6>
        NOMBRE DEL GANADOR:
      </h6>
      <p>
       ................
     </p>
   </div>
 </div>

</div>
</section>
<!-- fin Gandor de los torneos -->


<section class="sectionTorneos">
  <div class="container-fluid">
    <!-- Selector de torneo -->
    <div class="row">
      <div class="col-4">
        <select id="select" name="op-select">
          <option value="op0" selected>Escoge el torneo</option>
          <option value="op1">League of Legends</option>
          <option value="op2">Super Smash Bros</option>
        </select>
        <br><br>

      </div>
    </div>
  </div>
  <!-- fin selector de torneo -->

  <!-- Torneo a mostrar -->
  <div class="TournamentBox">  
    <!-- Tournament lol-->
    <div class="op1 bracket ">
      <section class="round quarterfinals sectionTorneos">
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>Uno</span></div>
                <div class="participant loser"><span>Ocho</span></div>
              </div>
            </div>
            <div class="matchup">
              <div class="participants">
                <div class="participant"><span>Dos</span></div>
                <div class="participant winner"><span>Siete</span></div>
              </div>
            </div>
          </div>
          <div class="connector">
            <div class="merger"></div>
            <div class="line"></div>
          </div>
        </div>
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant"><span>Treis</span></div>
                <div class="participant winner"><span>Seis</span></div>
              </div>
            </div>
            <div class="matchup">
              <div class="participants">
                <div class="participant"><span>Cuatro</span></div>
                <div class="participant winner"><span>Cinco</span></div>
              </div>
            </div>
          </div>
          <div class="connector">
            <div class="merger"></div>
            <div class="line"></div>
          </div>
        </div>
      </section>
      <section class="round semifinals sectionTorneos">
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>Uno</span></div>
                <div class="participant"><span>Dos</span></div>
              </div>
            </div>
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>Seis</span></div>
                <div class="participant"><span>Cinco</span></div>
              </div>
            </div>
          </div>
          <div class="connector">
            <div class="merger"></div>
            <div class="line"></div>
          </div>
        </div>
      </section>
      <section class="round finals sectionTorneos">
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>Uno</span></div>
                <div class="participant"><span>Seis</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- tournament lol-->
    <!-- tournament Smash -->
    <div class="op2 bracket">
      <section class="round quarterfinals sectionTorneos">
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>uno</span></div>
                <div class="participant"><span>Ocho</span></div>
              </div>
            </div>
            <div class="matchup">
              <div class="participants">
                <div class="participant"><span>Dos</span></div>
                <div class="participant winner"><span>Siete</span></div>
              </div>
            </div>
          </div>
          <div class="connector">
            <div class="merger"></div>
            <div class="line"></div>
          </div>
        </div>
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant"><span>Treis</span></div>
                <div class="participant winner"><span>Seis</span></div>
              </div>
            </div>
            <div class="matchup">
              <div class="participants">
                <div class="participant"><span>Cuatro</span></div>
                <div class="participant winner"><span>Cinco</span></div>
              </div>
            </div>
          </div>
          <div class="connector">
            <div class="merger"></div>
            <div class="line"></div>
          </div>
        </div>
      </section>
      <section class="round semifinals sectionTorneos">
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>Uno</span></div>
                <div class="participant"><span>Dos</span></div>
              </div>
            </div>
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>Seis</span></div>
                <div class="participant"><span>Cinco</span></div>
              </div>
            </div>
          </div>
          <div class="connector">
            <div class="merger"></div>
            <div class="line"></div>
          </div>
        </div>
      </section>
      <section class="round finals sectionTorneos">
        <div class="winners">
          <div class="matchups">
            <div class="matchup">
              <div class="participants">
                <div class="participant winner"><span>Uno</span></div>
                <div class="participant"><span>Seis</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- tournament smash --> 
  </div>
  <!-- fin torneo a mostrar -->
</section>


  <footer>
    <?php @include('../includes/footer.php'); ?>
  </footer> 

  </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/js/scriptsNav2.js"></script>
<script>





  /*funcion para mostrar/esconder el div tournament con el select*/
  $(function(){
    $("select").change(function(){
      $(this).find("option:selected").each(function(){
        var optionValue = $(this).attr("value");
        if(optionValue){
          $(".bracket").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else{
          $(".bracket").hide();
        }
      });
    }).change();
  });

</script>
</body>
</html>