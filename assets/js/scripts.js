(function( root, $, undefined ) {
	"use strict";

	$(function () {
		
		/*
		// PAGE LOADING TRANSITION
		$(".menuContents .nav a, .button, .logo a").click(function(e) {
		    e.preventDefault();
		    var link = $(this).attr("href");
		    $("body").fadeOut('slow',function(){
		      window.location =  link; 
		    });
		});
		
		$(window).load(function() {
			$('body').fadeIn('slow');
		});
		
		
		// CHANGE FADE IN DIRECTION ON IMAGE
		if ( $('.row').hasClass('reverse') ) {
			var reversedFadeIn = $('.reverse img');
			reversedFadeIn.attr('data-aos', 'fade-right');
		}
		*/
		
		// AOS INIT
		$(function() {
			AOS.init();
		});
		
		// HIDE/SHOW HEADER ON SCROLL
		var lastScrollTop = 0;
		var delta = 5;
	    $(window).on('scroll', function() {
	        var st = $(this).scrollTop();
	        if ( st < lastScrollTop )  {
	            $('header').addClass('up').removeClass('down');
	        }
	        else if( st > lastScrollTop && st > delta ) {
	            $('header').addClass('down').removeClass('up');
	        }
	        lastScrollTop = st;
	    });
		
		// REMOVE OUTLINE ON CLICKABLE ITEMS WHEN USING MOUSE
		document.body.addEventListener('mousedown', function() {
		  document.body.classList.add('using-mouse');
		});
		
		// Re-enable focus styling when Tab is pressed
		document.body.addEventListener('keydown', function(event) {
		  if (event.keyCode === 9) {
		    document.body.classList.remove('using-mouse');
		  }
		});
		
		// ESCAPE KEY CLICK TO ESCAPE
		$(document).keyup(function(e) {
		    if (e.key === "Escape") { // escape key maps to keycode `27`
				$('.hamburger').removeClass('is-active');
				$('body, html').removeClass('menuOpen');
				$('.modal').fadeOut();
		    }
		});
		
		// SMOOTH SCROLL TO ANCHORS
		$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target: $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					//setTimeout(function(){	
					$('html,body').animate({
						scrollTop: target.offset().top
					},
					1000);
					return false;
				}
			}
		});
		
		// MOBILE MENU
		$('.menuToggle').click(function(e) {
			e.preventDefault();
			$(this).find('.hamburger').toggleClass('is-active');
			$('body, html').toggleClass('menuOpen');
		});
		
		// CLOSE MENU IF LINK HAS HASH TAG
		$('.menuContents .nav .sub-menu a').click(function() {
			var hamburger = $('.hamburger');
			if ( this.href.indexOf("#") != -1 ) {
			    hamburger.toggleClass('is-active');
				$('body, html').toggleClass('menuOpen');
			}
		});
		
		$(document).ready(function() {
			// LOOP THROUGH ANIMATED IMAGE LIST AND CONFIG ANIMATION TIMING
			var plus = 0;
			$('.flex-gallery > .aos-animate:gt(0)').each(function(i) {
				plus += 150;
				$(this).attr('data-aos-delay', plus);
			});
			
			// APPEND ICONS TO MENU ITEMS
			$('.menuToggle a').append('<button class="hamburger hamburger--spin" type="button"><span class="hamburger-box"></span><span class="hamburger-inner"></span></button>');
			$('.downloadFinancials a').append('<span class="downArrowContainer"><span class="downArrow">&nbsp;</span></span>');
			
			$('.topLeftCaption').find('figcaption').wrap('<div class="innerContainer absoluteCaptionInnerContainer"></div>');
			
			// ADD GHOST CONTAINER
			$('.verticalStitchRight, .verticalStitchLeft').prepend('<div class="ghostVertStitchContainer"></div>');
			
			// ADD RIGHT FACING ARROW IN INLINE LINKS
			$('.inline-link-with-arrow a').each(function() {
				$(this).prepend('<span class="downArrowContainer"><span class="downArrow">&nbsp;</span></span>');
			});
			
			// SLICK CAROUSEL
		
			var $slider = $(".carousel").slick({
				fade: true,
				autoplay: true,
				arrows: false,
				autoplaySpeed: 1000,
				pauseOnHover: false,
				speed: 2000,
			})
			.on('afterChange', function( e, slick, currentSlide ) {
			    if( currentSlide == 4 ) {
					$slider.slick("setOption", "autoplaySpeed", 3000);
			    } else {
			    	$slider.slick("setOption", "autoplaySpeed", 1000);
			    }
			});
		});
		
		// PROMO OVERLAY
		$('.promo-overlay, .close-promo').click(function() {
			$('.promo-overlay').fadeOut();
		});
		
		// VIDEO MODAL
		$('.openModal').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('id');
			$("div[data-id=" + id + "]").fadeIn();
		});
		// CLOSE MODAL
		$('.closeModalButton').click(function() {
			$(this).parent().parent().fadeOut();
			//$('html, body').removeClass('modalOpen');
			//$('header').css('opacity', '1');
			//player.unload();
			var currentIframe = $(this).next().find('iframe'),
			videoURL = currentIframe.attr('src');
			$(this).next().find('iframe').attr('src', videoURL);
		});
		$('.modal').click(function() {
			$(this).fadeOut();
			//$('html, body').removeClass('modalOpen');
			//$('header').css('opacity', '1');
			//player.unload();
			
			var currentIframe = $(this).children('.modalInner').find('iframe'),
			videoURL = currentIframe.attr('src');
			$(this).children('.modalInner').find('iframe').attr('src', videoURL);
		});
		
	});

} ( this, jQuery ));