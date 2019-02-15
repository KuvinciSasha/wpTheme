<?php 
/*
Template Name: Вакансии
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="flex_aligner main_cont">
        <div>
          <?php get_template_part( 'about-sidebar' ); ?>
          <?php get_template_part( 'news-sidebar' ); ?>
        </div>
        <div class="vacancies_wrapper">
          <h1 class="vacancies">Вакансии</h1>
          <?php
            $args = array(
              'posts_per_page' => 999999,
              'cat' => '4',
            );
              if ( have_posts() ) :
                query_posts( $args );
                while (have_posts()) : the_post();
            ?>
              <div class="vacancie">
                <h1><?php the_title(); ?></h1>
                  <?php the_content(); ?>
              </div>
              <!-- /.vacancie -->
          <?php
              endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
        <!-- /.vacancies_wrapper -->
      </div>
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>