<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container">
  <div class="row gx-5">
    <div class="col-md-8">
      <section class="mt-4">
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="<?= get_template_directory_uri() ?>/assets/img/slide2.webp" class="d-block w-100" />

              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-secondary">Justiça, tecnologia, transparência e eficiência</h5>
                <p>
                  Adotamos como princípios a justiça, a tecnologia, a transparência e a eficiência, para que o cidadão tenha acesso a uma justiça de qualidade
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= get_template_directory_uri() ?>/assets/img/slide3.webp" class="d-block w-100" />

              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-secondary">Ajudamos empresas e consumidores</h5>
                <p>
                  Nosso escritório atua na esfera consultiva e litigiosa da seara das relações de consumo.
                </p>
              </div>
            </div>
            <div class="carousel-item">
            <img src="<?= get_template_directory_uri() ?>/assets/img/slide1.webp" class="d-block w-100" />

              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-secondary">Metodologia eficiente</h5>
                <p>O uso da tecnologia nos permite lidar com grande volume de processos, com eficiência e celeridade.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <section>

        <div class="section-title my-5">
          <h2>Áreas de atuação</h2>
          <div class="border-inner"></div>
        </div>

        <div class="row gx-4 gy-4">
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">
                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" height="36" width="36" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M304 32c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32zM192 112c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zm-32 16c17.7 0 32 14.3 32 32h8c13.3 0 24 10.7 24 24v16c0 1.7-.2 3.4-.5 5.1C280.3 229.6 320 286.2 320 352c0 88.4-71.6 160-160 160S0 440.4 0 352c0-65.8 39.7-122.4 96.5-146.9c-.4-1.6-.5-3.3-.5-5.1V184c0-13.3 10.7-24 24-24h8c0-17.7 14.3-32 32-32zm0 320c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96s43 96 96 96zm192-96c0-25.9-5.1-50.5-14.4-73.1c16.9-32.9 44.8-59.1 78.9-73.9c-.4-1.6-.5-3.3-.5-5.1V184c0-13.3 10.7-24 24-24h8c0-17.7 14.3-32 32-32s32 14.3 32 32h8c13.3 0 24 10.7 24 24v16c0 1.7-.2 3.4-.5 5.1C600.3 229.6 640 286.2 640 352c0 88.4-71.6 160-160 160c-62 0-115.8-35.3-142.4-86.9c9.3-22.5 14.4-47.2 14.4-73.1zm224 0c0-53-43-96-96-96s-96 43-96 96s43 96 96 96s96-43 96-96zM368 64c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zm80 48c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg>
                </div>

                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-5">
                  <strong>Criminal</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg"  width="36" height="36" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 128c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64zM88 480V400H70.2c-10.9 0-18.6-10.7-15.2-21.1l31.1-93.4L57.5 323.3c-10.7 14.1-30.8 16.8-44.8 6.2s-16.8-30.7-6.2-44.8L65.4 207c22.4-29.6 57.5-47 94.6-47s72.2 17.4 94.6 47l58.9 77.7c10.7 14.1 7.9 34.2-6.2 44.8s-34.2 7.9-44.8-6.2l-28.6-37.8L265 378.9c3.5 10.4-4.3 21.1-15.2 21.1H232v80c0 17.7-14.3 32-32 32s-32-14.3-32-32V400H152v80c0 17.7-14.3 32-32 32s-32-14.3-32-32zM480 128c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64zm-8 256v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V300.5L395.1 321c-9.4 15-29.2 19.4-44.1 10s-19.4-29.2-10-44.1l51.7-82.1c17.6-27.9 48.3-44.9 81.2-44.9h12.3c33 0 63.7 16.9 81.2 44.9L619.1 287c9.4 15 4.9 34.7-10 44.1s-34.7 4.9-44.1-10L552 300.5V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V384H472z"/></svg>
                </div>

                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-6">
                  <strong>Família e Sucessões</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
                </div>

                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-5">
                  <strong>Trabalhista</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg>
                </div>

                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-5">
                  <strong>Consumidor</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clipboard2-pulse" viewBox="0 0 16 16">
                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                    <path d="M9.979 5.356a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.926-.08L4.69 10H4.5a.5.5 0 0 0 0 1H5a.5.5 0 0 0 .447-.276l.936-1.873 1.138 3.793a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h.5a.5.5 0 0 0 0-1h-.128L9.979 5.356Z"/>
                  </svg>
                </div>

                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-5">
                  <strong>Saúde pública</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                  </svg>
                </div>
                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-5">
                  <strong>Direito tributário</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-building-check" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z"/>
                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z"/>
                    <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                  </svg>
                </div>
                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-5">
                  <strong>Direito imobibiliário</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                  </svg>
                </div>
                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-6">
                  <strong>Direito administrativo</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card" style="max-height: 120px;">
              <div class="card-body d-flex flex-column align-content-center flex-wrap text-center">

                <div class="px-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" height="36" width="36" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 96V320H64L64 96H384zM64 32C28.7 32 0 60.7 0 96V320c0 35.3 28.7 64 64 64H181.3l-10.7 32H96c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H277.3l-10.7-32H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm464 0c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H528zm16 64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16s7.2-16 16-16zm-16 80c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16zm32 224c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg>
                </div>
                <h4 class="card-title align-center mbr-black mbr-fonts-style fs-6">
                  <strong>Direito digital</strong>
                </h4>
                <div style="font-size: .7rem; text-transform: uppercase;">
                  <a href="#" class="text-secondary fw-bold">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </section>

      <section id="wp-custom-widgets">
        <div class="section-title my-5">
          <h2 class="d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffc107" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            <span class="ms-2">
              Nossas avaliações
            </span>
          </h2>
          <div class="border-inner"></div>
        </div>
        <!-- As áreas de widgets WordPress ficarao neste espaco aqui -->
        <?php if ( is_active_sidebar( 'wp-custom-widgets' ) ) : ?>
          <?php dynamic_sidebar( 'wp-custom-widgets' ); ?>
        <?php endif; ?>
      </section>

    </div>
    <div class="col-md-4 py-4">

      <div class="section-title">
        <h4>Últimas publicações</h4>
        <div class="border-inner"></div>
      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="d-flex pb-3 border-bottom mb-3">
          <div>
            <?php the_post_thumbnail([70, 70], ['style' => 'max-width: none!important;']); ?>
          </div>
          <div class="ms-3">
            <a href="<?php the_permalink() ?>" class="text-decoration-none fw-bold" style="font-size: .9rem;">
              <?php the_title() ?>
            </a>
            <div class="small text-muted"><?php the_time('j F Y'); ?></div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

      <div class="d-grid gap-2 my-4">
        <a href="https://wa.me/84987329303" target="_blank" class="btn btn-lg text-uppercase fw-bold btn-outline-primary d-flex py-3" type="button">
          <span style="line-height:0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00E107" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
            </svg>
          </span>
          <span class="ms-4 fs-6">
            Entrar em contato por whatsapp
          </span>
        </a>
        <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ramonsaldanhaadv/triagem?hide_gdpr_banner=1&primary_color=cd9849'});return false;" class="btn btn-lg text-uppercase fw-bold btn-outline-primary d-flex py-3" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>
          </span>
          <span class="ms-4 fs-6">
            Agende um atendimento preliminar
          </span>
        </a>
      </div>

    </div>
  </div>
</div>

 
<?php get_footer();
