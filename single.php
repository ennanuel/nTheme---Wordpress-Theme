<?php
	get_header();
?>

	<article class="content">

    <section class="page-content">

        <?php
        
        if(have_posts()) {
            while( have_posts() ) {
                the_post();
                
                get_template_part('template-parts/content', 'article');
            }
        }
        
        ?>

    </section>

    <section class="sidebar">
            <?php

                dynamic_sidebar('sidebar-1');

            ?>
    </section>
	    
	</article>

<?php
	get_footer()
?>