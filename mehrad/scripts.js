$( function () {
	var menuLists 	  = $('header.body nav menu li'),
		contentTarget = $('article.content div.bio');

	menuLists.each( function () {

		var that = this;

		setTimeout(function(){
			
			$(that).click(function(){
				
				$(that).addClass('active');
				contentTarget.animate({
					height:200
				},300,contentTarget.css({display:'block'}))
			});
		},800);
		


		
	});
});