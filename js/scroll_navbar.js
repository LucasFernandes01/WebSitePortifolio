$(document).on("scroll", function() {
   if ($(document).scrollTop() > 350) {
     $("nav").addClass("navbar-fixed-top");
   } else {
     $("nav").removeClass("navbar-fixed-top");
   }
 });