<?php 
/*
Template Name: О компании
*/
?>
<?php get_header(); ?>
  <section class="main_section">
    <div class="flex_aligner main_cont">
      <div>
        <?php get_template_part( 'about-sidebar' ); ?>
        <?php get_template_part( 'news-sidebar' ); ?>
      </div>
      <div class="about_company_wraapper">
      <div class="objects_wrapper products_wrap flex_aligner jcc fww">
        <a href="http://mpgs-ufa.ru/about-company/licens/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/license.jpg');"></header>
            <footer>
              <p>Лицензии и допуски</p>
            </footer>
          </div>
        </a>
        <a href="http://mpgs-ufa.ru/about-company/performance/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/performance.jpg');"></header>
            <footer>
              <p>Профиль деятельности</p>
            </footer>
          </div>
        </a>
        <a href="http://mpgs-ufa.ru/about-company/news/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/news.jpg');"></header>
            <footer>
              <p>Новости</p>
            </footer>
          </div>
        </a>
        <a href="http://mpgs-ufa.ru/product-page/our-clients/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/our-clients.jpg');"></header>
            <footer>
              <p>Наши клиенты</p>
            </footer>
          </div>
        </a>
        <a href="http://mpgs-ufa.ru/product-page/reviews/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/reviews.jpg');"></header>
            <footer>
              <p>Отзывы</p>
            </footer>
          </div>
        </a>
        <a href="http://mpgs-ufa.ru/product-page/job/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/job.jpg');"></header>
            <footer>
              <p>Вакансии</p>
            </footer>
          </div>
        </a>
      </div>
      <!-- /.objects_wrapper -->
      
        </div>
        <!-- /.about_company_wraapper -->
      </div>
    </section>
    <!-- /.main_section -->

  <?php get_footer(); ?>