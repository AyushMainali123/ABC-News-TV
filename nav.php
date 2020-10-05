<?php $items=wp_get_menu_array('main-menu');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 sticky-top font-weight-bold">
<div class="container">
  <a href="http://localhost/learn/" class="navbar-brand"
    ><img src="https://www.abcnepal.tv/wp-content/themes/ABCtv/images/foot.png" alt="ABC Logo" width="70"></a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#collapse_target"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="collapse_target">
    <ul class="navbar-nav ml-auto">
    <?php foreach($items as $item):?>
      <li class="nav-item dropdown">
          <a class="nav-link text-uppercase" href="<?php echo $item['url'];?>"><?php echo $item['title'];?>
          <?php if($item['children']):?>
          <a data-toggle="dropdown"><i style="font-size:24px" class="fa">&#xf0d7;</i></a>
       
        <div class="dropdown-menu">
          <?php foreach($item['children'] as $sitem):?>
            <a class="dropdown-item" href="<?php echo $sitem['url'];?>"><?php echo $sitem['title'];?></a>
          <?php endforeach;?>
        </div>
        <?php endif;?>
        </a>
      </li>
      <?php endforeach;?>
    </ul>
  </div>
</div>

</nav>
