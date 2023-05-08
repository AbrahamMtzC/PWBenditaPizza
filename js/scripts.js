//Botón de Regresar
let mybutton = document.getElementById("btnRegresar"); //Obtener el botón

window.onscroll = function() {scrollFunction()}; // Cuando el usuario haga scroll de 20px, se mostrará el botón

function scrollFunction() { // Cuando el usuario haga scroll de 30px, se mostrará el botón
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() { //Cuando el usuario haga click en el botón, se regreara al tope
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
//Fin Botón Regresar