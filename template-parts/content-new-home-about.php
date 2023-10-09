<section class="l-new-home-about my-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-5 pl-lg-0"> 
                        <!-- <img
                        class="img-fluid h-100"
                        src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/new-home-about-image-1.png"
                        alt=""> -->

                        <img
                        class="img-fluid h-100"
                        src="<?php echo get_field( 'imagem_quem_somos' ) ?>"
                        alt="Quem Somos">
                    </div>

                    <div class="col-lg-5 mt-3 mt-md-0">

                        <h3 class="u-title--highlight u-font-weight-bold text-uppercase all:u-color-folk-theme mb-4">
                            quem <span class="u-font-weight-black">somos</span>
                        </h3>

                        <span class="l-new-home-about__text d-block u-font-weight-medium text-justify">
                            <?php echo get_field( 'descricao_quem_somos' ) ?>
                        </span>

                        <div class="row justify-content-end">

                            <div class="col-md-5">
                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                                href="<?php echo get_field( 'saiba_mais_quem_somos' ) ?>" <?php if (get_field('nova')=='1'):?> target="_blank"
                                <?php endif; ?>>
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>