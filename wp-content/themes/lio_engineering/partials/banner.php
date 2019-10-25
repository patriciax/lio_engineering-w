  <div class="main-banner">
    <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner' ); ?>
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php if( get_field('banner_inicio') ): ?>
      <div class="main-banner__item">
        <div class="main-banner__text">
          <div class="main-banner__title animated fadeIn wow">
             <p><?php the_field('titulo_inicio'); ?></p>        
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
      <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>

  <div class="main-item__banner container  ">
    <div class="main-item__contenido animated fadeInUp wow" data-wow-duration="1s">
   
      <div class="row">
      <?php $args = array( 'post_type' => 'logros', 'posts_per_page' => 4, 'orderby' => 'slug',
                          'order' => 'ASC'); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-md-3">
          <div class="main-item__content">
            <div class="img_shadow">
                <?php if( get_field('icono_de_logros') ): ?>
                <img src="<?php the_field('icono_de_logros'); ?>"/>
                <?php endif; ?>
            </div>
            
            <span class="timer" data-to="1978" data-speed="1500"><?php the_field('numero_de_logros'); ?></span>
            <p><?php the_title(); ?></p> 
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      
    </div>
   
  </div>