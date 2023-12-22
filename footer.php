</main>
<?php if (function_exists("lc_custom_footer")) lc_custom_footer();
else {
?>
	<?php if (is_active_sidebar('footerfull')) : ?>
		<div class="wrapper mt-5" id="wrapper-footer-widgets">

			<div class="container-fluid">

				<div class="row gx-5">
					<div class="col-md">
						<a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
							<img src="<?= get_template_directory_uri() ?>/assets/img/logotipo.webp" />
						</a>
						<p class="mt-4">
							Sociedade unipessoal de advogados composta por profissionais com larga experiência em diversas áreas do direito e com atuação em diversos estados da região nordeste do Brasil.
						</p>
					</div>

					<div class="col-md">
						<h5 class="fw-bold">Natal/RN</h5>
						<div class="mb-2">
							<strong>Endereço:</strong> Rua Clóvis Beviláqua, n.º 687, bairro Lagoa Seca, Natal/RN - CEP: 59.022-230
						</div>
						<div class="mb-2">
							<strong>Whatsapp:</strong> (84) 98732-9303
						</div>
						<div class="mb-2">
							<strong>Telefone:</strong> (84) 2226-3840
						</div>
						<div class="mb-2">
							<strong>E-mail:</strong> ramonsaldanhaadv@gmail.com
						</div>
					</div>
					<?php dynamic_sidebar('footerfull'); ?>
				</div>

			</div>
		</div>
	<?php endif ?>


	<div class="wrapper py-3" id="wrapper-footer-colophon">
		<div class="container-fluid">

			<div class="row">

				<div class="col text-center">

					<footer class="site-footer" id="colophon">

						<div class="site-info">

							<?php picostrap_site_info(); ?>

						</div><!-- .site-info -->

					</footer><!-- #colophon -->

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->

<?php
} //END ELSE CASE 
?>


<?php wp_footer(); ?>

</body>

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-934345590"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'AW-934345590');
</script>
<!-- Event snippet for Clique para whatsapp conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
	function gtag_report_conversion(url) {
		var callback = function() {
			if (typeof(url) != 'undefined') {
				window.location = url;
			}
		};
		gtag('event', 'conversion', {
			'send_to': 'AW-934345590/D4e3CMqi_YEZEPb2w70D',
			'value': 1.0,
			'currency': 'BRL',
			'event_callback': callback
		});
		return false;
	}
</script>


</html>