<?php 
/*
Template Name: Новости
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="flex_aligner main_cont">
        <div>
          <?php get_template_part( 'about-sidebar' ); ?>
          
        </div>
        <div class="news_page_wrapper">
          <h1 class="caption">Новости</h1>
          <?php
          $args = array(
            'posts_per_page' => 999999,
            'cat' => '2',
          );
            if ( have_posts() ) :
              query_posts( $args );
              while (have_posts()) : the_post();
          ?>
            <div class="news_tile">
              <p class="news_date"><?php echo get_the_date(); ?></p>
              <h1><?php the_title(); ?></h1>
              <p class="news_preview_text"><?php the_content( "Далее...  " ); ?></p>
            </div>
            <!-- /.news_tile -->
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
        <!-- /.news_page_wrapper -->
      </div>
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>