<?php
/*
  Template name: О компании 
*/
get_header();
?>

    <!-- Start navigation -->
        <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->


    <!-- Start SECTION: Company -->
    <section id="about-company">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 section-title"><?php the_field('company_title'); ?></h1>
                </div>
                <div class="col-lg-10 mx-auto about">
                    <div class="about__text">
                        <?php if( have_rows('company_repeater') ) : 
                        while ( have_rows('company_repeater') ) : the_row(); ?>
                            <p>
                                <?php the_sub_field('text'); ?>
                            </p>
                        <?php endwhile; endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End SECTION: Company -->

    <!-- Start SECTION: Catalog -->
    <?php get_template_part( 'templates/template-catalog' ); ?>
    <!-- End SECTION: Catalog -->

   <!-- Start SECTION: Why We  -->
   <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

    <!-- Start SECTION: Bestseller -->
    <?php get_template_part( 'templates/template-bestseller' ); ?>
    <!-- End SECTION: Bestseller -->

    <?php get_footer(); ?>  