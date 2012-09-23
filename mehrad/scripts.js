$( function () {

	var menuLists 	    = $('header.body nav menu li'),
		contentTarget   = $('article.content > div'),
		logoLittleSlide = $('article.content  div div.little div.little-slide'),
		logoSlidePre    = $('#prearrow'),
		logoSlideNext   = $('#nextarrow'),
		logoTrain       = $('article.content  div ul'),
		logoLists       = $('article.content  div ul li a'),
		loadPlace       = $('#loadplace');


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

		$('#loadplace img').attr('src',thumbnailHref);

		return false;

	})


});











