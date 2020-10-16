<?php
/**
 * Custom CSS for simple blog.
 *
 * @package Memory
 */

?>
<div class="blog-list container">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :

			the_post();

			echo '<div class="blog-article">';
			get_template_part( 'template-parts/content', 'page');
			echo '</div>';

		endwhile;
		the_posts_pagination(
			array(
				'prev_text' => __( '<i class="icofont icofont-rounded-double-left"></i>', 'runway' ),
				'next_text' => __( '<i class="icofont icofont-rounded-double-right"></i>', 'runway' ),
			)
		);
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</div>

