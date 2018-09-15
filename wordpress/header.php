<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="desription" content="<?php bloginfo('desription'); ?>">
    <title>
        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description' ) : wp_title(); ?>
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!-- Main Style-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Latest compiled and minified FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_theme_mod('favicon_icon', get_bloginfo('template_url').'/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo get_theme_mod('favicon_icon', get_bloginfo('template_url').'/favicon.ico'); ?>" type="image/x-icon">

    <?php wp_head(); ?>

    <style>
        #why-we {
            background: url(<?php the_field('why_bg', 2); ?>);
            background-size: contain;
        }
        #order-scheme {
            background: url(<?php the_field('order_bg', 2); ?>);
            background-size: inherit;
            background-repeat: no-repeat no-repeat;
            background-position: left;
        }
        #bestseller {
            background: url(<?php the_field('bestseller_bg', 2); ?>);
            background-size: inherit;
            background-repeat: no-repeat no-repeat;
            background-position: right;
        }
    </style>
</head>

</body>