<div class="slug">


<div class="container">

    <div class="swiper-container-slug">

        <div class="swiper-wrapper">

            <?php
            $arr = array(
                array('16', 'ABC Bises'),
                array('14', 'ABC Report'),
                array('15', 'ABC Watch'),
                array('18', 'BIZ Talk'),
                array('11', 'Latest News'),
                array('13', 'Operation BigNews'),
                array('17', 'Our Health'),
                array('12', 'Outlook')
        );
        foreach($arr as $single):
        $query = new WP_Query(array('cat' => $single[0]));
        if($query->have_posts()):
        while($query->have_posts()): $query->the_post();
    ?>

    
    <?php get_template_part('/loops/slug-loop'); ?>

    <?php endwhile; wp_reset_postdata(); endif; endforeach; ?>

        </div>
    </div>

</div>


</div>

