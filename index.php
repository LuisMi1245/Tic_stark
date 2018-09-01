<?php get_header();?>

<!-- PORTADA (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
<section class="portada container-flex background-img-ticstark" id="PORTADA">
    <!-- <video playsinline autoplay muted loop poster="pulina.jpg" id="video_back">
            <source src="<?php bloginfo('template_url')?>/assets/video_header/polina.webm" type="video/webm">
            <source src="pulina.mp4" type="video/mp4">
        </video> -->
    <div class="col-item-auto">
        <figure class="container-flex flexflow-c-ol nowrap-align-center all-color-ticstark-white">
            <div class="col-item-auto">
                <h1 class="f-segoe-sb a">CREATIVIDAD</h1>
            </div>
            <div>
                <h2 class="f-segoe-sl-webkit b">NUESTRA PRIORIDAD</h1>
            </div>
            <div>
                <h2 class="f-segoe-r c">MARCA - DISEÑO - DESARROLLO</h2>
            </div>
            <div class="boton">
                <a class="button f-segoe-rn" href="<?php
    require_once(dirname(__FILE__) . '/page.php');
    header("HTTP/1.1 200 OK");
    header("Status: 200 All rosy");

    // Your Wordpress Functions here...
    echo site_url();
?>">LEER MÁS</a>
            </div>
        </figure>
    </div>
</section>

<!-- SERVICIOS DE TICSTARK -->
<section class="container-flex flexflow-r-pl">
    <div class="bloque-servicios col-item-flex-3">
        <figure class="efecto-caja">
            <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/compreso/Page1.png" alt="Servicios de ticstark">
        </figure>
    </div>
    <div class="bloque-servicios col-item-flex-3">
        <figure class="efecto-caja">
            <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/compreso/Page2.png" alt="Servicios de ticstark">
        </figure>
    </div>
    <div class="bloque-servicios col-item-flex-3">
        <figure class="efecto-caja">
            <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/compreso/Page3.png" alt="Servicios de ticstark">
        </figure>
    </div>
    <div class="bloque-servicios col-item-flex-3">
        <figure class="efecto-caja">
            <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/compreso/Page4.png" alt="Servicios de ticstark">
        </figure>
    </div>
</section>

<!-- SERVICIOS DETALLADOS -->
<section class="container-flex background-color-ts-6" id="SERV">
    <article class="col-item-flex-5">
        <img class="img-relative-3" src="<?php bloginfo('template_url')?>/assets/img/compreso/paths/path-5.png" alt="servicios">
    </article>
    <article class="col-item-flex-8">
        <div class="container-flex flexflow-c-ol sr">
            <div class="col-item-auto">
                <h1 class="f-segoe-sl-webkit a-2">IDENTIDAD DE MARCA</h1>
            </div>
            <div class="col-item-auto">
                <p class="f-segoe-r b-2">Le damos identidad a tu marca, creando reconocimiento y captación en los usuarios, teniendo claro el segmento
                    de mercado y tu público objetivo.</p>
            </div>
        </div>
    </article>
</section>

<section class="container-flex background-white">
    <article class="col-item-flex-8">
        <div class="container-flex flexflow-c-ol sr">
            <div class="col-item-auto">
                <h1 class="f-segoe-sl-webkit a-2">MARKETING DIGITAL</h1>
            </div>
            <div class="col-item-auto">
                <p class="f-segoe-r b-2">Diseñamos
                    <strong class="b-2">estrategias para llegar a tu público verdadero</strong>, optimizando tus canales de ventas para que tus
                    clientes compren sin dolores de cabezas.
                    <br> Siempre ofreciendo lo que ellos necesitan de tu marca.</p>
            </div>
        </div>
    </article>
    <article class="col-item-flex-5">
        <img class="img-relative-3" src="<?php bloginfo('template_url')?>/assets/img/compreso/paths/path-6.png" alt="servicios">
    </article>
</section>

<section class="container-flex background-color-ts-7">
    <article class="col-item-flex-5">
        <img class="img-relative-3" src="<?php bloginfo('template_url')?>/assets/img/compreso/paths/path-7.png" alt="servicios">
    </article>
    <article class="col-item-flex-8">
        <div class="container-flex flexflow-c-ol sr">
            <div class="col-item-auto">
                <h1 class="f-segoe-sl-webkit a-2">REDES SOCIALES</h1>
            </div>
            <div class="col-item-auto">
                <p class="f-segoe-r b-2">Creamos contenido para las comunidades digitales, en Facebook e Instagram, que se identifiquen con tu marca.
                </p>
            </div>
        </div>
    </article>
</section>


<!-- BLOG -->
<section class="blog" id="BLOG">
    <div class="text-container t-all-center">
        <h2 class="c-2 f-segoe-sl-webkit">BLOG</h2>
        <h1 class="c-2 f-segoe-bn">ÚLTIMAS ENTRADAS</h1>
    </div>


    <!-- BLOG CONTENIDO -->
    <div class="container-grid fitems-center page-home">
        <?php query_posts("paged=$paged");?>
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php include(TEMPLATEPATH. '/cards.php');?>
        <?php endwhile; else: ?>
        <h4 class="t-center">No se encontraron noticias recientes.</h4>
        <?php endif; ?>
    </div>
    <div class="text-container bottom">
        <a class="c-2 f-segoe-sl" href="#">VER MÁS ENTRADAS...</a>
    </div>
</section>

<!-- PARTNERS/CLIENTES (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
<section class="background-color-ts-9" id="CUSTOMER">
    <div class=" container-flex nowrap-align-center">
        <article class="col-item-flex-3 customer bloque-cliente-mobile-1">
            <h2 class="c-2 c-mobile f-segoe-bn color-ticstark-white">CLIENTES</h2>
        </article>

        <div class="col-item-flex-9 customer bloque-cliente-mobile-2">
            <div class="container-flex flexflow-r-pl fitems-spacearound cliente-mobile">
                <article class="col-item-flex-2 bloque-cliente">
                    <img class="img-relative-2" src="<?php bloginfo('template_url')?>/assets/img/svg-images/customers/logo.png" alt="imagen cliente">
                </article>
                <article class="col-item-flex-2 bloque-cliente">
                    <img class="img-relative-2" src="<?php bloginfo('template_url')?>/assets/img/svg-images/customers/logo-2.png" alt="imagen cliente">
                </article>
                <article class="col-item-flex-2 bloque-cliente">
                    <img class="img-relative-2" src="<?php bloginfo('template_url')?>/assets/img/svg-images/customers/logo.png" alt="imagen cliente">
                </article>
                <article class="col-item-flex-2 bloque-cliente">
                    <img class="img-relative-2" src="<?php bloginfo('template_url')?>/assets/img/svg-images/customers/logo-2.png" alt="imagen cliente">
                </article>
            </div>
        </div>

    </div>
</section>

<!-- FORMULARIO DE CONTACTO (PERMITE CAMBIOS EN ELEMENTOS CON FLEX)-->
<section class="container-fluido" id="FAQ">
    <div class="container-flex">
        <div class="col-item-flex-4 background-color-ts-8 sr4">
            <div class="container-flex flexflow-c-ol">
                <h2 class="c-2 f-segoe-bn color-ticstark-6 g1">CONTACTO</h2>
                <ul class="lista-none g all-color-6">
                    <li>
                        <a href="mailto:info@ticstark.com">info@ticstark.com</a>
                    </li>
                    <li>
                        <a href="tel:+573003422392">+57 300-3422392</a>
                    </li>
                    <li>
                        <a href="www.ticstark.com">www.ticstark.com</a>
                    </li>
                    <li>
                        <h2 class="f-segoe-bn color-ticstark-6 h">Redes Sociales</h2>
                        <div class="container-flex icons">
                            <div class="col-item-flex-2 subicons">
                                <a href="https://www.facebook.com/ticstarksas/" target="_blank">
                                    <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/facebook.svg" alt="logo facebook">
                                </a>
                            </div>
                            <div class="col-item-flex-2 subicons">
                                <a href="https://twitter.com/Ticstarksas" target="_blank">
                                    <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/twitter.svg" alt="logo twitter">
                                </a>
                            </div>
                            <div class="col-item-flex-2 subicons">
                                <a href="https://www.instagram.com/monteriavendeoficial/">
                                    <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/instagram.svg" alt="logo instagram">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-item-flex-8 background-color-ts-7 sr4">
            <h2 class="c-3 f-segoe-rn color-ticstark-6">ENVÍANOS TU MENSAJE</h2>
            <form class="container-flex flexflow-c-ol margin-3">
                <!-- NOMBRES / EMAIL -->
                <div class="col-item-auto">
                    <div class="container-flex flexflow-r-ol fitems-spacebetween">
                        <input class="col-item-custom-1" id="nombre" placeholder="Nombre" type="text">
                        <input class="col-item-custom-1" id="email" placeholder="Correo Electrónico" type="email">
                    </div>
                </div>

                <!-- MENSAJE -->
                <textarea class="col-item-auto" id="mensaje" name="mensaje" rows="9" placeholder="Mensaje"></textarea>
                <!-- ENVIAR -->
                <input class="col-item-auto button f-segoe-sl-webkit t-center" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</section>

<?php get_footer();?>