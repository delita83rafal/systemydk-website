<?php
/**
 * Szablon stopki (footer.php)
 *
 * Wyświetla wszystko od zamknięcia głównego kontenera treści do końca dokumentu </html>.
 */
?>

<footer id="site-footer" role="contentinfo">
	<div class="footer-credits">
		<p>
			&copy; <?php echo date_i18n( 'Y' ); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</p>
	</div>
</footer>

<?php
// Niezbędny hak (hook) WordPressa. Zawsze musi być tuż przed zamknięciem </body>.
// Dzięki niemu wtyczki mogą dodawać skrypty na końcu strony, co przyspiesza jej ładowanie.
wp_footer(); 
?>

</body>
</html>
