<?php Hybrid\View\display( 'header', Hybrid\Template\hierarchy() ) ?>
<div class="app-content">

	

<main id="main" class="app-main">

<div class="entry__wrapper">

	<div class="entry__content">
		
			<h1 class="entry__title entry__centered" >Events</h1>
			<div class="entry__block-centered">
				<p>WordPress Gwinnett has several types of events...</p>

				<p>Lorem ipsum dolor sit amet, dolore adipiscing an mel, eum ei error putant. Ut iracundia urbanitas sed. Id assentior efficiendi per. Vix ei everti noluisse, adhuc doctus denique mei et. Eu omnes qualisque contentiones eum, aperiri dolorum cum ea, ei fabellas inciderint pri.
				</p>
			</div>
		

	
	<div class="entry__body">
<?php
		$terms = get_terms( array(
    'taxonomy' => 'tribe_events_cat',
    'hide_empty' => false,
) );
	    foreach ($terms as $term) {
		
			
			if (strlen($term->description) > 0)
			{
				$s = get_term_link($term->slug, 'tribe_events_cat');
				
			echo '<h3>' . $term->name . '</h3>';
			echo '<p>' . $term->description . '</p>';
			echo '<p></p>';
			echo '<p><a href="' . $s . '"> Click here for our next dates </a>';
			 
				
			}
			
			
		}
		
?>
	</div>
 </div>
</div>
</main>

	
	<?php Hybrid\View\display( 'footer', Hybrid\Template\hierarchy() ); ?>
</div>
