<?php
/*
  Template name:  Доставка товара
*/
get_header();
?>

     <!-- Start navigation -->
     <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->

    <!-- Start SECTION: Order -->
    <section id="delivery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 section-title">
                        <?php the_field('delivery_title'); ?>
                    </h1>
                </div>
                <div class="col-lg-8 offset-lg-1 delivery">
                    <div class="delivery__methods">
                        <h4 class="mb-0"><?php the_field('delivery_title2'); ?></h4>
                        <ul class="list-unstyled mb-0 py-2 py-md-4 py-xl-4 py-lg-4">
                            <?php if( have_rows('delivery_repeater') ) : 
                            while ( have_rows('delivery_repeater') ) : the_row(); ?>
                                <li><?php the_sub_field('text'); ?></li>
                            <?php endwhile; endif;?>
                        </ul>
                        <p class="small-text"><?php the_field('delivery_mark'); ?></p>
                        <p class="mb-0"><?php the_field('delivery_additional'); ?></p>
                    </div>
                    <div class="delivery__line my-4 my-md-5 my-lg-5 my-xl-5"></div>
                    <div class="delivery__regions">
                        <div class="row">
                            <div class="col-12 mb-4 mb-md-5 mb-lg-5 mb-xl-5">
                                <h4 class="mb-0"><?php the_field('delivery_region'); ?></h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <ul class="list-unstyled mb-0">
                                    <?php if( have_rows('delivery_region_repeater_left') ) : 
                                    while ( have_rows('delivery_region_repeater_left') ) : the_row(); ?>
                                        <li><?php the_sub_field('text'); ?></li>
                                    <?php endwhile; endif;?>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <ul class="list-unstyled mb-0">
                                     <?php if( have_rows('delivery_region_repeater_right') ) : 
                                    while ( have_rows('delivery_region_repeater_right') ) : the_row(); ?>
                                        <li><?php the_sub_field('text'); ?></li>
                                    <?php endwhile; endif;?>
                                    
                                </ul>
                            </div>

                            <div class="col-12 mb-3">
                                <h4 class="mb-0"><?php the_field('delivery_ukraine'); ?></h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <ul class="list-unstyled mb-0">

                                    <?php if( have_rows('delivery_ukraine_repeater_left') ) : while ( have_rows('delivery_ukraine_repeater_left') ) : the_row(); ?>
                                        <?php if( have_rows('ukraine_flexible') ): while ( have_rows('ukraine_flexible') ) : the_row(); ?>
                                            <?php if( get_row_layout() == 'without_city' ):?>
                                                <li><?php the_sub_field('text'); ?></li>
                                            <?php elseif( get_row_layout() == 'with_city' ):  ?>
                                                <li>
                                                    <ul class="list-unstyled mb-0 pl-3">
                                                        <?php if( have_rows('city_repeater') ) : while ( have_rows('city_repeater') ) : the_row(); ?>
                                                            <li><?php the_sub_field('city'); ?></li>
                                                        <?php endwhile; endif;?>
                                                    </ul> 
                                                </li>   
                                            <?php endif; ?>
                                        <?php endwhile; endif;?>
                                    <?php endwhile; endif;?>
    
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <ul class="list-unstyled mb-0">
                                    
                                <?php if( have_rows('delivery_ukraine_repeater_right') ) : while ( have_rows('delivery_ukraine_repeater_right') ) : the_row(); ?>
                                        <?php if( have_rows('ukraine_flexible') ): while ( have_rows('ukraine_flexible') ) : the_row(); ?>
                                            <?php if( get_row_layout() == 'without_city' ):?>
                                                <li><?php the_sub_field('text'); ?></li>
                                            <?php elseif( get_row_layout() == 'with_city' ):  ?>
                                                <li>
                                                    <ul class="list-unstyled mb-0 pl-3">
                                                        <?php if( have_rows('city_repeater') ) : while ( have_rows('city_repeater') ) : the_row(); ?>
                                                            <li><?php the_sub_field('city'); ?></li>
                                                        <?php endwhile; endif;?>
                                                    </ul> 
                                                </li>   
                                            <?php endif; ?>
                                        <?php endwhile; endif;?>
                                    <?php endwhile; endif;?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="delivery__feedback mt-5">
                        <a href="#" class="btn"><?php the_field('delivery_btn'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End SECTION: Title -->

    <!-- Start SECTION: Why We  -->
    <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

   <?php get_footer(); ?>  