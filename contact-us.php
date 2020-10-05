<?php
/*
Template Name: Contact Us
*/

?>



<?php get_header(); ?>
<div class="container my-5" style="min-height: 80vh;">
<div class="row">
    <div class="col-md-8">
        <h1><?php the_title(); ?></h1>
        <div class="lead">
            ABC Media Group Pvt. Ltd, Kathmandu. Nepal .
        </div>
    </div>
    <div class="col-md-4">
        <?php get_template_part('/widgets/primary-sidebar');?>
    </div>
</div>
    
</div>

<?php get_footer(); ?>


