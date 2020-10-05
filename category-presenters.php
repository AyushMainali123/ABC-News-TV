
<?php get_header(); ?>

<section class="presenters">
    <div class="container">
        <h1><?php single_cat_title(); ?></h1>
        <div class="row">
            <?php

if(have_posts()): 
while(have_posts()): the_post(); 
?>
 <?php get_template_part('/loops/presenters-loop'); ?>
<?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

