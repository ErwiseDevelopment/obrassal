<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 *
 * Template Name: Modelo Parceiros
 * Template Post Type: page
 */

get_header();
?>

<div id="primary">
<main id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-10 mb-5">

                <div class="row justify-content-end">

                    <div class="col-lg-6 mb-3 mb-md-0">
                        <h3 class="u-title--highlight u-line-height-100 u-font-weight-bold text-uppercase all:u-color-folk-theme mb-0">
                            Nossos <br> 
                            <span class="u-font-weight-black">Parceiros:</span>
                        </h3>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-md-end align-items-end">

                        <div class="row justify-content-end">

                            <div class="col-md-12">

                                <a class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" href="#">
                                    Seja um parceiro
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-10">

                <div class="row justify-content-center">

                    <!-- loop -->
                    <?php 
                        if(have_rows( 'parceiros', 'option' )) : 
                            while(have_rows( 'parceiros', 'option' )) : the_row();
                    ?>
                                <div class="col-lg-4 d-flex justify-content-center align-items-center my-3">
                                    <a 
                                    href="<?php echo get_sub_field( 'link_logo_parceiros' ) ?>"
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        <img
                                        class="img-fluid"
                                        src="<?php echo get_sub_field( 'logo_parceiros' ) ?>"
                                        alt="<?php the_title() ?>">
                                    </a>
                                </div>
                    <?php 
                            endwhile;
                        endif;
                    ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
