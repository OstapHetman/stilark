<?php
/*
  Template name:  Прайс-лист
*/
get_header();
?>
    <!-- Start navigation -->
        <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->

    <!-- Start SECTION: Price -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 section-title">
                        <?php the_field('price_title'); ?>
                    </h1>
                </div>
                <div class="col-lg-10 mx-auto price">
                    <div class="price__text">
                        <?php if( have_rows('price_repeater') ) : 
                        while ( have_rows('price_repeater') ) : the_row(); ?>
                            <p>
                            <?php the_sub_field('text'); ?>
                             </p>
                        <?php endwhile; endif;?>
                    </div>
                    <div class="price__button text-center mt-5">
                        <a href="#" class="btn">
                        <?php the_field('price_btn'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End SECTION: Price -->

    <!-- Start SECTION: Why We  -->
   <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

   <?php get_footer(); ?>  