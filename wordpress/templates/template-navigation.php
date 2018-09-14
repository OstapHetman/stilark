<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/home/logo.png" alt="Brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbars" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="navbars collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav d-flex align-items-center ml-auto">
                    <?php
                wp_nav_menu([
                    'menu'            => 'primary_menu',
                    'container'       => '',
                    'container_id'    => '',
                    'container_class' => '',
                    'items_wrap'      => '%3$s',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav d-flex align-items-center ml-auto',
                    'depth'           => 0,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                    ]);
                ?>
                <li class="nav-item">
                    <a class=" transition-btn btn px-2 px-xl-4" href="#" data-toggle="modal" data-target="#getCallModal">
                            Запросить счет</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg second-navbar py-xl-3 py-lg-3">
    <div class="container">
        <div class="navbars collapse navbar-collapse">
            <ul class="navbar-nav d-flex align-items-center w-100 justify-content-between">
                <li class="nav-item">
                    <a class="shine-btn btn px-4" href="#" data-toggle="modal" data-target="#getCallModal">
                            Спец. предложение</a>
                </li>
                <?php
                wp_nav_menu([
                    'menu'            => 'secondary_menu',
                    'theme_location'  => 'secondary_menu',
                    'container'       => '',
                    'container_id'    => '',
                    'container_class' => '',
                    'items_wrap'      => '%3$s',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav d-flex align-items-center ml-auto',
                    'depth'           => 0,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                    ]);
                ?>
                <li class="nav-item d-flex align-items-center social">
                    <div class="pr-3">
                        <img src="<?php the_field('nav_street_icon', 2); ?>" alt="Icon">
                    </div>
                    <div>
                        <p class="mb-0"><?php the_field('nav_street', 2); ?></p>
                        <a href="#" data-toggle="modal" data-target="#getMap"><?php the_field('nav_street_btn', 2); ?></a>
                    </div>
                </li>
                <li class="nav-item d-flex align-items-center social">
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
    </div>
</nav>