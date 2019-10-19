<section id="noticias" class="container noticias">
    <div class="main-about__title main-about__title--service animated fadeIn wow  ">
      <span>Bienvenidos a </span>
      <h3>Nuestras noticias</h3>
    </div>
    <div class="main-noticia__content">
      <div class="main-noticias__slider">
      <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 4); ?>
             <?php $loop = new WP_Query( $args ); ?>
             <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
        <a href="<?php the_permalink(); ?>">
          <div class="main-noticia__body">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                 alt="">
            <div class="date__description">
              <div class="date">
                <div class="date__body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" alt="">
                  <span> <?php echo get_the_time('j');?>
                         <?php echo get_the_time('M') ?>
                         <?php echo get_the_time('Y') ?>
                 </span>
                </div>
                <div class="date__body">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_2.png" alt="">
                  <span>
                   <?php the_author(); ?>
                  </span>
                </div>
              </div>

              <div class="date__title">
              <p> <?php the_title(); ?></p>
                <span>
                  <?php echo excerpt(30); ?>
                </span>
              </div>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
      </div>
      <div class="main-banner__btn btn__noticia">
        <a href="<?php bloginfo('url'); ?>/noticias-all" class="btn_custom  ">Ver mas</a>
      </div>
    </div>
  </section>
