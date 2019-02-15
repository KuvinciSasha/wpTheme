<?php 
/*
Template Name: Лицензия
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="flex_aligner main_cont">
        <div>
          <?php get_template_part( 'about-sidebar' ); ?>
          <?php get_template_part( 'news-sidebar' ); ?>
        </div>
        <div class="design_stage">
          <h1 class="caption design_stage_caption">Лицензия</h1>
          <div class="design_wrapper flex_aligner jcc fww">

          <?php
            $args = array(
              'posts_per_page' => 1,
              'cat' => '68',
            );
              if ( have_posts() ) :
                query_posts( $args );
                while (have_posts()) : the_post();
            ?>
              <?php the_content(); ?>
            <?php
                endwhile;
              endif;
              wp_reset_postdata();
            ?>

          </div>
          <!-- /.design_wrapper -->
          <h1 class="caption">Примеры наших работ</h1>
          <div class="objects_wrapper flex_aligner jcc fww">
            <?php
            $args = array(
              'posts_per_page' => 3,
              'cat' => '65,66,67',
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
        </div>
        <!-- /.design_stage -->
      </div>
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>