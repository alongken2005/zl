<?php
$this->load->view(THEME.'/header');
?>
<div class="cbg">
	<h3 class="dtitle">常见问题</h3>
	<div class="leader">
		<a href="<?=site_url()?>">首页</a> &raquo;
		<a href=""><?=$contType[$tid]?></a>
	</div>
	<div class="clear"></div>
	<div class="qst">
	<?php foreach($lists as $k=>$v):?>
		<div class="q"><?=($k+1)."、".$v['title']?></div>
		<div class="a"><?=$v['content']?></div>
	<?php endforeach;?>
	</div>
</div>

<script type="text/javascript" src="<?=base_url('./common/js/jScrollPane.js')?>"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?=base_url('./common/js/jScrollPane.css')?>" />
<script type="text/javascript">
	$(function() {
	   $('.qst').jScrollPane();
	})
</script>
<?php
$this->load->view(THEME.'/footer');
?>
