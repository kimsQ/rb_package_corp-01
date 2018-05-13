<?php
include_once $g['path_module'].'mediaset/function.php';
$d['layout']['_slide'] = getArrayString($d['layout']['front_slide']);
?>
<?php if($d['layout']['_slide']['count']):?>
<div class="swiper-container animated fadeInDown mt-sm-2" id="slider">
  <div class="swiper-wrapper">
    <?php $_i=0;foreach($d['layout']['_slide']['data'] as $_tmp['uid']):?>
    <?php $_tmp['m']=getUidData($table['s_upload'],$_tmp['uid'])?>
    <div class="swiper-slide" role="button">
      <a class="mask" href="<?php echo $_tmp['m']['linkurl']?>"<?php if($_tmp['m']['linkto']=='3'):?> target="_blank"<?php endif?>>
        <img src="<?php echo getMediaLink($_tmp['m'],1,'830x450')?>" class="img-fluid" alt="<?php echo $_tmp['m']['alt']?>">
        <span class="caption">
          <p><?php echo $_tmp['m']['description']?></p>
          <h1><?php echo $_tmp['m']['caption']?></h1>
        </span>
      </a>
    </div>
    <?php $_i++;endforeach?>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
</div>
<?php endif?>
