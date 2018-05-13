<?php
include_once $g['path_module'].'mediaset/function.php';
$d['layout']['_slide'] = getArrayString($d['layout']['front_slide']);
?>

<?php if($d['layout']['_slide']['count']):?>
<div class="main_visual text-light" style="min-height: 630px; max-height: 842px;">
  <h3 class="sr-only">메인 비주얼</h3>

  <!-- Swiper -->
  <div class="swiper-container" style="height: 630px">

    <div class="swiper-wrapper">

      <?php $_i=0;foreach($d['layout']['_slide']['data'] as $_tmp['uid']):?>
      <?php $_tmp['m']=getUidData($table['s_upload'],$_tmp['uid'])?>
      <div class="swiper-slide" style="background-image: url(<?php echo getMediaLink($_tmp['m'],1,'1600x630')?>)">

        <div class="container px-0 text-center d-flex align-items-center justify-content-center">
          <p>
            <?php echo $_tmp['m']['caption']?>
          </p>
          <?php echo $_tmp['m']['description']?>
          <?php if ($_tmp['m']['linkurl']): ?>
          <div class=" mt-3">
            <a href="<?php echo $_tmp['m']['linkurl']?>"<?php if($_tmp['m']['linkto']=='3'):?> target="_blank"<?php endif?> class="btn btn-outline-light">
              자세히 보기
            </a>
          </div>

          <?php endif; ?>
        </div><!-- /.container -->

      </div><!-- /.swiper-slide -->
      <?php $_i++;endforeach?>

    </div><!-- /.swiper-wrapper -->

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>

    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div><!-- /.swiper-container -->
</div><!-- /.main_visual -->
<?php endif?>


<script type="text/javascript">

$(function () {

  var main_swiper = new Swiper('.main_visual .swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    effect: 'fade',
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  main_swiper.on('slideChange', function () {
    if (main_swiper.activeIndex == 5) {
      if (!$('.navbar').hasClass ('bg-white')) $('.navbar').addClass("navbar-light").removeClass("navbar-dark")
      $('.main_visual').addClass("text-dark").removeClass("text-light")
    } else {
      if (!$('.navbar').hasClass ('bg-white')) $('.navbar').addClass("navbar-dark").removeClass("navbar-light")
      $('.main_visual').addClass("text-light").removeClass("text-dark")
    }
  });

})

</script>
