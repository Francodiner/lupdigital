<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

?>

<!-- 404 page intro start -->
<section class="page-404 bg-dark-1">
    <div class="page-404-bg -light">404</div>

    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-xl-6 offset-xl-1 col-md-8">
                <div class="page-404-content">
                    <h1 class="page-404-title text-white">
                        Ups, no encontramos esta pagina.
                    </h1>
                    <p class="page-404-text leading-4xl text-light mt-24 md:mt-16">
                        La pagina que estabas buscando parece que no existe, puede
                        que hayas escrito mal la direccion o que la hayamos movido.
                    </p>

                    <?php echo $this->Html->link(
                                                'Volver',
                                                [
                                                    'controller' => 'home',
                                                    'action' => 'home'
                                                ],
                                                [
                                                    'class' => 'page-404-btn button -md -outline-white text-white mt-32 md:mt-20',
                                               
                                                ]
                                            ); ?>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- 404 page intro end -->
