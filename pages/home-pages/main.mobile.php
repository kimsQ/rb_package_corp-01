<div class="my-2 bg-white animated fadeInUp delay-1">
  <?php getWidget('package-corp-01/rc-table-menu',array('startmenu'=>$d['layout']['front_quick'],'row'=>'3'))?>
</div>

<div class="animated fadeInUp delay-2">
  <?php getWidget('package-corp-01/rc-bbs-list-01',array('bid'=>'free','limit'=>'5','title'=>'자유게시판','link'=>RW('c=free')))?>
</div>

<section class="mt-2 animated fadeInUp delay-2">
  <?php if ($d['layout']['front_quick']): ?>
  <?php getWidget('package-corp-01/rc-card-menu',array('smenu'=>$d['layout']['front_quick']))?>
  <?php endif; ?>
</section>


<div class="mt-2">
  <?php getWidget('package-corp-01/rc-bbs-list-01',array('bid'=>'notice','limit'=>'3','title'=>'공지사항','link'=> RW('c=notice')))?>
</div>
<div class="mt-2 bg-white">
  <?php getWidget('package-corp-01/rc-bbs-media-01',array(
    'bid'=>'gallery',
    'limit'=>'5',
    'title'=>'갤러리',
    'width'=>'260','height'=>'160','link'=>RW('c=gallery')))?>
</div>
