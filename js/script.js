$(document).ready(function () {
  $(".header__menu__openbtn").click(function () {
    $(this).toggleClass("active2");
    $("#g-nav").toggleClass("panelactive");
  });

  $("#g-nav a").click(function () {
    $(".header__menu__openbtn").removeClass("active2");
    $("#g-nav").removeClass("panelactive");
  });

  const isMobile = window.matchMedia("(max-width: 768px)").matches;

  if (isMobile) {
    const swiper = new Swiper(".swiper-container", {
      slidesPerView: "auto",
      slidesPerGroup: 1,
      spaceBetween: 10,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      touchStartPreventDefault: false,
    });
  }
});


// $(".header__menu__openbtn").click(function () {
//   $(this).toggleClass('active2');
//   $("#g-nav").toggleClass('panelactive')
// });

// $("#g-nav a").click(function () {
//   $(".header__menu__openbtn").removeClass('active2');
//   $("#g-nav").removeClass('panelactive');
// });

// const swiper = new Swiper('.swiper', {
//   // Optional parameters
//   direction: 'vertical',
//   loop: true,

//   // If we need pagination
//   pagination: {
//   el: '.swiper-pagination',
//   type: 'bullets',
//   clickable: true,
//   },
// });

// document.addEventListener('DOMContentLoaded', function () {
//   var isMobile = window.matchMedia('(max-width: 768px)').matches;
//   if (isMobile) {
//     var swiper = new Swiper('.swiper-container', {
//       // slidesPerView: 'auto',
//       slidesPerGroup: 1,
//       spaceBetween: 10,
//       loop: true,
//       pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//       },
//       autoplay: {
//         delay: 1000,
//         disableOnInteraction: false,
//       },
//       touchStartPreventDefault: false,
//     });
//   }
// });
