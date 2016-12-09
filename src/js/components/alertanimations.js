(function($){
	// If alert has animation
	if($('.alert[data-animation]').length > 0)
	{
		var alert = $('.alert'), // find alert div
		alertPropsFunc = function(animationName) // function to return alert properties based on specified animation
		{
			var animations = {
				"fade-top-left": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						display: 'none',
						left: '15px',
						top: '0',
						marginTop: '15px'
					}
				},
				"fade-top-right": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						display: 'none',
						right: '15px',
						top: '0',
						marginTop: '15px'
					}
				},
				"fade-bottom-left": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						display: 'none',
						left: '15px',
						bottom: '0',
						marginBottom: '15px'
					}
				},
				"fade-bottom-right": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						display: 'none',
						right: '15px',
						bottom: '0',
						marginBottom: '15px'
					}
				},
				"slide-top": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						width: '100%',
						top: '-500px',
						left: '0',
						right: '0'
					},
					movePos: {
						top: '0'
					},
					resetPos: {
						top: '-500px'
					}
				},
				"slide-bottom": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						width: '100%',
						bottom: '-500px',
						left: '0',
						right: '0',
						marginBottom: '0'
					},
					movePos: {
						bottom: '0'
					},
					resetPos: {
						bottom: '-500px'
					}
				},
				"slide-top-left": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						left: '-500px',
						top: '15px'
					},
					movePos: {
						left: '15px'
					},
					resetPos: {
						left: '-500px'
					}
				},
				"slide-top-right": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						right: '-500px',
						top: '15px'
					},
					movePos: {
						right: '15px'
					},
					resetPos: {
						right: '-500px'
					}
				},
				"slide-bottom-left": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						left: '-500px',
						bottom: '0'
					},
					movePos: {
						left: '15px'
					},
					resetPos: {
						left: '-500px'
					}
				},
				"slide-bottom-right": {
					css: {
						transition: 'none',
						position: 'fixed',
						zIndex: '1000',
						right: '-500px',
						bottom: '0'
					},
					movePos: {
						right: '15px'
					},
					resetPos: {
						right: '-500px'
					}
				}
			}

			return animations[animationName];
		},
		alertProps = alertPropsFunc(alert.data('animation')); // returns alert properties as object

		// assign css properties to alert and remove metaphor hide class
		alert.css(alertProps.css).removeClass('hide');

		// show alert 1 second after page load
		setTimeout(function(){
			// Check which animation is being called through prefix
			var animationPrefix = alert.data('animation').split('-')[0];

			// if fade animation
			if(animationPrefix == 'fade')
			{
				return alert.fadeIn().delay(alert.data('duration')).fadeOut();
			}
			// if slide animation
			else if(animationPrefix == 'slide')
			{
				return alert.animate(alertProps.movePos,
				{
					duration: 'slow',
					complete: function() {
						$(this).delay(alert.data('duration')).animate(alertProps.resetPos);
					}
				});
			}
		}, 1000);
	}
})(jQuery)