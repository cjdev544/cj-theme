<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php cjtheme_custom_meta_description();?>">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header class="Header">
        <section class="Header-container">
            <?php 
                get_template_part('template-parts/header-logo');
                get_template_part('template-parts/header-menu');
            ?>
        </section>
    </header>
    <?php 
        if(is_home() || is_front_page()):
            get_template_part('template-parts/header-custom');
        else:
            get_template_part('template-parts/hero-image');
        endif;
    ?>
    <section class="Content">