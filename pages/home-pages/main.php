<!-- 카드형 퀵메뉴 -->
<?php if ($d['layout']['front_quick']): ?>
<section class="container px-0 mt-5">
  <?php getWidget('package-corp-01/bs4-card-menu',array(
    'title'=>'CONTENTS', // 타이틀
    'smenu'=>$d['layout']['front_quick']  // 기준메뉴(직속 하위메뉴가 출력됨)
  ))?>
</section>
<?php endif; ?>

<!-- 검색배너 -->
<?php if ($d['layout']['front_search']): ?>
  <?php getWidget('package-corp-01/bs4-search-bnr',array())?>
<?php endif; ?>

<!-- 게시물 추출 -->
<?php if ($d['layout']['front_post']): ?>
<section class="container my-4 px-0">
  <?php getWidget('package-corp-01/bs4-bbs-card-01',array(
    'bid'=>$d['layout']['front_post'],
    'recnum'=>'3',  // 한줄에 배치할 아이템 수
    'limit'=>'3',   // 전체 추출 아이템 수
    'link'=>RW('m=bbs&bid='.$d['layout']['front_post']),  // 더보기 링크
    'width'=>'400',  // 사진 가로크기
    'height'=>'250', // 사진 세로크기
    'view'=>'modal'
  ))?>
</section>
<?php endif; ?>
