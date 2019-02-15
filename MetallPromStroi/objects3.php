<?php 
/*
Template Name: Объекты 3
*/
?>
<?php get_header(); ?>
<section class="main_section">
      <h1 class="caption"><?php the_field('obj3', 6); ?></h1>
      <div class="objects_wrapper flex_aligner jcc fww">
    <?php
    $args = array(
      'posts_per_page' => 1,
      'cat' => '67',
    );
      if ( have_posts() ) :
        query_posts( $args );
        while (have_posts()) : the_post();
    ?>
    
    <?php echo the_content(); ?>

    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
      </div>
      <!-- /.bjects_wrapper -->
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>