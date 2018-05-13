<?php
if (!function_exists('getMenuWidgetTree'))
{
	function getMenuWidgetTree($site,$table,$is_child,$parent,$depth,$id,$w,$_C)
	{
		global $_CA;

		if ($depth < $w['limit'])
		{
			$CD=getDbSelect($table,($site?'site='.$site.' and ':'').'hidden=0 and parent='.$parent.' and depth='.($depth+1).($w['mobile']?' and mobile=1':'').' order by gid asc','*');
			echo "\n";
			for ($i=0;$i<$depth;$i++) echo "\t";

			if($is_child) {
				if ($_C['depth']==1) {
					echo "<div class='sub-item'><div class='container'><div class='row'>\n";
				} else {
					echo "<nav class='nav flex-column'>\n";
				}
			}

			while($C=db_fetch_array($CD))
			{
				$_newTree	= ($id?$id.'/':'').$C['id'];
				$_href		= $w['link']=='bookmark'?' data-scroll href="#'.($C['is_child']&&$w['limit']>1&&!$parent?'':str_replace('/','-',$_newTree)).'"' : ' href="'.RW('c='.$_newTree).'"';
				$_dropdown	= $C['is_child']&&$C['depth']==($w['depth']+1)&&$w['olimit']>1?' class="nav-link"':'';
				$_name		= $C['name'];
				$_target	= $C['target']=='_blank'?' target="_blank"':'';
				$_addattr	= $C['addattr']?' '.$C['addattr']:'';

				for ($i=0;$i<$C['depth'];$i++) echo "\t";

				if ($_C['depth']==1) {
					echo '<div class="col py-4 px-2"><h4 class="mb-0"><a class="nav-link'.(in_array($C['id'],$_CA)?' active':'').'"'.$_addattr.$_href.$_dropdown.$_target.'>'.$_name.'</a></h4>';
				} else if ($_C['depth']==2) {
					echo '<a class="nav-link '.(in_array($C['id'],$_CA)?' active':'').'"'.$_addattr.$_href.$_dropdown.$_target.'>'.$_name.'</a>';
				} else {
					echo '<li class="nav-item'.(in_array($C['id'],$_CA)?' active':'').'"><a class="nav-link"'.$_addattr.$_href.$_dropdown.$_target.'>'.$_name.'</a>';
				}

				if ($C['is_child']){
					getMenuWidgetTree($site,$table,$C['is_child'],$C['uid'],$C['depth'],$_newTree,$w,$C);
				}

				if ($_C['depth']==1) {
					echo "</div>\n";
				} else if ($_C['depth']==2) {
					echo "\n";
				} else {
					echo "</li>\n";
				}
			}
			for ($i=0;$i<$depth;$i++) echo "\t";

			if($is_child) {
				if ($_C['depth']==1) {
					echo "</div></div></div>\n";
				} else if ($_C['depth']==2) {
					echo "\n";
				} else {
					echo "</div>\n";
				}
			}

			for ($i=0;$i<$depth;$i++) echo "\t";
		}
	}
}
$wddvar['limit'] = $wddvar['limit'] < 6 ? $wddvar['limit'] : 5;
if ($wdgvar['smenu'] < 0)
{
	if (strstr($c,'/'))
	{
		$wdgvar['mnarr'] = explode('/',$c);
		$wdgvar['count'] = (- $wdgvar['smenu']) - 1;
		for ($j = 0; $j <= $wdgvar['count']; $j++) $wdgvar['sid'] .= $wdgvar['mnarr'][$j].'/';
		$wdgvar['sid'] = $wdgvar['sid'] ? substr($wdgvar['sid'],0,strlen($wdgvar['sid'])-1): '';
		$wdgvar['path'] = getDbData($table['s_menu'],"id='".$wdgvar['mnarr'][$wdgvar['count']]."'",'uid,depth');
		$wdgvar['smenu'] = $wdgvar['path']['uid'];
		$wdgvar['depth'] = $wdgvar['path']['depth'];
	}
	else {
		$wdgvar['sid'] = $c;
		$wdgvar['smenu'] = $_HM['uid'];
		$wdgvar['depth'] = $_HM['depth'];
	}
}
else if ($wdgvar['smenu'])
{
	$wdgvar['mnarr'] = explode('/',$wdgvar['smenu']);
	$wdgvar['count'] = count($wdgvar['mnarr']);
	for ($j = 0; $j < $wdgvar['count']; $j++)
	{
		$wdgvar['path'] = getDbData($table['s_menu'],'uid='.(int)$wdgvar['mnarr'][$j],'uid,id,depth');
		$wdgvar['sid'] .= $wdgvar['path']['id'].'/';
		$wdgvar['smenu'] = $wdgvar['path']['uid'];
		$wdgvar['depth'] = $wdgvar['path']['depth'];
	}
	$wdgvar['sid'] = $wdgvar['sid'] ? substr($wdgvar['sid'],0,strlen($wdgvar['sid'])-1): '';
}
else {
	$wdgvar['depth'] = 0;
}
$wdgvar['olimit']= $wdgvar['limit'];
$wdgvar['limit'] = $wdgvar['limit'] + $wdgvar['depth'];
getMenuWidgetTree($s,$table['s_menu'],0,$wdgvar['smenu'],$wdgvar['depth'],$wdgvar['sid'],$wdgvar,array());
?>
