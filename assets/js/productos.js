//Script utilizado para rellenar los horarios de actividades

var Form = function(tags){
    this.formArea = tags;
};

Form.prototype.showForm = function() {
    return this.formArea;
};

//JS para el map
document.addEventListener('DOMContentLoaded', function(){
    
    	var img=["1","2","3","4","5","6","7","8","9","10","11","12"];
		var precios=["100$","200$","20$","500$","10$","1000$","2000$","200$","300$","70$","90$","5$"];
		var detallePrecio=["Tarjeta grafica","Tarjeta madre","Mouse gamer","Pc basica","MousePad","Pc media","Pc gamer","Case pro","Pantalla msi","Teclado y mouse","Parlantes asus","Microfono"];
					var productos = document.getElementById('productos');

						for (var i=0; i<12; i++) {
						productos.innerHTML += `
							<div class="col-3">
								<div class="card" id="cardss" data-toggle="modal" data-target="#Modal`+[i+1]+`">
								  <img src="../assets/images/produc/`+img[i]+`.png" alt="Avatar" class="imgProduct">
								  <div class="container" id="margenTextoCard">
								    <h4 class="letrasTit"><b>`+precios[i]+`</b></h4> 
								    <p class="letrasTxt">`+detallePrecio[i]+`</p> 
								  </div>
								</div>
							</div>
						`
						}
					
    
    var container = document.getElementById('productos');
    container.innerHTML = contactForm.showForm();
    
});

document.addEventListener('DOMContentLoaded', function(){
    
		var img=["1","2","3","4","5","6","7","8","9","10","11","12"];
		var precios=["100$","200$","20$","500$","10$","1000$","2000$","200$","300$","70$","90$","5$"];
		var detallePrecio=["Tarjeta grafica","Tarjeta madre","Mouse gamer","Pc basica","MousePad","Pc media","Pc gamer","Case pro","Pantalla msi","Teclado y mouse","Parlantes asus","Microfono"];
					var productosPhone = document.getElementById('productosPhone');

						for (var i=0; i<12; i++) {
						productosPhone.innerHTML += `
							<div class="col-4">
								<div class="card"  id="cardss" data-toggle="modal" data-target="#Modal`+[i+1]+`">
								  <img src="../assets/images/produc/`+img[i]+`.png" alt="Avatar" class="imgProduct">
								  <div class="container" id="margenTextoCard">
								    <h4 class="letrasTit"><b>`+precios[i]+`</b></h4> 
								    <p class="letrasTxt">`+detallePrecio[i]+`</p> 
								  </div>
								</div>
							</div>
						`
						}
					
    
    var container = document.getElementById('productosPhone');
    container.innerHTML = contactForm.showForm();
    
});
