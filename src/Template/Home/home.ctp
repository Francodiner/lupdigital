  <!-- section start -->
  <section class="masthead -type-4 js-masthead-type-4">
                <!-- container start -->
                <div class="container-fluid px-0">
                    <!-- row start -->
                    <div class="row no-gutters align-items-center h-full">
                        <div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1 sm:px-20 z-2">
                            <div class="masthead__content">
                                <div data-split="lines" data-split-page-reveal>
                                    <p class="masthead__subtitle uppercase text-sm tracking-md text-light mb-24 md:mb-16 js-subtitle">
                                        Soluciones creativas
                                    </p>
                                </div>

                                <div data-split="lines" data-split-page-reveal class="mr-minus-lg md:mr-0">
                                    <h1 class="masthead__title fw-700 text-white js-title">
                                        Creciendo juntos a través de la innovación, creatividad y tecnología.
                                    </h1>
                                </div>

                                <div data-split="lines" data-split-page-reveal>
                                    <p class="masthead__text text-light mt-40 md:mt-20 js-text">
                                        Porque tu futuro esta al alcanze de tu mano. Solo le falta que te demos la nuestra.
                                    </p>
                                </div>

                                <div class="masthead__button overflow-hidden mt-48 md:mt-32">
                                    <?php echo $this->Html->link(
                                                'Mira lo que hacemos',
                                                [
                                                    'controller' => 'soluciones',
                                                    'action' => 'vista'
                                                ],
                                                [
                                                    'class' => 'button -md -white text-black js-button'
                                                ] //Clase si es que tiene
                                            ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1 z-1">
                            <div data-parallax="0.7" class="masthead__img overflow-hidden h-100vh ml-minus-sm md:ml-0">
                                <div data-parallax-target class="bg-image js-lazy js-image" data-bg="img/backgrounds/2.jpg"></div>
                                <div class="masthead__img__cover js-image-cover"></div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->

                <!-- ui-element start -->
                <div class="ui-element -left js-ui md:d-none">
                    <div class="ui-element__social -column text-white js-bottom-left-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- ui-element end -->
            </section>
            <!-- section end -->

            <!-- section start -->
            <section class="layout-pt-md layout-pb-md" style="padding-top: 5rem; padding-bottom:0rem;">
                <!-- container start -->
                <div class="container">
                    <!-- row start -->
                    <div class="row justify-content-between">

                        <div class="col-lg-4 col-md-8">
                            <div class="sectionHeading -sm">
                                <p class="sectionHeading__subtitle -light" style="padding-top:1.65rem">
                                    Soluciones
                                </p>
                                <h2 class="sectionHeading__title leading-sm text-white">
                                    Nuestra experiencia.
                                </h2>
                                <br>
                                <p class="sectionHeading__subtitle -light">
                                    Desarrollamos Soluciones creativas para pequeñas y grandes marcas, creamos productos autenticos, identidades y mucho mas.
                                </p>
                            </div>
                        </div>


                        <div class="col-lg-7">
                            <!-- row start -->
                            <div class="row x-gap-72 y-gap-72 md:mt-48">

                                <div class="col-md-6">
                                    <div class="serviceCard">
                                        <div class="serviceCard__content">
                                            <div class="d-flex align-items-center ml-minus-4">
                                                <div class="px-20 py-20 bg-dark-1 shadow-dark rounded-full">
                                                    <i class="size-sm str-width-md text-accent" data-feather="code"></i>
                                                </div>
                                            </div>
                                            <h3 class="serviceCard__title text-2xl fw-500 text-white mt-32">
                                                Desarrollo Web
                                            </h3>
                                            <p class="serviceCard__text text-light mt-12">
                                                Construimos sitios web, landing pages, E-commerces, sistemas de gestion y mucho mas. Siempre con el usuario como eje del desarrollo. Porque que la gente ignora al diseño que ignora a la gente.
                                            </p>
                                            <div class="mt-16">
                                                <?php echo $this->Html->link(
                                                'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'desarrollo'
                                                ],
                                                [
                                                    'class' => 'button -icon text-white',
                                                    'escape' => false
                                                ]
                                            ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="serviceCard">
                                        <div class="serviceCard__content">
                                            <div class="d-flex align-items-center ml-minus-4">
                                                <div class="px-20 py-20 bg-dark-1 shadow-dark rounded-full">
                                                    <i class="size-sm str-width-md text-accent" data-feather="smartphone"></i>
                                                </div>
                                            </div>
                                            <h3 class="serviceCard__title text-2xl fw-500 text-white mt-32">
                                                Marketing
                                            </h3>
                                            <p class="serviceCard__text text-light mt-12">
                                                Posicionamos tu marca o servicio en las plataformas digitales mas utilizadas, con las ultimas tecnologias para maximizar tu exposicion.
                                            </p>
                                            <div class="mt-16">
                                                <?php echo $this->Html->link(
                                                'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'marketing'
                                                ],
                                                [
                                                    'class' => 'button -icon text-white',
                                                    'escape' => false
                                                ]
                                            ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="serviceCard">
                                        <div class="serviceCard__content">
                                            <div class="d-flex align-items-center ml-minus-4">
                                                <div class="px-20 py-20 bg-dark-1 shadow-dark rounded-full">
                                                    <i class="size-sm str-width-md text-accent" data-feather="users"></i>
                                                </div>
                                            </div>
                                            <h3 class="serviceCard__title text-2xl fw-500 text-white mt-32">
                                                Experiencia del usuario
                                            </h3>
                                            <p class="serviceCard__text text-light mt-12">
                                                Diseñamos tu aplicacion, producto o pagina web, con las mejores metodologias, para construir valor alrededor de tu recurso mas importante, el usuario.
                                            </p>
                                            <div class="mt-16">
                                            <?php echo $this->Html->link(
                                                'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'ux'
                                                ],
                                                [
                                                    'class' => 'button -icon text-white',
                                                    'escape' => false
                                                ]
                                            ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="serviceCard">
                                        <div class="serviceCard__content">
                                            <div class="d-flex align-items-center ml-minus-4">
                                                <div class="px-20 py-20 bg-dark-1 shadow-dark rounded-full">
                                                    <i class="size-sm str-width-md text-accent" data-feather="codepen"></i>
                                                </div>
                                            </div>
                                            <h3 class="serviceCard__title text-2xl fw-500 text-white mt-32">
                                                Diseño multimedia
                                            </h3>
                                            <p class="serviceCard__text text-light mt-12">
                                                Diseñamos un excelente branding completo para tu servicio, desde tu logo, una publicidad hasta tu propio estilo para rockearla en cualquier lugar.
                                            </p>
                                            <div class="mt-16">
                                            <?php echo $this->Html->link(
                                                'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'diseno'
                                                ],
                                                [
                                                    'class' => 'button -icon text-white',
                                                    'escape' => false
                                                ]
                                            ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- row end -->
                        </div>

                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </section>
            <!-- section end -->


            <!-- section start -->
            <section class="layout-pt-md layout-pb-md">
                <!-- container start -->
                <div class="container-fluid px-0">
                    <!-- row start -->
                    <div data-anim-wrap class="row no-gutters align-items-center">

                        <div class="col-lg-6 z-1">
                            <div data-anim-child="img-right cover-dark-1 delay-2">
                                <div class="ratio ratio-1:1" data-parallax="0.7">
                                    <div data-parallax-target class="bg-image js-lazy" data-bg="img/backgrounds/5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 z-2 ml-80 md:ml-0 md:mt-48">
                            <div class="md:container sectionHeading -lg pt-16">
                                <div data-anim-child="slide-up delay-9">
                                    <p class="sectionHeading__subtitle -light">
                                        Nosotros
                                    </p>
                                </div>
                                <div data-anim-child="slide-up delay-10" class="ml-minus-lg mr-minus-col-1 md:ml-0 md:mr-0">
                                    <h2 class="sectionHeading__title leading-sm text-white mt-48 md:mt-24">
                                        Desarrollando y diseñando experiencias digitales.
                                    </h2>
                                </div>
                                <div data-anim-child="slide-up delay-11">
                                    <p class="text-light mt-56 lg:mt-40 md:mt-20">
                                        Llevamos juntos tus ideas al siguiente nivel, con las ultimas tecnologias y las mejores metodologias.
                                    </p>
                                </div>
                                <div data-anim-child="slide-up delay-12">     
                                    <?php echo $this->Html->link(
                                                'Contactanos',
                                                [
                                                    'controller' => 'general',
                                                    'action' => 'contacto'
                                                ],
                                                [
                                                    'class' => 'button -md -outline-white text-white mt-56 lg:mt-48 md:mt-32'
                                                ] //Clase si es que tiene
                                            ); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </section>
            <!-- section end -->
