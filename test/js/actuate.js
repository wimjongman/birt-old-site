$(document).ready(function() {
    actuate.init();
});
var actuate = {
    SCROLL_OFFSET_HEIGHT: 50,

    menu:               null,
    shim:             null,
    scrollTop:          0,
    isScrollingUp:      false,
    timeoutObj:         null,

    init : function() {

        this.setupContactFlyout();

        this.menu =   $("#main-nav");
        this.shim = $("#main-nav-shim");

        $(window)
            .bind( 'scroll', function(e) {
                actuate.scrollChange_handler();
            })
            .bind( 'gesturechange', function(e) {
                actuate.scrollChange_handler();
            })
            .bind('touchmove', function(e) {
                actuate.scrollChange_handler();
            });
    },

    scrollChange_handler : function() {
        var currentScroll = $(window).scrollTop();

        if (Math.abs(this.scrollTop - currentScroll) < 2) {
            return;
        }

        if (currentScroll <= this.scrollTop && currentScroll >= this.SCROLL_OFFSET_HEIGHT) {
            this.isScrollingUp = true;
            this.showFixedTopMenu(true);
        } else {
            this.isScrollingUp = false;
            this.showFixedTopMenu(false);
        }
        this.scrollTop = currentScroll;


    },

    showFixedTopMenu : function(show) {
        if (show) {
            this.menu
                .addClass('main-nav-fixed');
            this.shim
                .addClass('show-shim');
        } else {
            this.menu
                .removeClass('main-nav-fixed')
                .unbind('mouseout');
            this.shim
                .removeClass('show-shim');
        }
    },

    toggleFullMenuHide : function() {
        if ($("#main-nav-menu:hover").length === 0) {
            this.showFixedTopMenu(false);
        }
    },

    setupContactFlyout : function() {
        $("#contact-side-button")
            .popover({
                trigger: 'manual',
                html: true,
                placement: 'left',
                template: $('#contact-side-button-popover')
            })
            .mouseenter(function(e) {
                $(this).popover('show');
            })
            .click(function(e) {
                $(this).popover('show');
            })
            .mouseleave(function(e) {
                var ref = $(this);
                actuate.timeoutObj = setTimeout(function(){
                    ref.popover('hide');
                }, 200);
            });


    }

};


$(document).ready(function() {
				$( "#searchtoggle" ).click(function() {
				
								if($( "#searchtoggle" ).hasClass( "search-closed" )) //search-closed
								{
								  $( "#searchinput" ).show( 1000, 
											function() {
										// Animation complete.
										$('#searchfield').focus();
										$( "#searchtoggle" ).removeClass( "search-closed" );
															});
								}
								
																			});
					//Hide Search
					$( "#searchfield" ).focusout(function() {
								 $( "#searchinput" ).hide( 1000, 
											function() {
										// Animation complete.
										$( "#searchtoggle" ).addClass( "search-closed" );
															});
							  })
				});
				
				
	$(document).ready(function() { 
				$( ".overlay1open" ).click(function(e) {
				e.preventDefault();
				var windowwidth = $( window ).width();
				$( ".overlay-background" ).css( "height",windowwidth );
				 $( ".overlay-background" ).css( "display","block" );
				   $( ".overlay1" ).show( 600 );
				});
				
				$( ".overlay1close" ).click(function(e) {
				e.preventDefault();
				$( ".overlay-background" ).css( "display","none" );
				   $( ".overlay1" ).hide( 300 );
				});
					
					}); 
		
		
					/*new overlay code*/
			$(document).ready(function() { 
				$( ".overlayopen" ).click(function(e) {
				e.preventDefault();
				
				//set properties for overlay black background and display.
				var overlaytarget = $(this).attr('href');
				var windowwidth = $( window ).width();
				$( ".overlay-background" ).css( "height",windowwidth );
				 $( ".overlay-background" ).css( "display","block" );
				
				if($(this).hasClass('login'))
				{
					 //fill overlaycontainer with html
				 $( ".overlayhtml.login" ).load( overlaytarget, function() {
												   $( ".overlaycontainer.login" ).delay(100).show( 600 );

												});
				}
				if($(this).hasClass('video640x360'))
				{
					 //fill overlaycontainer with html
				 $( ".overlayhtml.video640x360" ).load( overlaytarget, function() {
												   $( ".overlaycontainer.video640x360" ).delay(400).show( 600 );

												});
				}
				if($(this).hasClass('sysreq'))
				{
					 //fill overlaycontainer with html
				 $( ".overlayhtml.sysreq" ).load( overlaytarget, function() {
												   $( ".overlaycontainer.sysreq" ).delay(100).show( 600 );

												});
				}
				});
				
				$( ".overlayclose" ).click(function(e) {
				e.preventDefault();
				
				$( ".overlay-background" ).css( "display","none" );
				   $( ".overlaycontainer" ).hide( 300 );
				   //remove html from overlaycontainer, this will empty ALL divs with this class.
				   $(".overlayhtml").html('');
				});
					
					}); 
		
		
		
	
	

	
	