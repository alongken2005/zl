<?php
$this->load->view(THEME.'/header');
?>
<script type="text/javascript" src="<?=THEME_VIEW?>/js/slide.js"></script>
<div class="right_content">
	<div class="focusbg png">
		<div class="movie_slide gamefoucs" >
			<div class="num">
			<?php for($i=0, $length = count($focus); $i<$length; $i++): echo '<a class="png"></a>'; endfor;?>
			</div>
			<ul>
			<?php
				foreach ($focus as $k=>$v):
			?>
				<li>
					<a href="<?=$v['url']?>" target="_blank">
						<img src="<?=base_url('./data/uploads/pics/'.$v['filename'])?>" alt="<?=$v['filename']?>" />
					</a>
				</li>
			<?php endforeach;?>
			</ul>
		</div>
	</div>

	<div class="newsbg png">
		<a href="<?=site_url('index/clists?tid=1')?>" class="more"></a>
	<?php foreach($news as $v):?>
		<a href="<?=site_url('index/cdetail?id='.$v['id'])?>" class="png"><span class="left"><?=$v['title']?></span><span class="right" style="padding-right:5px;"><?=date('m-d',$v['ctime'])?></span></a>
	<?php endforeach;?>
	</div>

	<div class="clear"></div>

	<div class="res png">
		<div class="newer">
		<?php foreach($newer as $v):?>
			<a href="<?=site_url('index/cdetail?id='.$v['id'])?>"><?=$v['title']?></a>
		<?php endforeach;?>
			<a href="<?=site_url('index/clists?tid=5')?>" class="more">更多&raquo;</a>
		</div>
		<div class="newer">
		<?php foreach($sys as $v):?>
			<a href="<?=site_url('index/cdetail?id='.$v['id'])?>"><?=$v['title']?></a>
		<?php endforeach;?>
			<a href="<?=site_url('index/clists?tid=6')?>" class="more">更多&raquo;</a>
		</div>
		<div class="newer">
		<?php foreach($hig as $v):?>
			<a href="<?=site_url('index/cdetail?id='.$v['id'])?>"><?=$v['title']?></a>
		<?php endforeach;?>
			<a href="<?=site_url('index/clists?tid=7')?>" class="more">更多&raquo;</a>
		</div>
		<div class="newer">
		<?php foreach($tes as $v):?>
			<a href="<?=site_url('index/cdetail?id='.$v['id'])?>"><?=$v['title']?></a>
		<?php endforeach;?>
			<a href="<?=site_url('index/clists?tid=8')?>" class="more">更多&raquo;</a>
		</div>
	</div>
</div>
<div class="clear"></div>

<div class="cut_pic png">
	<div class="backward png"><a href="javascript:void(0)" onclick="picList('pre')" id="btnPre" class="png">prev</a></div>
	<div id="bigDiv">
		<ul id="myList">
		<?php foreach($cuts as $v):?>
			<li>
				<a href="./data/uploads/pics/<?=$v['filename']?>" rel="cutpic" title="">
					<img src="<?=base_url(get_thumb($v['filename']))?>"/><br><?=$v['title']?>
				</a>
			</li>
		<?php endforeach;?>
		</ul>
	</div>
	<div class="forward"><a href="javascript:void(0)" id="btnNext" onclick="picList('next')" class="png">next</a></div>
</div>
<script type="text/javascript" src="<?=base_url('./common/fancybox/jquery.fancybox-1.3.4.pack.js')?>"></script>
<script type="text/javascript" src="<?=base_url('./common/fancybox/jquery.mousewheel-3.0.4.pack.js')?>"></script>
<link media="screen" rel="stylesheet" href="<?=base_url('./common/fancybox/jquery.fancybox-1.3.4.css')?>" />
<script type="text/javascript">
	var sWidth = 195;//单个容器宽度(包括边距，填充),PS:每次位移距离
	var visible = 4;//显示数量

	slidshow($('.movie_slide'));

	$(function() {
		$("a[rel='cutpic']").fancybox({'padding':0});
	})
</script>
<script type="text/javascript" src="<?=THEME_VIEW?>/js/tab.js" ></script>
<?php
$this->load->view(THEME.'/footer');
?>
