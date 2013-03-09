<?php
$this->load->view(THEME.'/header');
?>
<div class="cbg">
	<h2 class="title"><?=$contType[$tid]?></h2>
	<div class="leader">
		<a href="<?=site_url()?>">首页</a> &raquo;
		<a href=""><?=$contType[$tid]?></a>
	</div>
	<div class="clear"></div>
	<div class="scroll">
	<?php foreach($lists as $v):?>
		<div class="line"><a href="<?=site_url('index/cdetail?id='.$v['id'])?>"><?=$v['title']?></a><span><?=date('m月d日', $v['ctime'])?></span></div>
	<?php endforeach;?>
	</div>
	<?=$pagination?>
</div>


<?php
$this->load->view(THEME.'/footer');
?>
