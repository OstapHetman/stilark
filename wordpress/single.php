<?php
/*
  *Template name: Single Product
*/
get_header();
?>
    <!-- Start thx msg -->
    <?php get_template_part( 'templates/template-thxMessage' ); ?>
    <!-- End thx msg -->
    <!-- Start navigation -->
    <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->

    <!-- Start SECTION: Details -->
    <section id="details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 section-title"><?php the_title(); ?></h1>
                </div>
                <div class="col-lg-10 mx-auto details">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Start Carousel -->
                            <div id="detailsCarousel" class="carousel slide" data-ride="pause">
                                <div class="carousel-inner">

                                  <?php if( have_rows('product_slider_repeater') ) : while ( have_rows('product_slider_repeater') ) : the_row(); ?>
                                    <div class="carousel-item py-5">
                                        <img class="mx-auto d-block" src="<?php the_sub_field('slide'); ?>" alt="First slide">
                                    </div>
                                  <?php endwhile; endif;?>
                              
                                </div>
                                <a class="controls carousel-control-prev" href="#detailsCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="controls carousel-control-next" href="#detailsCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- End Carousel -->
                        </div>
                        <div class="col-lg-6 offset-lg-1 details__info">

                          <?php if( have_rows('yes_or_not_flexible') ): while ( have_rows('yes_or_not_flexible') ) : the_row(); ?>
                            <?php if( get_row_layout() == 'in_stock' ):?>
                              <div class="in-stock">
                                <span><?php the_sub_field('text'); ?></span>
                              </div>
                            <?php elseif( get_row_layout() == 'not_in_stock' ):  ?>
                              <div class="not-in-stock">
                                <span><?php the_sub_field('text'); ?></span>
                              </div>
                            <?php endif; ?>
                          <?php endwhile; endif;?>

                            <div class="price mt-4">
                                <p>Цена: <span><?php the_field('product_price'); ?> грн.</span></p>
                            </div>
                            <div class="button mt-4">
                                <button class="btn" id="buy-product" data-productName="<?php the_title(); ?>" data-productPrice="<?php the_field('product_price'); ?>" data-toggle="modal" data-target="#buyProduct">
                                  <?php the_field('product_btn'); ?>
                                </button>
                            </div>
                            <div class="location mt-4">
                                <ul class="list-unstyled d-flex justify-content-lg-between justify-content-xl-between mb-0">
                                    <li class="d-flex align-items-center">
                                      <div class="pr-3">
                                          <img src="<?php the_field('nav_street_icon', 2); ?>" alt="Icon">
                                      </div>
                                      <div>
                                          <p class="mb-0"><?php the_field('nav_street', 2); ?></p>
                                          <a href="#" data-toggle="modal" data-target="#getMap"><?php the_field('nav_street_btn', 2); ?></a>
                                      </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                      <div class="pr-3">
                                          <img src="<?php the_field('nav_phone_icon', 2); ?>" alt="Icon">
                                      </div>
                                      <div>
                                          <p class="mb-0"><?php the_field('nav_phone', 2); ?></p>
                                          <a href="#" data-toggle="modal" data-target="#getCallModal"><?php the_field('nav_phone_btn_', 2); ?></a>
                                      </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="delivery-order mt-4">
                                <ul class="list-unstyled d-flex mb-0">
                                    <li>
                                        <a class="gradient-animation" href="<?php echo home_url(); ?>/dostavka-tovara/">
                                            <img class="pr-2" src="<?php echo get_theme_mod('signle_product_icon1', get_bloginfo('template_url').'/img/home/menu-icon-5.png'); ?>" alt="menu-icon">
                                            <?php echo get_theme_mod('icon_text1', 'Доставка товара'); ?>
                                        </a>
                                    </li>
                                    <li class="ml-5">
                                        <a class="gradient-animation" href="<?php echo home_url(); ?>//zakaz-tovara/">
                                            <img class="pr-2" src="<?php echo get_theme_mod('signle_product_icon2', get_bloginfo('template_url').'/img/home/menu-icon-6.png'); ?>" alt="menu-icon">
                                            <?php echo get_theme_mod('icon_text2', 'Заказ товара'); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 description mt-5">
                            <?php if( have_rows('description_repeater') ): while ( have_rows('description_repeater') ) : the_row(); ?>
                              <?php the_sub_field('text'); ?>
                            <?php endwhile; endif;?>
                        </div>
                        <div class="col-12 go-to mt-5">
                            <a href="<?php echo home_url(); ?>#catalog" class="btn"><?php the_field('product_btn_2'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End SECTION: Details -->

    <!-- Start SECTION: Why We  -->
    <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

    <!-- Start navigation -->
    <?php get_template_part( 'templates/modals/template-modalProduct' ); ?>
    <!-- End Navigation -->

    <?php get_footer(); ?>  
