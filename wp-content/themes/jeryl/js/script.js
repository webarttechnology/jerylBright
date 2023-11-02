$(window).scroll(function() {
    if ($(this).scrollTop() > 50){  
      $('.header-sec').addClass("sticky");
    }
    else {
      $('.header-sec').removeClass("sticky");
    }
  });