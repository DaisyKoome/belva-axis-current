<?php
/**
 *
 * Template Name: Mpay
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

<section class="padding-top-bottom" >
        <div class="package">
            <!-- card -->
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <p>
                    <?php echo the_content(); ?></p>
                    
                    <div class="cool-content"><?php echo the_field('second_content'); ?></div>

                    <div class="feature-btn" style="    margin-top: 45px;
    margin-left: -19px;">

                   
                    <a target="_blank" href="https://app.axis.africa/register">
                            <button class="btn btn-secondary btn-join">
                                <span>Get Started</span>
                            </button>
                        </a>

                        <a href="mailto:support@axis.africa">
                            <button class="btn btn-secondary btn-3 btn-join">
                                <span>Request Demo</span>
                            </button>
                        </a>

                    </div>

                

                </div>
                <div class="col-img">
                    <img src="<?php echo the_post_thumbnail_url(); ?>"> </div>
            </div>
            </div>
        </div>
</section>



<?php get_template_part('template-parts/cta'); ?>



<?php get_footer(); ?>