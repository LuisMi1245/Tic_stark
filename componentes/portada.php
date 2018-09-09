
<!-- PORTADA (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
<section class="portada container-flex background-img-ticstark" id="PORTADA">
    <div class="col-item-auto">
        <figure class="container-flex flexflow-c-ol nowrap-align-center all-color-ticstark-white">
            <div class="col-item-flex-5">
                <h1 class="cool-font a-blog">TICSTARK</h1>
            </div>
            <div class="col-item-flex-5">
                <h2 class="f-segoe-sl-webkit b-blog">
            <?php the_title();?>                      
                </h2>
            </div>
            <a class="boton-arrow" href="#" onclick="slideArrow()">
                <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/arrows.svg">
            </a>
        </figure>
    </div>
</section>


