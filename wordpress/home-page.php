<?php
/*
  Template name: Главная 
*/
get_header();
?>
    <!-- Start thx msg -->
    <?php get_template_part( 'templates/template-thxMessage' ); ?>
    <!-- End thx msg -->

    <!-- Start navigation -->
    <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->
    
    <!-- Start Carousel -->
    <?php get_template_part( 'templates/template-carousel' ); ?>
    <!-- End Carousel -->

    <!-- Start SECTION: Catalog -->
    <?php get_template_part( 'templates/template-catalog' ); ?>
    <!-- End SECTION: Catalog -->

    <!-- Start SECTION: Why We  -->
    <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

    <!-- Start SECTION: Bestseller -->
    <?php get_template_part( 'templates/template-bestseller' ); ?>
    <!-- End SECTION: Bestseller -->

    <!-- Start SECTION: Order scheme -->
    <?php get_template_part( 'templates/template-orderScheme' ); ?>
    <!-- End SECTION: Order scheme -->

    <!-- Start Modals -->
    <?php get_template_part( 'templates/modals/template-modalHeaderFooter' ); ?>
    <?php get_template_part( 'templates/modals/template-modalCarousel' ); ?>
  
    <!-- End Modals -->

<?php get_footer(); ?>    

