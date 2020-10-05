
  <?php
    $args = array('cat'=>24, 'showposts'=>1);
    $query = new WP_Query($args);
    while($query->have_posts()): $query->the_post();
  ?>
    <section class="image-wrapper">

      <div class="image-element">
        <img
          src="<?php the_post_thumbnail_url(); ?>" 
          alt=""
        />
      </div>
      <div class="overlay">
        <div class="image-content container">
        <h3><?php the_title(); ?></h3>
          <a href="<?php the_permalink(); ?>" target="_blank">
          <i
              class="fa fa-play"
              data-link="https://www.youtube.com/watch?v=PSi3_FAUzfI"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            ></i>
            <?php get_template_part('/template-parts/youtubeVideo'); ?>
          </a>
            

          <h4 class="text-light">
           <?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?>
          </h4>
        </div>
      </div>
    </section>

<?php
  endwhile; wp_reset_postdata();
?>

   <!-- 
    Operation BigNews: https://www.youtube.com/playlist?list=PLuefWAsK5uxPpDvQfJwN11pEO57tN0etx
    ABC Watch: https://www.youtube.com/playlist?list=PLuefWAsK5uxOT-6JveqS4TAAff4WE9Dqa
    ABC Bises: https://www.youtube.com/playlist?list=PLuefWAsK5uxNp3hw4rZpU1GMdEE0G5hBF
    ABC Report: https://www.youtube.com/playlist?list=PLuefWAsK5uxOL0U4RBsq3ZnufK3XyKuDf
    BIZ Talk: https://www.youtube.com/playlist?list=PLuefWAsK5uxMf0Jyp-DuMYPVwrsa-ZZYM
    Outlook: https://www.youtube.com/playlist?list=PLuefWAsK5uxNXUy6lWETWkthriRmQjVRX
    Our Health: https://www.youtube.com/playlist?list=PLuefWAsK5uxOJWiS8iv96SQvGVL1GRePw
    -->