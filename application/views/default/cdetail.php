<?php
$this->load->view(THEME.'/header');
?>
<div class="cbg">
	<h3 class="dtitle"><?=$row['title']?></h3>
	<div class="leader">
		<a href="<?=site_url()?>">首页</a> &raquo;
		<a href=""><?=$contType[$row['tid']]?></a>
	</div>
	<div class="clear"></div>
	<div class="detail">
		<?=$row['content']?>
	</div>
</div>

<script type="text/javascript" src="<?=base_url('./common/js/jScrollPane.js')?>"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?=base_url('./common/js/jScrollPane.css')?>" />
<script type="text/javascript">
	$(function() {
	   $('.detail').jScrollPane();
	})
</script>
<?php
$this->load->view(THEME.'/footer');
?>
