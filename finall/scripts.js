$( function () {

	var menuLists 	    = $('header.body nav menu li'),
		contentTarget   = $('article.content > div'),
		logoLittleSlide = $('article.content  div div.little div.little-slide'),
		logoSlidePre    = $('#prearrow'),
		logoSlideNext   = $('#nextarrow'),
		logoTrain       = $('article.content  div ul'),
		logoList       	= $('article.content  div ul li'),
		logoListLink    = $('article.content  div ul li a'),
		loadPlace       = $('#loadplace'),
		logoListLen		= Math.ceil((logoList.length)/5),
		currentSession  = 0;

	(nextSession = function(n){

		if(n>logoListLen-1) n=0;

		if(n<0) n=logoListLen-1;

		logoTrain.css({top: (-260*n)+'px' });

		currentSession=n;
	})(0); 

	logoSlideNext.click( function () {

		nextSession(currentSession+1);
	});

	logoSlidePre.click( function () {

		nextSession(currentSession-1);
	});

	logoListLink.click(function(){

		var thumbnailHref = $(this).attr('href');

		$('#loadplace img').attr('src',thumbnailHref);

		return false;
	});
});