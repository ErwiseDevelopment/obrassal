    <section class="l-impact mb-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <h3 class="u-title--highlight u-line-height-100 u-font-weight-bold text-uppercase all:u-color-folk-theme mb-4">
                    nosso <br> 
                    <span class="u-font-weight-black">impacto</span>
                </h3>
            </div>
            <?php if(get_field('ativado', 'option') == 1):?>
            <div class="col-lg-4 d-flex align-items-end">

                <p class="l-impact__date u-font-weight-semibold text-uppercase u-color-folk-theme">
                    <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                         echo strftime('%B / %Y', strtotime('today'));?>
                </p>
            </div>
            <?php endif;?>
        </div>

        <div class="row">

            <div class="col-lg-10 d-flex flex-wrap justify-content-center mx-n3 mb-5 px-0">

                <!-- loop -->
                <?php
                    if( have_rows( 'valores_nosso_impacto', 'option' ) ) :
                        while( have_rows( 'valores_nosso_impacto', 'option' ) ) : the_row();
                ?>
                            <div class="col-sm-6 col-lg l-impact__items my-3 my-lg-0 mx-lg-3">

                                <p 
                                class="l-impact__items__number u-line-height-100 u-font-weight-black text-center text-lg-left u-color-folk-primary mb-0 js-numbers"
                                data-value="<?php echo get_sub_field( 'criancas_nosso_impacto' ); ?>">
                                    <!-- 350 -->
                                    <?php echo get_sub_field( 'criancas_nosso_impacto' ); ?>
                                </p>

                                <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold text-center text-lg-left mb-0">
                                    <!-- crianças -->
                                    <?php echo get_sub_field('texto_crianca'); ?>
                                </p>
                            </div>
                

                            <div class="col-sm-6 col-lg l-impact__items my-3 my-lg-0 mx-lg-3">

                                <p 
                                class="l-impact__items__number u-line-height-100 u-font-weight-black text-center text-lg-left u-color-folk-primary mb-0 js-numbers"
                                data-value="<?php echo get_sub_field( 'jovens_e_adolescentes_nosso_impacto' ); ?>">
                                    <!-- 285 -->
                                    <?php echo get_sub_field( 'jovens_e_adolescentes_nosso_impacto' ); ?>
                                </p>

                                <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold text-center text-lg-left mb-0">
                                    <!-- adolescentes e jovens -->
                                    <?php echo get_sub_field('texto_jovens'); ?>
                                </p>
                            </div>

                            <div class="col-sm-6 col-lg l-impact__items my-3 my-lg-0 mx-lg-3">

                                <p 
                                class="l-impact__items__number u-line-height-100 u-font-weight-black text-center text-lg-left u-color-folk-primary mb-0 js-numbers"
                                data-value="<?php echo get_sub_field( 'jovens_e_aprendizes_nosso_impacto' ); ?>">
                                    <!-- 180 -->
                                    <?php echo get_sub_field( 'jovens_e_aprendizes_nosso_impacto' ); ?>
                                </p>

                                <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold text-center text-lg-left mb-0">
                                    <!-- jovens aprendizes -->
                                    <?php echo get_sub_field('texto_aprendiz'); ?>
                                </p>
                            </div>

                            <div class="col-sm-6 col-lg l-impact__items my-3 my-lg-0 mx-lg-3">

                                <p 
                                class="l-impact__items__number u-line-height-100 u-font-weight-black text-center text-lg-left u-color-folk-primary mb-0 js-numbers"
                                data-value="<?php echo get_sub_field( 'cestas_basicas_nosso_impacto' ); ?>">
                                    <!-- 1519 -->
                                    <?php echo get_sub_field( 'cestas_basicas_nosso_impacto' ); ?>
                                </p>

                                <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold text-center text-lg-left mb-0">
                                    <!-- cestas básicas entregues -->
                                    <?php echo get_sub_field('texto_cestas'); ?>
                                </p>
                            </div>

                            <div class="col-sm-6 col-lg l-impact__items d-flex flex-column justify-content-center align-items-center my-3 my-lg-0">

                                <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold mb-0">
                                e muito
                                </p>

                                <p class="l-impact__items__number u-line-height-100 u-font-weight-black u-color-folk-primary mb-0">
                                +
                                </p>
                            </div>
                <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
        
<?php if (!empty(get_field('botoes_1', 'option') && get_field('botoes_2', 'option') && get_field('botoes_3', 'option'))) :?>
        <div class="row">

            <div class="col-12 mb-5">

                <div class="row">

                    <!-- loop -->
                    <div class="col-md-4 my-3 my-md-0">

                        <a 
                        class="hover:u-opacity-8 d-block" 
                        href="<?php echo get_field('link_1', 'option') ?>">
                            <img
                            class="img-fluid"
                            src="<?php echo get_field('botoes_1', 'option') ?>"
                            alt="">
                        </a>
                    </div>
                    <!-- end loop -->

                    <div class="col-md-4 my-3 my-md-0">

                        <a 
                        class="hover:u-opacity-8 d-block" 
                        href="<?php echo get_field('link_2', 'option') ?>">
                            <img
                            class="img-fluid"
                            src="<?php echo get_field('botoes_2', 'option') ?>"
                            alt="">
                        </a>
                    </div>

                    <div class="col-md-4 my-3 my-md-0">

                        <a 
                        class="hover:u-opacity-8 d-block" 
                        href="<?php echo get_field('link_3', 'option') ?>">
                            <img
                            class="img-fluid"
                            src="<?php echo get_field('botoes_3', 'option') ?>"
                            alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>
<?php if(get_field('ativado', 'option') == 1):?>
        <div class="row">
            <div class="col-12 js-progress-box">

                <h4 class="l-impact__text-help u-font-weight-bold text-uppercase all:u-color-folk-theme">
                    nos ajude a <br>
                    <span class="u-font-weight-black">bater nossa meta!</span>
                </h4>

                <?php
    // Coloque seu código PHP aqui
    $porcentagem_atual = get_field('meta', 'option');
    $dias_no_mes = date("t");
    $porcentagem_diaria = 100 / $dias_no_mes;
    $dia_atual = date("j");
    $porcentagem_dia_atual = $dia_atual * $porcentagem_diaria;
    $porcentagem_atual += $porcentagem_dia_atual;
    $porcentagem_atual = min($porcentagem_atual, 100);
    ?>

                <div class="l-impact__progress">
                    <span 
                    class="l-impact__progress__bar js-progress-bar" 
                    data-value="<?php echo number_format($porcentagem_atual)?>"></span>
                </div>
             
    <p class="l-impact__text-achieved u-font-weight-black text-center text-md-right text-uppercase all:u-color-folk-primary">
        <span class="l-impact__text-achieved--number js-progress-number"><?php echo number_format($porcentagem_atual) ?>%</span> alcançados
    </p>

                <div class="row justify-content-end">

                    <div class="col-md-4">

                        <a 
                        class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                        href="<?php echo get_field('quero_contribuir_btn', 'option')?>">
                            Quero contribuir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
</section>
