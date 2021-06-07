$(document).ready(function () {
  var body = $('body');


  body.on('click', '.header__burger__icon', function () {
      $(".header__burger-inner").toggleClass("show")
      $("body").toggleClass('overlay')
  });
  body.on('click', '.header__burger-inner.show .close', function () {
      $(".header__burger-inner").toggleClass("show")
      $("body").toggleClass('overlay')
  });

  $(".header__button a").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;

    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    return false;

  });
  $(".first-block__inner-button a").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;

    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    return false;

  });
  $(".header__burger-inner nav ul li a").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    $(".header__burger-inner").toggleClass("show")
    $("body").toggleClass('overlay')
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    return false;
  });
});

