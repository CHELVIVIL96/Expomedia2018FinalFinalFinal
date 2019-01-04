     // Funcion de cambiar el color del nav al hacer scroll hacia abajo
    $(document).ready(function() {
        if (screen.width > 768) {
          console.log('entró pc');
          if ($(this).scrollTop() >= 0) {
            $('nav').addClass('rosa');
          } else {
            $('nav').removeClass('rosa');
          }
        }
        else{
          console.log("entró Responsive");
          if ($(this).scrollTop() >= 0) {
            $('nav').addClass('rosa');
          } 
          else {
            $('nav').removeClass('rosa');
            
          }
        }
    });
     // Funcion de cambiar el color del nav al hacer scroll hacia abajo

     $('#boton-menu').click(cambiarClaseVideo); //verificamos el elemento btn menu y llamamos una funcion
     
     function cambiarClaseVideo() {
      console.log("hol<");
           // añadir clase si no existía; eliminarla si ya existía
           document.getElementById("contenido-pagina").classList.toggle('efectoBluir');
           document.getElementById("img-header").classList.toggle('efectoBluir');       
     }
