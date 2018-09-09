<?php /*
Template Name: ticstark_blog
*/
?>

<?php get_header();?>
<?php include(TEMPLATEPATH. '/componentes/portada.php');?>
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
<?php include(TEMPLATEPATH. '/componentes/cards.php');?>
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