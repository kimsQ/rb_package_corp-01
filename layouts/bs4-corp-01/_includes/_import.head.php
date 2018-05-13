<meta charset="utf-8">

<!-- Seo -->
<meta name="robots" content="<?php echo strip_tags($g['meta_bot'])?>">
<meta name="title" content="<?php echo strip_tags($g['meta_tit'])?>">
<meta name="keywords" content="<?php echo strip_tags($g['meta_key'])?>">
<meta name="description" content="<?php echo strip_tags($g['meta_des'])?>">
<link rel="image_src" href="<?php echo strip_tags($g['meta_img'])?>">

<title><?php echo $g['browtitle']?></title>

<!-- 파비콘 -->
<link rel="shortcut icon" href="<?php echo $g['img_layout']?>/favicon.ico">

<!-- 사이트 헤드 코드 -->
<?php echo $_HS['headercode']?>

<!-- 시스템 폰트 -->
<?php getImport('font-awesome','css/font-awesome','4.7.0','css')?>

<!-- bootstrap css -->
<?php getImport('bootstrap','css/bootstrap.min','4.1.0','css')?>

<!-- jQuery -->
<?php getImport('jquery','jquery.min','3.3.1','js')?>

<?php getImport('popper.js','umd/popper.min','1.14.0','js')?>

<!-- bootstrap js -->
<?php getImport('bootstrap','js/bootstrap.min','4.0.0','js')?>

<!-- swiper  -->
<?php getImport('swiper','css/swiper','4.2.2','css')?>
<?php getImport('swiper','js/swiper.min','4.2.2','js')?>


<!-- 엔진코드:삭제하지마세요 -->
<?php include $g['path_core'].'engine/cssjs.engine.php' ?>

<!-- global css -->
<link href="<?php echo $g['url_layout']?>/_css/style.css<?php echo $g['wcache']?>" rel="stylesheet">
