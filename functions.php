<?php
/**
 * Plik funkcji motywu SYSTEMY DK Theme.
 *
 * To jest centrum dowodzenia naszym motywem. Tutaj dodajemy wszystkie funkcje,
 * wczytujemy skrypty i style.
 */

/**
 * Prawidłowy sposób dodawania arkusza stylów (style.css) i skryptów do motywu.
 */
function systemydk_enqueue_assets() {
	
	// Rejestruje i wczytuje główny arkusz stylów naszego motywu.
	// get_stylesheet_uri() automatycznie znajduje plik style.css w głównym folderze motywu.
	wp_enqueue_style( 'systemydk-main-style', get_stylesheet_uri() );

}

// Uruchamia naszą funkcję 'systemydk_enqueue_assets' w odpowiednim momencie,
// w którym WordPress wczytuje wszystkie swoje skrypty i style.
add_action( 'wp_enqueue_scripts', 'systemydk_enqueue_assets' );

?>
