<section id="contacto" class="form__image">
    <div class="container">
      <div class="form__content">
        <div class="main-about__title">
          <span>Quieres </span>
          <h3>Contactarnos</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
        </div>
        <!-- <form>
          <div class="form-row">
            <div class="form-group col-md-6">

              <input type="email" class="form-control" id="inputEmail4" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">

              <input type="text" class="form-control" id="inputPassword4" placeholder="Telefono">
            </div>
          </div>
          <div class="form-group">

            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group">

            <input type="text" class="form-control" id="inputAddress2" placeholder="Correo">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="inputMessage" placeholder="Asunto">
          </div>


          <div class="main-banner__btn mt-5 btn__form">
            <a href="" class="btn_custom ">Enviar</a>
          </div> -->
        </form>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
      </div>
    </div>

  </section>