<?php
/**
 *
 * Template Name: Search
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


<!-- things-->
<section class="things padding-top-bottom">
         <div class="wrapper">
         <h2 class="title centre" style="padding-bottom: 40px;">Things we say about other things</h2>
         <?php
                    $args = array(
                        'post_type' => 'articles',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                    
                    $query = new WP_Query( $args ); ?>

             <div class="laptops">
                 <ul>
                 <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
                     <li>
                         <div class="pic-wrapper">
                             <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                         </div>
                         <div class="content">
                          <div class="date tbl">
                              <span class=" col left">PRODUCTIVITY</span>
                              <span class=" col right"><?php echo the_date(); ?></span>
                          </div>
                           <a href="<?php echo the_permalink(); ?>">
                          <span class="captn"><?php echo the_title(); ?></span>
                          <p><?php echo the_excerpt(); ?></p>
                           <span class="right"><span class="primary-btn transparent-btn">Learn More</span></span>
                             </a>
                         </div>
                     </li>
                 <?php endwhile; ?>     
                 </ul>
             </div>
         </div>

</section>
<!-- end-of-things -->


<!-- things-->
<!--<section class="things padding-top-bottom">
         <div class="wrapper">
             <h2 class="centre" style="padding-bottom: 40px;">Things we say about other things</h2>
             php
                    $args = array(
                        'post_type' => 'articles',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                    
                    $query = new WP_Query( $args ); ?>

                    
                 <ul class="laptop owl-carousel">

                 php  while ( $query->have_posts() ) : $query->the_post(); ?>

                 <li>
                         <div class="pic-wrapper">
                             <img src="php echo the_post_thumbnail_url(); ?>" alt="php echo the_title(); ?>">
                         </div>
                         <div class="content" style="height: 340px;">
                          <div class="date tbl">
                              <span class=" col left">PRODUCTIVITY</span>
                              <span class=" col right">php echo the_date(); ?></span>
                          </div>
                           <a href="php echo the_permalink(); ?>">
                          <span class="captn">php echo the_title(); ?></span>
                          <p> php echo the_excerpt(); ?></p>
                           <span class="" style=""><span class="primary-btn transparent-btn">Learn More</span></span>
                             </a>
                         </div>
                     </li>


                     php endwhile; ?> 
                         
                 </ul>
             </div>

</section>-->
<!-- end-of-things -->

<?php get_footer(); ?>