<?php
	get_header();
?>

	<article class="content">

	<?php get_search_form(); ?>

	<div class="search-result">
		<?php

		if(have_posts()) :

			if(get_post_type() === 'post') :

				while( have_posts() ) :

					the_post();
					get_template_part('template-parts/content', 'archive');

				endwhile;

			endif;
			
			else: echo '<h2 class="nothing-found">Nothing Found</h2>';
		endif;
		
		?>
	</div>
	    
	</article>

<?php
	get_footer()
?>