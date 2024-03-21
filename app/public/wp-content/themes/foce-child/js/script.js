//test
console.log("Le script script.js est chargé avec succès !");


// Carrousel configuration
document.addEventListener("DOMContentLoaded", function() {
  const imagesChatsSwiper = document.querySelectorAll(".swiper-slide img");
  imagesChatsSwiper.forEach(img => {
      img.style.display = "block";
      img.style.maxWidth = "300px";
  });

  const swiper = new Swiper(".swiper-container", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      spaceBetween: 150,
      direction: "horizontal",
      coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 10,
          modifier: 1,
          slideShadows: false,
      },
      loop: true,
      loopedSlides: 0,
      loopAdditionalSlides: 0,
      autoplay: {
          delay: 1000,
          disableOnInteraction: false,
      },
      speed: 850,
  });
});


// Clouds Parallax
function moveElementOnScroll(element, maxTranslation) {
  let rect = element.getBoundingClientRect();
  if (rect.top < window.innerHeight && rect.bottom >= 0) {
    let scroll = Math.max(0, window.innerHeight - rect.top);

    element.style.setProperty(
      "--cloudsPositionX",
      (-maxTranslation * scroll) / window.innerHeight + "px"
    );
  }
}


// Event Listeners clouds'scroll
window.addEventListener("scroll", function () {
  let Clouds = document.querySelector(".clouds");
  if (Clouds) moveElementOnScroll(Clouds, -300);
});


//Titles
const animationTitles = document.querySelectorAll(".title__animation");
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
      return;
    }
  });
});
animationTitles.forEach((span) => observer.observe(span));
