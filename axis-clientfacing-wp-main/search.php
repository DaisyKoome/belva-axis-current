<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Axis
 */

get_header();
?>


<!-- things-->
<section class="things padding-top-bottom">
         <div class="wrapper">
         <h2 class="title centre" style="padding-bottom: 40px;margin-top: 40px;margin-bottom: 40px;">Search results for query : <?php the_search_query(); ?></h2>
       

             <div class="laptops">
                 <ul>
					  <?php if ( have_posts() ) : 
						global $wp_query;
						$total_results = $wp_query->found_posts;

				 ?>
                 
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
					 
                	<?php		
				else :
					get_template_part( 'page-templates/home', 'none' );
				endif;
			?>
                 </ul>
             </div>
         </div>

</section>
	

<?php
get_footer();
