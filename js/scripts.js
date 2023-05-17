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
//Prelaoder
var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
    loader.style.display="none";
});
//Fin preloader
//Menu hamburguesa
const hamburguesa = document.querySelector(".hamburguesa");
const menu = document.querySelector(".barra ul");

hamburguesa.addEventListener("click", () => {
    hamburguesa.classList.toggle("active");
    menu.classList.toggle("active");
})

document.querySelectorAll(".barra ul li a").forEach(n => n.addEventListener("click", () => {
    hamburguesa.classList.remove("active");
    menu.classList.remove("active");
}));
//Fin menu hamburguesa