<?php
/**
 * Główny, domyślny plik szablonu (tzw. fallback).
 * To ten plik jest używany, gdy WordPress nie może znaleźć bardziej specyficznego szablonu.
 */

// Wczytujemy zawartość pliku header.php (który za chwilę stworzymy)
get_header();
?>

<main id="site-content" role="main">

    <?php
    // Rozpoczynamy pętlę WordPressa - serce każdego motywu
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); // Przygotowuje dane aktualnego wpisu/strony
            ?>

            <article id="post-<?php the_ID(); ?>">
                
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>

                <div>
                    <?php the_content(); ?>
                </div>

            </article>

            <?php
        endwhile;
    else :
        // Co wyświetlić, jeśli nie ma żadnych postów/stron do pokazania
        ?>
        <p>Niestety, nic tu nie znaleziono.</p>
        <?php
    endif;
    ?>

</main>

<?php
// Wczytujemy zawartość pliku footer.php (który też za chwilę stworzymy)
get_footer();
?>
