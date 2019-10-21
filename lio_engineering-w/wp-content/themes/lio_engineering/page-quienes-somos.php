<?php  get_header(); ?>
<div class="main-banner main-banner--nosotros">
    <div class="main-nosotros__content">
    <?php $args = array( 'post_type' => 'quienes_somos' ); ?>
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
  <!-------------------------------- HISTORIA -------------------------------->
  <section class="history">
    <div class="container">
    <?php $args = array( 'post_type' => 'nuestra_historia', 'posts_per_page' => 1 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-about__title">
        <span>Nuestra </span>
        <h3><?php the_title(); ?></h3>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="history_description">
            <p>
             <?php the_content(); ?>
            </p>
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

  <!-------------------------------- COMPONENTE-------------------------------->
  <section id="component">
  <div class="main-component__content">
    <div class="main-component__body">
      <div class="bg--component"></div>
      <div class="main-component__description container">
        <h3>Nuestros componentes</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make.</p>
   
      </div>
    <div class="container">
      <div class="row">
      <?php $args = array( 'post_type' => 'componentes', 'posts_per_page' => 3 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-md-12 col-lg-4">
          <div class="main-card__body">
              <div class="main-card__content">
                <h3><?php the_title(); ?></h3>
                <p><?php echo excerpt(100); ?></p>
              </div>
             
          </div>
        </div>
        <?php endwhile; ?>
  </div>

  </div>
  </section>
  <!-------------------------------- ENFOQUE-------------------------------->

  <section id="enfoque" class="enfoque history">
    <div class="container">
    <?php $args = array( 'post_type' => 'enfoque_about', 'posts_per_page' => 1 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-about__title">
        <span>Nuestro  </span>
        <h3><?php the_title(); ?></h3>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="history_description">
            <p>
            <?php the_content(); ?>
            </p>
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

  <!-------------------------------- TEAM-------------------------------->
  <section id="team" class="container noticias">
    <div class="main-about__title main-about__title--service  ">
      <span>Nuestro equipo </span>
      <h3>De expertos</h3>
    </div>
    <div class="main-noticia__content">
      <div class="main-team__slider">
      <?php $args = array( 'post_type' => 'team'); ?>
             <?php $loop = new WP_Query( $args ); ?>
             <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <a href="#">
          <div class="main-noticia__body main-noticia__team">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>"
               alt="">
            <div class="date__description">
              <div class="date__title">
                <p><?php the_title(); ?></p>

                <span>
                <?php echo excerpt(30); ?>
                </span>
              </div>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>