<!DOCTYPE html>
<html lang="ko">
<head>

<?php include $g['dir_layout'].'/_includes/_import.head.php' ?>

<!-- snap 서랍형 사이드메뉴 -->
<?php getImport('snap','rc-snap','1.9.3','css')?>
<?php getImport('snap','rc-snap','1.9.3','js')?>

</head>
<body class="rb-layout-default">

	<div class="snap-drawers">
		<div class="snap-drawer snap-drawer-left" id="drawer-left">
			<?php include $g['dir_layout'].'/_includes/drawer-left.php' ?>
		</div>
		<div class="snap-drawer snap-drawer-right bg-faded" id="drawer-right">
			<?php include $g['dir_layout'].'/_includes/drawer-right.php' ?>
		</div>
	</div>

	<div class="snap-content" data-extension="drawer">

		<?php include $g['dir_layout'].'/_includes/header.php' ?>

		<?php if ($c && !$_HM['addinfo']): ?>
		<div class="bar bar-standard bar-header-secondary bar-light bg-white animated fadeIn delay-1 px-0" data-snap-ignore="true">
		 <h1 class="title mx-0"><?php echo $_HM['name']?></h1>
		</div>
		<?php endif; ?>

		<main role="main" class="content" data-snap-ignore="true">

			<?php if ($_HM['addinfo']): ?>

			<?php
	      if($_HM['upload']) {
	    		$ufilesArray = getArrayString($_HM['upload']);
	    		$_IMG = getDbData($table['s_upload'], 'uid='.$ufilesArray['data'][0], '*');
	        $Topimg_URL = $_IMG['url'].$_IMG['folder'].'/'.$_IMG['tmpname'];
	    	}
	    ?>
			<div class="jumbotron bg-inverse text-white px-3 py-5" <?php if ($_HM['upload']): ?>style="background-image: url('<?php echo getPreviewResize($Topimg_URL,'600x300')?>')"<?php endif; ?>>
				<div class="container">
					<div class="content-padded">
						<div class="animated fadeInDown">
							<small class="text-muted"><?php echo $_HM['name'] ?></small>
							</div>
						<h2 class="animated fadeInDown delay-1">
							<?php echo $_HM['addinfo']?>
						</h2>
					</div>
				</div>
			</div>
			<?php endif; ?>


			<article class="content-padded animated fadeIn delay-1 rb-article" style="min-height:200px" role="article">
				<?php include __KIMS_CONTENT__ ?>
			</article>
			<?php include $g['dir_layout'].'/_includes/footer.php' ?>
		</main>


	</div><!-- /.snap-content -->

	<?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
	<?php include $g['dir_layout'].'/_includes/component.php' ?>



	<script>
		$(function() {
			RC_initDrawer();  // 드로어 플러그인 초기화
		});
	</script>

</body>
</html>
