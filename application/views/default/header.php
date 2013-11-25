<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>龙战</title>
	<script type="text/javascript" src="<?=base_url('./common/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('./common/js/swfobject.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?=THEME_VIEW?>/css/style.css"/>
	<script type="text/javascript">
		$(function() {
			swfobject.embedSWF("<?=THEME_VIEW?>images/logo.swf", 'logo', '199', '177', '9.0.0', null, null, {wmode: 'transparent'});
			$('.android, .gamepay').click(function() {
				/*alert('暂时不开放');
				return false;*/
				return true;
			})
		})
	</script>
</head>
<body>
<table cellspacing="0" cellpadding="0" border="0">
<tr>
	<td width="50%" class="body_left"></td>
	<td>
	<div class="box" style="position: relative">
		<div class="header">
			<a href="<?=site_url()?>" class="m1 png"></a>
			<a href="<?=site_url('index/clists?tid=1')?>" class="m2 png"></a>
			<a href="<?=site_url('index/clists?tid=5')?>" class="m3 png"></a>
			<a href="<?=site_url('index/qst')?>" class="m4 png"></a>
			<a href="<?=site_url('index/clists?tid=6')?>" class="m5 png"></a>
			<a href="#" class="m6 png"></a>
		</div>
		<div id="logo"></div>
		<a id="down" class="png" href="<?=$down['pc']?>" target="_blank"></a>

		<div class="c2">
			<div class="left_menu">
				<div class="menu">
					<a href="<?=$down['iphone']?>" class="iphone png" target="_blank"><?=$down['iphone_ver']?></a>
					<a href="<?=$down['ipad']?>" class="ipad png" target="_blank"><?=$down['ipad_ver']?></a>
					<a href="<?=$down['android']?>" class="android png" style="margin-bottom: 0;" target="_blank"><?=$down['android_ver']?></a>
					<a href="<?=site_url('index/pay')?>" class="gamepay png" style="margin-left: 0; margin-bottom: 0px;"></a>
				</div>
				<?php

				?>
				<div class="service png">
					工作时间：<?=$service['worktime']?>
					<div class="tel"><?=$service['tel1']?></div>
					休息时间：<?=$service['weekendtime']?>
					<div class="tel"><?=$service['tel2']?></div>
					<div class="line">
					手机登录网址：<br><?=$service['wapurl']?>
					</div>
					<div class="line">
					客服邮箱：<br><?=$service['email']?>
					</div>
					<div class="line">
					每周例行维护时间：
					<div class="tel"><?=$service['maintain']?></div>
					</div>
				</div>
			<?php if(!(isset($qst) && $qst == 'no')):?>
				<div class="qst png">
					<div><a href="<?=site_url('index/qst')?>" class="more">更多&raquo;</a></div>
					<div class="clear"></div>
				<?php
					$qsts = $this->base->get_data('content', array('tid'=>3), '*', 2, 0, 'sort DESC, id DESC')->result_array();
					foreach($qsts as $v):
				?>
					<div class="q"><a href="">Q：<?=$v['title']?></a></div>
					<div class="a"><a href="">A：<?=cutstr($v['description'], 15, '')?></a></div>
				<?php endforeach;?>
				</div>
			<?php endif;?>
			</div>