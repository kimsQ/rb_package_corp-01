<header class="bar bar-nav bar-light bg-faded px-0" data-snap-ignore="true">
  <a href="#drawer-left" data-toggle="drawer" class="icon icon-bars pull-left p-x-1" role="button"></a>

  <?php if($d['layout']['header_search']=='true'):?>
  <a class="icon icon-search pull-right p-x-1" role="button" data-toggle="modal" href="#modal-search" data-title="검색"></a>
  <?php endif?>

  <a class="title mx-0<?php echo $d['layout']['header_imageLogo']?' imgtype':'' ?>" href="<?php echo RW(0)?>">
    <span><?php echo $d['layout']['header_title'] ?></span>
  </a>
</header>
