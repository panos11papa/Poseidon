/**
* @package Horme 3 template
* @author Spiros Petrakis
* @copyright Copyright (C) 2015 - 2022 Spiros Petrakis. All rights reserved.
* @license GNU General Public License version 2 or later
*
*/

jQuery(document).ready(function($)
	{

		// Back-top
		$(window).scroll(function ()
			{
				if ($(this).scrollTop() > 100) {
					$('#totop-scroller').fadeIn('slow');
				} else {
					$('#totop-scroller').fadeOut('slow');
				}
			}
		);

		$('#totop-scroller').click(function(e)
			{
				$('html, body').animate({scrollTop: 0}, 'slow');
				e.preventDefault();
			}
		);

		// Joomla core
		if ($('table').length) {
			$('table').addClass('table');
		}

		if ($('#system-message-container').html().trim()) {
			$('dd.info, dd.notice').addClass('alert alert-info');
			$('dd.error').addClass('alert alert-danger');
			$('dd.warning').addClass('alert alert-warning');
			$('dd.message').addClass('alert alert-success');
		}

		// Joomla list modules styling
		$('ul.archive-module, ul.mostread, ul.latestnews, .tagssimilar ul').addClass('nav nav-pills nav-stacked');

		// Carousel & Tooltip  Mootools fix
		if (typeof jQuery != 'undefined' && typeof MooTools != 'undefined') {

			// both present , kill jquery slide for carousel class
			(function($)
				{
					$('.carousel').each(function(index, element)
						{
							$(this)[index].slide = null;
						}
					);
					$('[data-toggle="tooltip"], .hasTooltip, #myTab a, div.btn-group, [data-toggle="tab"], .hasPopover, .hasTooltip').each(function() {this.show = null; this.hide = null});
				}
			)(jQuery);

		}

		// Joomla tos link fix
		$('#jform_profile_tos-lbl').find('a').removeClass('modal');

		// Modal for print , ask question, recommend, manufacturer, call for price
		$('a[href="#vt-modal"]').click(function(event)
			{

				var modalurl = $(this).attr('data-url');
				$('#vt-modal-iframe').attr('src', modalurl);
				event.preventDefault();

				// Show , Hide the preloader
				$('#vt-modal-iframe').ready(function()
					{
						$('#preloader').css('display', 'block');
					}
				).load(function() {
						$('#preloader').css('display', 'none');
					}
				);

			}
		);

		$('a.close-modal, button.close').click(function()
			{
				// reset the iframe src
				$('#vt-modal-iframe').attr('src', '');

			}
		);

		// Offcanvas
		$('#offcanvas-toggle').click(function()
			{
				$('body').addClass('noscroll').animate({right: '-280px'}, 400, "linear");
				$('#offcanvas').fadeIn()
				.find('span.glyphicon-remove').show('slow')
				.end()
				.find('div.off-canvas-wrapper').animate({left: '0'}, 400, "linear");
			}
		);

		$('#offcanvas').click(function()
			{
				$('#offcanvas > span').hide();
				$('div.off-canvas-wrapper').animate({left: '-280px'}, 400, "linear");
				$('body').removeClass('noscroll').animate({right: '0'}, 400, "linear");
				$(this).fadeOut(600);
			}
		);

		$('#offcanvas ul.navbar-nav').click(function(e)
			{
				e.stopPropagation();
			}
		);

		// Buttons
		$('button, a.button, input.button, input.details-button, input.highlight-button').addClass('btn');

		// Virtuemart categories module
		$('.VMmenu').find('li.active').children('ul.vm-child-menu').show().siblings('button').children('span').toggleClass('glyphicon-plus glyphicon-minus');
		$('.VMmenu').find('button').click(function(event){
			$(this).children('span').toggleClass('glyphicon-plus glyphicon-minus');
			$(this).siblings('ul').slideToggle();
			event.stopPropagation();
		});

		// Mobile search
		$('#m-search').click(function(){
			$('.mobile-search').slideToggle();
		});

		// Cart module
/*		var total_products_text = $('.total_products').text();
		var total_products = total_products_text.split(" ");
		$('.product-counter').text(total_products[0]);
		$(document).ajaxComplete(function(){
			var products = $('.product_row').length;
			$('.product-counter').text(products);
		});*/

	}
);