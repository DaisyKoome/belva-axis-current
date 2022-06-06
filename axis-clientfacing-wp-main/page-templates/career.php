<?php
/**
 *
 * Template Name: Career
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

<section style="padding-top: 50px; padding-bottom: 50px;">
  <div class="wrapper centre">
      <h2 class="centre"> Check back soon</h2>
      <p class="centre">We currenly do not have an opening</p>
      <a class="centre" href="<?php echo home_url('/'); ?>">
        <button class="btn primary-btn">Go Home</button>
      </a>
  </div>
</section>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>