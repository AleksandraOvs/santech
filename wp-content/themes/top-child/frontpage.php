<?php 
/**
 * Template Name: Homepage Template
 *
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */
get_header();
?>

   <div id="content" class="front">
			<?php get_template_part('template-parts/hero') ?>
        	<div class="content-wrap" >
        		<?php the_content() ?>
        	</div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
<?php get_footer();