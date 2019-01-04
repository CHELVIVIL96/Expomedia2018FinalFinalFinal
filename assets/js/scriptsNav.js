     // Funcion de cambiar el color del nav al hacer scroll hacia abajo
    $(document).ready(function() {
      $(window).scroll(function(){
        if (screen.width > 768) {
          console.log('entró pc');
          if ($(this).scrollTop() > 625) {
            $('nav').addClass('rosa');
            
          } else {
            $('nav').removeClass('rosa');
          }
        }
        else{
          console.log("entró Responsive");
          if ($(this).scrollTop() > 200) {
            $('nav').addClass('rosa');
            intervalo();
          } 
          else {
            $('nav').removeClass('rosa');
            
          }
        }
if ($(this).scrollTop() > 800) {
intervalo();
}
        
      });
    });
     // Funcion de cambiar el color del nav al hacer scroll hacia abajo

        $('#boton-menu').click(cambiarClaseVideo); //verificamos el elemento btn menu y llamamos una funcion
     
            function cambiarClaseVideo() {
            

                  // añadir clase si no existía; eliminarla si ya existía
                  document.getElementById("videoITM").classList.toggle('efectoBluirVideo');
                   document.getElementById("contenido-pagina").classList.toggle('efectoBluir');
                  // document.getElementById("contenido").classList.toggle('efectoBluirVideo');
                  // document.getElementById("titulo-expomedia").classList.toggle('efectoBluirVideo');   
            }

  var contador = 0;
    var tope=0;
  var intervalo;

function intervalo(){
    intervalo = setInterval(cambiarImg,600);
} 
 


function cambiarImg(){
  if (contador==0) {
    document.getElementById("imgManoAnimacion").src="assets/images/mano2.png";
     document.getElementById("imgBarraAnimacion").src="assets/images/barra2.png";
    console.log("contador = 0");
    contador=1;
  }
  else{
    document.getElementById("imgManoAnimacion").src="assets/images/mano1.png";
    document.getElementById("imgBarraAnimacion").src="assets/images/barra1.png";
    console.log("contador = 1");
    contador=0;
    tope++;
  }
  if (tope>=4) {
    console.log("entróa tope");
    clearInterval(intervalo);
    $("#imgManoAnimacion").hide(1000);
     $("#imgBarraAnimacion").hide(1000);
  }
  
}
    