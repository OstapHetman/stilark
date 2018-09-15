<?php
  function wpb_customize_register($wp_customize){
    // Favicon Section
    $wp_customize->add_section('favicon', array(
      'title'   => __('Favicon (Иконка сайта)', 'wpbootstrap'),
      'description' => sprintf(__('Опции для иконки сайта')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('favicon_icon', array(
      'default'   => get_bloginfo('template_directory').'/favicon.ico',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'favicon_icon', array(
      'label'   => __('Иконка сайта', 'wpbootstrap'),
      'section' => 'favicon',
      'settings' => 'favicon_icon',
      'priority'  => 1
    )));
    
    // Icons in product Section
    $wp_customize->add_section('single_product', array(
      'title'   => __('Страница товара', 'wpbootstrap'),
      'description' => sprintf(__('Опции для страници товара')),
      'priority'    => 131
    ));
    // Icon 1
    $wp_customize->add_setting('signle_product_icon1', array(
      'default'   => get_bloginfo('template_directory').'/img/home/menu-icon-5.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'signle_product_icon1', array(
      'label'   => __('Иконка возле текста', 'wpbootstrap'),
      'section' => 'single_product',
      'priority'  => 1
    )));
    // Text1
    $wp_customize->add_setting('icon_text1', array(
      'default'   => _x('Доставка товара', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('icon_text1', array(
      'label'   => __('Текст возле иконки', 'wpbootstrap'),
      'section' => 'single_product',
      'priority'  => 2
    ));
    // Icon 2
    $wp_customize->add_setting('signle_product_icon2', array(
      'default'   => get_bloginfo('template_directory').'/img/home/menu-icon-6.png',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'signle_product_icon2', array(
      'label'   => __('Иконка возле текста', 'wpbootstrap'),
      'section' => 'single_product',
      'priority'  => 3
    )));
    // Text2
    $wp_customize->add_setting('icon_text2', array(
      'default'   => _x('Заказ товара', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('icon_text2', array(
      'label'   => __('Текст', 'wpbootstrap'),
      'section' => 'single_product',
      'priority'  => 4
    ));

    // Thx message Section
    $wp_customize->add_section('thx_msg', array(
      'title'   => __('Текст благодарности', 'wpbootstrap'),
      'description' => sprintf(__('Опции текста благодарности')),
      'priority'    => 132
    ));
    $wp_customize->add_setting('message', array(
      'default'   => _x('Спасибо за Ваше сообщение. Оно успешно отправлено', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('message', array(
      'label'   => __('Текст', 'wpbootstrap'),
      'section' => 'thx_msg',
      'priority'  => 1
    ));
  

  }
  add_action('customize_register', 'wpb_customize_register');