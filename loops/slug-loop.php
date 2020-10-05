
<div class="swiper-slide">
   
    <div class="image-container">
        <img
            src="<?php the_post_thumbnail_url(); ?>"
            alt=""
        />
        <a href="<?php the_permalink(); ?>" target="_blank">
        <div class="slug-overlay">
            <div class="slug-icons">      
                <i class="fas fa-play"></i> 
            </div>
        </div>
        </a> 
    </div>
    <div class="slug-content">
    <a href="<?php the_permalink(); ?>" style="text-decoration: none;" target="_blank">
        <p class="text-dark"><?php the_title(); ?></p>  
        <div>
            <p class="text-secondary"><?php echo get_the_date(); ?></p>
        </div>
    </a>  
    </div>
</div>
