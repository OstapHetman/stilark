
<header>
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner">
        
        <?php if( have_rows('carousel_repeater') ) : 
            while ( have_rows('carousel_repeater') ) : the_row(); ?>
            <div class="carousel-item" style="background: url(<?php the_sub_field('bg'); ?>); background-size:cover;background-repeat: no-repeat no-repeat;">
                <div class="container">
                    <div class="col-7 col-md-7 left-side">
                        <div class="left-side__logo">
                            <img src="<?php the_sub_field('logo'); ?>" alt="Logo">
                        </div>
                        <div class="left-side__head-text">
                            <h1>
                                <?php the_sub_field('title'); ?>
                                <span><?php the_sub_field('title_bold'); ?></span>
                            </h1>
                            <p><?php the_sub_field('additional_text'); ?></p>
                        </div>
                        <div class="left-side__btn">
                            <button class="btn px-4" data-toggle="modal" data-target="#getCallModal">
                                <?php the_sub_field('btn_text'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; endif;?>   
            
        </div>
        <a class="carousel-control-prev carousel-control" href="#header-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control" href="#header-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>