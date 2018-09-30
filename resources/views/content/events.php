<div class="app-content">

	<main id="main" class="app-main">

		<?php echo "<h1> testing this is the events page</h1>";

 echo do_shortcode("[tribe_events]");
		?>

	</main>

	<?php Hybrid\View\display( 'sidebar', 'primary', [ 'sidebar' => 'primary' ] ) ?>

</div>