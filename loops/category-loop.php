    <div class="content"> 
               
            <a href="<?php the_permalink(); ?>" style="color: white;" target="_blank">
            <div class="mainSection__imageContainer">
                <img
                src="<?php the_post_thumbnail_url();?>"
                alt=""
                />
                
            </div>
            <div class="overlay">
                <div class="overlay__text">
                <p class="text-uppercase name"><?php the_title(); ?></p>
                <div class="time"><?php echo get_the_date(); ?></div>
                </div> 
            </div>
    </a>    
</div>