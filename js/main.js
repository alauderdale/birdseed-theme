

$(document).ready(function(){



  $( ".monthly-toggle" ).click(function() {
        $( ".monthly" ).addClass( "shown" );
        $( ".annually" ).removeClass( "shown" );
    });

  $( ".annual-toggle" ).click(function() {
        $( ".annually" ).addClass( "shown" );
        $( ".monthly" ).removeClass( "shown" );
    });

	$( ".menu-button" ).click(function() {
        $( "html" ).toggleClass( "nav-open" );
    });

    $( ".menu-link" ).click(function() {
        $('.menu-button').trigger('click');
    });

    //adding and removing header menu classes

    var scroll = $(window).scrollTop();

    if (scroll >= 5) {
    	$("#primary-nav").removeClass("navbar-page-top");
    }


	$(window).scroll(function() {    
	    
		var scroll = $(window).scrollTop();
	    if (scroll >= 5) {
	        $("#primary-nav").removeClass("navbar-page-top");
	    } else {
	        $("#primary-nav").addClass("navbar-page-top");
	    }
	});

  //hover activate


	// $(".hover-slider .carousel-indicators div").hover(function(){
	//   var goto = Number( $(this).attr('data-slide-to') );
	//   $("#ToolsSLider").carousel(goto);  
	// });

  // ///adding class

  // $("#ToolsSLider .carousel-inner .carousel-item:first").addClass("active");
  // $("#ToolsSLider .carousel-indicators .tool-icon:first").addClass("active");



	// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })


  ///stop homepage video on modal close
  $("#homeVideoModal").on('hidden.bs.modal', function (e) {
    $("#homeVideoModal iframe").attr("src", $("#homeVideoModal iframe").attr("src"));
  });






//slider








});
