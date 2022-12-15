<div class="blog-container">
	<header class="blog-header">
        <h1><?php the_title(); ?></h1>

        <span class="date"><?php the_date(); ?></span>

        <div class="meta-container">
            <div class="tags">
                <?php 
                    the_tags('<span class="tag"><i class="fa fa-tag"></i> ', '</span><span class="tag"><i class="fa fa-tag"></i> ', '</span>');
                ?>
            </div>
                <a href="#comments" class="comment"><i class='fa fa-comment'></i> <?php comments_number(); ?></a>
        </div>
        
        <img class="post-img" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Post image">
	</header>


    <?php
        comments_template();
        the_content();

    ?>

</div>