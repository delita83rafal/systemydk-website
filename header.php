<?php
/**
 * Szablon nagłówka (header.php)
 *
 * Wyświetla wszystko od deklaracji <!doctype html> do otwarcia głównego kontenera treści.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
	// Niezbędny hak (hook) WordPressa. Zawsze musi być tuż przed zamknięciem </head>.
	// Dzięki niemu działają wtyczki, ładowane są style i skrypty.
	wp_head(); 
	?>
</head>

<body <?php body_class(); ?>>

<header id="site-header" role="banner">

	<div class="site-branding">
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	</div>

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<p>-- MIEJSCE NA MENU --</p>
	</nav>

</header>
