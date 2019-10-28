<section class="main-service ">
    <div class="main-service__content container">
      <div class="main-about__title main-about__title--service  ">
        <span>Bienvenidos a </span>
        <h3>Nuestros servicios</h3>
      </div>
      <div class="main-service__description container mt-5 mb-5 ">
        <p>    <?php the_content(); ?></p>
        
      </div>
      <div class="main-service__card">
        <div class="row">
          <?php $args = array( 'post_type' => 'nuestros_servicios', 'posts_per_page' => 4 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-md-3">
            <a href="<?php the_permalink(); ?>">
              <div class="main-service__card-body">
                <div class="img_shadow--service">
                    <?php if( get_field('icono') ): ?>
                    <img src="<?php the_field('icono'); ?>"/>
                    <?php endif; ?>
                </div>
                <p><?php the_title(); ?></p>
                <?php if( get_field('Descripcion_del_servicio') ): ?>
                <span> <?php the_field('Descripcion_del_servicio'); ?>  </span>
                    <?php endif; ?>
           
              </div>
            </a>
          </div>
          <?php endwhile; ?>
          </div>
        </div>
      </div>

    <!-- <div class="background">
<img src="assets/img/forms.png" alt="">
    </div> -->
  </section>