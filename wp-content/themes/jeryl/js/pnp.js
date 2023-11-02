
$(window).scroll(function () {
 if ($(window).scrollTop() > 63) {
   $('.header-down').addClass('navbar-fixed');
 }
 if ($(window).scrollTop() < 64) {
   $('.header-down').removeClass('navbar-fixed');
 }
});


$(document).ready(function(){

$(function(){

   $(document).on( 'scroll', function(){

    if ($(window).scrollTop() > 100) {
    $('.scroll-top-wrapper').addClass('show');
  } else {
    $('.scroll-top-wrapper').removeClass('show');
  }
});

$('.scroll-top-wrapper').on('click', scrollToTop);
});

function scrollToTop() {
verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
element = $('body');
offset = element.offset();
offsetTop = offset.top;
$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

});  


$(function () {
        calc();
        $("#btnCalculate").click(function () {
            calc();
        });

        $("input[name='bc_job']").change(function () {
            debugger;
            if ($("input:radio[name='bc_job']:checked")[0].id == "bc_job") {
                document.getElementById("dvBonus").style.display = "block";
            }
            else {
                document.getElementById("dvBonus").style.display = "none";
            }
        });
        $("input[name='pse']").change(function () {
            debugger;
            if ($("input:radio[name='pse']:checked").val() == "0") {
                document.getElementById("dvPostEdu").style.display = "block";
            }
            else {
                document.getElementById("dvPostEdu").style.display = "none";
            }
        });

    });