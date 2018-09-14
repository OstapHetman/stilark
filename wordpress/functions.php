<?php

  require_once('bs4navwalker.php');

  function edit_admin_menus() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Товары';
    $submenu['edit.php'][5][0] = 'Все Товары';
    $submenu['edit.php'][10][0] = 'Добавить товар';
    $submenu['edit.php'][15][0] = 'Категории';
    }
    add_action( 'admin_menu', 'edit_admin_menus' );

    function change_post_object_label() {
      global $wp_post_types;
      $labels = &$wp_post_types['post']->labels;
      $labels->name = __('Товары', 'i18n_context');
      $labels->singular_name = __('Товар', 'i18n_context');
      $labels->add_new = __('Добавить Товар', 'i18n_context');
      $labels->add_new_item = __('Добавить Товар', 'i18n_context');
      $labels->edit_item = __('Изменить товар', 'i18n_context');
      $labels->new_item = __('Товар', 'i18n_context');
      $labels->view_item = __('Смотреть товар', 'i18n_context');
      $labels->search_items = __('Искать товары', 'i18n_context');
      $labels->not_found = __('Товаров не найдено', 'i18n_context');
    }
    add_action( 'init', 'change_post_object_label' );
    function revcon_change_cat_object() {
      global $wp_taxonomies;
      $labels = &$wp_taxonomies['category']->labels;
      $labels->name = 'Категории';
      $labels->singular_name = 'Категория';
      $labels->add_new = 'Добавить новую категорию';
      $labels->add_new_item = 'Добавить новую категорию';
      $labels->edit_item = 'Изменить категорию';
      $labels->search_items = 'Поиск Категорий';
      $labels->not_found = 'Категорий не найдено';
  }
  add_action( 'init', 'revcon_change_cat_object' );

  add_action('admin_menu', 'remove_menus');
  function remove_menus(){
    global $menu;
    $restricted = array(
        __('Comments'),
    );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ', $menu[key($menu)][0]);
        if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
            unset($menu[key($menu)]);
        }
    }
  }

  // Style login Page
    function my_login_logo() { ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/logo.png);
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );

    // Add files 
    function my_login_stylesheet() {
        wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/login.css' );
    }
    add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

    // Register Menu
    function register_my_menu() {
      register_nav_menus(
        array(
          'primary_menu' => __( 'Главное меню' ),
          'secondary_menu' => __( 'Дополнительное меню' ),
          'primary_footer_menu' => __( 'Главное меню(футер)' ),
          'secondary_footer_menu' => __( 'Дополнительно меню(футер)' ),
        )
      );
    }
    add_action( 'init', 'register_my_menu' );

    
?>