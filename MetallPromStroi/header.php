<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo( 'name' );?></title>

  <!-- Bootstrap grid CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
    crossorigin="anonymous">

  <link rel="SHORTCUT ICON" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Оставьте свой телефон и мы вам перезвоним</h4>
          </div>
          <div class="modal-body">



            <form id="feedback-form" enctype="multipart/form-data" method="post">
              <? echo do_shortcode('[contact-form-7 id="233" title="Форма отправки из кнопки Заполнить ТЗ"]'); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <div id="feedback">
    <a href="#" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Заполнить ТЗ<br>или отправить чертежи<br> для расчета</a>
  </div>

  <div class="overlay overlay_hide"></div>
  <div class="slide_menu_wrapper slide_menu_hide">
    <a href="http://mpgs-ufa.ru">Главная</a>
    <a href="http://mpgs-ufa.ru/about-company/" class="tt">О компании</a>
    <a href="http://mpgs-ufa.ru/product-page/" class="tt">Продукция и услуги</a>
    <a href="http://mpgs-ufa.ru/our-objects/" class="tt">Наши объекты</a>
    <a href="http://mpgs-ufa.ru/contacts/">Контакты</a>
    <div class="flex_aligner slide_contacts">
      <div>
        <p><?php the_field('address', 6); ?>
          <br>
          <a href="https://goo.gl/maps/B1yFWnTUAWx" target="_blank">посмотреть на карте</a>
        </p>
      </div>
      <div>
        <p><?php the_field('phone', 6); ?>
          <br>
          <a href="#" data-toggle="modal" data-target="#myModal">заказать звонок</a>
        </p>
      </div>
    </div>
  </div>
  <!-- /.slide_menu_wrapper -->
  <div class="hamburger_wrapper">
    <div class="hamburger" id="hamburger-1">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
  </div>
  <header class="main_header">
    <div class="header_top">
      <div class="header_logo">
        <div class="flex_aligner vAligner">
          <?php the_custom_logo( $blog_id ); ?>
          <p><?php the_field('logo_text', 6); ?></p>
        </div>
      </div>
      <div class="header_contacts_wrapper">
        <div>
          <div class="flex_aligner header_contacts">
            <div>
              <div class="flex_aligner tar">
                <div>
                  <p><?php the_field('address', 6); ?>
                    <br>
                    <a href="https://goo.gl/maps/B1yFWnTUAWx" target="_blank">посмотреть на карте</a>
                  </p>
                </div>
                <div>
                  <p><?php the_field('phone', 6); ?>
                    <br>
                    <a href="#" data-toggle="modal" data-target="#myModal">заказать звонок</a>
                  </p>
                </div>
              </div>
              <ul>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>
              </ul>
            </div>
            <div class="header_bottom dn1200">
              <nav class="header_menu">
                <ul>
                  <li>
                    <a class="menu_a" href="http://mpgs-ufa.ru">Главная</a>
                  </li>

                  <li class="posr">
                    <a class="menu_a tt" href="http://mpgs-ufa.ru/about-company/">О компании</a>
                    <div class="dropdown">
                      <div>
                        <a href="http://mpgs-ufa.ru/about-company/licens/">Лицензии и допуски</a>
                      </div>
                      <div>
                        <a href="http://mpgs-ufa.ru/about-company/performance/">Профиль деятельности</a>
                      </div>
                      <div>
                        <a href="http://mpgs-ufa.ru/about-company/news/">Новости</a>
                      </div>
                      <div>
                        <a class="tt" href="http://mpgs-ufa.ru/about-company/our-clients/">Наши заказчики</a>
                      </div>
                      <div>
                        <a href="http://mpgs-ufa.ru/about-company/reviews/">Отзывы</a>
                      </div>
                      <div>
                        <a href="http://mpgs-ufa.ru/about-company/job/">Вакансии</a>
                      </div>
                    </div>
                  </li>

                  <li class="posr">
                    <a class="menu_a tt" href="http://mpgs-ufa.ru/product-page/">Продукция и услуги</a>
                    <div class="dropdown dropdown2">
                      <div>
                        <a class="tt" href="http://mpgs-ufa.ru/product-page/design/">Проектирование</a>
                      </div>
                      <div>
                        <a class="tt" href="http://mpgs-ufa.ru/product-page/manufacture/">Производство и комплектация строительными материалами</a>
                      </div>
                      <div>
                        <a class="tt" href="http://mpgs-ufa.ru/product-page/montage/">Строительство "Под ключ"</a>
                      </div>
                    </div>
                  </li>

                  <li class="posr">
                    <a class="menu_a tt" href="http://mpgs-ufa.ru/our-objects/">Наши объекты</a>
                    <div class="dropdown dropdown2">
                      <div>
                        <a class="tt" href="http://mpgs-ufa.ru/our-objects/objects1/"><?php the_field('obj1', 6); ?></a>
                      </div>
                      <div>
                        <a class="tt" href="http://mpgs-ufa.ru/our-objects/objects2/"><?php the_field('obj2', 6); ?></a>
                      </div>
                      <div>
                        <a class="tt" href="http://mpgs-ufa.ru/our-objects/objects3/"><?php the_field('obj3', 6); ?></a>
                      </div>
                    </div>
                  </li>

                  <li class="posr">
                    <a class="menu_a" href="http://mpgs-ufa.ru/contacts/">Контакты</a>
                  </li>

                </ul>
              </nav>
            </div>
            <!-- /.header_bottom -->
          </div>
          <!-- /.header_contacts -->
        </div>
      </div>
      <!-- /.header_contacts_wrapper -->
    </div>
    <nav class="header_menu dn_adapt">
      <ul>
        <li>
          <a class="menu_a" href="http://mpgs-ufa.ru">Главная</a>
        </li>

        <li class="posr">
          <a class="menu_a tt" href="http://mpgs-ufa.ru/about-company/">О компании</a>
          <div class="dropdown">
            <div>
              <a href="http://mpgs-ufa.ru/about-company/news/">Новости</a>
            </div>
            <div>
              <a class="tt" href="http://mpgs-ufa.ru/about-company/our-clients/ ">Наши клиенты</a>
            </div>
            <div>
              <a href="http://mpgs-ufa.ru/about-company/reviews/">Отзывы</a>
            </div>
            <div>
              <a href="http://mpgs-ufa.ru/about-company/job/">Вакансии</a>
            </div>
          </div>
        </li>

        <li class="posr">
          <a class="menu_a tt" href="http://mpgs-ufa.ru/product-page/">Продукция и услуги</a>
          <div class="dropdown dropdown2">
            <div>
              <a class="tt" href="http://mpgs-ufa.ru/product-page/design/">Проектирование</a>
            </div>
            <div>
              <a class="tt" href="http://mpgs-ufa.ru/product-page/manufacture/">Производство и комплектация строительными материалами</a>
            </div>
            <div>
              <a class="tt" href="http://mpgs-ufa.ru/product-page/montage/">Строительство "Под ключ"</a>
            </div>
          </div>
        </li>

        <li class="posr">
          <a class="tt" class="menu_a" href="http://mpgs-ufa.ru/our-objects/">Наши объекты</a>
        </li>

        <li class="posr">
          <a class="menu_a" href="http://mpgs-ufa.ru/contacts/">Контакты</a>
        </li>

      </ul>
    </nav>
    <!-- /.header_menu -->
  </header>
  <!-- /.main_header -->