<!-- header start -->
<header class="header -dark -sticky-dark js-header-dark js-header">
    <!-- header__bar start -->
    <div class="header__bar">
        <div class="header__logo js-header-logo">
            <?php echo $this->Html->image("logo/lup.png", [
                            "alt" => "Lup-Logo",
                            'class' => 'header__logo__light',
                            'url' => ['controller' => 'Home', 'action' => 'home'],
                        ]); ?>
            <?php echo $this->Html->image("logo/lup.png", [
                            "alt" => "Lup-Logo",
                            'class' => 'header__logo__dark',
                            'url' => ['controller' => 'Home', 'action' => 'home'],
                        ]); ?>

        </div>

        <div class="header__menu js-header-menu">
            <button type="button" class="nav-button-open js-nav-open">
                <i class="icon" data-feather="menu"></i>
            </button>
        </div>
    </div>
    <!-- header__bar end -->

    <!-- nav start -->
    <nav class="nav js-nav">
        <div class="nav__inner js-nav-inner">
            <div class="nav__bg js-nav-bg"></div>

            <div class="nav__container">
                <div class="nav__header">
                    <button type="button" class="nav-button-back js-nav-back">
                        <i class="icon" data-feather="arrow-left-circle"></i>
                    </button>

                    <button type="button" class="nav-btn-close js-nav-close pointer-events-none">
                        <i class="icon" data-feather="x"></i>
                    </button>
                </div>

                <div class="nav__content">
                    <div class="nav__content__left">
                        <div class="navList__wrap">
                            <ul class="navList js-navList">
                                <li> <?php echo $this->Html->link(
                                                'Inicio',
                                                [
                                                    'controller' => 'home',
                                                    'action' => 'home'
                                                ] //Clase si es que tiene
                                            ); ?></li>
                                <li> <?php echo $this->Html->link(
                                                'Soluciones',
                                                [
                                                    'controller' => 'soluciones',
                                                    'action' => 'vista'
                                                ],
                                                [
                                                    'class' => 'menu-item'
                                                ] //Clase si es que tiene
                                            ); ?></li>


                                <li class="menu-item-has-children">
                                    <a>Portfolio</a>

                                    <ul class="subnav-list">
                                        <li> <?php echo $this->Html->link(
                                                'Desarrollo Web',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'desarrollo'
                                                ] //Clase si es que tiene
                                            ); ?></li>
                                        <li> <?php echo $this->Html->link(
                                                'Marketing',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'marketing'
                                                ] //Clase si es que tiene
                                            ); ?></li>
                                        <li> <?php echo $this->Html->link(
                                                'Experiencia de Usuario',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'ux'
                                                ] //Clase si es que tiene
                                            ); ?></li>
                                        <li> <?php echo $this->Html->link(
                                                'Diseño y Multimedia',
                                                [
                                                    'controller' => 'portfolio',
                                                    'action' => 'diseno'
                                                ] //Clase si es que tiene
                                            ); ?></li>
                                    </ul>
                                </li>
                                <li> <?php echo $this->Html->link(
                                                'Sobre Nosotros',
                                                [
                                                    'controller' => 'general',
                                                    'action' => 'equipo'
                                                ],
                                                [
                                                    'class' => 'menu-item'
                                                ] //Clase si es que tiene
                                            ); ?></li>

                                <li> <?php echo $this->Html->link(
                                                'Contactanos',
                                                [
                                                    'controller' => 'contactanos',
                                                    'action' => 'vista'
                                                ],
                                                [
                                                    'class' => 'menu-item'
                                                ] //Clase si es que tiene
                                            ); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nav__content__right">
                        <div class="nav__info">

                            <div class="nav__info__item js-navInfo-item">
                                <h5 class="text-sm tracking-none fw-500">
                                    Nuestras redes
                                </h5>

                                <div class="nav__info__content text-lg text-white mt-16">
                                    <a target="_blank" href="https://www.instagram.com/lup.digital/">Instagram</a>
                                    <a target="_blank" href="https://www.facebook.com/lup.digital/">Facebook</a>
                                    <a target="_blank" href="#">Behance</a>
                                    <a target="_blank" href="https://www.linkedin.com/company/lupdigital/">Linkedin</a>
                                </div>
                            </div>

                            <div class="nav__info__item js-navInfo-item">
                                <h5 class="text-sm tracking-none fw-500">
                                    Contacto
                                </h5>
                                <div class="nav__info__content text-lg text-white mt-16">
                                <a href="mailto:info@lupdigital.com" class="mt-8">info@lupdigital.com</a>
                            <br>
                            <a href="https://wa.me/5211234567890?text=Me%20gustaría%20%20un%20precio%20del%20coche" class="mt-8">+54 111 111 1111</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->
</header>
<!-- header end -->
