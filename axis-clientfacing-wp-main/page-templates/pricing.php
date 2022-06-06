<?php
/**
 *
 * Template Name: Pricing
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Axis
 */

get_header(); ?>


<section class="fill-inner"></section>
<section class="inside-pages-topper">
  <h2 class="centre"><?php echo the_title(); ?></h2>
</section>

<section class="products-cases padding-top-bottom">
  <div class="wrapper">
	 <h2 class="centre"> Pay As You Use. No software subscription
            <span>Pay-as-you-use allows you to easily adapt to changing business needs without overcommitting budgets and improving your responsiveness to customer needs. 
		 </span></h2>
		 
	  <!--Size dropdown menu-->
<select id="size_select" class="">

	<option value="option1">Whatsapp Pricing</option>
  <option value="option4">Email Pricing</option>
  <option value="option5">Bulk SMS Pricing</option>
  
  <!-- <option value="option2">Whatsapp Bulk Sender</option> -->
  <!--<option value="option3">Whatsapp Bulk Sender (Reseller)</option>-->
</select>

<!--Size dropdown content-->
<div id="option1" class="size_chart">
    <?php echo do_shortcode('[ninja_tables id="266"]'); ?>
	  <?php echo do_shortcode('[ninja_tables id="267"]'); ?>
</div>

<!-- <div id="option2" class="size_chart">
<php echo do_shortcode('[ninja_tables id="272"]'); ?>
<php echo do_shortcode('[ninja_tables id="273"]'); ?>
</div> -->

<div id="option4" class="size_chart">
   <?php echo do_shortcode('[ninja_tables id="663"]'); ?>
</div>
<div id="option5" class="size_chart">
  <?php echo do_shortcode('[ninja_tables id="270"]'); ?>
  <?php echo do_shortcode('[ninja_tables id="265"]'); ?>
</div>
<div id="option6" class="size_chart">
  Large
</div>
      
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	
	jQuery(document).ready(function(){

  //hides dropdown content
  jQuery(".size_chart").hide();
  
  //unhides first option content
  jQuery("#option1").show();
  
  //listen to dropdown for change
  jQuery("#size_select").change(function(){
    //rehide content on change
    jQuery('.size_chart').hide();
    //unhides current item
    jQuery('#'+$(this).val()).show();
  });
		
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
</script>



<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>

