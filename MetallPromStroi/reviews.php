<?php 
/*
Template Name: Отзывы
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="flex_aligner main_cont">
        <div>
          <?php get_template_part( 'about-sidebar' ); ?>
          <?php get_template_part( 'news-sidebar' ); ?>
        </div>
        <div class="flex_aligner reviw_page_wrapper flex_aligner fww">
          <?php
          $args = array(
            'posts_per_page' => 999999,
            'cat' => '5',
          );
          if ( have_posts() ) :
            query_posts( $args );
            while (have_posts()) : the_post();
          ?>
          <div>
            <div class="advantage_tile lft">
              <div class="tile_img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/client.png" alt="image">
              </div>
              <div class="tile_text">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>