<footer class="footer">
	<div class="container px-0">
		<div class="d-flex justify-content-between">

			<div class="info_copyright">
				<?php if ($d['layout']['footer_link']): ?>
				<ul class="nav">
					<?php
					$_MENUQ1=getDbData($table['s_menu'],'site='.$s." and id='".$d['layout']['footer_link']."'",'uid');
					$_MENUQ2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_MENUQ1['uid'].' and hidden=0 order by gid asc','*');
					$_MENUQN=db_num_rows($_MENUQ2)
					?>
					<?php while($_M2=db_fetch_array($_MENUQ2)):?>
				  <li class="nav-item">
				    <a class="nav-link muted-link" href="<?php echo RW('c='.$d['layout']['footer_link'].'/'.$_M2['id'])?>"><?php echo $_M2['name']?></a>
				  </li>
					<?php endwhile?>
				</ul>
				<?php endif; ?>

				<ul class="list-inline mt-3 mb-1">
					<?php if ($d['layout']['footer_addr']): ?>
					<li class="list-inline-item">
						주소 : <?php echo $d['layout']['footer_addr'] ?>
					</li>
					<?php endif; ?>

					<?php if ($d['layout']['footer_ceo']): ?>
					<li class="list-inline-item">
						대표 : <?php echo $d['layout']['footer_ceo'] ?>
					</li>
					<?php endif; ?>
				</ul>

				<ul class="list-inline mb-2">

					<?php if ($d['layout']['footer_comnum']): ?>
					<li class="list-inline-item">
						사업자번호 :  <?php echo $d['layout']['footer_comnum'] ?>
					</li>
					<?php endif; ?>

					<?php if ($d['layout']['footer_tel']): ?>
					<li class="list-inline-item">
						전화 :  <?php echo $d['layout']['footer_tel'] ?>
					</li>
					<?php endif; ?>

					<?php if ($d['layout']['footer_fax']): ?>
					<li class="list-inline-item">
						팩스 :  <?php echo $d['layout']['footer_fax'] ?>
					</li>
					<?php endif; ?>

					<?php if ($d['layout']['footer_email']): ?>
					<li class="list-inline-item">
						이메일 :  <?php echo $d['layout']['footer_email'] ?>
					</li>
					<?php endif; ?>
				</ul>

				<small class="txt_copyright">
					Copyright © <?php echo $d['layout']['footer_company']?$d['layout']['footer_company']:'Company' ?> All rights reserved.
				</small>
			</div><!-- /.info_copyright -->

			<div class="familysite">
				<?php if ($d['layout']['footer_family']): ?>
				<div class="btn-group dropup">
				  <button type="button" class="btn dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    관련 사이트
				  </button>
				  <div class="dropdown-menu dropdown-menu-right">
						<?php
						$_MENUQ1=getDbData($table['s_menu'],'site='.$s." and id='".$d['layout']['footer_family']."'",'uid');
						$_MENUQ2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_MENUQ1['uid'].' and hidden=0 order by gid asc','*');
						$_MENUQN=db_num_rows($_MENUQ2)
						?>
						<?php while($_M2=db_fetch_array($_MENUQ2)):?>
						<a  class="dropdown-item" href="<?php echo RW('c='.$d['layout']['footer_family'].'/'.$_M2['id'])?>" target="_blank" role="button">
							<?php echo $_M2['name']?>
						</a>
						<?php endwhile?>

						<?php if(!$_MENUQN):?>
						<span class="dropdown-item-text text-muted">자료가 없습니다.</span>
						<?php endif?>

				  </div>
				</div><!-- /.btn-group -->
				<?php endif; ?>
			</div><!-- /.familysite -->


		</div><!-- /.d-flex -->
	</div><!-- /.container -->
</footer>
