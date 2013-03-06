<?php
$this->load->view(THEME.'/header');
?>
<script type="text/javascript" src="<?=THEME_VIEW?>/js/slide.js"></script>
<div class="right_content">
	<div class="focusbg">
		<div class="movie_slide gamefoucs" >
			<div class="num">
			<?php for($i=0, $length = count($focus); $i<$length; $i++): echo '<a>'.($i+1).'</a>'; endfor;?>
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
</div>
<script type="text/javascript">
    slidshow($('.movie_slide'));
</script>
<?php
$this->load->view(THEME.'/footer');
?>
