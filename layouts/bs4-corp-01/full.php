<!DOCTYPE html>
<html lang="ko">
<head>
<?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
</head>
<body class="rb-layout-full">

	<header class="navbar fixed-top navbar-expand-lg navbar-dark">
		<div class="container px-0">
			<div class="d-flex justify-content-between w-100 align-self-center">
				<a class="navbar-brand<?php echo $d['layout']['header_imageLogo']?' imgtype':'' ?>" href="<?php  echo RW(0) ?>">
					<?php echo $d['layout']['header_title'] ?>
				</a>
				<?php include $g['dir_layout'].'/_includes/nav.php' ?>
				<ul class="navbar-nav">
					<?php if ($my['uid']): ?>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-role="tooltip" title="프로필보기 및 회원계정관리">
					    <img src="<?php echo getAavatarSrc($my['uid'],'20') ?>" width="20" height="20" alt="" class="rounded d-inline-block">
							<?php echo $my['nic'] ?>
					  </a>
					  <div class="dropdown-menu dropdown-menu-right">
					    <h6 class="dropdown-header"><?php echo $my['nic'] ?> 님</h6>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="/@<?php echo $my['id'] ?>">
								<i class="fa fa-address-card-o fa-fw" aria-hidden="true"></i> 내 프로필
							</a>
					    <a class="dropdown-item" href="<?php echo RW('mod=saved')?>">
								<i class="fa fa-bookmark-o fa-fw" aria-hidden="true"></i> 내 저장함
							</a>
					    <div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo RW('mod=settings')?>">개인정보 관리</a>
					    <a class="dropdown-item" href="<?php echo $g['s']?>/logout">로그아웃</a>
					  </div>
					</li>
					<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo RW('mod=join') ?>">회원가입</a>
					</li>
					<li class="nav-item position-relative" id="navbarPopoverLogin">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="드롭다운형 로그인">
							로그인
						</a>
						<div class="dropdown-menu dropdown-menu-right">
						  <form class="px-4 py-3" id="popover-loginform" action="<?php echo $g['s']?>/" method="post" style="width:250px">
								<input type="hidden" name="r" value="<?php echo $r?>">
								<input type="hidden" name="a" value="login">
								<input type="hidden" name="form" value="">

						    <div class="form-group position-relative">
						      <label for="">아이디 또는 이메일</label>
						      <input type="text" class="form-control" name="id" placeholder="" tabindex="1" autocorrect="off" autocapitalize="off" required tabindex="1">
									<div class="invalid-tooltip" data-role="idErrorBlock"></div>
						    </div>
						    <div class="form-group position-relative">
						      <label for="">패스워드</label>
						      <input type="password" class="form-control" name="pw" tabindex="2" required tabindex="2">
									<div class="invalid-tooltip" data-role="passwordErrorBlock"></div>
						    </div>

								<div class="custom-control custom-checkbox" data-toggle="collapse" data-target="#popover-collapsealert">
								  <input type="checkbox" class="custom-control-input" id="popover-loginCookie" name="login_cookie" value="checked">
								  <label class="custom-control-label" for="popover-loginCookie">로그인 상태 유지</label>
								</div>

								<div class="collapse" id="popover-collapsealert">
								  <div class="alert alert-light border f12 mt-3">
								    개인정보 보호를 위해, 개인 PC에서만 사용해 주세요.
								  </div>
								</div>

						    <button type="submit" class="btn btn-primary btn-block mt-2" data-role="submit" tabindex="3">
									<span class="not-loading">로그인</span>
									<span class="is-loading"><i class="fa fa-spinner fa-lg fa-spin fa-fw"></i> 로그인중 ...</span>
								</button>
						  </form>
						  <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="<?php echo RW('mod=join')?>">회원가입</a>
						  <a class="dropdown-item" href="<?php echo RW('mod=password_reset')?>">비밀번호를 잊으셨나요?</a>
						</div>
					</li>

					<?php endif; ?>
		    </ul>
			</div>
		</div>
	</header>

	<?php include $g['dir_layout'].'/_includes/jumbotron.php' ?>

	<main role="main" class="content">
		<?php include __KIMS_CONTENT__ ?>
	</main><!-- /.container -->

	<?php include $g['dir_layout'].'/_includes/footer.php' ?>
	<?php include $g['dir_layout'].'/_includes/component.php' ?>
	<?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>


	<script>

	var navbar = $('.navbar');

	navbar.hover (
		function() {
			$(this).removeClass('navbar-dark').addClass('bg-white navbar-light border-bottom')
		},
		function() {
			if($(window).scrollTop() < 50) $(this).removeClass('bg-white navbar-light border-bottom navbar-transition').addClass('navbar-dark');
		}
	);

	navbar.find(".nav-item").hover (
		function() {
			$(this).addClass('hovered')
		},
		function() {
			$(this).removeClass('hovered')
		}
	);

	$(window).scroll(function() {
	  if($(this).scrollTop() > 50 || navbar.is(":hover")) navbar.removeClass('navbar-dark').addClass('bg-white navbar-light border-bottom navbar-transition').fadeIn();
	  else navbar.removeClass('bg-white navbar-light border-bottom navbar-transition').addClass('navbar-dark');
	});

	</script>


</body>
</html>
