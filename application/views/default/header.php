<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>龙战</title>
	<script type="text/javascript" src="<?=base_url('./common/js/swfobject.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('./common/js/jquery.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?=THEME_VIEW?>/css/style.css"/>

</head>
<body>
<table cellspacing="0" cellpadding="0" border="0">
<tr>
	<td width="50%" class="body_left"></td>
	<td>
	<div class="box">
		<div class="header">
			<a href="#" class="m1 png"></a>
			<a href="#" class="m2 active png"></a>
			<a href="#" class="m3 png"></a>
			<a href="#" class="m4 png"></a>
			<a href="#" class="m5 png"></a>
			<a href="#" class="m6 png"></a>
		</div>
		<script type="text/javascript">
			swfobject.embedSWF("<?=THEME_VIEW?>/images/logo.swf", "logo", "199", "177", "9.0.0", null, null, {wmode:"transparent"});
			swfobject.embedSWF("<?=THEME_VIEW?>/images/down.swf", "down", "450", "103", "9.0.0", null, null, {wmode:"transparent"});
		</script>
		<div id="logo"></div>
		<div id="down"></div>
		<div class="clear"></div>

		<div class="c2">
			<div class="left_menu">
				<div class="menu">
					<a href="" class="iphone"></a>
					<a href="" class="ipad"></a>
					<a href="" class="android" style="margin-bottom: 0;"></a>
					<a href="" class="gamepay" style="margin-left: 0; margin-bottom: 0px;"></a>
				</div>
				<?php
					$this->load->config('common');
					$service = $this->config->item('service');
				?>
				<div class="service">
					工作时间：<?=$service['worktime']?>
					<div class="tel"><?=$service['tel1']?></div>
					休息时间：<?=$service['weekendtime']?>
					<div class="tel"><?=$service['tel2']?></div>
					手机登录网址：<br><?=$service['wapurl']?><br><br>
					客服邮箱：<br><?=$service['email']?>
				</div>

				<div class="qst">
					<div><a href="<?=site_url('index/clists?tid=3')?>" class="more">更多&raquo;</a></div>
					<div class="clear"></div>
				<?php
					$qsts = $this->base->get_data('content', array('tid'=>3), '*', 2, 0, 'sort DESC, id DESC')->result_array();
					foreach($qsts as $v):
				?>
					<div class="q"><a href="">Q：<?=$v['title']?></a></div>
					<div class="a"><a href="">A：<?=cutstr($v['description'], 15, '')?></a></div>
				<?php endforeach;?>
				</div>
			</div>