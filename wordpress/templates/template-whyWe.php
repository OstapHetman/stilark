<section id="why-we" class="pb-5">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12">
                <h1 class="mb-0 section-title text-center"><?php the_field('why_title', 2); ?></h1>
            </div>
            <?php if( have_rows('why_repeater', 2) ) : 
                while ( have_rows('why_repeater', 2) ) : the_row(); ?>
                <div class="col-sm-6 col-md-2 col-lg-2 mb-4 why d-flex justify-content-center flex-column align-items-center">
                    <div class="why__icon">
                        <img src="<?php the_sub_field('icon', 2); ?>" alt="Icon">
                    </div>
                    <div class="why__text mt-3">
                        <p>
                            <?php the_sub_field('text', 2); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; endif;?>       

            <div class="col-12 button">
                <button class="shine-btn btn d-block mx-auto px-4" data-toggle="modal" data-target="#whyWe">
                    <?php the_field('why_btn', 2); ?>
                </button>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'templates/modals/template-modalWhyWe' ); ?>