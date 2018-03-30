<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 *
 * @package Primer
 * @since   1.0.0
 */

?>

		</div><!-- #content -->

		<?php

		/**
		 * Fires before the `<footer>` element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'primer_before_footer' );

		?>

		<footer id="colophon" class="site-footer">
		
		

			<div class="site-footer-inner">

				<?php

				/**
				 * Fires inside the `<footer>` element.
				 *
				 * @hooked primer_add_footer_widgets - 10
				 *
				 * @since 1.0.0
				 */
				do_action( 'primer_footer' );

				?>

			</div><!-- .site-footer-inner -->
			
			<div class="full-width">
			<h3 style="text-align: center;    color: #d82700;">Donations Are Always Appreciated!</h3>
<p style="text-align: center;    color: #ffffff;">Please Send The ETH Donations To:</p>
<p style="text-align: center;    color: #ffffff;"><span class="mono wrap ng-binding">0x1869aDcF6Ad005097ddCCeeA6f84360fDaa7A535</span></p>	
			
			</div>

		</footer><!-- #colophon -->

		<?php

		/**
		 * Fires after the `<footer>` element.
		 *
		 * @hooked primer_add_site_info - 10
		 *
		 * @since 1.0.0
		 */
		do_action( 'primer_after_footer' );

		?>

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>

</html>
