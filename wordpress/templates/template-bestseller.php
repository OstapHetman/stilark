<section id="bestseller" class="our-production">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-0 section-title"><?php the_field('bestseller_title', 2); ?></h1>
            </div>
            <div class="col-lg-12">
                <div id="carouselProduction" class="carousel slide" data-ride="false" data-interval="false">
                    <div class="carousel-inner carousel-production-inner row w-100 mx-auto" role="listbox">
                        
                        <?php if( have_rows('bestseller_repeater', 2) ) : 
                        while ( have_rows('bestseller_repeater', 2) ) : the_row(); ?>
                            <div class="carousel-production-item carousel-item col-md-4 col-lg-4 productionsSliderItem">
                                <div class="text-center mx-auto card">
                                    <div class="cover">
                                        <img class="img-fluid mx-auto d-block" src="<?php the_sub_field('image', 2); ?>" alt="slide 1">
                                    </div>
                                    <p><?php the_sub_field('text', 2); ?></p>
                                    <button class="shine-btn btn mx-auto" data-toggle="modal" data-toggle="modal" data-target="#getCallModal"><?php the_sub_field('btn_text', 2); ?></button>
                                </div>
                            </div>
                        <?php endwhile; endif;?>

                    </div>
                    <a class="carousel-controls carousel-control-prev" href="#carouselProduction" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-controls carousel-control-next text-faded" href="#carouselProduction" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>