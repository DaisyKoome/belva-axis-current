<?php
/**
 *
 * Template Name: Base Template
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

<section style="padding-top: 25px;">
  <div class="wrapper">
    <div class="editor">
      <?php echo the_content(); ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>