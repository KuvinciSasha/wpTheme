<?php get_header(); ?>
<section class="main_section">
  <div class="flex_aligner main_cont">
    <div>
      <div class="left_menu">
        <h1>О КОМПАНИИ</h1>
        <a href="http://mpgs-ufa.ru/product-page/design/">Проектирование металлоконструкций</a>
        <a href="http://mpgs-ufa.ru/product-page/manufacture/">Производство металлоконструкций</a>
        <a href="http://mpgs-ufa.ru/product-page/montage/">Монтаж металлоконструкций</a>
      </div>
      <!-- /.left_menu -->
  </div>
  <div class="news_tile news_tile_single_post">
    <h1><?php the_title(); ?></h1>
    <p class="news_preview_text">
      <?php 
        global $more;
        $more = 1;       // игнорируем тег more (не обрезаем).
        the_post(); the_content();
      ?>
    </p>
    <p class="news_date"><?php echo get_the_date(); ?></p>
  </div>
  <!-- /.news_tile -->
</section>
<!-- /.main_section -->
<?php get_footer(); ?>