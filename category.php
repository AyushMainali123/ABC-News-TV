<?php get_header();?>
<section class="mainSection">
    <div class="container">
        <h1><?php single_cat_title(); ?></h1>
        <div class="mainSection__programsContainer">
            <!-- 1 -->
            <?php
                if(have_posts()):
                while(have_posts()): the_post(); 
            ?>
               <?php get_template_part('/loops/category-loop'); ?>
            <?php endwhile; endif;?>
        </div> 
    </div>
</section>
<?php get_footer(); ?>
