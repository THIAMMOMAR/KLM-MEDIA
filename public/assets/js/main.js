$(document).ready(function() {

	var taille = 1;
	// AFAIRE
	// je crée un evenement blur sur mes elements
	$("form input#inputWine, form input#inputPrice, form textarea#textContent, form input#Origin").blur(function(){

    // je stocke mon element courant dans une variable
    var elt = $(this);
    
    if(elt.val().length <= 3){

    	elt.css({
    		"border": "1px solid red"
    	});

    }else{

    	elt.css({
    		"border": "1px solid green"
    	});

    }
});
	  $("form input#inputWine,form input#Price, form textarea#textContent, form input#Origin").blur(function(){
    var elt = $(this);
    console.log(elt.val());
    
    if(elt.val().length <= 3){
      $("form input#inputWine,form input#Price, form textarea#textContent, form input#Origin").css({
        "border": "1px solid red"
      });
      
    }
    
    
  }); 
});

// Slider

(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 4000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();

// new product animation
$(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);

// for caluculated the quantity 
$(document).ready(function(){
	$(".checkout").on("keyup", ".quantity", function(){
		var price = +$(".price").data("price");
		var quantity = +$(this).val();
		$("#total").text("$" + price * quantity);
	})
})
