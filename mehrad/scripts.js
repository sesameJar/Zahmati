$( function () {
	var menuLists 	  = $(' header.body nav menu li ' ),
		contentTarget = $(' article.content > div '),
		logoLists     = $(' article.content  div.logo ul li '),
		loadPlace     = $(' article.content  div.logo div#loadplace ')
		logoLists.each(function(){
			$(this).click(function(){
				$.ajax({url:"../images/BOOK & magazin/Untitled-1.jpg",success:function(result){
    				loadPlace.html(result)
 				}})
				;
			});
		});

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
});