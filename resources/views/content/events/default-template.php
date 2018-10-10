<div class="app-content">

	<?php Hybrid\View\display( 'header', Hybrid\Template\hierarchy() ) ?>

<main id="main" class="app-main">

<h1 class="entry__title"><?php esc_html_e( 'Calendar') ?> </h1>

<div id="tribe-events-pg-template" class="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
	
</div> <!-- #tribe-events-pg-template -->



</main>

	
	<?php Hybrid\View\display( 'footer', Hybrid\Template\hierarchy() ); ?>
</div>
