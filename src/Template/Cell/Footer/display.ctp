<div class="border-top-light">
    <!-- footer start -->
    <footer class="footer -type-1 bg-dark-1">
        <!-- container start -->
        <div class="container">

            <div class="footer__top">
                <!-- row start -->
                <div class="row y-gap-48 justify-content-between">
                    <div class="col-lg-auto col-sm-12">

                        <?php echo $this->Html->link(
                                                'Lup.',
                                                [
                                                    'controller' => 'home',
                                                    'action' => 'home'
                                                ],
                                                [
                                                    'class' => 'footer__logo text-white'
                                                ]
                                            ); ?>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h4 class="text-xl fw-500 text-white">
                            Agencia
                        </h4>

                        <div class="footer__content text-base text-light mt-16 sm:mt-12">
                            <p>Studio Lup 1910 Gateway Road, Portland, Oregon 97230</p>
                            <a href="mailto:info@lupdigital.com" class="mt-8">info@lupdigital.com</a>
                            <br>
                            <a href="https://wa.me/5211234567890?text=Me%20gustaría%20%20un%20precio%20del%20coche" class="mt-8">+54 111 111 1111</a>
                        </div>
                    </div>

                    <div class="col-lg-auto col-sm-4">
                        <h4 class="text-xl fw-500 text-white">
                            Links
                        </h4>

                        <div class="footer__content text-base text-light mt-16 sm:mt-12">
                            <div>
                                <?php echo $this->Html->link(
                                                'Soluciones',
                                                [
                                                    'controller' => 'soluciones',
                                                    'action' => 'vista'
                                                ],
                                                [
                                                    'class' => 'button -underline'
                                                ] //Clase si es que tiene
                                            ); ?>
                            </div>
                            <div>
                                <?php echo $this->Html->link(
                                                'Nosotros',
                                                [
                                                    'controller' => 'general',
                                                    'action' => 'equipo'
                                                ],
                                                [
                                                    'class' => 'button -underline mt-4'
                                                ] //Clase si es que tiene
                                            ); ?>
                            </div>
                            <div>
                                <?php echo $this->Html->link(
                                                'Contactanos',
                                                [
                                                    'controller' => 'general',
                                                    'action' => 'contacto'
                                                ],
                                                [
                                                    'class' => 'button -underline mt-4'
                                                ] //Clase si es que tiene
                                            ); ?>
                            </div>
                           
                        </div>
                    </div>

                    <div class="col-lg-auto col-auto">
                        <h4 class="text-xl fw-500 text-white">
                            Seguinos
                        </h4>

                        <div class="social -bordered mt-16 sm:mt-12">
                            <a class="social__item text-white border-light" target="_blank"
                                href="https://www.instagram.com/lup.digital/"><i class="fab fa-instagram"></i></a>
                            <a class="social__item text-white border-light" target="_blank" href="#"><i
                                    class="fab fa-facebook"></i></a>
                            <a class="social__item text-white border-light" target="_blank" href="#"><i
                                    class="fab fa-behance"></i></a>
                            <a class="social__item text-white border-light" target="_blank"
                                href="https://www.linkedin.com/company/lupdigital/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>


            <div class="footer__bottom -light">
                <!-- row start -->
                <div class="row">
                    <div class="col">
                        <div class="footer__copyright">
                            <p class="text-light">
                                &copy; 2020, Lup Digital. Todos los derechos reservados.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>

        </div>
        <!-- container end -->
    </footer>
    <!-- footer end -->

</div>
