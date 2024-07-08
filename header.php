<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google tag (gtag.js) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-934345590"></script> -->
  <script>
    window.dataLayer = window.dataLayer || [];

    // function gtag() {
    //   dataLayer.push(arguments);
    // }
    // gtag('js', new Date());

    // gtag('config', 'AW-934345590');
  </script>
  <!-- wp_head end -->
  <script>
  //   (function(w, d, s, l, i) {
  //     w[l] = w[l] || [];
  //     w[l].push({
  //       'gtm.start': new Date().getTime(),
  //       event: 'gtm.js'
  //     });
  //     var f = d.getElementsByTagName(s)[0],
  //       j = d.createElement(s),
  //       dl = l != 'dataLayer' ? '&l=' + l : '';
  //     j.async = true;
  //     j.src =
  //       'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
  //     f.parentNode.insertBefore(j, f);
  //   })(window, document, 'script', 'dataLayer', 'GTM-PTDKWZS8');
  // </script>

  <script>
  //   function gtag_report_conversion(url) {
  //     console.log(url)
  //     var callback = function() {
  //       if (typeof(url) != 'undefined') {
  //         window.location = url;
  //       }
  //     };
  //     gtag('event', 'conversion', {
  //       'send_to': 'AW-934345590/Fx5uCMOxoIIZEPb2w70D',
  //       'event_callback': callback
  //     });
  //     return false;
  //   }
  </script>

  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- wp_head begin -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTDKWZS8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
            <div id="logo-tagline-wrap" class="col-lg-2 col-md-3 my-4 my-md-0 d-flex justify-content-center">
              <!-- Your site title as branding in the menu -->
              <div class="navbar-brand mb-0 h3">
                <a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
                  <img src="<?= get_template_directory_uri() ?>/assets/img/logotipo.webp" />
                </a>
              </div>

            </div>
            <div class="col-lg-3 buscador col-md-4 d-flex align-items-center">
              <?= get_search_form(); ?>
            </div>
            <div class="col-lg-7 col-md-5 d-flex align-items-center">
              <ul class="nav redes-sociais">
                <li class="nav-item me-4 py-1">
                  <a href="https://www.instagram.com/ramonsaldanhaadv/" target="_blank" class="link-opacity-100 text-light opacity-75">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                  </a>
                </li>
                <li class="nav-item me-4 py-1">
                  <a href="https://www.linkedin.com/in/ramon-saldanha/" target="_blank" class="link-opacity-100 text-light opacity-75">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg>
                  </a>
                </li>
                <li class="nav-item button">
                  <a href="https://wa.me/8422263840" onclick="gtag_report_conversion()" target="_blank" class="btn btn-outline-success" type="button">
                    <span class="fs-6">
                      Fale com um advogado
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <a class="skip-link visually-hidden-focusable" href="#theme-main"><?php esc_html_e('Skip to content', 'picostrap'); ?></a>


      <nav class="navbar <?php echo get_theme_mod('picostrap_header_navbar_expand', 'navbar-expand-lg'); ?> <?php echo get_theme_mod('picostrap_header_navbar_position') . " " . get_theme_mod('picostrap_header_navbar_color_scheme', 'navbar-dark') . ' ' . get_theme_mod('picostrap_header_navbar_color_choice', 'bg-dark'); ?>" aria-label="Main Navigation">
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