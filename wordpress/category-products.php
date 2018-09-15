<?php
/*
  *Template name: SubCategory Products(many products)
*/
get_header();
?>

    <!-- Start navigation -->
    <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->

    <!-- Start SECTION: Catalog -->
    <section id="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 catalog-title"><?php single_cat_title(); ?></h1>
                </div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-5 catalog d-flex justify-content-center align-items-center">
                        <div class="catalog-card d-flex justify-content-center align-items-center">
                            <div class="catalog__item">
                                <div class="catalog__item-img">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>    
                                        <img src="<?php bloginfo('template_url'); ?>/img/nophoto.png" alt="NoPhoto">
                                    <?php endif; ?>
                                </div>
                                <div class="catalog__item-text">
                                    <p class="mb-0 text-center"><?php the_title(); ?></p>
                                </div>
                                <div class="catalog__item-button">
                                    <a href="<?php the_permalink();?>" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                <div class="col-12">
                    <h2 id="no-posts" class="text-center pt-3 pt-md-4 pt-lg-4 pt-xl-4">В этой категории нет товаров !</h2>
                </div>
                <?php  endif;?>
            </div>

            <div class="row mt-5">
                <!-- start pagination -->
                <div class="mx-auto col-4 d-flex justify-content-center mb-5">
                <?php if ( function_exists('wp_bootstrap_pagination') )
                        wp_bootstrap_pagination(); ?>
                <!-- end pagination -->
                </div>
            </div>

        </div>
    </section>
    <!-- End SECTION: Catalog -->



    <!-- Start SECTION: Why We  -->
    <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

    <!-- Start SECTION: Bestseller -->
    <?php get_template_part( 'templates/template-bestseller' ); ?>
    <!-- End SECTION: Bestseller -->

    <?php get_footer(); ?> 