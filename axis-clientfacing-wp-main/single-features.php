<?php get_header(); ?>
<section class="fill-inner"></section>
<section class="inside-pages-topper">
  <h2 class="centre"><?php echo the_title(); ?></h2>
</section>


<section class="products padding-top-bottom" >
        <div class="package">
            <!-- card -->
            <div class="wrapper">
            <div class="card-left">
                <div class="col-content">
                    <p>
                    <?php echo the_content(); ?></p>

                    <div class="feature-btn" style="    margin-top: 45px;
    margin-left: -19px;">

                   
                    <a target="_blank" href="https://app.axis.africa/register">
                            <button class="btn primary-btn" id="btn-start-features">
                                <span>Get Started</span>
                            </button>
                        </a>

                        <a href="mailto:support@axis.africa">
                            <button class="btn primary-btn request-demo">
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
<!-- end-of-products -->
<!-- products-cases-->
	<section class="products-cases bg-blue padding-top-bottom">
    <div class="wrapper">
        <h2 class="centre"> Product Use Cases
            <span>What are the possibilities of the <?php echo the_title(); ?>?</span>
        </h2>

        <ul>
        <?php

// Check rows exists.
if( have_rows('possibilities') ):

    // Loop through rows.
    while( have_rows('possibilities') ) : the_row(); ?>

            <li class="current active equal-height">
                
                    <span class="icn <?php echo get_sub_field('possibility_image'); ?>"></span>
                    <h5><?php echo get_sub_field('possibility_title'); ?></h5>
                    <p><?php echo get_sub_field('possibility_content'); ?></p>
                
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
</section>



<section class="inside-pages-text padding-top-bottom faqs ">
    <div class="wrapper">
        <h2 class="centre"> FAQs
            <span style="display: block;
    font-family: satoshimedium, Arial, sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 34px;
    padding-top: 7px;">Frequently Asked Questions</span>
        </h2>
        <ul class="accordion">

        <?php

        // Check rows exists.
        if( have_rows('faqs') ):

        // Loop through rows.
        while( have_rows('faqs') ) : the_row(); 
        
        ?>

        

            <li>
                <a href="#" class="title"><?php echo get_sub_field('title'); ?></a>
                <div class="desc">
                <?php echo get_sub_field('content'); ?>
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
</section>




        
<?php get_footer(); ?>