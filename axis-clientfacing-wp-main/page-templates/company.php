<?php
/**
 *
 * Template Name: Company
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


<div class="wrapper">
              <div class="tbl">
                  <div class="col left" style="
    width: 50%;
">
                     
                      <h2>About AXIS</h2>
                      <p>AXIS is a product of our extensive experience working with businesses of all sizes at Belva Digital. We have first-hand knowledge of what growing businesses require to scale. Most marketing and communication platforms are designed for large businesses and come with complexities and an enterprise-level price tag.</p>
                         
                          <a target="_blank" href="https://belvadigital.com/">
                            <button class="btn primary-btn">Visit Belva Digital</button>
                          </a>

                         
                  </div>
                  <div class="col right bner">
                      <a href="#">
                          <img src="<?php echo the_post_thumbnail_url(); ?>" width="400" height="494" style="padding: 60px;" alt="banner">
                      </a>
                  </div>
              </div>
          </div>






<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>