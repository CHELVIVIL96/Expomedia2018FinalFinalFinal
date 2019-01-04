     // Funcion de cambiar el color del nav al hacer scroll hacia abajo
    $(document).ready(function() {
      $(window).scroll(function(){
        if (screen.width > 768) {
        
        //  console.log('entró pc');
          if ($(this).scrollTop() > 320) {
            $('nav').addClass('rosa');
          } else {
            $('nav').removeClass('rosa');
          }
        }
        else{
          if ($(this).scrollTop() > 200) {
            $('nav').addClass('rosa');
          } 
          else {
            $('nav').removeClass('rosa');
            
          }
        }
      });
    });
     // Funcion de cambiar el color del nav al hacer scroll hacia abajo

     $('#boton-menu').click(cambiarClaseVideo); //verificamos el elemento btn menu y llamamos una funcion
     
     function cambiarClaseVideo() {
           // añadir clase si no existía; eliminarla si ya existía
           document.getElementById("contenido-pagina").classList.toggle('efectoBluir');
           document.getElementById("contenido-pagina2").classList.toggle('efectoBluir');
           // document.getElementById("img-header").classList.toggle('efectoBluir');       
     }
