<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */ 
?>
<div id="popup-callback" class="popup" style="display: none;">
<?php 
if ($popup_head = carbon_get_theme_option('crb_contact_head')  ){
	echo '<h3>' . $popup_head . '</h3>';
	if ($popup_desc = carbon_get_theme_option('crb_contact_desc')) : echo '<p class="popup-description">' . $popup_desc . '</p>'; endif;

	//echo '<p>' . $popup_desc . '</p>';
};
?>
<?php
$shcode = carbon_get_theme_option('crb_contact_shortcode');
echo do_shortcode("$shcode"); ?>
</div>

<footer>
         <?php 
          // top-footer 
          do_action( 'top_store_top_footer' ); 
          // widget-footer
		  do_action( 'top_store_widget_footer' );
		  // below-footer
          do_action( 'top_store_below_footer' );  
        ?>
     </footer> <!-- end footer -->

     <div class="arrow-up">
     <svg width="34" height="82" viewBox="0 0 34 82" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.881 82.0009L12.881 21.1932L4.31526e-05 21.1932L16.5736 0.000908622L33.1472 21.1932L20.2662 21.1932L20.2662 82.0009L12.881 82.0009Z" fill="white"/>
</svg>

<div>
    </div> <!-- end top-store-site -->
<?php wp_footer(); ?>
</body>
</html>