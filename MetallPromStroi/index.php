<?php 
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="slick_wrapper">
        <div class="slider">
          <?php
          $args = array(
            'posts_per_page' => 9999,
            'cat' => '63',
          );
            if ( have_posts() ) :
              query_posts( $args );
              while (have_posts()) : the_post();
          ?>
            <div class="item_1 item" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
            <?php
              endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>
    <!-- /.main_section -->
    <section class="advantages_wrapper">
      <a href="http://mpgs-ufa.ru/product-page/design/">
        <div class="advantage_1 advantage">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/drawing-compass.png" alt="image">
          <h1>проектирование</h1>
        </div>
      </a>
      <a href="http://mpgs-ufa.ru/product-page/manufacture/">
        <div class="advantage_2 advantage">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/welder.png" alt="image">
          <h1>Производство и комплектация строительными материалами</h1>
        </div>
      </a>
      <a href="http://mpgs-ufa.ru/product-page/montage/">
        <div class="advantage_3 advantage">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/construction.png" alt="image">
          <h1>Строительство "Под ключ"</h1>
        </div>
      </a>
      <!-- <a href="objects.html">
        <div class="advantage_4 advantage">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/crane.png" alt="image">
          <h1>СТРОИТЕЛЬСТВО</h1>
          <p>быстровозводимых зданий и конструкций «ПОД КЛЮЧ»</p>
        </div>
      </a> -->
    </section>
    <!-- /.advantages_wrapper -->
    <section class="our_advantages_wrapper">
      <div class="our_advantages_heading">
        <h1>Наши преимущества</h1>
        <p>За что выбирают именно нас</p>
      </div>
      <div class="flex_aligner advantage_tile_wrapper jcc">
        <div>
          <div class="advantage_tile rgth">
            <div class="tile_text">
              <h1>свежие идеи</h1>
              <p>Работая с нами, вы можете быть уверены, что мы найдем лучшее и наиболее оригинальное решение именно для вашего
                бизнеса.
              </p>
            </div>
            <div class="tile_img">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/brainstorm.png" alt="image">
            </div>
          </div>
        </div>
        <div>
          <div class="advantage_tile lft">
            <div class="tile_img">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/dialog.png" alt="image">
            </div>
            <div class="tile_text">
              <h1>проверенные идеи</h1>
              <p>Мы используем опыт нашей профессиональной команды и лучшие решения, работая над каждым заказом.</p>
            </div>
          </div>
        </div>
        <div>
          <div class="advantage_tile rgth">
            <div class="tile_text">
              <h1>быстро и качественно</h1>
              <p>Мы стремимся не терять времени даром, но при этом не торопимся в ущерб результату. Вы успеете ко всем дедлайнам,
                сохраняя качество.</p>
            </div>
            <div class="tile_img">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/stopwatch.png" alt="image">
            </div>
          </div>
        </div>
        <div>
          <div class="advantage_tile lft">
            <div class="tile_img">
              <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/first.png" alt="image">
            </div>
            <div class="tile_text">
              <h1>лучшие таланты</h1>
              <p>Наша команда состоит из профессионалов самого высокого уровня во всех областях. Над вашим проектом будут работать
                наши умы.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.our_advantages_wrapper -->
    <section class="trust_wrapper">
      <div class="trust_heading">
        <h1>Нам доверяют</h1>
        <p>Мы работаем как с российскими,так и с зарубежными компаниями</p>
      </div>
      <div class="trust_slider_wrapper">
        <div class="trust_slider">
        <?php
        $args = array(
          'posts_per_page' => 9999,
          'cat' => '62',
        );
          if ( have_posts() ) :
            query_posts( $args );
            while (have_posts()) : the_post();
        ?>
          <div>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
          </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
        ?>
        </div>
      </div>
      <!-- /.trust_slider_wrapper -->
    </section>
    <!-- /.trust_wrapper -->
<?php get_footer(); ?>