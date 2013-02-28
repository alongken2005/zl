<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$this->load->view('admin/header');
?>
<h2><?=isset($tid) ? $types[$tid] : ''?>管理<div class="operate"><a href="<?=site_url('admin/resource/op')?>">添加</a></div></h2>
<table cellpadding="0" cellspacing="0" border="0" class="table2">
	<tr>
		<th>标题</th>
		<th width="150">类型</th>
		<th width="150">发布日期</th>
		<th width="150">操作</th>
	</tr>
<?php if($lists): foreach($lists as $v):?>
	<tr>
		<td style="text-align: left; padding-left: 10px"><?=$v['title']?></td>
		<td><?=$v['parent'].'/'.$v['child']?></td>
		<td><?=date('Y-m-d H:i', $v['ctime'])?></td>
		<td>
			<a href="<?=site_url('admin/resource/op?id='.$v['id'])?>">修改</a>
			<a href="<?=site_url('admin/resource/del?id='.$v['id'])?>" class="del">删除</a>
		</td>
	</tr>
<?php endforeach; endif;?>
</table>
<?=$pagination?>
<script type="text/javascript">
$(function() {
	$('.del').click(function() {
		if(confirm('确认删除？')){
			var po = $(this).parent().parent();
			$.get($(this).attr('href'), '', function(data) {
				if(data == 'ok'){
					po.hide();
				} else {
					alert('删除失败！');
				}
			})
		}
		return false;
	})
})
</script>
<?php $this->load->view('admin/footer');?>