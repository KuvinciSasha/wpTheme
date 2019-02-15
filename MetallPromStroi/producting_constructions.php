<?php 
/*
Template Name: Производство металлоконструкций
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
        <div class="production_stage">
          <h1 class="caption production_stage_caption">Производство и комплектация строительными материалами</h1>
          <div class="design_wrapper">
            <div class="production_img"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/production.jpg" alt="image"></div>
            <p>ООО «МеталПромГражданСтрой» осуществляет поставку необходимых материалов для полной комплектации объекта:
              <br> -	металлоконструкции различной сложности (фермы, балки, прогоны, фахверк с различными типами АКЗ, резервуары и т.п)
              <br> -	современные кровельные и стеновые материалы (сэндвич-панели с негорючим базальтовым утеплителем, кровельная система на основе ПВХ-мембраны и т.п.);
              <br> -	различные типы ворот, дверных и оконных конструкций;
              <br> -	грузоподъемные механизмы (кран-балки, электростали);
              <br> -	полы с антипылевым покрытием;
              <br> -	необходимое оборудование для конкретного технологического процесса ит.д.
              <br><b>Основной комплект поставки здания включает в себя:</b>
              <br> -	проект КМ и КМД, паспорт здания;
              <br> -	несущие металлоконструкции (колонны, стойки, фахверка, балки покрытия, прогоны покрытия, горизонтальные и вертикальные связи, стеновые ригели);
              <br> -	ограждающие конструкции кровли и стен:
              <br> -	“сэндвич”-панели, оцинкованные и окрашенные с двух сторон с базальтовым утеплителем (теплое исполнение здания);
              <br> -	окрашенный профнастил (холодное исполнение здания);
              <br> -	ворота распашные с калиткой – 2 комплекта;
              <br> -	металлопластиковые оконные конструкции (ленточное остекление высотой один метр по длинным сторонам здания);
              <br> -	крепежные элементы.
              <br> -	фасонные детали (сливы, нащельники, конек ит.д.) 

              </p>
          </div>
          <!-- /.design_wrapper -->
          <!-- <h1 class="price_for_tonn">Стоимость изготовления металлоконструкций: <span> от <?php the_field('price', 6); ?> руб. за 1 тонну.</span></h1> -->
          <h1 class="caption">Примеры наших работ</h1>
          <div class="objects_wrapper flex_aligner jcc fww">
            <?php
            $args = array(
              'posts_per_page' => 3,
              'cat' => '65',
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
        <!-- /.production_stage -->
      </div>
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>