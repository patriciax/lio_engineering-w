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
        <img class="m-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/icon_3.png" alt="">
      <div class="main-about__title">
        <span>Servicio </span>
        <h3>Ingeniería</h3>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="history_description">
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
              scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
              <br><br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
              scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <img     width="100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image_2.png" alt="">
        </div>


      </div>
      <div class="history_description">
        <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was
          popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
          recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
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
      </div>
     </div>
    </div>
  </section>


<?php get_footer(); ?>