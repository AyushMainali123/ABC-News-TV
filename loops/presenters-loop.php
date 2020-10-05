<div class="col-md-6 col-lg-4 col-xl-3 content my-4">
    <div class="image__container">
        <img
        src="<?php the_post_thumbnail_url();?>"
        alt=""
        />
    </div>
    <div class="details">
        <div class="name"><?php the_title(); ?></div>
        <div class="icon__mainContainer">
        <div class="icon__container">
        <a href="#">
            <i class="fab fa-facebook-f"></i>
        </a>
        </div>
        <div class="icon__container">
        <a href="#">
            <i class="fab fa-twitter"></i>
        </a>
        </div>
        </div>
    </div>
</div>