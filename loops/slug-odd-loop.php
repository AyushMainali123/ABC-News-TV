<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
<a href="<?php the_permalink(); ?>" class="text-decoration-none text-secondary">
    <div class="card" style="min-height: 425px;">
        <img 
            alt=""
            src="<?php the_post_thumbnail_url(); ?>"
            class="card-img-top"
            style="max-height: 165px;"
        />
        
        <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text">
                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
            </p>
        </div>
        <div class="card-footer text-muted">
            <?php echo get_the_date(); ?>
        </div>    
    </div>  
</a>
         
</div>