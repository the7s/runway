<?php
get_header();

get_template_part( 'template-parts/content', get_post_format() );
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;

?>
</div>

<?php
get_sidebar();
get_footer();