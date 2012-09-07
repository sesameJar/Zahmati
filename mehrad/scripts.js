$( function () {
	var menuLists 	  = $('header.body nav menu li'),
		contentTarget = $('article.content div');

	menuLists.each( function () {

		var that = this;

		$(that).click(function(){
			if(contentTarget.css('display')=='block'){
				setTimeout(function(){
				contentTarget.eq($(that).index()).animate({
					height:0
				},300,contentTarget.eq($(that).index()).css({display:'none'}))
			},100)
			}
			else{
				setTimeout(function(){
				contentTarget.eq($(that).index()).animate({
					height:200
				},300,contentTarget.eq($(that).index()).css({display:'block'}))
			},100)
			}
		})
		


		
	});
});