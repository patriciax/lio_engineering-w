<section class="main-service ">
    <div class="main-service__content container">
      <div class="main-about__title main-about__title--service  ">
        <span>Bienvenidos a </span>
        <h3>Nuestros servicios</h3>
      </div>
      <div class="main-service__description container mt-5 mb-5 ">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
          and
          scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
          electronic typesetting, remaining essentially unchanged.</p>
      </div>
      <div class="main-service__card">
        <div class="row">
          <?php $args = array( 'post_type' => 'nuestros_servicios', 'posts_per_page' => 4 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-md-3">
            <a href="servicios-detalle.html">
              <div class="main-service__card-body">
                <div class="img_shadow--service">
                    <?php if( get_field('icono') ): ?>
                    <img src="<?php the_field('icono'); ?>"/>
                    <?php endif; ?>
                </div>
                <p><?php the_title(); ?></p>
                <span> <?php echo excerpt(30); ?> </span>
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