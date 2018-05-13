<?php
$ufilesArray = getArrayString($d['layout']['front_search']);
$_IMG = getDbData($table['s_upload'], 'uid='.$ufilesArray['data'][0], '*');
$Topimg_URL = $_IMG['url'].$_IMG['folder'].'/'.$_IMG['tmpname'];
?>

<section class="widget-search-bnr bg-secondary text-white my-5 text-center" style="background-image: url('<?php echo getPreviewResize($Topimg_URL,'1700x600')?>');">
  <div class="position-absolute w-100">
    <form action="<?php echo $g['s']?>/" role="search">
      <input type="hidden" name="r" value="<?php echo $r ?>">
      <input type="hidden" name="m" value="search">
      <h3><?php echo $_IMG['caption']?></h3>
      <div class="form-group w-50 mx-auto">
        <label class="sr-only">검색어</label>
        <div class="input-group input-group-lg">
          <input type="search" class="form-control" placeholder="<?php echo $_IMG['alt']?>" name="keyword" value="<?php echo $_keyword ?>">
          <div class="input-group-append">
            <button class="btn btn-light" type="submit">
              <i class="fa fa-search fa-lg" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
      <p class="mb-0"><?php echo $_IMG['description']?></p>
    </form>
  </div><!-- /.container -->

</section>
