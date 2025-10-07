<?php
/**
 * Template Name: Szablon Strony Głównej
 *
 * To jest nasz niestandardowy szablon dla strony głównej z sekcją "Hero".
 */

get_header(); // Wczytuje plik header.php
?>

<main id="site-content">

    <section class="hero-section">
        <div class="hero-content-wrapper">
            <h1 class="hero-title">Tworzymy bezpieczeństwo. Od 20 lat.</h1>
            <p class="hero-subtitle">Projektujemy i wdrażamy inteligentne systemy monitoringu i analityki AI dla biznesu i sektora publicznego.</p>
            <div class="hero-buttons">
                <a href="#rozwiazania-biznes" class="button button-primary">Zobacz rozwiązania dla biznesu</a>
                <a href="#case-studies-publiczne" class="button button-secondary">Sprawdź wdrożenia dla sektora publicznego</a>
            </div>
        </div>
    </section>

    <?php
    // Ta pętla jest na wszelki wypadek, gdybyśmy chcieli dodać jakąś treść z edytora poniżej sekcji Hero
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    }
    ?>

</main>

<?php
get_footer(); // Wczytuje plik footer.php
?>
