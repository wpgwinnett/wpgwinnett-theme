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
<!--  popout menu for responsive design -->

	<section id="popout">
		<div id="popout__header">
				   
			<?php the_custom_header_markup() ?>
			<i class= "fas fa-times"  ></i>
		</div>
					
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					
					
		</section>	
<!-- overlay for behind popup menu -->		
<div class="overlay"> </div> 
<?php wp_footer() ?>
</body>
</html>
