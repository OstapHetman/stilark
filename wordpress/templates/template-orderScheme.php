<section id="order-scheme">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center section-title mb-0"><?php the_field('order_title'); ?></h1>
            </div>

            <div class="col-md-12 col-lg-6">
                <div class="row">

                    <?php if( have_rows('order_left') ) : 
                    while ( have_rows('order_left') ) : the_row(); ?>
                        <div class="col-3 col-sm-3 col-md-3 mb-5 number">
                            <p><?php the_sub_field('number'); ?></p>
                        </div>
                        <div class="col-9 col-sm-9 col-md-9 mb-5 text">
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; endif;?>
                    
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <div class="row">
                    
                    <?php if( have_rows('order_right') ) : 
                    while ( have_rows('order_right') ) : the_row(); ?>
                        <div class="col-3 col-sm-3 col-md-3 mb-5 number">
                            <p><?php the_sub_field('number'); ?></p>
                        </div>
                        <div class="col-9 col-sm-9 col-md-9 mb-5 text">
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; endif;?>

                </div>
            </div>

        </div>
    </div>
</section>