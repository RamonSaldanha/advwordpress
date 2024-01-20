<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="container pb-3 pt-5">
  <div class="row flex-lg-row-reverse align-items-center g-5">
    <div class="col-10 mx-auto col-sm-8 col-lg-5">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/escritorio.jpg"
        class="d-block mx-lg-auto w-75 img-fluid rounded" alt="" loading="lazy">
    </div>
    <div class="col-lg-7">
      <div class="lc-block mb-3">
        <div editable="rich">
          <h2 class="fw-bold display-6">Advocacia especializada</h2>
          <p class="subtitle">Atuação em todo o Brasil - atendimento presencial ou 100% on-line.
            <img width="28" height="28" src="https://img.icons8.com/emoji/48/brazil-emoji.png" alt="brazil-emoji"/>
          </p>
        </div>
      </div>

      <div class="lc-block mb-3">
        <div editable="rich">
          <p class="lead">
            Disponibilizamos métodos ágeis e precisos para pessoas que buscam reivindicar seus direitos, incluindo
            assuntos
            criminais, ações contra o Poder Público e Planos de Saúde. Nosso foco é na concretização de sonhos e na
            proteção dos
            seus direitos, esforçando-nos incansavelmente para assegurar os melhores resultados para nossos clientes,
            com um
            compromisso firme e atenção especializada.
          </p>
        </div>
      </div>

      <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
        <a class="btn btn-success px-4 me-md-2 d-flex align-items-center" href="https://wa.me/5584997100860"
          target="blank" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            style="vertical-align: baseline !important;" class="bi bi-whatsapp me-2" viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg>
          Entre em contato agora
        </a>
        <a class="btn btn-outline-secondary px-4 d-flex align-items-center" href="#articles" role="button">
          Continue conhecendo
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
          </svg>
        </a>
      </div>

    </div>
  </div>
</div>

<div class="container px-4 py-5" id="custom-cards">
  <h2 class="fw-bold display-6 text-center" id="articles">últimos artigos</h2>
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <?php 
      query_posts('posts_per_page=6');
      if (have_posts()) : while (have_posts()) : the_post(); 
    ?>
    <div class="col">
      <div class="card text-bg-dark">
        <div class="card-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); height: 300px;"></div>
        <div class="card-img-overlay d-flex flex-column p-5 pb-5 text-white text-shadow-1">
          <h5 class="pt-5  mb-4 display-7 lh-sm fw-bold text-shadow">
            <a href="<?php the_permalink(); ?>" class="text-white text-decoration-none">
              <?php the_title(); ?>
            </a>
          </h5>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="Bootstrap" width="32" height="32"
                class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-calendar-event" viewBox="0 0 16 16">
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                <path
                  d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
              </svg>
              <small>
                <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás'; ?>
              </small>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php
      endwhile;
    else :
      ?>
    <p>
      <?php esc_html_e('Desculpe, não há postagens para exibir.'); ?>
    </p>
    <?php endif; ?>
  </div>
</div>


<section class="text-light-emphasis bg-primary">
  <div class="container px-4 py-5">

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col flex-column align-items-start gap-2">
        <h2 class="fw-bold text-light">Estamos prontos para lhe atender. Atendimento 100% humanizado.
        </h2>
        <p class="text-white-50">Temos uma infraestrutura física para receber nossos clientes, mas também oferecemos
          atendimento remoto 100% digital.
          Atendimento em todo o Brasil.
        </p>
        <div>
          <a class="btn btn-success px-4 me-md-2 text-center d-flex align-items-center"
            href="https://wa.me/5584997100860" target="blank" role="button" style="max-width: 250px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              style="vertical-align: baseline !important;" class="bi bi-whatsapp me-2" viewBox="0 0 16 16">
              <path
                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
              </path>
            </svg>
            Entre em contato agora
          </a>
        </div>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-secondary bg-gradient fs-5 rounded-3 px-2 fw-semibold mb-2"
              style="width: 30px;">
              1
            </div>
            <h4 class=" fw-semibold mb-0 text-light">Entre em contato</h4>
            <p class="text-white-50">
              Sempre respondemos prontamente via <strong>whatsapp</strong>.
              <br />
            </p>
          </div>

          <div class="col gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-secondary bg-gradient fs-5 rounded-3 px-2 fw-semibold mb-2"
              style="width: 30px;">
              2
            </div>
            <h4 class="fw-semibold mb-0 text-light">Relate o caso</h4>
            <p class="text-white-50">Nosso advogado especialista vai analisar o seu caso. É importante que você envie as
              provas que possui.</p>
          </div>

          <div class="col gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-secondary bg-gradient fs-5 rounded-3 px-2 fw-semibold mb-2"
              style="width: 30px;">
              3
            </div>
            <h4 class="fw-semibold mb-0 text-light">Consulta</h4>
            <p class="text-white-50">Caso prefira, agendaremos uma consulta, que pode ser presencial ou on-line.</p>
          </div>

          <div class="col gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-secondary bg-gradient fs-5 rounded-3 px-2 fw-semibold mb-2"
              style="width: 30px;">
              4
            </div>
            <h4 class="fw-semibold mb-0 text-light">Protocolo</h4>
            <p class="text-white-50">Seu processo será protocolado em breve e o número do protocolo será enviado assim
              que estiver disponível.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row text-center pb-5 pt-3">
    <div class="col-md-12 text-center">
      <div class="lc-block"><span editable="inline" class="small mt-4 d-block">Equipe especializada</span>
        <h2 class="fw-bold display-6 text-center">conheça nosso time</h2>
        <p editable="inline">Os profissionais da equipe são de excelência, treinados para oferecer atendimento ágil,
          eficiente e de alto padrão,
          correspondendo às necessidades dos clientes, acompanhado de excelentes resultados em suas demandas.</p>
      </div><!-- /lc-block -->
    </div>
  </div>
  <div class="row pb-4 justify-content-center">
    <!-- Team Start -->
    <div class="col-md-4 my-2">
      <div class="lc-block">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar-vivian.jpg" title="" alt=""
          loading="lazy" class="img-fluid rounded">
      </div>
      <div class="lc-block position-relative text-center mx-2 mt-n4 p-4 bg-light shadow" style="">
        <h4 editable="inline">Vivian Barroso</h4>
        <p editable="inline" class="small">Sócia fundadora</p>

        <div class="fs-6">
          <div class="mb-4 text-center">
            Graduada em direito. <br />
            Mestra em Direito. <br />
            Especialista em Direito Público. <br />
            Inscrita na OAB/RN 18.981.
          </div>
          <p class="fw-bold">Criminal</p>
          <?php
          echo do_shortcode('[lc_block]Defesa criminal[/lc_block]');
          echo do_shortcode('[lc_block]Defesa em crimes contra adm. pública[/lc_block]');
          ?>
          <p class="fw-bold">Concurso Público</p>
          <?php
            echo do_shortcode('[lc_block]Impugnação do Edital[/lc_block]');
            echo do_shortcode('[lc_block]Fases[/lc_block]');
            echo do_shortcode('[lc_block]TAF (Teste de Aptidão Fisica)[/lc_block]');
            echo do_shortcode('[lc_block]Anulação e recursos de questões[/lc_block]');
            echo do_shortcode('[lc_block]Recursos Administrativos diversos[/lc_block]');
            echo do_shortcode('[lc_block]Investigação Social[/lc_block]');
            echo do_shortcode('[lc_block]Check Exames médicos[/lc_block]');
            echo do_shortcode('[lc_block]Check Convocação[/lc_block]');
          ?>
          <p class="fw-bold">Servidor público</p>
          <?php
              echo do_shortcode('[lc_block]Sindicância[/lc_block]');
              echo do_shortcode('[lc_block]Improbidade Administrativa[/lc_block]');
              echo do_shortcode('[lc_block]Crimes contra a administração[/lc_block]');
            ?>
          <div class="collapse" id="moreItems1">
            <?php
              echo do_shortcode('[lc_block]Promoção/Progressão[/lc_block]');
              echo do_shortcode('[lc_block]PAD[/lc_block]');
              echo do_shortcode('[lc_block]Aposentadoria[/lc_block]');
              echo do_shortcode('[lc_block]Acumulação de cargo[/lc_block]');
              echo do_shortcode('[lc_block]Abandono de cargo[/lc_block]');
              echo do_shortcode('[lc_block]Licença para acompanhamento de cônjugue[/lc_block]');
              echo do_shortcode('[lc_block]Licença para capacitação[/lc_block]');
            ?>
          </div>
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#moreItems1"
            aria-expanded="false" aria-controls="moreItems1">
            Ver mais <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-down-short" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Team end -->
    <!-- Team Start -->
    <div class="col-md-4 my-2">
      <div class="lc-block">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar-ramon.jpg" title="" alt=""
          loading="lazy" class="img-fluid rounded">
      </div>
      <div class="lc-block position-relative text-center mx-2 mt-n4 p-4 bg-light shadow" style="">
        <h4 editable="inline">Ramon Saldanha</h4>
        <p editable="inline" class="small">Advogado</p>
        <div class="">
          <div class="mb-4 text-center">
            Graduado em Direito. <br />
            Mestre em Direito. <br />
            Especialista em Direito Tributário. <br />
            Inscrito na OAB/RN 19.000.
          </div>
          <?php
            echo do_shortcode('[lc_block]Saúde pública[/lc_block]');
            echo do_shortcode('[lc_block]Planos de saúde[/lc_block]');
            echo do_shortcode('[lc_block]Dissolução de empresa[/lc_block]');
            echo do_shortcode('[lc_block]Exclusão de sócio[/lc_block]');
            echo do_shortcode('[lc_block]Inventário e partilha de bens[/lc_block]');
            echo do_shortcode('[lc_block]Atrasos e cancelamentos de voo[/lc_block]');
            echo do_shortcode('[lc_block]Golpes digitais[/lc_block]');
            echo do_shortcode('[lc_block]Reclamação trabalhista[/lc_block]');
            echo do_shortcode('[lc_block]Defesa do contribuinte[/lc_block]');
            echo do_shortcode('[lc_block]Divórcio e partilha de bens[/lc_block]');
        ?>
          <div class="collapse" id="moreItems">
            <?php
                echo do_shortcode('[lc_block]Ação de alimentos[/lc_block]');
                echo do_shortcode('[lc_block]Consultivo imobiliário[/lc_block]');
                echo do_shortcode('[lc_block]Usucapião[/lc_block]');
            ?>
          </div>
          <button class="btn btn-primary" data-bs-toggle="collapse" href="#moreItems" role="button"
            aria-expanded="false" aria-controls="moreItems">
            Ver mais <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-down-short" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Team end -->
  </div>
</div>


<?php get_footer();