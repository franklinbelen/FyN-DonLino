<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <?php
    // Tenemos la Imagen destacada de la página
    $img_bg = get_the_post_thumbnail_url();
    ?>
    <div class="MainImgHeroHome">
        
        <?php the_post_thumbnail('full'); ?>

        <!-- Start Header -->
        <header class="Header">
    
            <!-- Start Logo -->
            <div class="Logo">
                <?php if ( has_custom_logo() ): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo esc_url( home_url('/') ); ?>">
                        <?php echo get_bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>
            <!-- End Logo -->
    
            <!-- Start Btn -->
              <div class="BtnMenu" id="BtnMenu">
                <span></span>
                <span></span>
                <span></span>
              </div>
            <!-- End Btn -->
    
    
            <!-- End Logo -->
            <?php if(has_nav_menu('main_menu')):
                wp_nav_menu( array(
                   'theme_location' => 'main_menu',
                   'container' => 'nav',
                   'container_class' => 'Menu',
                   'container_id' => 'Menu',
                   'menu_class' => 'MenuNavegacion'
                ));
            else:?>
                <nav class="Menu">
                    <ul>
                        <?php wp_list_pages('title_li'); ?>
                    </ul>
                </nav>
            <?php endif;?>
    
    
        </header>
        <!-- End Header -->
    </div>

    <main class="Main">