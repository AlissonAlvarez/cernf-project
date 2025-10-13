document.addEventListener("DOMContentLoaded", function() {
    // Simulamos un pequeño retardo para que el splash se vea bonito (2s)
    setTimeout(() => {
        document.getElementById("splash-screen").classList.add("hidden");
    }, 2000); // puedes cambiar a 1500 o 3000 ms
});

document.addEventListener("DOMContentLoaded", function () {
    const backToTop = document.querySelector(".back-to-top");

    window.addEventListener("scroll", function () {
      if (window.scrollY > 300) {
        backToTop.style.display = "block";
      } else {
        backToTop.style.display = "none";
      }
    });

    backToTop.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });

document.addEventListener("DOMContentLoaded", function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  });
  

