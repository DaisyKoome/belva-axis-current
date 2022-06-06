<?php get_header(); ?>
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



<?php get_footer(); ?>