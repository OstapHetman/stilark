<?php 
/*
  *Template name: SubCategory
*/
  get_header();

  $current_cat = get_queried_object();
  $args = array( 'child_of' => $current_cat->term_id, "hide_empty" => 0);
  $categories = get_categories( $args );
?>
    <!-- Start navigation -->
    <?php get_template_part( 'templates/template-navigation' ); ?>
    <!-- End Navigation -->
    <!-- Start SECTION: Catalog -->
    <section id="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 catalog-title"><?php single_cat_title(); ?></h1>
                </div>

                <?php  foreach  ($categories as $category) :?>
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-5 catalog d-flex justify-content-center align-items-center">
                      <a href="<?php echo get_category_link( $category->term_id ) ?>" class="link d-flex justify-content-center align-items-center">
                          <div class="catalog__item">
                              <div class="catalog__item-img">
                                  <img src="<?php the_field("category_image", $category) ;?>" alt="Catalog Item">
                              </div>
                              <div class="catalog__item-text">
                                  <p class="mb-0 text-center"><?php echo $category->cat_name ?></p>
                              </div>
                          </div>
                      </a>
                  </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- End SECTION: Catalog -->

    <!-- Start SECTION: Why We  -->
    <?php get_template_part( 'templates/template-whyWe' ); ?>
    <!-- End SECTION: Why We -->

    <!-- Start SECTION: Bestseller -->
    <?php get_template_part( 'templates/template-bestseller' ); ?>
    <!-- End SECTION: Bestseller -->

    <?php get_footer(); ?>  