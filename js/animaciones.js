document.addEventListener("DOMContentLoaded", function () {

    const productos = document.querySelectorAll(".producto, .destacado");
    const modal = document.getElementById("modal");
    const imgModal = document.getElementById("imgModal");
    const tituloModal = document.getElementById("tituloModal");
    const cerrar = document.getElementById("cerrar");
    const selectTalla = document.getElementById("selectTalla");
    const switchBrillo = document.getElementById("switchBrillo");
    const ordenar = document.getElementById("ordenar");

    // --------------- MODAL -----------------
    productos.forEach(producto => {
        producto.addEventListener("click", function () {

            const id = this.getAttribute("data-id");

            // Si no tiene data-id, lo buscamos por imagen
            let imgSrc = this.querySelector("img").getAttribute("src");

            imgModal.src = imgSrc;
            tituloModal.textContent = this.querySelector("h3").textContent;

            modal.classList.add("active");
        });
    });

    cerrar.addEventListener("click", function () {
        modal.classList.remove("active");
    });

    // cerrar al click fuera del modal
    window.addEventListener("click", function (e) {
        if (e.target === modal) {
            modal.classList.remove("active");
        }
    });

    // --------------- WHATSAPP -----------------
    ordenar.addEventListener("click", function () {
        const talla = selectTalla.value;
        const brillo = switchBrillo.checked ? "Sí ( +15.000 )" : "No";

        const mensaje = `Hola, quiero el ${tituloModal.textContent}\nTalla: ${talla}\nBrillos: ${brillo}`;
        window.open("https://wa.me/3203751393?text=" + encodeURIComponent(mensaje), "_blank");
    });


    // --------------- HEADER OCULTO AL SCROLL -----------------
    const header = document.querySelector(".header");
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            header.style.top = "0";
            return;
        }

        // si baja el scroll, ocultar header
        if (currentScroll > lastScroll) {
            header.style.top = "-200px";
        } else {
            header.style.top = "0";
        }

        lastScroll = currentScroll;
    });

    // --------------- ANIMACIONES AL SCROLL -----------------
    const elementos = document.querySelectorAll(".animar");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, {
        threshold: 0.2
    });

    elementos.forEach(el => {
        observer.observe(el);
    });

});
// ===== MENU HAMBURGUESA =====
const hamburguesa = document.getElementById("hamburguesa");
const menu = document.getElementById("menu");

hamburguesa.addEventListener("click", () => {
    menu.classList.toggle("active");
});

// cerrar menú al hacer click en un link
menu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
        menu.classList.remove("active");
    });
});
