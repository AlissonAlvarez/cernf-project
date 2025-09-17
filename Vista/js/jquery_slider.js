// document.addEventListener("DOMContentLoaded", function() {
//     const slides = document.querySelector(".slides");
//     const prev = document.querySelector(".prev");
//     const next = document.querySelector(".next");
//     const pagination = document.querySelector(".pagination");
//     const slideItems = document.querySelectorAll(".slides li");
//     let index = 0;
//     let autoSlideInterval;
    
//     function updateSlider() {
//         slides.style.transform = `translateX(-${index * 100}%)`;
//         document.querySelectorAll(".pagination span").forEach((dot, i) => {
//             dot.classList.toggle("active", i === index);
//         });
//     }
    
//     slideItems.forEach((_, i) => {
//         let dot = document.createElement("span");
//         if (i === 0) dot.classList.add("active");
//         dot.addEventListener("click", () => {
//             index = i;
//             updateSlider();
//             resetAutoSlide();
//         });
//         pagination.appendChild(dot);
//     });
    
//     prev.addEventListener("click", () => {
//         index = (index > 0) ? index - 1 : slideItems.length - 1;
//         updateSlider();
//         resetAutoSlide();
//     });
    
//     next.addEventListener("click", () => {
//         index = (index < slideItems.length - 1) ? index + 1 : 0;
//         updateSlider();
//         resetAutoSlide();
//     });
    
//     function startAutoSlide() {
//         autoSlideInterval = setInterval(() => {
//             index = (index < slideItems.length - 1) ? index + 1 : 0;
//             updateSlider();
//         }, 3000);
//     }

//     function resetAutoSlide() {
//         clearInterval(autoSlideInterval);
//         startAutoSlide();
//     }

//     startAutoSlide();
// });

// const currentUrl = window.location.href;
    
//     document.querySelectorAll("nav ul li a").forEach(link => {
//         if (currentUrl.includes(link.getAttribute("href"))) {
//             link.classList.add("active");
//         }
// });

// document.addEventListener('DOMContentLoaded', function () {
//     const tabs = document.querySelectorAll('.tabs a');
//     const tabContents = document.querySelectorAll('.tabgroup > div');

//     tabs.forEach(tab => {
//         tab.addEventListener('click', function (e) {
//             e.preventDefault();
//             tabs.forEach(t => t.classList.remove('active'));

//             // Añade la clase 'active' al tab actual
//             this.classList.add('active');

//             // Oculta todos los contenidos de las pestañas
//             tabContents.forEach(content => {
//                 content.style.display = 'none';
//             });

//             // Muestra el contenido de la pestaña seleccionada
//             const targetTab = document.querySelector(this.getAttribute('href'));
//             targetTab.style.display = 'block';
//         });
//     });

//     // Inicializar la primera pestaña como visible
//     tabContents.forEach(content => content.style.display = 'none');
//     document.querySelector('#tab1').style.display = 'block';
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const chatbox = document.getElementById("chatbox");
//     const openChat = document.getElementById("open-chat");
//     const closeChat = document.getElementById("close-chat");
//     const sendBtn = document.getElementById("send-btn");
//     const chatInput = document.getElementById("chat-input");
//     const chatMessages = document.getElementById("chatbox-messages");

//     // Abrir y cerrar el chat con el botón flotante
//     openChat.addEventListener("click", function () {
//         if (chatbox.style.display === "flex") {
//             // Si el chat ya está abierto, cerrarlo
//             chatbox.style.display = "none";
//             openChat.textContent = "💬";  // Mostrar icono de chat
//         } else {
//             // Si el chat está cerrado, abrirlo
//             chatbox.style.display = "flex";
//             openChat.textContent = "❌";  // Mostrar "X"
//         }
//     });

//     // Cerrar chat con el botón de la "X" en el chatbox
//     closeChat.addEventListener("click", function () {
//         chatbox.style.display = "none";
//         openChat.textContent = "💬";  // Volver a mostrar icono de chat
//     });

//     // Enviar mensaje
//     sendBtn.addEventListener("click", function () {
//         sendMessage();
//     });

//     chatInput.addEventListener("keypress", function (e) {
//         if (e.key === "Enter") {
//             sendMessage();
//         }
//     });

//     function sendMessage() {
//         const message = chatInput.value.trim();
//         if (message !== "") {
//             const msgElement = document.createElement("div");
//             msgElement.textContent = "Tú: " + message;
//             chatMessages.appendChild(msgElement);
//             chatInput.value = "";
//             chatMessages.scrollTop = chatMessages.scrollHeight;
//         }
//     }
// });

const toggle = document.getElementById('menu-toggle');
const nav = document.querySelector('nav');

toggle.addEventListener('click', () => {
    nav.classList.toggle('active');
});


$(document).ready(function(){
    let currentIndex = 0;
    const slides = $('.slide');
    const totalSlides = slides.length;

    function showSlide(index){
        slides.removeClass('active');
        slides.eq(index).fadeIn(500).addClass('active').siblings().fadeOut(500);
    }

    $('.next').click(function(){
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    });

    $('.prev').click(function(){
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        showSlide(currentIndex);
    });

    // Auto slide cada 5 segundos
    setInterval(function(){
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }, 5000);

    // Inicializar
    slides.hide();
    slides.eq(currentIndex).show();
});

