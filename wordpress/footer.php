<!-- Start SECTION: Get call -->
<section id="get-call">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8 col-xl-9">
                <h2 class="mb-0"><?php the_field('call_text', 2); ?></h2>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-3">
                <button class="shine-btn btn px-4" data-toggle="modal" data-target="#getCallModal"><?php the_field('call_btn', 2); ?></button>
            </div>
        </div>
    </div>
</section>
<!-- End SECTION: Get call -->

<!-- Start Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4 col-xl-3 mb-5 d-flex flex-column justify-content-end footer-col">
                <ul class="list-unstyled mb-0 footer-menu">
                <?php
                wp_nav_menu([
                    'menu'            => 'primary_footer_menu',
                    'theme_location'  => 'primary_footer_menu',
                    'container'       => '',
                    'container_id'    => '',
                    'container_class' => '',
                    'items_wrap'      => '%3$s',
                    'menu_id'         => '',
                    'menu_class'      => '',
                    'depth'           => 0,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                    ]);
                ?>
                    <!-- <li><a class="hover-underline-animation" href="about-company.html">О компании</a></li>
                    <li><a class="hover-underline-animation" href="index.html#catalog">Каталог товаров</a></li>
                    <li><a class="hover-underline-animation" href="price.html">Прайс-лист</a></li>
                    <li><a class="hover-underline-animation" href="contacts.html">Контакты</a></li> -->
                </ul>
                <button class="btn outline w-75">Запросить счет</button>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 mb-5 d-flex flex-column justify-content-between footer-col">
                <ul class="list-unstyled mb-0 footer-menu">
                <?php
                wp_nav_menu([
                    'menu'            => 'secondary_footer_menu',
                    'theme_location'  => 'secondary_footer_menu',
                    'container'       => '',
                    'container_id'    => '',
                    'container_class' => '',
                    'items_wrap'      => '%3$s',
                    'menu_id'         => false,
                    'menu_class'      => '',
                    'depth'           => 0,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                    ]);
                ?>
                    <!-- <li><a class="hover-underline-animation" href="delivery.html">Информация о доставке</a></li>
                    <li><a class="hover-underline-animation" href="order.html">Заказ товара</a></li> -->
                </ul>
                <button class="shine-btn btn default-btn w-75">Спец. предложение</button>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 mb-5 d-flex align-items-center social footer-col">
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center mb-3">
                        <div class="pr-3">
                            <img src="<?php the_field('nav_street_icon', 2); ?>" alt="Icon">
                        </div>
                        <div>
                            <p class="mb-0"><?php the_field('nav_street', 2); ?></p>
                            <a href="#" data-toggle="modal" data-target="#getMap"><?php the_field('nav_street_btn', 2); ?></a>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="<?php the_field('nav_phone_icon', 2); ?>" alt="Icon">
                        </div>
                        <div>
                            <p class="mb-0"><?php the_field('nav_phone', 2); ?></p>
                            <a href="#" data-toggle="modal" data-target="#getCallModal"><?php the_field('nav_phone_btn_', 2); ?></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 mb-5 d-flex align-items-center justify-content-center fb">
                <div class="text-center pr-3">
                    <h2 class="mb-0"><?php the_field('footer_social_big', 2); ?> </h2>
                    <p class="mb-0"><?php the_field('footer_social_smal', 2); ?></p>
                </div>
                <div>
                    <a href="<?php the_field('social_link', 2); ?>" target="_blank">
                        <img src="<?php the_field('social_icon', 2); ?>" alt="Icon">
                    </a>
                </div>
            </div>
            <div class="col-12 bottom-footer pb-3">
                <p class="text-center mb-0"><?php the_field('copyright_year', 2); ?> <span><?php the_field('copyright_text', 2); ?></span></p>
                <p class="text-center mb-0">Разработка сайта <a href="https://mark-lab.biz/" target="_blank">“Mark-Lab”</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<!-- Main JavaScript File -->
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>