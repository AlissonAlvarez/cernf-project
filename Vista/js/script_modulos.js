// Funcionalidad para cambiar vista (grid/list)
document.getElementById('grid-view').addEventListener('click', function() {
    const container = document.getElementById('modules-grid');
    const buttons = document.querySelectorAll('.view-btn');
    
    // Remover clase active de todos los botones
    buttons.forEach(btn => btn.classList.remove('active'));
    this.classList.add('active');
    
    // Cambiar a vista de grid
    container.classList.remove('list-view');
    
    // Restaurar clases de columnas originales
    const cards = document.querySelectorAll('#modules-grid > div');
    cards.forEach(card => {
        card.className = 'col-xl-3 col-lg-4 col-md-6';
    });
});

document.getElementById('list-view').addEventListener('click', function() {
    const container = document.getElementById('modules-grid');
    const buttons = document.querySelectorAll('.view-btn');
    
    // Remover clase active de todos los botones
    buttons.forEach(btn => btn.classList.remove('active'));
    this.classList.add('active');
    
    // Cambiar a vista de lista
    container.classList.add('list-view');
    
    // Cambiar clases de columnas para vista de lista
    const cards = document.querySelectorAll('#modules-grid > div');
    cards.forEach(card => {
        card.className = 'col-12';
    });
});

// Funcionalidad para las estrellas (favoritos)
document.querySelectorAll('.bi-star').forEach(star => {
    star.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        if (this.classList.contains('bi-star')) {
            this.classList.remove('bi-star');
            this.classList.add('bi-star-fill', 'text-warning');
        } else {
            this.classList.remove('bi-star-fill', 'text-warning');
            this.classList.add('bi-star');
        }
    });
});

// Animación de hover para las cards
document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-4px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// const lista = document.querySelector(".lista");
// const grid = document.querySelector(".grid");
// const contenedor_modulos = document.querySelector(".contenedor_modulos");

// lista.addEventListener("click", () => {
//     contenedor_modulos.classList.add("lista");
// })

// grid.addEventListener("click", () => {
//     contenedor_modulos.classList.remove("lista");
//     // contenedor_modulos.classList.add("grid");
// })

// $(document).ready(function () {
//     $("#input_buscar").on("keyup", function () {
//         var value = $(this).val().toLowerCase();
//         $("#contenedor_modulos a").filter(function () {
//             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

//         });
//     });
// });

document.getElementById('input_buscar').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const moduleCards = document.querySelectorAll('.modulo_aplicacion');
    
    moduleCards.forEach(card => {
        const title = card.querySelector('.descripcion_modulo').textContent.toLowerCase();
        const parent = card.closest('.col-xl-3, .col-lg-4, .col-md-6');
        
        if (title.includes(searchTerm)) {
            parent.style.display = 'block';
        } else {
            parent.style.display = 'none';
        }
    });
});

