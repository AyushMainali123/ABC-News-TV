    <!-- Slider main container -->
    <div class="television">
      <div class="container "> 
      
        <h2 class="title"> <a href="http://localhost/learn/category/outlook/" class="text-decoration-none text-dark"> Outlook</a></h2>
        <div class="swiper-container1">
          <div class="swiper-wrapper">

            <?php
                $categories = array(
                  array("Category 1", 20),
                  array("Category 2", 21),
                  array("Category 3", 22),
                );
                foreach($categories as $category) :
                  $query = new WP_Query(
                    array(
                      'cat'=>$category[1],
                      'showposts'=>10,
                      'orderby' =>'publish_date',
                      'order'=> 'DESC'
                ));
            ?>
            <div class="swiper-slide">
            <span><?php echo get_cat_name($category[1]); ?></span>
              <div class="row">
              <?php
                    $i=0;
                    while($query->have_posts()): $query->the_post();
                    if($i++ < 1):
              ?>
                <div class="television__videoPoster col-lg-6">
                  <div class="poster__container">
                    <img
                      src="<?php the_post_thumbnail_url(); ?>"
                      alt="poster"
                      class="poster"
                    />
                    
                  </div>

                  <div class="overlay">
                    <a href="<?php the_permalink(); ?>" target="_blank">
                      <i class="fas fa-play"></i>
                    </a>
                    <div class="content">
                      <h3>
                        <?php the_title(); ?>
                      </h3>
                      <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 15, '...') ?>
                      </p>
                    </div>
                  </div>
                </div>
              <div class="television__content col-lg-6 text-left">
              <?php
              else:
              ?>
                  <div class="episode row py-3 border-bottom">
                    <div class="episode__imageContainer col-sm-6 p-0 pl-lg-3">
                      <a href="<?php the_permalink(); ?>" target="_blank">
                        <img
                        src="<?php the_post_thumbnail_url(); ?>"
                        alt=""
                      />
                      </a>
                      
                    </div>
                    <div class="episode__content col-sm-6">
                      <a href="<?php the_permalink(); ?>" style="text-decoration: none;" target="_blank">
                        <h3 class="text-dark"><?php the_title(); ?></h3>
                      <p class="text-secondary"><?php echo get_the_date();?></p>
                      <div class="text-dark" >
                         <?php echo wp_trim_words(get_the_excerpt(), 15, '...') ?>
                      </div>
                      </a>
                      
                    </div>
                  </div>
              
              <?php endif;endwhile;?>
              </div>
            </div>
          </div>
                  
          <?php wp_reset_postdata(); endforeach; ?>
            
          </div>
          <div class="swiper-pagination2"></div>
          <div class="swiper-button-prev2"></div>
          <div class="swiper-button-next2"></div>
        </div>
      </div>
    </div>



