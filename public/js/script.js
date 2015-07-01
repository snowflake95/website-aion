	$(document).ready(function(){

		/*
		 * SLIDER
		 */
		$('#bxslider').bxSlider({
			captions: true,
			pager: false,
			nextSelector: '#slider-next',
			prevSelector: '#slider-prev',
			nextText: '',
			prevText: '',
			auto: true
		});

		/*
		 * BTN : CONNEXION
		 */
		var btnConnexion = $('#btn_connexion');

		if(btnConnexion.length > 0){
			btnConnexion.on('click', function(e){
				$('#user_panel').slideToggle();
				e.preventDefault();
			});
		}

		/*
		 * Flash Messages
		 */
		if($('#flashMsg p').length > 0){
			$('#flashMsg').show();
			setTimeout(function(){
				$('#flashMsg').fadeOut(500);
			}, 2000);
		}

		/*
		 * Shop Categories
		 */
		$('.top_categorie h4').on('click', function(e){
			$(this).parent().find('.sub_categorie').slideToggle();
			e.preventDefault();
		});

		/*
		 * Shop Preview alert
		 */
		$('.previewItem').on('click', function(e) {
			var itemId = $(this).attr('data-id');
			alert('.preview '+itemId);
			e.preventDefault();
		});

		/*
		 * Shop Add in cart
		 */
		function addItemInCart(){
			$('.addItemInCart').on('click', function(e) {
				var itemId = $(this).attr('data-id');

				$.get("/shop/add/"+itemId, function( data ) {
					$(".container_shop_cart").html(data);
					removeItemInCart();
				});

				e.preventDefault();

			});
		}

		addItemInCart();

		/*
		 * Shop remove in cart
		 */
		function removeItemInCart(){

			$('.removeItemInCart').on('click', function(e){

				var itemId = $(this).attr('data-id');

				$.get("/shop/remove/"+itemId, function( data ) {
					$(".container_shop_cart").html(data);
					removeItemInCart();
				});

				e.preventDefault();

			});
		}

		removeItemInCart();

	});