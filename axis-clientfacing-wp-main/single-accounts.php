<?php

get_header(); ?>

<div class="web-banner" style="background-image: url(<?php echo the_field('account_header_image'); ?>)">
        <div class="wrapper cptn">
            <div class="col-left">
                <div class="banner_content ">
                    <h1><?php echo the_field('a_c_s'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <section class="inner-pages">
 <!-- Breadcrumbs -->
        <section id="breadcrumbs">
            <div class="wrapper">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/accounts/'); ?>">Accounts</a></li>
                    <li><a href="#" class="active"><?php echo the_title(); ?></a></li>
                </ul>
            </div>
        </section>
  <!-- End-of-Breadcrumbs -->
        <section class="background accounts-inside">
            <div class="wrapper">
                <div class="editor">
                    <div class="tbl">
                        <div class="col left">
                            <h2 class="section-heading secondary"><?php echo the_title(); ?></h2>
                            <p> <?php echo the_content(); ?></p>
                            <ul class="accordion">

                            <?php
                            
                            if( have_rows('accordions') ):

                              // Loop through rows.
                              while( have_rows('accordions') ) : the_row(); ?>

                                <li>
                                    <a href="#" class="title"><?php echo get_sub_field('accordion_title'); ?></a>
                                    <div class="desc">
                                        <p><?php echo get_sub_field('accordion_description'); ?></p>
                                    </div>
                                </li>

                                <?php

                                // End loop.
                                endwhile;

                                // No value.
                                else :
                                // Do something...
                                endif;

                                ?>
                               

                            </ul>
                        </div>
                        <div class="col right">
                            <div class="frm editor">
                                
                                <div class="frmLead">
                                <span class="white">Would you like an account today? Talk to us</span>
                                    <?php echo do_shortcode( '[forminator_form id="45"]' ); ?>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <div class="other-a">
                    <h2 class="section-heading secondary">Other Accounts</h2>
                    <ul>

                    <?php
				$post_terms = wp_get_object_terms($post->ID, array('fields'=>'ids'));

                $args = array(
                    'post_type' => array('accounts'),
                    
                    'posts_per_page' => 5,
				    'post__not_in' => array($post->ID),
                    'order' => 'ASC',
                );

                $otherproducts_areas = new WP_Query( $args );

                if ( $otherproducts_areas->have_posts() ) {
                    while ( $otherproducts_areas->have_posts() ) {
                        $otherproducts_areas->the_post();

                        ?>

                        <li>
                            <a href="<?php echo the_permalink(); ?>">
                                <span class="icn <?php echo the_field('account_icon'); ?>"></span>
                                <p><?php echo the_title(); ?></p>
                            </a>
                        </li>

                        <?php 
                    }
                } else {
                    echo "NO DATA";
                }
                ?>
            <?php wp_reset_postdata()?>
                       
                    </ul>
                </div>
                </div>
            <div class="other-a visted-p">
                <h2 class="section-heading secondary">Previously Viewed</h2>
                <ul>

                <?php 
	    if (get_post_type( $post->ID ) == 'accounts' )
		    update_post_meta( $post->ID, '_last_viewed', current_time('mysql') );
		?>

		<?php
				$args = array(
					'post_type' => array('accounts','borrow','ways_to_bank'),
					'posts_per_page' => 4,
					'meta_key' => '_last_viewed',
					'orderby' => 'meta_value',
					'order' => 'DESC'
				);

				query_posts( $args ); ?>
				<?php if( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>

                        <li>
                            <a href="<?php echo the_permalink(); ?>">
                                <span class="icn <?php echo the_field('account_icon'); ?>"></span>
                                <p><?php echo the_title(); ?></p>
                            </a>
                        </li>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                   
                </ul>

            </div>
        </section>
    </section>


    <?php get_footer(); ?>