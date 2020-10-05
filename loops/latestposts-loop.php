<div class="swiper-slide">
    
    <div class="swiper-image-container">
        <img
            src="<?php the_post_thumbnail_url(); ?>"
            alt=""
            class="swiper-image"
        />
    </div>
    <div class="overlay">
        <div class="about-swiper">
            <div class="content px-4">
            
                <h3><?php the_title(); ?></h3>
                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?>
                </p>
            </div>
                <a href="<?php the_permalink();?>" target="_blank">
                    <i
                        class="fa fa-play"
                        data-link="https://www.youtube.com/embed/fvCdLmxnkj0"
                        data-toggle="modal"
                        data-target="#exampleModalCenter"
                    >
                    </i>
                    <?php get_template_part('/template-parts/youtubeVideo');?>
                </a>
                
                
          
        </div>
    </div>
</div>