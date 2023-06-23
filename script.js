// SCRIPT DE PANTALLA DE BIENVENIDA //


const pantallaPrincipal = document.querySelector(".principal");
const pantallaIngreso = document.getElementById("ingreso"); 
const btnIngreso = document.getElementById("btningreso");


btnIngreso.addEventListener('click', () => {
    pantallaIngreso.style.display = 'none';
    pantallaPrincipal.style.display = 'block';
}) 


//

