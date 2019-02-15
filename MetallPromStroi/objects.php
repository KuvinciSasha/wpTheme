<?php 
/*
Template Name: Наши объекты
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <div class="objects_wrapper products_wrap flex_aligner jcc fww">
        <a href="http://mpgs-ufa.ru/product-page/objects1/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/manuf.jpg');"></header>
            <footer>
              <p><?php the_field('obj1', 6); ?></p>
            </footer>
          </div>
        </a>
        <a href="http://mpgs-ufa.ru/product-page/objects2/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/graj.jpg');"></header>
            <footer>
              <p><?php the_field('obj2', 6); ?></p>
            </footer>
          </div>
        </a>
        <a href="http://mpgs-ufa.ru/product-page/objects3/">
          <div class="object">
            <header style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/other.jpg');"></header>
            <footer>
              <p><?php the_field('obj3', 6); ?></p>
            </footer>
          </div>
        </a>
      </div>
      <!-- /.objects_wrapper -->
    </section>
    <!-- /.main_section -->
<?php get_footer(); ?>