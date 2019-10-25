<?php  get_header(); ?>
<div class="main-banner main-banner--nosotros">
    <div class="main-nosotros__content">
    <?php $args = array( 'post_type' => 'banner' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php if( get_field('banner_service') ): ?>
      <div class="main-banner__item">
        <div class="main-banner__text main-banner__text--nosotros">
          <div class="main-banner__title ">
          
            <p><?php the_field('titulo_service'); ?></p>
          </div>
          <div class="main-banner--nosotros__description container">
              <p> <?php the_field('descripcion_service'); ?></p>
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
  
  

<?php $i = 1; ?>
<?php $args = array( 'post_type' => 'nuestros_servicios' ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if( $i %2==0 ) : ?>
       <section class="main-about main-service__genera container">
          <div class="row">
      <div class="col-md-6">
        <div class="icono">
          <?php if( get_field('icono') ): ?>
              <img src="<?php the_field('icono'); ?>"/>
              <?php endif; ?>
        </div>
        <div class="main-about__title">

          <span>Servicio</span>
          <h3><?php the_title(); ?></h3>
        </div>

        <div class="main-anout__description">
          <p><?php echo excerpt(60); ?></p>
        </div>
        <div class="main-banner__btn pt-5">
          <a href="<?php the_permalink(); ?>" class="btn_custom m-0 btn_custom--servicios ">Leer más</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="main-about__img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="">
        </div>
      </div>
  </div>
  </section>
      <?php else :  ?>
          <section class="main-about main-service__general bg--service  ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="main-about__img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                          alt="">                    
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="icono">
                       <?php if( get_field('icono') ): ?>
                           <img src="<?php the_field('icono'); ?>"/>
                           <?php endif; ?>
                    </div>
                  <div class="main-about__title">

                      <span>Servicio </span>
                      <h3><?php the_title(); ?></h3>
                    </div>

                    <div class="main-anout__description">
                      <p><?php echo excerpt(60); ?></p>
                    </div>
                    <div class="main-banner__btn pt-5">
                      <a href="<?php the_permalink(); ?>"  class="btn_custom m-0 btn_custom--servicios ">Leer más</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
     
          <?php endif; ?> 
          <?php $i++; ?>   
        <?php endwhile; ?>
  <?php get_footer(); ?>