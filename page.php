<?php
	get_header();
?>
<div class="content">

    <article class="page-content">

    <?php
    if(have_posts()) {
        while( have_posts() ) {
            the_post();
            
            get_template_part('template-parts/content', 'page');
        }
    }

    the_posts_pagination();
    ?>
        
    </article>

    <section class="sidebar">
            <?php

                dynamic_sidebar('sidebar-1');

            ?>
    </section>
</div>

<?php
	get_footer()
?>