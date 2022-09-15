(function( root, $, undefined ) {
	"use strict";

	$(function () {
		
		var
		base_url = '/',
		base_title = "Develop Nova Scotia",
		base_description = "Annual Report 2020-2021",
		base_title_desc = base_title + ' | ' + base_description,
		base_href = window.location.href,
		split_href = base_href.split('/'),
		secondLevelPath = split_href,
		modalOverlay = $('.modal'),
		closeButton = $('.close'),
		exitModal = closeButton.add(modalOverlay),
		modalBackdrop = $('.modal-backdrop'),
		body = $('body'),
		video = 'video';
				 
		function ChangeUrl(page, url) {
		    if (typeof (history.pushState) != "undefined") {
				var obj = { 
					Page: page, 
					Url: url
				};
		       history.pushState(obj, obj.Page, obj.Url);
		    } else {
		        alert("Browser does not support HTML5.");
		    }
		}
		
		$(document).on('click', '.open-modal', function(e) {
		    e.preventDefault();
			
			var
			pageTitle = $(this).attr('title'),
			page_url = $(this).attr('href'),
			$feedModal = $('.modal'),
			data = {
			    'action': 'load_video_by_ajax',
			    'id': $(this).data('id'),
			    'security': developns.security
			};
				
			//document.title = pageTitle + " | " + base_description;
			
			//ChangeUrl(null, page_url);
			
			body.addClass('modal-is-open');
				
			$.post(developns.ajaxurl, data, function(response) {
		        response = JSON.parse(response);
		        
				if ( response.video ) {
					$('#postModal .modal-body').html(
						'<div class="video-container">' 
							+ response.video + 
						'</div>'
					);
				} else if ( response.issuu ) {
					$('#postModal .modal-body').html(
						'<div class="video-container">' +
							'<iframe allow="fullscreen" style="border:none;" src="'
							+ response.issuu + 
							'"></iframe>' +
						'</div>'
					);
				} else if ( response.featured-video ) {
					$('#postModal .modal-body').html(
						'<div class="video-container">' +
							+ response.featured-video + 
						'</div>'
					);
				}
		 
		        $('#postModal').fadeIn();
		    });
			
			$('.modal-body').find('iframe').addClass('ytIframe');
			
			// Listen for modal hide and popstate events.
			function startListening() {
				$feedModal.on('hide.bs.modal', onModalHide);
				$(window).on('popstate', onPopState);
			}
				
			// Stop listening for modal hide and popstate events.
			function stopListening() {
				$feedModal.off('hide.bs.modal', onModalHide);
				$(window).off('popstate', onPopState);
			}
				
			// Modal opens.
			// Add event listeners and push state.
			function onModalShow() {
				startListening();
				ChangeUrl(null, page_url);
			}
				
			// Modal hides.
			// Remove event listeners and go back.
			function onModalHide() {
				stopListening();
				if ( window.location.href.indexOf(video) > -1 || window.location.href.indexOf('#' + video) > -1 ) {
					ChangeUrl(null, base_url);
					document.title = base_title + ' | ' + base_description;
				}
			}
				
			// Navigation occurs.
			// Remove event listeners and hide modal.
			function onPopState() {
				stopListening();
				$feedModal.modal('hide');
			}
				
			// Listen for when the modal shows.
			$feedModal.on('show.bs.modal', onModalShow);
		});
		
		exitModal.click(function() {
			//iframeClass.attr("src","");
			
			body.removeClass('modal-is-open');
			
			modalOverlay.find('iframe').attr('src', function ( i, val ) { return val; });
			
			//ChangeUrl(null, base_url + split_href);
			//document.title = base_title + ' | ' + base_description;
		});
		
		// ESCAPE KEY CLICK TO ESCAPE
		$(document).keyup(function(e) {
			if (e.key === "Escape") {
				
				// STOP VIDEO
				modalOverlay.find('iframe').attr('src', function ( i, val ) { return val; });
				
				// REMOVE BODY CLASS
				body.removeClass('modal-is-open');
				
				if ( !$('.modal-is-open').length ) {
					// CLOSE MODAL
					modalOverlay.fadeOut();
				}
				
				//ChangeUrl(null, base_url + split_href);
				//document.title = base_title + ' | ' + base_description;
			}
		});
		
		/*
		$('.menu-item a').each(function() {
			$(this).click(function() {
				var slug = $(this).attr('href').split('#')[1],
				buttonTitle = $(this).text();
				ChangeUrl(base_url, base_url + slug);
				
				document.title = buttonTitle + " | " + base_description;
				
			});
		});
		*/
		
		// REDIRECT SINGLE CPTs TO OPEN IN MODAL
		$.urlParam = function(name){
		    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		    if (results==null) {
		       return null;
		    }
		    return decodeURI(results[1]) || 0;
		}
		
		var pID = $.urlParam('query');
		
		$(function() {
			if( window.location.href.indexOf(pID) > -1 ) {
				$('a[data-id="' + pID + '"]').trigger('click');
			}
		});
		
	});

} ( this, jQuery ));