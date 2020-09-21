  <!-- section start -->
  <section class="layout-pt-xl layout-pb-xs">
    <!-- container start -->
    <div data-anim-wrap class="container">
      <!-- row start -->
      <div class="row">
        <div class="col-xl-9 offset-xl-1 col-lg-11">
          <div data-anim-child="slide-up delay-1" class="sectionHeading -lg">
            <p class="sectionHeading__subtitle text-white">
              Contactanos
            </p>
            <h1 class="sectionHeading__title leading-sm text-white">
              ¿Tenes una idea para tu proyecto? Escribinos.
            </h1>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- section end -->

  <!-- section start -->
  <section class="layout-pt-md layout-pb-lg">
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div data-anim="slide-up delay-3" class="row justify-content-center">
        <div class="col-xl-10">
          <div class="sectionHeading -sm">
            <h2 class="sectionHeading__title text-white">
              ¡Charlemos!
            </h2>
            <p class="text-black leading-md mt-12 text-white">
              Contanos quien sos y en que estas pensando.

              <a href="#" style="font-weight: 700;">Si queres trabajar con nosotros, es por aqui.</a>
            </p>
          </div>
        </div>

        <div class="w-1/1"></div>

        <div class="col-xl-10 mt-48 sm:mt-32">
          <div class="contact-form -type-1">
            <?= $this->Flash->render('EmailOk') ?>
            <?= $this->Form->create(null, ['class' => 'row x-gap-40 y-gap-32']) ?>
            <!-- NOTA IMPORTANTE: AL DEVOLVER ERROR DE ARRIBA DE "UPS, ALGO SALIO MAL..." EL FONDO ES MUY OSCURO Y LA LETRA ES NEGRA. CAMBIAR! -->
            <div class="col-lg-6 text-white">
              <label class="js-input-group text-white">
                Mi nombre es
                <input type="text" name="name" data-required placeholder="Su turno señor Thompson" style="color: white; border-bottom-color: white;" required />
                <span class="form__error"></span>
              </label>
            </div>

            <div class="col-lg-6 text-white">
              <label class="js-input-group text-white">
                Mi mail es
                <input type="email" name="email" data-required placeholder="thompson@umbrellacorp.com" style="color: white; border-bottom-color: white;" required />
                <span class="form__error"></span>
              </label>
            </div>

            <div class="col-lg-12 text-white">
              <label class="js-input-group text-white">
                Mi idea es
                <input type="text" name="asunto" data-required placeholder="Desarrollar un sitio" style="color: white; border-bottom-color: white;" required />
                <span class="form__error"></span>
              </label>
            </div>

            <div class="col-12">
              <label class="js-input-group text-white">
                ¿En que estas pensando?
                <textarea name="message" id="message" rows="2" placeholder="Escribinos tu idea aqui, nosotros te contactaremos para hablar mas en profundidad." style="color: white; border-bottom-color: white;" required></textarea>
                <span class="form__error"></span>
              </label>
            </div>

            <div class="col-12 text-white">
              <button type="submit" class="button -md -white">
                Enviar
              </button>
            </div>
            <?= $this->Form->end(); ?>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- section end -->