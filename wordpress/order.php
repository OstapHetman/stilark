<?php
/*
  Template name:  Заказ товара
*/
get_header();
?>

    <!-- Start navigation -->
        <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->

    <!-- Start SECTION: Order -->
    <section id="order">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 section-title"><?php the_field('howto_title'); ?></h1>
                </div>
                <div class="col-lg-8 offset-lg-1 order">
                    <div class="order__payment">
                        <h4 class="mb-0"><?php the_field('howto_subtitle'); ?></h4>
                        <ul class="list-unstyled mb-0 py-2 py-md-4 py-xl-4 py-lg-4">
                            <?php if( have_rows('howto_repeater') ) : 
                            while ( have_rows('howto_repeater') ) : the_row(); ?>
                                <li><?php the_sub_field('text'); ?></li>
                            <?php endwhile; endif;?>
                        </ul>
                        <p class="mb-0"><?php the_field('howto_additional'); ?></p>
                    </div>
                    <div class="order__line my-4 my-md-5 my-lg-5 my-xl-5"></div>
                    <div class="order__how-to">
                        <h4 class="mb-4 mb-md-5 mb-lg-5 mb-xl-5"><?php the_field('howto_subtitle2'); ?></h4>
                        <?php if( have_rows('howtwo_repeater2') ) : 
                            while ( have_rows('howtwo_repeater2') ) : the_row(); ?>
                        <p>
                            <?php the_sub_field('text'); ?>
                        </p>
                        <?php endwhile; endif;?>

                    </div>

                    <div class="order__go-to-catalog mt-5">
                        <a href="<?php echo home_url(); ?>#catalog" class="btn">
                        <?php the_field('howto_btn'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End SECTION: Order -->

     <!-- Start SECTION: Why We  -->
     <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

    <?php get_footer(); ?>  