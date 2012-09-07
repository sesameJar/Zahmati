$( function () {
	var menuLists 	  = $('header.body nav menu li'),
		contentTarget = $('article.content div');

	menuLists.each( function () {

		var that = this;

		$(that).click(function(){
			setTimeout(function(){
				contentTarget.eq($(that).index()).animate({
					height:200
				},300)
			},400)
		})
		


		
	});
});