<?php 
 $args = array(
    'posts_per_page' => 8,
    'post_type'      => 'galeria',
    'order'          => 'DESC'
);
$galleries = new WP_Query( $args );
if( $galleries->have_posts() == 1 ):?>
<section class="l-gallery pb-5">
    
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-10">

                <div class="row">
                    
                    <div class="col-12">

                        <div class="row">
                            
                            <!-- loop -->
                            <?php
                               

                                

                                
                                    while( $galleries->have_posts() ) : $galleries->the_post();
                            ?>
                                        <div class="col-md-4 my-3">
                                            
                                            <a 
                                            class="l-gallery__album d-block"
                                            href="<?php the_permalink() ?>">
                                                <img
                                                class="img-fluid w-100"
                                                src="<?php echo get_field( 'capa_do_album' ) ?>"
                                                alt="<?php the_title() ?>">
                                            </a>
                                            
                                        </div>
                            <?php   endwhile;
                                

                                wp_reset_query();
                            ?>
                            <!-- end loop -->
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-4 col-lg-3 mt-md-5">

                                <a 
                                class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-theme py-2 px-5" 
                                href="<?php echo get_home_url( null, 'fotos' ) ?>">
                                    Mais fotos 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>