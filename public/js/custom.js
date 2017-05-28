$(document).ready(function(){
	'use strict';
	
	/* Twitter Bootstrap Tooltip
	More detail - http://getbootstrap.com/javascript/#tooltips */
	$('body').tooltip({
    	selector: '[data-toggle=tooltip]'
	});
	
	//Hide mobile menu on click menu item
	$('.navbar-nav li a').on('click', function () {
		var toggle = $(".navbar-toggle").is(":visible");
		if (toggle) {
		  $('.navbar-collapse').collapse('hide');
		}
	  });
	
	
	/* Set indentation in the image in the block "cases" 
	on page load or changing the window width */
	$(window).on('load resize', function(){
		$('.case-image img').each(function(){
			$(this).css('margin-left', ($(this).parent().width() - $(this).width())/2 + 'px');
		});
		$('.load').fadeOut(300);
	});
	
	
	/* Smooth scroll. This code snippet taken 
	from the site https://css-tricks.com/snippets/jquery/smooth-scrolling/ */
	$('header a[href*="#"]:not([href="#"])').on('click', function() {
  		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
    		var target = $(this.hash);
    		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    		if (target.length) {
      			$('html, body').animate({
        			scrollTop: target.offset().top - 50 /*Here 50 - the height of the menu (<header>), not to overlap content*/
      			}, 500);
      			return false;
    		}
  		}
	});
	
	
	/* Setting styles headers when the page loaded */
	if ($(this).scrollTop() > 240){
		$('header').css('background', '#2c5c8d');
	}
	else{
		$('header').css('background', 'none');
	}
	

	/* Behavior headers when scrolling */
	$(window).on('scroll', (function() {
		if ($(this).scrollTop() > 240){
			$('header').css('background', '#2c5c8d');
		}
		else{
			$('header').css('background', 'none');
		}
	}));
	
	
	/* Smooth scroll top */
	$('.navbar-brand').on('click', function(){
		$('body, html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
	
	
	/* Supports swipe on the Bootstrap Carousel
	Bootstrap Carousel - http://getbootstrap.com/javascript/#carousel
	TouchSwipe Plugin - http://labs.rampinteractive.co.uk/touchSwipe/demos/index.html */
	$('.carousel-inner').swipe({
		swipeLeft: function(){
			$(this).parent().carousel('next');  
		},
    	swipeRight: function() {
			$(this).parent().carousel('prev');  
        },
		allowPageScroll: 'auto'
    });
	
	
	/* Sending forms by clicking on the button to "request" class */
	$('.request').on('click', function(){
		$(this).parent().parent().submit();
		return false;
	});
	
	
	/* Transfer the name of the tariff plan in a modal window for onward transmission to the server via AJAX 
	More detail - http://getbootstrap.com/javascript/#modals-related-target */
	$('#order_plans').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget); 
		var plan = button.data('plan');
	  	$(this).find('h5 span').text('"' + plan + '"');
	  	$(this).find('input[type=hidden]').attr('value', plan);
	});
	
	
	/* Cleaning validation form of messages or information entered in the form, 
	if the user changed his mind to fill in the form and closed modal window. 
	To upon recall of the same modal window form is empty */
	$('.modal').on('hidden.bs.modal', function () {
		var modal = $(this);
		modal.find('.response').remove();
		modal.find('.validate-message').empty().hide();
		modal.find('.form-field').removeClass('error');
		modal.find('.form-field i').remove();
	});
	
	
	/* Validation forms and sending the data via AJAX
	Validation Plugin https://jqueryvalidation.org/documentation/ */	
	$('form').each(function(){
		$(this).validate({
			rules: {
				name: {
					required: true,
					minlength: 5
				},
				email: {
					required: true,
					email: true
				},
				message: {
					required: true,
					maxlength: 2000,
					minlength: 5
				},
				phone: {
					required: true,
					minlength: 5
				}
			},
			messages: {
					name: {
						required: 'The field "Your name" is required',
						minlength: 'The field "Your name" must contain at least 5 characters'
					},
					email: {
						required: 'The field "Your e-mail" is required',
						email: 'Invalid format for e-mail address'
					},
					message: {
						required: 'The field "Your message" is required',
						minlength: 'The field "Your message" must contain at least 5 characters',
						maxlength: 'The field "Your message" must contain no more than 2000 characters'
					},
					phone: {
						required: 'The field "Your phone" is required',
						minlength: 'The field "Your phone" must contain at least 5 characters',
					}
			},
			highlight: function (element, errorClass, validClass) {
				$(element).closest('.form-field').removeClass(validClass).addClass(errorClass);
				$(element).closest('.form-field').find('i').remove();
				$(element).closest('.form-field').append('<i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="Error"></i>');
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).closest('.form-field').removeClass(errorClass).addClass(validClass);
				$(element).closest('.form-field').find('i').remove();
				$(element).closest('.form-field').append('<i class="fa fa-check"></i>');
			},
			validClass: 'success',
			errorLabelContainer: $(this).find('.validate-message'),
			wrapper: 'ul',
			errorElement: 'li',
			showErrors: function() {
				$(this).closest('.validate-message').show();
				$(this).closest('.validate-message ul').append(this.defaultShowErrors());
			},
			submitHandler: function(form){
				$.ajax({
					type: $(form).attr('method'),
					url: $(form).attr('action'),
					data: $(form).serialize(),
					beforeSend: function(){
						$(form).find('.button').removeClass('request').addClass('loading'); /* Changing the class at the button, while there is a request */
					},
					success: function(response){
						var data = JSON.parse(response);
						var source = $(form).data('source'); /* Determine where there was a request - from the page or to the modal window */
						var css = '';
						if (source === 'modal') {
							css = 'col-md-10 col-md-offset-1';
						} else {
							css = 'col-md-8 col-md-offset-2';
						}
						if (data.status === 1) {
							$(form).prepend('<div class="' + css + ' response"><div class="alert alert-success alert-dismissible" role="alert">' + data.message + '<button type="button" class="close" data-dismiss="alert" ><em>&times;</em></button></div></div>');
						}
						// Form reset
						$(form)[0].reset();
						$(form).find('.form-field').removeClass('success');
						$(form).find('.form-field i').remove();
						//Remove message after finishing AJAX-request in 3 sec. If you want - just uncomment next lines!
							//setTimeout(function(){
								//$('.response').hide().remove();
							//}, 3000);
					},
					complete: function(){
						$(form).find('.button').removeClass('loading').addClass('request'); /* Return a class button when the request was completed*/
					}
				});
			}

		});
	});
});