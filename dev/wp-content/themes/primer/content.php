<?php
/**
 * The template part for displaying general content.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<article id=" test post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	/**
	 * Fires inside the `article` element, before the content.
	 *
	 * @hooked primer_wc_shop_messages - 10
	 *
	 * @since 1.0.0
	 */
	do_action( 'primer_before_post_content' );

	?>

	

	
	<?php

	/**
	 * Fires after templates/parts/loop/post template
	 *
	 * @hooked primer_add_post_meta - 10
	 *
	 * @since 1.0.0
	 */
	do_action( 'primer_after_post_title_template' );

	?>
	<div class="mmm">
	<div id="main1">
<?php get_template_part( 'templates/parts/loop/post', 'title' ); ?>

 <div class="closes">
	<?php if ( is_single() ) : ?>

		<?php get_template_part( 'templates/parts/loop/post', 'content' ); ?>

	<?php else : ?>

		<?php get_template_part( 'templates/parts/loop/post', 'excerpt' ); ?>

	<?php endif; ?>

	<?php get_template_part( 'templates/parts/loop/post', 'footer' ); ?>
	</div>
	</div>
	
	<div id="main2">
	<?php if ( ! is_single() || ! primer_use_featured_hero_image() ) : ?>

		<?php get_template_part( 'templates/parts/loop/post', 'thumbnail' ); ?>

	<?php endif; ?>
	
	</div>
	</div>

	<?php

	/**
	 * Fires inside the `article` element, after the content.
	 *
	 * @since 1.0.0
	 */
	do_action( 'primer_after_post_content' );

	?>

</article><!-- #post-## -->
