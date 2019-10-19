<section class="main-about container">
<?php $args = array( 'post_type' => 'quienes-somos-home', 'posts_per_page' => 1 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="row">

      <div class="col-md-6">
        <div class="main-about__title animated fadeIn wow">
          <span>Bienvenidos a </span>
          <h3> <?php the_title(); ?></h3>
        </div>

        <div class="main-anout__description">
          <p> <?php the_content(); ?></p>
        </div>
        <div class="main-banner__btn pt-5 animated fadeIn wow">
          <a href="<?php bloginfo('url'); ?>/quienes-somos" class="btn_custom m-0 ">Ver mas</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="main-about__img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="">
        </div>
      </div>
  
    </div>
    <?php endwhile; ?>
  </section>


  

