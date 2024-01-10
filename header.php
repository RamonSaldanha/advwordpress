<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- wp_head begin -->
  <?php wp_head(); ?>
  <!-- wp_head end -->
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php if (function_exists('lc_custom_header')) lc_custom_header();
  else {

    //STANDARD NAV

    if (get_theme_mod("enable_topbar")) : ?>
      <!-- ******************* The Topbar Area ******************* -->
      <div id="wrapper-topbar" class="py-2 <?php echo get_theme_mod('topbar_bg_color_choice', 'bg-light') ?> <?php echo get_theme_mod('topbar_text_color_choice', 'text-dark') ?>">
        <div class="container">
          <div class="row">
            <div id="topbar-content" class="col-md-12 text-center small"> <?php echo do_shortcode(get_theme_mod('topbar_content')) ?> </div>
          </div>
        </div>
      </div>
    <?php endif; ?>


    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
      <nav class="primary-menu navbar navbar-expand-lg navbar-dark py-0" aria-label="Primary Navigation">
        <div class="container">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav mb-2 mb-md-0 %2$s" style="font-size: .8rem !important;">%3$s</ul>',
            'walker' => new bootstrap_5_wp_nav_menu_walker()
          ));
          ?>
        </div>
      </nav>
      <!-- Primeira lista de links -->
      <!-- Meio do cabeçalho com a logo e o input de busca -->
      <div class="header-main">
        <div class="container">
          <div class="row header-container">
            <div class="col-12 col-lg-4 buscador d-md-flex d-lg-block align-items-center">
              <?= get_search_form(); ?>
            </div>


            <div id="logo-tagline-wrap" class="col-12 col-lg-4 d-flex align-items-center justify-content-center">
              <!-- Your site title as branding in the menu -->
              <div class="navbar-brand mb-0 mt-2 h3">
                <a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
                  <img src="<?= get_template_directory_uri() ?>/assets/img/logotipo.webp" style="max-width: 250px;" />
                </a>
              </div>
            </div>


            <div class="col-12 col-lg-4 d-flex align-items-center">
              <ul class="nav d-flex d-md-inline-flex redes-sociais ms-auto ms-lg-0 my-lg-auto">
                <li class="nav-item me-4 py-1">
                  <a href="https://wa.me/5584987329303" target="_blank" class="text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                  </a>
                </li>
                <li class="nav-item me-4 py-1">
                  <a href="https://www.instagram.com/ramonsaldanhaadv/" target="_blank" class="text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <a class="skip-link visually-hidden-focusable" href="#theme-main"><?php esc_html_e('Skip to content', 'picostrap'); ?></a>


      <nav class="navbar <?php echo get_theme_mod('picostrap_header_navbar_expand', 'navbar-expand-lg'); ?> <?php echo get_theme_mod('picostrap_header_navbar_position') . " " . get_theme_mod('picostrap_header_navbar_color_scheme', 'navbar-dark') . ' ' . get_theme_mod('picostrap_header_navbar_color_choice'); ?>" aria-label="Main Navigation">
        <div class="container">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'secondary',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="%1$s" class="navbar-nav nav-fill w-100 mb-2 mb-md-0 %2$s">%3$s</ul>',
              'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>

            <?php if (get_theme_mod('enable_search_form')) : ?>
              <form action="<?php echo bloginfo('url') ?>" method="get" id="header-search-form">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="s" value="<?php the_search_query(); ?>">
              </form>
            <?php endif ?>

          </div> <!-- .collapse -->
        </div> <!-- .container -->
      </nav> <!-- .site-navigation -->
      <?php

      //AS A TEST / DEMO for a mock-up megamenu
      //include("nav-static-mega.php");
      ?>
    </div><!-- #wrapper-navbar end -->


  <?php
  } // END ELSE CASE 
  ?>

  <main id='theme-main'>