const contenedorIngresar = document.querySelector(".contenedor_boton_ingresar");
const contenedorValidar = document.querySelector(".contenedor_boton_validar");
const btnIngresar = document.getElementById("boton_ingresar");
const btnValidar = document.getElementById("boton_validar");

const contenedorFormulario = document.querySelector(".contenedor_formulario");
const formIngresar = document.getElementById("formulario_ingresar");
const formValidar = document.getElementById("formulario_validar");

function isMobileOrTablet() {
    return window.innerWidth < 992;
}

formIngresar.style.display = "block";
formIngresar.style.opacity = "1";
formIngresar.style.zIndex = "2";

formValidar.style.display = "none";
formValidar.style.opacity = "0";
formValidar.style.zIndex = "1";

contenedorFormulario.style.transform = "translateX(0px)";

if (isMobileOrTablet()) {
    contenedorIngresar.style.display = "block";
    contenedorValidar.style.display = "none";
} else {
    contenedorIngresar.style.display = "block";
    contenedorValidar.style.display = "block";
}

function mostrarFormulario(formMostrar, formOcultar, translateX) {
    formMostrar.style.display = "block";
    setTimeout(() => {
        formMostrar.style.opacity = "1";
        formMostrar.style.zIndex = "2";
    }, 20);

    formOcultar.style.opacity = "0";
    formOcultar.style.zIndex = "1";
    setTimeout(() => {
        formOcultar.style.display = "none";
    }, 500);

    contenedorFormulario.style.transform = translateX;
}

btnIngresar.addEventListener("click", () => {
    if (!isMobileOrTablet()) {

        mostrarFormulario(formIngresar, formValidar, "translateX(0px)");
    } else {

        mostrarFormulario(formIngresar, formValidar, "translateX(0px)");
        contenedorIngresar.style.display = "none";
        contenedorValidar.style.display = "block";
    }
});

btnValidar.addEventListener("click", () => {
    if (!isMobileOrTablet()) {

        mostrarFormulario(formValidar, formIngresar, "translateX(440px)");
    } else {

        mostrarFormulario(formValidar, formIngresar, "translateX(0px)");
        contenedorValidar.style.display = "none";
        contenedorIngresar.style.display = "block";
    }
});
