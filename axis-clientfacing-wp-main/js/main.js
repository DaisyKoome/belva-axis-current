jQuery(document).ready(function(){

   /*--- SCROLLING ---*/
    var $header = $('header');
    var offset = 100;

    jQuery(window).scroll(function(){
        if ($(this).scrollTop() > offset ) {
            $header.addClass('scrolling');
        } else {
            $header.removeClass('scrolling');
        }
    });


    /*--- partners-owl-carousel ---*/
    jQuery(".mobile-partners").owlCarousel({
        autoplay:false,
        loop:true,
        margin:0,
        items:4,
        dots: false,
        nav:true,
        responsiveClass:true,
        navText:["<span class='icon-keyboard_arrow_left'></span>","<span class='icon-keyboard_arrow_right'></span>"],
        dots:false,
        responsive: {
            0: {
                items: 1,
            },
            650: {
                items: 1,
                nav: true,
            },
            768: {
                items: 1,
                nav: true,
            },
            1000: {
                items: 5,
                nav: true,
            }
        }
    });



    /*--- partners-owl-carousel ---*/
    jQuery(".laptop").owlCarousel({
        autoplay:true,
        autoplayHoverPause: true,
        margin:20,
        center: true,
        loop:true,
        navRewind:false,
        items:3,
        nav:false,
        dots:true,
        responsive: {
            0: {
                items: 1,
            },
            650: {
                items: 1,
                nav: true,
            },
            768: {
                items: 1,
                nav: true,
            },
            1000: {
                items: 3,
                nav: true,
            }
        }
    });


    /*---------- ACCORDION ----------*/
    jQuery(".accordion .title").bind('click', function(e){
        if(!jQuery(this).parent("li").hasClass("content-visible")){
            jQuery(".accordion li").removeClass("content-visible");
            jQuery(".accordion .desc").slideUp(200);
        }
        jQuery(this).next('.desc').slideToggle(200).end().parent('li').toggleClass('content-visible');
        e.preventDefault();
    });


    /**
     * jquery-match-height master by @liabru
     * http://brm.io/jquery-match-height/
     * License: MIT
     */

    /*--- JQUERY matchHeight ---*/
    jQuery('.matchHeight').matchHeight();

    if (jQuery(window).width() >= 1024) {
        jQuery('.matchHeightMulti').matchHeight({
            byRow: false
        });
    }

    jQuery(window).on('resize', function () {

        if (jQuery(window).width() >= 1024){

            jQuery('.matchHeightMulti').matchHeight({
                byRow: false
            });
        }else {
            jQuery('.matchHeightMulti').matchHeight({
                remove: true
            });
        }
    });


    /*---------- EQUAL HEIGHTS ----------*/
    if(jQuery('.equal-height').length){
        jQuery('.equal-height').matchHeight();
    }

    /*--- Mobile Menu ---*/
    jQuery('.menu-icon').bind('touchstart mousedown', function(e){
        jQuery(".mobile-nav li").removeClass("open");
        jQuery(".sub-nav").slideUp(200);
        jQuery("body").toggleClass("menu-open");
        if(jQuery("body").hasClass("search-open")){
            jQuery("body").removeClass("search-open");
        }
        return false;
    });


    jQuery('body').on('touchstart mousedown', function(event){
        if(jQuery(event.target).is('body.menu-open') || jQuery(event.target).is('.menu-close')) {
            jQuery('body').removeClass('menu-open');
            jQuery('.mobile-nav .has-children ul').addClass('is-hidden');
            jQuery('.move-out').removeClass('move-out');
            event.preventDefault();
        }
    });

    jQuery('.mobile-nav .has-children').children('a').on('touchstart mousedown', function(event){
        event.preventDefault();
        var selected = jQuery(this);
        selected.next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('move-out');
        jQuery('.mobile-nav').scrollTop(0);
    });

    jQuery('.go-back').on('touchstart mousedown', function(event){
        event.preventDefault();
        var selected = jQuery(this);
        selected.parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('move-out');
        jQuery('.mobile-nav').scrollTop(0);
    });

    if(jQuery( window ).width() <= 820){
        jQuery(".footer-links .block").removeClass("open");
        jQuery(".footer-links .links-wrap").hide();
        jQuery(".footer-links h2").on('click',function() {
            var sub_nav = jQuery(this).closest(".block").children(".links-wrap");
            if(sub_nav.is(':visible'))
            {
                jQuery(this).removeClass("open");
                sub_nav.slideUp(200);
            }
            else
            {
                jQuery(".footer-links h2").removeClass("open");
                jQuery(this).addClass("open");
                jQuery(".links-wrap").slideUp(200);
                sub_nav.slideDown(200);
            }
            return false;
        });
    }
    else{
        jQuery(".footer-links h2").unbind();
        jQuery(".footer-links .links-wrap").show();
    }


    (function(){
        // Responsive Tabbed Navigation - by CodyHouse.co
        function TabbedNavigation( element ) {
            this.element = element;
            this.navigation = this.element.getElementsByTagName("nav")[0];
            this.navigationElements = this.navigation.getElementsByClassName("js-cd-navigation")[0];
            this.content = this.element.getElementsByClassName("js-cd-content")[0];
            this.activeTab;
            this.activeContent;
            this.init();
        };

        TabbedNavigation.prototype.init = function() {
            var self = this;
            //listen for the click on the tabs navigation
            this.navigation.addEventListener("click", function(event){
                event.preventDefault();
                if(event.target.tagName.toLowerCase() == "a" && !hasClass(event.target, "cd-selected")) {
                    self.activeTab = event.target;
                    self.activeContent = self.content.querySelectorAll("[data-content="+self.activeTab.getAttribute("data-content")+"]")[0];
                    self.updateContent();
                }
            });

            //listen for the scroll in the tabs navigation
            this.navigation.addEventListener('scroll', function(event){
                self.toggleNavShadow();
            });
        };

        TabbedNavigation.prototype.updateContent = function() {
            var actualHeight = this.content.offsetHeight;
            //update navigation classes
            removeClass(this.navigation.querySelectorAll("a.cd-selected")[0], "cd-selected");
            addClass(this.activeTab, "cd-selected");
            //update content classes
            removeClass(this.content.querySelectorAll("li.cd-selected")[0], "cd-selected");
            addClass(this.activeContent, "cd-selected");
            //set new height for the content wrapper
            (!window.requestAnimationFrame)
                ? this.content.setAttribute("style", "height:"+this.activeContent.offsetHeight+"px;")
                : setHeight(actualHeight, this.activeContent.offsetHeight, this.content, 200);
        };

        TabbedNavigation.prototype.toggleNavShadow = function() {
            //show/hide tabs navigation gradient layer
            this.content.removeAttribute("style");
            var navigationWidth = Math.floor(this.navigationElements.getBoundingClientRect().width),
                navigationViewport = Math.ceil(this.navigation.getBoundingClientRect().width);
            ( this.navigation.scrollLeft >= navigationWidth - navigationViewport )
                ? addClass(this.element, "cd-tabs--scroll-ended")
                : removeClass(this.element, "cd-tabs--scroll-ended");
        };

        var tabs = document.getElementsByClassName("js-cd-tabs"),
            tabsArray = [],
            resizing = false;
        if( tabs.length > 0 ) {
            for( var i = 0; i < tabs.length; i++) {
                (function(i){
                    tabsArray.push(new TabbedNavigation(tabs[i]));
                })(i);
            }

            window.addEventListener("resize", function(event) {
                if( !resizing ) {
                    resizing = true;
                    (!window.requestAnimationFrame) ? setTimeout(checkTabs, 250) : window.requestAnimationFrame(checkTabs);
                }
            });
        }

        function checkTabs() {
            tabsArray.forEach(function(tab){
                tab.toggleNavShadow();
            });
            resizing = false;
        };

        function setHeight(start, to, element, duration) {
            var change = to - start,
                currentTime = null;

            var animateHeight = function(timestamp){
                if (!currentTime) currentTime = timestamp;
                var progress = timestamp - currentTime;
                var val = Math.easeInOutQuad(progress, start, change, duration);
                element.setAttribute("style", "height:"+val+"px;");
                if(progress < duration) {
                    window.requestAnimationFrame(animateHeight);
                }
            };

            window.requestAnimationFrame(animateHeight);
        }

        Math.easeInOutQuad = function (t, b, c, d) {
            t /= d/2;
            if (t < 1) return c/2*t*t + b;
            t--;
            return -c/2 * (t*(t-2) - 1) + b;
        };

        //class manipulations - needed if classList is not supported
        function hasClass(el, className) {
            if (el.classList) return el.classList.contains(className);
            else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|jQuery)'));
        }
        function addClass(el, className) {
            var classList = className.split(' ');
            if (el.classList) el.classList.add(classList[0]);
            else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
            if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
        }
        function removeClass(el, className) {
            var classList = className.split(' ');
            if (el.classList) el.classList.remove(classList[0]);
            else if(hasClass(el, classList[0])) {
                var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|jQuery)');
                el.className=el.className.replace(reg, ' ');
            }
            if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
        }
    })();



});