<?php 
/*
Template Name: Объекты 2
*/
?>
<?php get_header(); ?>
<section class="main_section">
      <h1 class="caption"><?php the_field('obj2', 6); ?></h1>
      <div class="objects_wrapper flex_aligner jcc fww">
    <?php
    $args = array(
      'posts_per_page' => 9999,
      'cat' => '66',
    );
      if ( have_posts() ) :
        query_posts( $args );
        while (have_posts()) : the_post();
    ?>
    
    <a href="<?php the_permalink() ?>">
      <div class="object">
        <header style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></header>
        <footer>
          <p><?php the_title(); ?></p>
        </footer>
      </div>
    </a>

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