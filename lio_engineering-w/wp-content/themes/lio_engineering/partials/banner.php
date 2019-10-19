
  <div class="main-banner">
    <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__item">
        <div class="main-banner__text">
          <div class="main-banner__title animated fadeIn wow">
             <p><?php the_title(); ?></p>        
          </div>
          <div class="main-banner__btn ">
            <a href="" class="btn_custom ">Ver mas</a>
            <a href="" class="btn_custom btn-transparent">Descubrir</a>
          </div>
        </div>
        <div class="main-banner__img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="">
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

  <div class="main-item__banner container  ">
    <div class="main-item__contenido animated fadeInUp wow" data-wow-duration="1s">
      <div class="row">
        <div class="col-md-3">
          <div class="main-item__content">
            <div class="img_shadow">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worker.png">
            </div>
            <span class="timer" data-to="1965" data-speed="1500">1965</span>
            <p>Constituida</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-item__content">
            <div class="img_shadow">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/engineer.png">
            </div>
            <span class="timer" data-to="1978" data-speed="1500">1978</span>
            <p>Inventorías
              a Proyectos</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-item__content">
            <div class="img_shadow">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wrench.png">
            </div>
            <span class="timer" data-to="140" data-speed="1500">140</span>
            <p>Proyectos
              ejecutados</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-item__content">
            <div class="img_shadow">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png">
            </div>
            <span class="timer" data-to="260" data-speed="1500">260</span>
            <p>Consultoría a
              estudios y diseños</p>
          </div>
        </div>
      </div>
    </div>
   
  </div>