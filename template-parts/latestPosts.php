<section class="tvshows">
    <div class="container">
        <?php if(have_posts()): ?>
        <h1 class="title text-left">
          <a href="http://localhost/learn/category/latest-news/" class="text-decoration-none text-dark">
            Latest News
          </a>
        </h1>
        <!-- Swiper Section -->
        <div class="swiper-container mt-5">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php 
            $i=0;
            $arg = array('cat'=>'11');
            $query = new WP_Query($arg);
            while($query->have_posts()): $query->the_post();
            ?>
            <?php get_template_part('/loops/latestposts-loop');?>
            <?php endwhile;  wp_reset_postdata(); ?>
          </div>

          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
    </div>
</section>
