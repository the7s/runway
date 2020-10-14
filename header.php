<?php
/**
 * The header for the theme
 * @package runway
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="<?php bloginfo('template_url'); ?>/style.css?<?php echo THEME_DB_VERSION; ?>" type="text/css" rel="stylesheet">
	<title><?php bloginfo('name'); ?> - </title>
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">

<header class="header">
    <section class="container">
        <hgroup itemscope itemtype="https://schema.org/WPHeader">
            <h1 class="fullname"><?php (!is_home()) ? wp_title("") : bloginfo('name'); ?></h1>
        </hgroup>
		<?php
		    wp_nav_menu(
		    );
		?>
    </section>
</header>

