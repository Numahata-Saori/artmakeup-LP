// $(".header__menu__openbtn, header__menu__nav, header__menu__close").click(function () {
//   $(".header__menu, header__menu__close").toggleClass('active');
// });


$(".header__menu__openbtn").click(function () {
  $(this).toggleClass('active');
  $("#g-nav").toggleClass('panelactive')
});

$("#g-nav a").click(function () {
  $(".header__menu__openbtn").removeClass('active');
  $("#g-nav").removeClass('panelactive');
});
