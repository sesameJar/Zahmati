$( function () {

	var menuLists 	    = $(' header.body nav menu li ' ),
		contentTarget   = $(' article.content > div '),
		logoLittleSlide = $(' article.content  div.logo div.little div.little-slide '),
		logoSlidePre    = $(' article.content  div.logo div.little div#prearrow '),
		logoSlideNext   = $(' article.content  div.logo div.little div#nextarrow '),
		logoTrain       = $(' article.content  div.logo ul '),
		logoLists       = $(' article.content  div.logo ul li a '),
		loadPlace       = $(' article.content  div.logo div#loadplace img ');


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

		var thumbnailHref = $(this).attr('href');

		loadplace.attr('scr', thumbnailHref);

		return false;

	})


});











