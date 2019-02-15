<?php 
/*
Template Name: Наши клиенты
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="flex_aligner main_cont">
        <div>
          <?php get_template_part( 'about-sidebar' ); ?>
          <?php get_template_part( 'news-sidebar' ); ?>
        </div>
        <div class="our_clients_wrapper flex_aligner jcsa fww">
        <?php
        $args = array(
          'posts_per_page' => 9999,
          'cat' => '61',
        );
          if ( have_posts() ) :
            query_posts( $args );
            while (have_posts()) : the_post();
        ?>
          <div>
            <div class="client_wrapper">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
              <p><?php the_content(); ?></p>
            </div>
          </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
        ?>
        </div>
        <!-- /.our_clients_wrapper -->
      </div>
    </section>
    <!-- /.main_section -->
  <?php get_footer(); ?>