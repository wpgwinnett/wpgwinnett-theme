<?php if ( has_nav_menu( $data->location ) ) : ?>

	<?php 
	error_log('data location ' . $data->location); 
	switch ($data->location ){
		case 'primary':
		  $id = 'menu__wpg-main';
		  break;
		 case 'footer':
		    $id = 'menu__wpg-footer';
			break;
	}
?>
	<nav id="<?php echo $id ?>" <?php Hybrid\Attr\display( 'menu', $data->location ) ?>>

		<h3 class="menu__title screen-reader-text">
			<?php Hybrid\Menu\display_name( $data->location ) ?>
		</h3>

		<?php wp_nav_menu( [
			'theme_location' => $data->location,
			'container'      => '',
			'menu_id'        => '',
			'menu_class'     => 'menu__items',
			'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			'item_spacing'   => 'discard'
		] ) ?>

	</nav>

<?php endif ?>
