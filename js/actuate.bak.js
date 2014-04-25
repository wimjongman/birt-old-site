$(document).ready(function() {
    actuate.init();
});
var actuate = {
    SCROLL_OFFSET_HEIGHT: 100,

    menu:               null,
    ribbon:             null,
    scrollTop:          0,
    isScrollingUp:      false,
    ribbonInitialLeft:  null,
    timeoutObj:         null,

    init : function() {

        this.setupContactFlyout();

        this.menu =   $("#main-nav");//$("#main-nav-menu");
        this.ribbon = $("#logo");
        this.ribbonInitialLeft = this.ribbon.position().left;

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
            this.ribbon
                .addClass('fixed-ribbon')
                //.css({"left":'10px'});
        } else {
            this.menu
                .removeClass('main-nav-fixed')
                .unbind('mouseout');
            this.ribbon
                .removeClass('fixed-ribbon')
                //.css({"left":this.ribbonInitialLeft+'px'});;
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