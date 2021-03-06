<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177776157-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-177776157-1');
</script>


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
                            Te ayudamos a crecer a través de la innovación.
                        </h1>
                    </div>

                    <div data-split="lines" data-split-page-reveal>
                        <h6 class="masthead__text text-light mt-40 md:mt-20 js-text">
                            Somos una agencia de productos digitales, y estamos
                            para evolucionar tus ideas mediante la innovación del
                            diseño y la tecnología.
                        </h6>
                    </div>

                    <div class="masthead__button overflow-hidden mt-48 md:mt-32">
                        <?php echo $this->Html->link(
                            'Mira lo que hacemos',
                            [
                                'controller' => 'soluciones',
                                'action' => 'vista'
                            ],
                            [
                                'class' => 'button -lg -white text-black js-button'
                            ] //Clase si es que tiene
                        ); ?>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1 z-1">
                <div data-parallax="1" class="masthead__img overflow-hidden h-100vh ml-minus-sm md:ml-0">
                    <div data-parallax-target class="bg-image js-lazy js-image" data-bg="https://lupdigital.com/img/banners/home1.png"></div>
                    <div class="masthead__img__cover js-image-cover"></div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->

    <!-- ui-element start -->
    <div class="ui-element -bottom md:d-none js-ui">
        <button type="button" class="ui-element__scroll js-ui-scroll-button text-white" style="font-weight:600;">
            Desliza <i class="icon" data-feather="arrow-down"></i>
        </button> </div> <!-- ui-element end -->
</section>
<!-- section end -->
<!-- ui-element start -->
<div class="ui-element -left js-ui md:d-none">
    <div class="ui-element__social -column text-white js-bottom-left-links">
        <a target="_blank" href="https://www.instagram.com/lup.digital/"><i class="fab fa-instagram"></i></a>
        <a target="_blank" href="https://www.facebook.com/Lup-digital-103352521487143/"><i class="fab fa-facebook"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCDVTUoUVWgPXflBtz-0l7Ag?view_as=subscriber"><i class="fab fa-youtube"></i></a>
        <a target="_blank" href="https://www.linkedin.com/company/lupdigital/"><i class="fab fa-linkedin"></i></a>
    </div>
</div>
<!-- ui-element end -->
</section>
<!-- section end -->

<!-- section start -->
<section>
    <div class="sectionVideo h-lg">
        <div data-parallax="0.9" class="h-full pc-vista">
            <div class="bg-image js-lazy" data-bg="img/banners/lup-muestra.jpg"></div>
        </div>

        <div data-parallax="0.9" class="h-full mobile-vista">
            <div class="bg-image js-lazy" data-bg="img/banners/lup-muestra-mobile.jpg"></div>
        </div>

        <div data-cursor class="sectionVideo__btn bg-white text-black js-video-button" style="margin-top: 150px;">
            <div class="sectionVideo__btn__inner">
                <i class="icon str-width-lg" data-feather="youtube"></i>
            </div>
        </div>

        <div class="sectionVideo__wrap js-video-wrap">
            <div class="sectionVideo__iframe__wrap ratio ratio-16:9">
                <iframe src="https://www.youtube.com/embed/s_r2CTe2xww" allowfullscreen></iframe>
            </div>
        </div>
    </div>
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
                    <h5>
                        <p class="sectionHeading__subtitle -light">
                            Desarrollamos soluciones creativas para pequeñas y grandes marcas, creamos productos auténticos, identidades y mucho mas.
                        </p>
                    </h5>
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
                                    Desarrollo Web & App
                                </h3>
                                <p class="serviceCard__text text-light mt-12">
                                    Digitalizamos tus proyectos y los adaptamos a las nuevas tecnologías. El desarrollo tecnológico es uno
                                    pilares fundamentales para dar el paso a la modernización. Nos encantaría hacerlo realidad.

                                </p>
                                <div class="mt-16">
                                    <?php echo $this->Html->link(
                                        'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                        [
                                            'controller' => 'soluciones',
                                            'action' => 'vista' . '#desarrollo'
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
                                    Marketing Digital
                                </h3>
                                <p class="serviceCard__text text-light mt-12">
                                    Manejamos y potenciamos tus redes sociales para dar un impulso positivo a tu emprendimiento. Posicionamos
                                    a tu marca para darle visibilidad de la manera mas efectiva, generando valor y creciendo organicamente.
                                </p>
                                <div class="mt-16">
                                    <?php echo $this->Html->link(
                                        'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                        [
                                            'controller' => 'soluciones',
                                            'action' => 'vista' . '#marketing'
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
                                    Diseñamos, mejoramos y construimos tus productos con las mejores metodologías de evaluaciones y
                                    prototipados para llevar al siguiente nivel tu experiencia online.
                                </p>
                                <div class="mt-16">
                                    <?php echo $this->Html->link(
                                        'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                        [
                                            'controller' => 'soluciones',
                                            'action' => 'vista' . '#ux'
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
                                    Diseñamos una identidad única para tu proyecto a partir de conceptos de
                                    diseños y comunicación. Sabemos que el diseño es una parte fundamental
                                    de tu marca.
                                </p>
                                <div class="mt-16">
                                    <?php echo $this->Html->link(
                                        'Saber mas <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>',
                                        [
                                            'controller' => 'soluciones',
                                            'action' => 'vista' . '#diseno'
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

<div>

    <!-- section start -->
    <section class="layout-pt-md layout-pb-md ">
        <!-- container start -->
        <div class="container-fluid px-0">
            <!-- row start -->
            <div data-anim-wrap class="row no-gutters align-items-center">

                <div class="col-lg-6 z-1">
                    <div data-anim-child="img-right cover-dark-1 delay-2">
                        <div class="ratio ratio-1:1" data-parallax="1" style="width: 90%;">
                            <div data-parallax-target class="bg-image js-lazy" data-bg="https://lupdigital.com/img/banners/home2.png">
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
                                Desarrollando experiencias digitales.
                            </h2>

                        </div>
                        <div data-anim-child="slide-up delay-10" class="ml-minus-lg mr-minus-col-1 md:ml-0 md:mr-0">
                            <p class="text-light mt-56 lg:mt-40 md:mt-20">
                                Llevamos juntos tus ideas al siguiente nivel, con las ultimas tecnologías y las mejores metodologías.
                            </p>
                        </div>
                        <div data-anim-child="slide-up delay-9" style="padding-bottom:10px">
                            <?php echo $this->Html->link(
                                'Contactanos',
                                [
                                    'controller' => 'general',
                                    'action' => 'contacto'
                                ],
                                [
                                    'class' => 'button -md -outline-white text-white mt-56 lg:mt-48 md:mt-30'
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