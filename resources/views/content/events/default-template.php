<?php Hybrid\View\display( 'header', Hybrid\Template\hierarchy() ) ?>

<div class="app-content">
	



<main id="main" class="app-main">



<div id="tribe-events-pg-template" class="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
	
</div> <!-- #tribe-events-pg-template -->



</main>

	
	<?php Hybrid\View\display( 'footer', Hybrid\Template\hierarchy() ); ?>
</div>
