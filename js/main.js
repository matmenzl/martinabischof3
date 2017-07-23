jQuery(document).ready(function($) {

  // initialize Isotope after all images have loaded
  var $container = $('#portfolio-items').imagesLoaded( function() {
    $container.isotope({
      itemSelector: '.item',
      layoutMode: 'masonry'
      // masonry: {
      //   columnWidth: 0,
      // }
    });
  });


   
  // filter items on button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });   
   

  $("[rel='tooltip']").tooltip();    
   
      $('#hover-cap, .frontpage-item, .porftolio-item').hover(
          function(){
              $(this).find('.caption').slideDown(250); //.fadeIn(250)
          },
          function(){
              $(this).find('.caption').slideUp(250); //.fadeOut(250)
          }
      );   


      
  // Look for .hamburger --> not used 
  // var hamburger = document.querySelector(".hamburger");
  // hamburger.addEventListener("click", function() {
  //   hamburger.classList.toggle("is-active");
  // });



  //Show hide scrollup button
  $('.scrollup').hide()
  $(document).scroll(function(){
      if ($(this).scrollTop() > 700) {
        $('.scrollup').fadeIn();
      } else {
        $('.scrollup').fadeOut();
      }
    });
  
  //Click event to scroll to top
  $('.scrollup').click(function(){
    $('html, body').animate({scrollTop : 0},1000);
    return false;
  });


  // Turn hover to touch on mobile
  document.addEventListener("touchstart", function(){}, true);


});
    
