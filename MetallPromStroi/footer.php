<footer class="main_footer">
  <div class="main_footer_item">
    <div class="flex_aligner footer_heading">
      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" alt="image">
      <h1 class="unique_caption"><?php the_field('logo_text', 6); ?></h1>
    </div>
  </div>
  <div class="main_footer_item">
    <h1>КОНТАКТЫ</h1>
    <p><?php the_field('comp_name', 6); ?>
      <br>
      <br>
      <?php the_field('footer_city', 6); ?>
      <br>
      <br>
      <?php the_field('footer_street', 6); ?>
      <br>
      <br>
      <span><?php the_field('phone', 6); ?></span>
    </p>
  </div>
  <div class="main_footer_item footer_feedback">
    <h1>ПОДПИСКА НА ОБНОВЛЕНИЯ</h1>
    <p>Введите ваш email, чтобы всегда быть в курсе последних обновлений</p>
    <div class="flex_aligner vAligner footer_form">
      <form action="<?php bloginfo( 'template_url' ); ?>/mail2.php" method="POST">
        <input type="text" name="email" placeholder="Email *">
        <button type="submit">ПОДПИСАТЬСЯ</button>
      </form>
    </div>
    <p>© 2018 ООО «МеталПромГражданСтрой». Все права защищены.</p>
  </div>
</footer>
<!-- /.main_footer -->
</div>
  <!-- Bootstrap core JavaScript ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php wp_footer(); ?>
</body>

</html>