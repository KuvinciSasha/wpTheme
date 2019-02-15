<div class="left_news">
  <h1 class="left_news_caption">НОВОСТИ</h1>
  <?php
    $args = array(
      'posts_per_page' => 3,
      'cat' => '2',
    );
      if ( have_posts() ) :
        query_posts( $args );
        while (have_posts()) : the_post();
    ?>
  <div class="news_tile">
    <p class="news_date"><?php echo get_the_date(); ?></p>
    <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
    <p class="news_preview_text"><?php the_content( "Далее...  " ); ?></p>
  </div>
  <!-- /.news_tile -->
  <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>
<!-- /.left_news -->