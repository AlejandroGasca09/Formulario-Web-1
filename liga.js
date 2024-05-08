liga.addEventListener('DOMContentLoaded', function() {
    var elems = liga.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(liga).ready(function(){
    $('.carousel').carousel();
  });