<?php get_header(); ?>

    <!-- POSTS START -->
    <?php
      /** POST LOOP */
      if( have_posts() ) :
        while( have_posts() ) : the_post();

          get_template_part( 'template-parts/post-template');
          
        endwhile; 
      endif;
      /** POST LOOP */
    ?>
    <!-- POSTS END -->

<?php get_footer(); ?>
  