var actuateSubMenu = {
    MENU_ELEMENT: "ul.actuate-sub-menu > li",
    MENU_SUB_ELEMENT: "ul.actuate-sub-menu ul li",

    initialize : function() {
       this.addListeners();
    },
    addListeners : function() {
        $(this.MENU_ELEMENT).hover(this.hoverOver_handler, this.hoverOut_handler);
        $(this.MENU_SUB_ELEMENT).hover(this.hoverSubOver_handler, this.hoverSubOut_handler);
    },
    hoverOver_handler : function() {
        $(this).children('a:first-child').addClass('active');
        $(this).children('ul').delay(10).slideDown(100);
    },
    hoverOut_handler : function() {
        $(this).children('a:first-child').removeClass('active');
        $(this).children('ul').delay(10).slideUp(100);
    },
    hoverSubOver_handler : function() {
        var ul = $(this).children('ul');
        if (ul.length > 0) {
            var p = $(this).parent()[0];
            $(p).addClass('double-wide');
            $(this).children('a').addClass('active');
            ul.delay(10).slideDown(100,function(){
                $($(this).parent().parent()[0]).css({"height":""});
                $(this).css({"height":""});
                var rightHeight = $(this).height();
                var leftHeight = $($(this).parent().parent()[0]).height();
                if (leftHeight > rightHeight) {
                    $($(this).parent().parent()[0]).css({"height":""});
                    $(this).css({"height":"100%"});
                } else {
                    $($(this).parent().parent()[0]).css({"height":rightHeight+"px"});
                }
            });
        }
    },
    hoverSubOut_handler : function() {
        var p = $(this).parent()[0];
        $(p).removeClass('double-wide');
        $(this).children('a').removeClass('active');
        $(this).children('ul').delay(10).slideUp(100);
    }
};

$('document').ready(function(){
    actuateSubMenu.initialize();
});
