<?php
/**
 * Template Post Type: post, page
 * The home front page with navigation slider 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style type="text/css">
        body:before { display:none !important}
        body:after { display:none !important}
        body, body.page-template-revslider-page-template, body.page-template---publicviewsrevslider-page-template-php { background:<?php echo $page_bg;?>}
    </style>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header id="homehead" class="container-fluid home-header <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">            
            <nav class="navbar navbar-dark navbar-expand-xl p-2 pr-4">
                <div class="navbar-brand">                
                    <a href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img class="slogan" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/img/Logo-Slogan.png'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'home',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </header><!-- #masthead -->

        <div id="content" class="home-content">
            <main id="main" class="home-main" role="main">
            <?php
                // Start the loop.
                while(have_posts()) : the_post();

                    // Include the page content template.
                    if(!isset($revslider_is_preview_mode) || $revslider_is_preview_mode === false){
                        the_content();
                    }else{
                        echo do_shortcode(get_the_content());
                    }

                // End the loop.
                endwhile;
                ?>
            </main><!-- #main -->

        </div><!-- #content -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
</body>
</html>
