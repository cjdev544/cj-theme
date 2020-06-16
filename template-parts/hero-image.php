<?php
    if(is_single()):
        $title = get_the_title();
        $subtitle = get_avatar(get_the_author_meta('ID'), 100) . get_the_author();
        $hero_image = get_the_post_thumbnail_url();
    elseif(is_page()):
        $title = get_the_title();
        $subtitle = null;
        $hero_image = get_the_post_thumbnail_url();
    elseif(is_category()):
        $current_cat = get_the_category();
        $title = single_cat_title();
        $subtitle = category_description($current_cat[0]);
        $hero_image = get_header_image();
    elseif(is_tag()):
        $current_cat = get_the_tags();
        $title = single_cat_title('', false);
        $subtitle = category_description($current_cat[0]);
        $hero_image = get_header_image();
    elseif(is_author()):
        $title = get_the_author_meta('first_name'). '' . get_the_author_meta('last_name');
        $subtitle = get_the_author_posts(). 'publicaciones';
        $hero_image = get_avatar(get_the_author_meta('ID'));
    elseif(is_search()):
        $title = get_search_query();
        $subtitle = __('Resultados de búsqueda', 'cjtheme');
        $hero_image = get_header_image();
    elseif(is_404()):
        $title = __('Contenido No Encontrado', 'cjtheme');
        $subtitle = __('Error 404', 'cjtheme');
        $hero_image = get_header_image();
    else:
        $title = get_bloginfo('name');
        $subtitle = get_bloginfo('description');
        $hero_image = get_header_image();
    endif;
?>

<header class="HeroImage" style="
    --bg-url: url(<?php echo $hero_image;?>);
    --bg-attach: fixed;
    --bg-size: cover;
    --bg-x: center;
    --bg-y: center;
">
    <div>
        <h1><?php echo $title;?></h1>
        <p><?php $subtitle;?></p>
    </div>
</header>