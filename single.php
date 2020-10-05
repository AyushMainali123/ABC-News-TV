<?php get_header(); ?>
<div class="container my-5">
<div class="row">
    <div class="col-md-8">
        <h1 class="mb-2"><?php the_title(); ?></h1>
        <h5 class="text-secondary my-4"><?php echo get_the_date();?></h5>
        <p class="lead"><?php the_content(); ?></p>
    </div>
    <div class="col-md-4">
        <?php get_template_part('/widgets/primary-sidebar');?>
    </div>
</div>
    
</div>


<?php get_footer(); ?>