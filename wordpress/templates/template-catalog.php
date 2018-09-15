<?php 
  $categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'parent' => 0
  ));
?>

<section id="catalog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-0 catalog-title"><?php the_field('catalog_title', 2); ?></h1>
            </div>

            <?php  foreach  ($categories as $category) :?>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-5 catalog d-flex justify-content-center align-items-center">
                    <a href="<?php echo get_category_link( $category->term_id ) ?>" class="link d-flex justify-content-center align-items-center">
                        <div class="catalog__item">
                            <div class="catalog__item-img">
                                <img src="<?php the_field("category_image", $category) ;?>" alt="Catalog Item">
                            </div>
                            <div class="catalog__item-text">
                                <p class="mb-0 text-center">
                                    <?php echo $category->cat_name ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>    

        </div>
    </div>
</section>