<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Axis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#003b4c">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- main_wrapper -->
	<div id="main_wrapper" class="clearfloat">
		<!-- mobile_nav_wrapper -->
    <div id="mobile_nav_wrapper">
        <div class="mobile-nav-content">
            <div class="header">
                <a href="#" class="menu-close">&times;</a>
                <a href="<?php echo home_url('/'); ?>" class="logo">
					<?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                    <img src="<?php echo $image[0]; ?>" alt="axis-logo">
                </a>
            </div>
            <ul class="mobile-nav">
                <li>
                    <a href="<?php echo home_url('/'); ?>" class="active">Home</a>
                </li>
                <li>
                    <a href="<?php echo home_url('/company'); ?>">Company</a>
                </li>
                <li>
                    <a href="<?php echo home_url('/features'); ?>">Features</a>
                </li>
                <li>
                    <a target="_blank" href="https://axis.tawk.help/">Help Centre</a>
                </li>
                <li>
                    <a href="<?php echo home_url('/pricing'); ?>">Pricing</a>
                </li>
                <li>
                    <a href="<?php echo home_url('/contact-us'); ?>">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile_nav_wrapper end -->
    <!-- header -->
    <section class="" style="overflow-x: hidden;overflow-y: hidden;">
        <header class="scrollingg">
            <div class="wrapper" class="clearfloat">
                <div class="top-bar">
                    <div class="col left">
										<?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <a href="<?php echo home_url('/'); ?>" class="logo"> <img src="<?php echo $image[0]; ?>" width="186" height="77" alt="Axis-logo"> </a>
                    </div>
                    <div class="col center" style="text-align: right;">
                        <div class="menu-icon"><span class="icon-main-menu"></span></div>
                        <div class="main-menu">
                            <ul id="main_nav">
                                <!-- <li class="current active">
                                    <a href="#">About</a>
                                </li> -->
                                 <li class="has-children">
                                <a href="<?php echo home_url('/features'); ?>">Features</a>
                                <div class="sub-menu">
                                    <ul>
										 
                                        
                                        <li><a href="<?php echo home_url('/features/whatsapp-chatbot/'); ?>"><span>WhatsApp Chatbot</span></a></li>
										<li><a href="<?php echo home_url('/features/unified-multi-agent-inbox/'); ?>"><span>Multi-Agent Unified Inbox</span></a></li>
										<li><a href="<?php echo home_url('/features/whatsapp-mpay/'); ?>"><span>WhatsApp mPay</span></a></li>
										<li><a href="<?php echo home_url('/features/whatsapp-bulk-sender/'); ?>"><span>WhatsApp Bulk Sender</span></a></li>										
										<li><a href="<?php echo home_url('/features/sms-marketing/'); ?>"><span>SMS Marketing</span></a></li>
										<li><a href="<?php echo home_url('/features/email-marketing/'); ?>"><span>Email Marketing</span></a></li>
										
										 
                                        
                                    </ul>
                                </div>
                            </li>
                            <!-- <li >
                                    <a target="_blank" href="https://axis.tawk.help/">Help Centre</a>
                                </li> -->
                                <li class="has-children">
                                <a href="#">Resources</a>
                                <div class="sub-menu" id="res-menu">
                                    <ul>                     
                                        <li><a target="_blank" href="https://axis.tawk.help/"><span>Help Centre</span></a></li>
                                        <li id="blog-menu"><a href="<?php echo home_url('/blog'); ?>"><span>Blogs</span></a></li>                                       
                                    </ul>
                                </div>
                                </li>
                                <li >
                                    <a href="<?php echo home_url('/pricing'); ?>">Pricing</a>
                                </li>
                                <!-- <li>
                                    <a href="about-us.html">Jobs</a>
                                </li> -->
                            </ul>
                        </div>
                        <button class="btn btn-secondary btn-join">
                            <span><a href="https://app.axis.africa/register">Join us</a></span>
                        </button>
                      
                    </div>
                   
                </div>
            </div>
        </header>
    
