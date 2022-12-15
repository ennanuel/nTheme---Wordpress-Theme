<div class="post-container">

    <div class="single-post">
		<div class="media">
		    <div class="media-img">

			<?php 
			
				if(!empty(get_the_post_thumbnail_url())) {
					
			?>
				<img class="post-img" src=" <?php the_post_thumbnail_url('thumbnail'); ?>" alt="Post image">
				<a class="post-img-link" href=" <?php the_permalink(); ?>"> <?php the_title(); ?> </a>

			<?php 
			
				}
			
			?>
            </div>


		    <div class="media-body">
			    <h3 class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
			    <div class="meta-container">
                    <span class="comment"><a href="#"> <?php comments_number(); ?> </a></span> 
                    <span class="date"> <?php the_date(); ?> </span>
                </div>
			    <div class="post-excerpt"> <?php the_excerpt(); ?> <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a></div>
		    </div><!--//media-body-->
		</div><!--//media-->
	</div>

</div>