<?php
  function wpb_customize_register($wp_customize){
    // Favicon Section
    $wp_customize->add_section('favicon', array(
      'title'   => __('Favicon (Иконка сайта)', 'wpbootstrap'),
      'description' => sprintf(__('Options for favicon')),
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
  }
  add_action('customize_register', 'wpb_customize_register');