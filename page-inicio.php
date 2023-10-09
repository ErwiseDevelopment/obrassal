<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'banner' ) ?>
<!-- end banner -->

<!-- new home about -->
<?php echo get_template_part( 'template-parts/content', 'new-home-about' ) ?>
<!-- end new home about -->

<!-- new home our impact -->
<?php echo get_template_part( 'template-parts/content', 'impact' ) ?>
<!-- end new home our impact -->

<!-- pillars -->
<?php echo get_template_part( 'template-parts/content', 'pillars' ) ?>
<!-- end pillars -->

<!-- here -->
<section class="l-here my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <div class="row">

                    <div class="col-lg-9 mb-3 mb-lg-0">
                        <h3 class="u-title--highlight u-line-height-100 u-font-weight-bold text-uppercase all:u-color-folk-theme mb-0">
                            <span class="u-font-weight-black">Acontecendo</span> <br>
                            por aqui:
                        </h3>
                    </div>

                    <div class="col-lg-3 d-flex justify-content-lg-end align-items-end">

                        <div class="row justify-content-end">

                            <div class="col-md-12">
                            <?php
                            $link_pattern = get_field( 'link_padrao_portal', 'option' );?>
                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                                href="<?php echo $link_pattern . get_field ('ver_todas_noticias','option')?>" <?php if (get_field('nova_guia_news')=='1'):?> target = "_blank" <?php endif;?>>
                                    Ver todas as notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-here">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            $link_pattern = get_field( 'link_padrao_portal', 'option' );
                            $post_link = $link_pattern . get_field( 'link_do_post', 'option' );
                            $categoria_noticia = get_field( 'categoria_da_noticia', 'option' );
                            $request_posts = wp_remote_get( $post_link );

                            if(!is_wp_error( $request_posts )) :
                                $body = wp_remote_retrieve_body( $request_posts );
                                $data = json_decode( $body );

                                if(!is_wp_error( $data )) :
                                    foreach( $data as $rest_post ) :
                        ?>
                                        <div class="swiper-slide align-items-start">

                                        <a href="<?php echo esc_url( $rest_post->link ); ?>" style="text-decoration: none" >    
                                        <div class="card border-0">
                                                
                                                <div class="l-here__card-img card-img">
                                                    <img
                                                    class="img-fluid w-100 h-100 u-object-fit-cover"
                                                    src="<?php echo $rest_post->featured_image_src; ?>"
                                                    alt="<?php echo $rest_post->title->rendered; ?>">
                                                </div>

                                                <div class="card-body">

                                                    <h4 class="l-here__card-title u-font-weight-bold text-center text-uppercase u-color-folk-theme">
                                                        <?php echo $rest_post->title->rendered; ?>
                                                    </h4>

                                                    <p class="l-here__card-text u-font-weight-medium text-justify">
                                                        <?php echo $rest_post->post_excerpt; ?>
                                                    </p>

                                                    <p class="l-here__card-date u-font-weight-bold u-color-folk-theme">
                                                        <!-- 15 de setembro de 2021 -->
                                                        <?php 
                                                            $data = $rest_post->post_date;
                                                            list($data_day, $data_month, $data_year) = explode("/", $data);
                                                            $data_long_month = get_long_month( $data_month );

                                                            echo $data_day . ' de ' . $data_long_month . ' de ' . $data_year;  
                                                        ?>
                                                    </p>

                                                    <div class="row">

                                                        <div class="col-md-8">

                                                            <span 
                                                            class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                                                            >
                                                                Ler mais
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                        <?php
                                    endforeach;
                                endif; 
                            endif; 
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev-partners d-none d-lg-flex after::u-color-folk-white u-bg-folk-primary js-swiper-button-prev-here"></div>
                <div class="swiper-button-next swiper-button-next-partners d-none d-lg-flex after::u-color-folk-white u-bg-folk-primary js-swiper-button-next-here"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<!-- end here -->

<!-- gallery -->
<?php echo get_template_part( 'template-parts/content', 'gallery' ) ?>
<!-- end gallery -->

<!-- blog -->
<?php echo get_template_part( 'template-parts/content', 'blogs' ) ?>
<!-- end blog -->

<!-- mvv -->
<?php echo get_template_part( 'template-parts/content', 'quite' ) ?>
<!-- end mvv -->

<!-- testimonials -->
<?php echo get_template_part( 'template-parts/content', 'testimonials' ) ?>
<!-- end testimonials -->

<!-- partners -->
<?php echo get_template_part( 'template-parts/content', 'partners' ) ?>
<!-- end partners -->

<!-- form contact -->
<?php echo get_template_part( 'template-parts/content', 'form-contact' ) ?>
<!-- end form contact -->

<img
class="img-fluid d-none"
data-src="<php echo get_template_directory_uri()>/../wp-bootstrap-starter-child/assets/images/image.png"
alt="">

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
