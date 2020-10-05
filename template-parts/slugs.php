<?php 
    $cat_arr = array(
        array('ABC Bises', 16 ),
        array('ABC Report', 14),
        array('ABC Watch', 15),
        array('Biz Talk', 18),
        array('Operation BigNews', 13),
        array('Our Health', 17)
    );
    $i=0;
    foreach($cat_arr as $cat): 
    $query = new WP_Query(array('cat'=>$cat[1]));
    if($i%2 == 0):
        if($query->have_posts()):       
?>
        <section class="slug">
        <div class="container overflow-hidden"> 
            <h2 class="my-4">
                <a href="<?php echo get_category_link( $cat[1] ); ?>" class="text-dark text-decoration-none">
                    <?php echo $cat[0]; ?>
                </a>    
            </h2>
            <!-- Slider main container -->
            <div class="swiper-container-slug">
            <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <?php 
                while($query->have_posts()): $query->the_post();
                ?>
                    <?php get_template_part('/loops/slug-loop'); ?>
                <?php endwhile; ?>
                </div>
                            <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
        </section>
    <?php get_template_part('/widgets/mainAd-sidebar'); ?>
    <?php endif; else:
    if($query->have_posts()):?> 
    <div class="container">
        <h2 class="my-4">
            <a href="<?php echo get_category_link( $cat[1] ); ?>" class="text-dark text-decoration-none">
                    <?php echo $cat[0]; ?>
            </a> 
        </h2>
        <div class="row">
            <?php while($query->have_posts()): $query->the_post();?>
                <?php get_template_part('/loops/slug-odd-loop');?>
            <?php endwhile; ?>
        </div>
        
        <?php get_template_part('/widgets/mainAd-sidebar'); ?>
    </div>
    <?php endif; ?>
    <?php endif; $i++; wp_reset_postdata(); endforeach; ?>
