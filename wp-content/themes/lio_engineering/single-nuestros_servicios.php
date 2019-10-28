<?php  get_header(); ?>

<div class="main-banner main-banner--nosotros">
    <div class="main-nosotros__content">
    <?php $args = array( 'post_type' => 'banner_service' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__item">
        <div class="main-banner__text main-banner__text--nosotros">
          <div class="main-banner__title container">
            <p></p>
            <p><?php the_title(); ?></p>
          </div>
           <div class="main-banner--nosotros__description container">
              <p> <?php the_content(); ?></p>
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

<section class=" servicios__details">
    <div class="container">
        <?php while (have_posts() ) : the_post(); ?>
        <div class="icono">
          <?php if( get_field('icono') ): ?>
              <img src="<?php the_field('icono'); ?>"/>
              <?php endif; ?>
        </div>
      <div class="main-about__title">
        <span> Servicio </span>
        <h3><?php the_title(); ?></h3>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="history_description">
          <?php if( get_field('Descripcion_del_servicio') ): ?>
                <p> <?php the_field('Descripcion_del_servicio'); ?>  </p>
                    <?php endif; ?>
           
          </div>
        </div>
        <div class="col-md-6">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                alt="">       
        </div>
      </div>
<?php endwhile; ?>
    </div>
  </section>



  <section id="component ">
  <div class="main-component__content ">
    <div class="main-component__body body__galery ">
        <div class="bg--component"></div>
      <div class="main-component__description container servicios__galeria">
        <h3>Galería</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
        <div class="main-noticia__content">
            <div class="main-team__slider  galery__item">
            <?php $args = array( 'post_type' => 'galeria' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <a href="#"> 
                <div class="main-noticia__body main-noticia__team galery__card">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                       alt="">
                  <div class="date__description description__galery">
                    <div class="">
                      <p><?php the_title(); ?></p>
                      <?php if( get_field('Descripcion_del_servicio') ): ?>
                <p> <?php the_field('Descripcion_del_servicio'); ?>  </p>
                    <?php endif; ?>
                    </div>
                  </div>
                </div>
              </a>
              <?php endwhile; ?>
            </div>
          </div>
      </div>
     </div>
    </div>
  </section>

<?php get_footer(); ?>
