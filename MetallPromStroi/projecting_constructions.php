<?php 
/*
Template Name: Проектирование металлоконструкций
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="flex_aligner main_cont">
        <div>
          <div class="left_menu">
            <h1>О КОМПАНИИ</h1>
            <a href="http://mpgs-ufa.ru/product-page/design/">Проектирование</a>
            <a href="http://mpgs-ufa.ru/product-page/manufacture/">Производство и комплектация строительными материалами</a>
            <a href="http://mpgs-ufa.ru/product-page/montage/">Строительство "Под ключ"</a>
          </div>
          <!-- /.left_menu -->
          <?php get_template_part( 'news-sidebar' ); ?>
        </div>
        <div class="design_stage">
          <h1 class="caption design_stage_caption">Проектирование металлоконструкций</h1>
          <div class="design_wrapper flex_aligner jcc fww">
            <p>ООО «МеталПромГражданСтрой» осуществляет комплексную разработку по различным разделам проекта:
            <br>-	Общестроительные разделы (КМ, КЖ, АС) и спец разделы (ЭМО, ПС, ТХ и прочие).
            <br>-	Подготовку конструкторской документации чертежи КМД.

            </p>
          </div>
          <!-- /.design_wrapper -->
          <h1 class="caption">Примеры наших работ</h1>
          <div class="objects_wrapper flex_aligner jcc fww">
            <?php
            $args = array(
              'posts_per_page' => 3,
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
        </div>
        <!-- /.design_stage -->
      </div>
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>