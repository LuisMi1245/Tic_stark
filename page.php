
<?php get_header();?>
<?php include(TEMPLATEPATH. '/componentes/portada.php');?>

<section class="container-grid content-menu-page">
    <article class="container-grid">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="f-segoe-sb b-blog-page">
            <?php the_title();?>
        </h1>
        <div class="parrafo-single-page f-all-segoe-rn">
            <?php the_content();?>
        </div>
        <?php endwhile; endif; ?>
    </article>
</section>

<?php get_footer();?>
