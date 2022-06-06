<?php
/**
 *
 * Template Name: Help Center
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

<section class="things padding-top-bottom">
         <div class="wrapper">
             
             <div class="laptops">
                 <ul>

                 <?php
                    $args = array(
                        'post_type' => 'help-center',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                    
                    $query = new WP_Query( $args ); ?>

                    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

                     <li>
                        <div class="pic-wrapper">
                             <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                         </div>
                         <div class="content">
                          <div class="date tbl">
                              <span class=" col left">PRODUCTIVITY</span>
                              <span class=" col right">3 days ago</span>
                          </div>
                           <a href="<?php echo the_permalink(); ?>">
                          <span class="captn"><?php echo the_title(); ?></span>
                          <p> <?php echo the_excerpt(); ?></p>
                           <span class="right"><span class="primary-btn transparent-btn">Learn More</span></span>
                             </a>
                         </div>
                     </li>

                     <?php endwhile; ?> 

                 </ul>
             </div>
         </div>

</section>

<?php get_footer(); ?>