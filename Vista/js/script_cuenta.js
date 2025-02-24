document.getElementById("boton_ingresar").addEventListener("click",ingresar)
document.getElementById("boton_validar").addEventListener("click",validar)
document.getElementById("boton_validar").addEventListener("click",validar)

var contenedor_formulario = document.querySelector(".contenedor_formulario");
var formulario_ingresar = document.querySelector(".formulario_ingresar");
var formulario_validar = document.querySelector(".formulario_validar");
var contenedor_boton_ingresar = document.querySelector(".contenedor_boton_ingresar");
var contenedor_boton_validar = document.querySelector(".contenedor_boton_validar");

function ingresar(){
    formulario_validar.style.display = "none";
    contenedor_formulario.style.left = "10px"
    formulario_ingresar.style.display = "block";
    contenedor_boton_validar.style.opacity = "1";
    contenedor_boton_ingresar.style.opacity ="0";
}

function validar(){
    formulario_validar.style.display = "block";
    contenedor_formulario.style.left = "410px"
    formulario_ingresar.style.display = "none";
    contenedor_boton_validar.style.opacity = "0";
    contenedor_boton_ingresar.style.opacity ="1";
}
