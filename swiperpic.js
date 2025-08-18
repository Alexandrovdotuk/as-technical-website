// swiperpic.js

// Funktion zum Wechseln der Folien basierend auf dem Thumbnail-Klick
function changeSlide(index, swiperClass) {
    console.log(`changeSlide called with index: ${index}, swiperClass: ${swiperClass}`);
    const swiperElement = document.querySelector(`.${swiperClass}`);
    if (!swiperElement) {
        console.error(`Swiper element with class ${swiperClass} not found`);
        return;
    }
    const swiper = swiperElement.swiper;
    if (swiper) {
        swiper.slideTo(index);
    } else {
        console.error(`Swiper instance not initialized for ${swiperClass}`);
    }
}

// Event Listener für die Seite nach dem Laden
document.addEventListener("DOMContentLoaded", function () {
    console.log("DOMContentLoaded: Initializing Swipers and event listeners");

    // Initialisierung aller Swiper-Instanzen
    const swipers = document.querySelectorAll('.swiper');
    console.log(`Found ${swipers.length} swiper elements`);
    swipers.forEach((element, index) => {
        const swiperClass = element.classList.contains('swiper') && element.classList[1] ? element.classList[1] : `mySwiper${index + 1}`;
        console.log(`Initializing Swiper for class: ${swiperClass}`);
        try {
            new Swiper(`.${swiperClass}`, {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        } catch (error) {
            console.error(`Error initializing Swiper for ${swiperClass}:`, error);
        }
    });

    // Initialisiere alle Akkordeons
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    console.log(`Found ${accordionHeaders.length} accordion headers`);
    accordionHeaders.forEach(button => {
        button.addEventListener('click', () => {
            console.log(`Accordion header clicked: ${button.textContent}`);
            const content = button.nextElementSibling;
            const isOpen = content.style.display === 'block';

            // Schließe alle anderen offenen Inhalte
            document.querySelectorAll('.accordion-content').forEach(item => {
                item.style.display = 'none';
                item.previousElementSibling.classList.remove('active');
            });

            // Öffne oder schließe das aktuelle Inhaltselement
            if (!isOpen) {
                content.style.display = 'block';
                button.classList.add('active');
            }
        });
    });

    // Fullscreen-Bilder
    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("fullscreen-toggle")) {
            console.log(`Fullscreen toggle clicked: ${event.target.src}`);
            const overlay = document.querySelector("#image-overlay");
            if (!overlay) {
                console.error("Image overlay element not found");
                return;
            }
            const overlayImage = overlay.querySelector("img");
            const overlayVideo = overlay.querySelector("video");
            if (event.target.tagName === "VIDEO") {
                overlayVideo.src = event.target.querySelector("source").src;
                overlayVideo.style.display = "block";
                overlayImage.style.display = "none";
                overlayVideo.play();
            } else {
                overlayImage.src = event.target.src;
                overlayImage.style.display = "block";
                overlayVideo.style.display = "none";
            }
            overlay.classList.add("active");
            document.body.style.overflow = "hidden";
        }
    });

    // Overlay schließen
    const overlay = document.querySelector("#image-overlay");
    if (overlay) {
        overlay.addEventListener("click", function (event) {
            if (event.target === this || event.target.tagName === "IMG" || event.target.tagName === "VIDEO") {
                console.log("Closing overlay");
                this.classList.remove("active");
                document.body.style.overflow = "auto";
                const overlayVideo = this.querySelector("video");
                if (overlayVideo) {
                    overlayVideo.pause();
                    overlayVideo.src = "";
                }
            }
        });
    } else {
        console.error("Image overlay element not found");
    }

    // Sanftes Scrollen zu den Artikelgruppen
    const navLinks = document.querySelectorAll('.product-nav a');
    console.log(`Found ${navLinks.length} product nav links`);
    navLinks.forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            console.log(`Navigating to section: ${targetId}`);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            } else {
                console.error(`Target element ${targetId} not found`);
            }
        });
    });
});