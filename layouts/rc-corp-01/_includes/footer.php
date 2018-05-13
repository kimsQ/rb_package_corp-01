<footer class="footer">

  <div class="mb-2">
    <?php if ($my['uid']): ?>
    <a class="btn btn-secondary btn-sm" href="<?php echo $g['s']?>/?r=<?php echo $r?>&a=logout">로그아웃</a>
    <?php else: ?>
    <a class="btn btn-secondary btn-sm" href="#modal-login" data-toggle="modal" data-title="<?php echo stripslashes($d['layout']['header_title'])?>">로그인</a>
    <?php endif; ?>

    <a class="btn btn-secondary btn-sm" href="<?php echo RW('mod=settings') ?>">내정보</a>
    <a class="btn btn-secondary btn-sm" href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=pcmode">PC화면</a>
    <a class="btn btn-secondary btn-sm" href="#popup-family" data-toggle="popup" data-title="관련 사이트">관련 사이트</a>
  </div>

  <?php if ($d['layout']['footer_link']): ?>
  <nav class="nav mb-2">
    <?php
    $_MENUQ1=getDbData($table['s_menu'],'site='.$s." and id='".$d['layout']['footer_link']."'",'uid');
    $_MENUQ2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_MENUQ1['uid'].' and hidden=0 and mobile=1 order by gid asc','*');
    ?>
    <?php while($_M2=db_fetch_array($_MENUQ2)):?>
    <a class="nav-link" href="<?php echo RW('c='.$d['layout']['footer_link'].'/'.$_M2['id'])?>"><?php echo $_M2['name']?></a>
    <?php endwhile?>
  </nav>
  <?php endif; ?>

  <p>© <?php echo $d['layout']['footer_company']?$d['layout']['footer_company']:'Company' ?> <?php echo $date['year']?></p>

</footer>
