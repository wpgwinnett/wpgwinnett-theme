	<footer class="app-footer">
		<div class="app-footer__container">
	
		<?php $s = get_template_directory_uri(). "/resources/img/WordPress-Logo.svg";
		;
		?>
		   
		  <img class="app-footer__wp-custom-logo" src="<?php echo $s ; ?>">
			<?php Hybrid\View\display( 'nav/menu', 'primary', [ 'location' => 'footer' ] ) ?>

			<p class="app-footer__credit">
				<?php
				$curYear = date('Y'); 
				esc_html_e( '&copy;' . $curYear .', WordPress Gwinnett. All Rights Reserved.' ) ?>
			</p>
		</div>

	</footer>

</div><!-- .app -->

<?php wp_footer() ?>
</body>
</html>
