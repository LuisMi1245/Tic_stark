<?php /*
Template Name: ticstark_faq
*/
?>

<?php get_header();?>
<?php include(TEMPLATEPATH. '/componentes/portada.php');?>

<!--CONTENIDO-->
<section class="container-grid faq-map">
    <div class="text-container t-all-center">
        <h2 class="c-2 f-segoe-sl-webkit">Localícenos</h2>
        <h1 class="c-2 f-segoe-bn">En Montería Córdoba</h1>
    </div>
<div id="mapid"><script src="<?php bloginfo('template_url')?>/js/map.js"></script></div>
</section>
<?php include(TEMPLATEPATH. '/componentes/form.php');?>
<?php get_footer();?>