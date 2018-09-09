<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/assets/img/svg-images/favicon.ico">
    <title>Ticstark - Marketing, Social Media y Software</title>
    <meta name="description" content="Impulsamos tu marca y negocio en redes sociales de manera profesional, aplicando estrategias avanzadas de posicionamiento de marca y campañas publicitarias.">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/video-header.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/font.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/mediaqueries.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
        crossorigin=""></script>
    <?php wp_head();?>
</head>

<body>
    <!-- HEADER -->
    <header class="container-flex header-fix nowrap-align-center header-mobile" id="HEADER">
        <!-- LOGOTIPO -->
        <div class="col-item-flex-2">
            <figure class="header-logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/logo-white.svg">
                </a>
            </figure>
        </div>

        <!-- BARRA DE NAVEGACIÓN -->
        <div class="col-item-flex-8">
            <nav class="header-nav h-home">
                <?php
        wp_nav_menu(
        array(
        'container' => false,
        'item_wrap' => '<ul id="menu-top">%3$s</ul>',
        'theme_location' => 'menu'
        ));?>
            </nav>
        </div>
    </header>