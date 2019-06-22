<!DOCTYPE html>
<html <?php echo get_language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    
</head>
<body>
    <!-- Header -->
    <header id="header" class="main-color py-4">
        <div class="container">
            <div class="row align-items-center">
                <div id="logo" class="col-md-4 col-12 mb-4 mb-md-0 d-flex justify-content-md-start justify-content-center">
                    <?php get_template_part( 'template-parts/header/header', 'logo' ) ?>
                </div>
                
                <?php if(has_nav_menu( 'top' )) : ?>
                    <?php get_template_part( 'template-parts/nav/nav', 'top' ) ?>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <!-- Main -->