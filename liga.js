document.addEventListener('DOMContentLoaded', function() {
    const elementoscarrusel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementoscarrusel,{
      duration:150,
      dist:0,
      shift:5,
      padding:5,
      numVisible:5
    });
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
  });