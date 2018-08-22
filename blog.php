<?php get_header();?>

<!-- PORTADA (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
<section class="portada container-flex background-img-ticstark" id="PORTADA">
    <div class="col-item-auto">
        <figure class="container-flex flexflow-c-ol nowrap-align-center all-color-ticstark-white">
            <div class="col-item-flex-5">
                <h1 class="f-segoe-sb a-blog">TICSTARK</h1>
            </div>
            <div class="col-item-flex-5">
                <h2 class="f-segoe-sl-webkit b-blog">BLOG</h1>
            </div>
            <a class="boton-arrow" href="#" onclick="slideArrow()">
                <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/arrows.svg">
            </a>
        </figure>
    </div>
</section>


<!-- BLOG -->
<section class="blog" id="BLOG">
<!-- <div class="text-container">
<h2 class="c-2 f-segoe-sl-webkit">BLOG</h2>
</div> -->

<!-- BLOG CONTENIDO -->
<section class="container-grid page-blog">
<!-- ITEM 1 (SIDEBAR) -->
<?php get_sidebar();?>
<!-- ITEM 2 (ENTRADAS) -->
<section class="container-grid hijo-1 fitems-center">
<?php query_posts("paged=$paged");?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<?php include(TEMPLATEPATH. '/cards.php');?>
<?php endwhile; else: ?>
<h4 class="t-center">No se encontraron noticias.</h4>
<?php endif; ?>

<div class="pagination">
<a>
<?php next_posts_link();?>
</a>
<a>
<?php previous_posts_link();?>
</a>
</div>
</section>
</section>
</section>
<?php get_footer();?>