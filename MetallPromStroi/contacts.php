<?php 
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
    <section class="main_section">
      <h1 class="caption">Контакты</h1>
      <div class="contacts_wrapper">
        <div class="flex_aligner vAligner cont">
          <span>
            <b>Адрес:</b>
          </span>
          <p><?php the_field('cont_adress', 6); ?></p>
        </div>
        <div class="flex_aligner vAligner cont">
          <span>
            <b>Телефон:</b>
          </span>
          <p><?php the_field('phone', 6); ?></p>
        </div>
        <div class="flex_aligner vAligner cont">
          <span>
            <b>E-mail:</b>
          </span>
          <p><?php the_field('mail', 6); ?></p>
        </div>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.6958327510115!2d56.030171315627335!3d54.75015158029711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d93997d393158b%3A0x4dd42c7c8589b7ca!2z0YPQuy4g0JzQtdC90LTQtdC70LXQtdCy0LAsIDE3MCwg0KPRhNCwLCDQoNC10YHQvy4g0JHQsNGI0LrQvtGA0YLQvtGB0YLQsNC9LCDQoNC-0YHRltGPLCA0NTAwNzE!5e0!3m2!1suk!2sua!4v1532531668996"
          width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
    <!-- /.main_section -->
    <?php get_footer(); ?>