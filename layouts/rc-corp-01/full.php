<!DOCTYPE html>
<html lang="ko">
<head>

<?php include $g['dir_layout'].'/_includes/_import.head.php' ?>

<!-- snap 서랍형 사이드메뉴 -->
<?php getImport('snap','rc-snap','1.9.3','css')?>
<?php getImport('snap','rc-snap','1.9.3','js')?>
</head>

<body class="rb-layout-full">

	<div class="snap-content" data-extension="drawer">

		<?php include $g['dir_layout'].'/_includes/header.php' ?>

		<main role="main" class="content bg-faded" data-snap-ignore="true" data-control="scroll" data-type="updown" data-defaultHeight="100">
      <?php include $g['dir_layout'].'/_includes/jumbotron.php' ?>
			<?php include __KIMS_CONTENT__ ?>
			<?php include $g['dir_layout'].'/_includes/footer.php' ?>
		</main>

	</div><!-- /.snap-content -->

  <div class="snap-drawers">
		<div class="snap-drawer snap-drawer-left" id="drawer-left">
			<?php include $g['dir_layout'].'/_includes/drawer-left.php' ?>
		</div>
		<div class="snap-drawer snap-drawer-right bg-faded" id="drawer-right">
			<?php include $g['dir_layout'].'/_includes/drawer-right.php' ?>
		</div>
	</div>

	<?php include $g['dir_layout'].'/_includes/component.php' ?>
	<?php include $g['dir_layout'].'/_includes/_import.foot.php'?>

	<script>
		$(function() {

			RC_initDrawer();  // 드로어 플러그인 초기화

	  // 메인 슬라이더
	  var swiper = new Swiper('#slider', {
	      centeredSlides: true,
	      autoplay: {
	        delay: 2500,
	        disableOnInteraction: false,
	      },
	      pagination: {
	        el: '.swiper-pagination',
	        type: 'fraction',
	      }
	    });

	    // 주요제품
	    var swiper = new Swiper('#product', {
	      slidesPerView: 'auto',
	      spaceBetween: 5
	    });



      $('.snap-content .bar-nav').addClass('bg-transparent bar-dark')

			$('.snap-content .content').on('down.rc.scroll', function() {
        $('.snap-content .bar-nav').removeClass('bg-transparent bar-dark').addClass('bar-transition bg-faded bar-light');
      })
      $('.snap-content .content').on('default.rc.scroll', function() {
        $('.snap-content .bar-nav').removeClass('bar-transition bg-faded bar-light').addClass('bg-transparent bar-dark')
      })


	})
	</script>


</body>
</html>
