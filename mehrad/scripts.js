$( function () {
	var menuLists 	  = $(' header.body nav menu li ' ),
		contentTarget = $(' article.content div ');

	menuLists.each( function () {

		var that = this;

		$(that).click( function() {

			if( contentTarget.eq( $(that).index() ).css( 'display' ) == 'none' ){
				$(that).addClass('active');

				contentTarget.eq( $(that).index() ).animate({

					display : 'block'

				},0,'linear',function(){

					contentTarget.eq( $(that).index() ).animate( { 

						height : 300

					},300)
				})

			}

			else{
				$(that).removeClass('active');
				contentTarget.eq( $(that).index() ).animate({

					height:0

				},300,'linear', function() {

					contentTarget.eq( $(that).index() ).css({ display : 'none' });

				});

			}
		})	
	});
});