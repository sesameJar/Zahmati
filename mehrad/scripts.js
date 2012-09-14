$( function () {

	var menuLists 	    = $(' header.body nav menu li ' ),
		contentTarget   = $(' article.content > div '),
		logoLittleSlide = $(' article.content  div.logo div.little div.little-slide '),
		logoSlidePre    = $(' article.content  div.logo div.little div#prearrow '),
		logoSlideNext   = $(' article.content  div.logo div.little div#nextarrow '),
		logoTrain       = $(' article.content  div.logo ul '),
		logoLists       = $(' article.content  div.logo ul li '),
		loadPlace       = $(' article.content  div.logo div#loadplace ');

	menuLists.click( function () {

		var that         = this,
			targetHeight = $(this).css('height');

			if( contentTarget.eq( $(that).index() ).css( 'display' ) == 'none' ){

				$(that).addClass('active');

				contentTarget.eq( $(that).index() ).animate({

					display : 'block'

				},0,'linear',function(){

					contentTarget.eq( $(that).index() ).animate( { 

						'min-height' : targetHeight

					},300)
				})

			}

			else{
				$(that).removeClass('active');

				contentTarget.eq( $(that).index() ).animate({

					'min-height' : 0

				},300,'linear', function() {

					contentTarget.eq( $(that).index() ).css({ display : 'none' });

				});

			}
		
	});

	logoSlideNext.click( function () {

		logoTrain.animate( {

			top : -383

		},400);

	});

	logoSlidePre.click( function () {

		logoTrain.animate({

			top : 0

		},400)

	});

	logoLists.click(function(){

		var imgUrl = $(this).css('background-image');
		alert(imgUrl);

	})


});











