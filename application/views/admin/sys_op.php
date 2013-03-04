<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$this->load->view('admin/header');
?>
<h2>系统设置</h2>
<div class="slider3">
	<form action="<?=site_url('admin/sys/op')?>" method="POST">
	<table cellspacing="0" cellpadding="0" border="0" class="table1">
		<tr>
			<th>PC下载地址：</th>
			<td>
				<input type="text" name="pcdown" value="<?=set_value('pcdown', isset($lists['pcdown']) ? $content['pcdown'] : '')?>" class="input1"/>
			</td>
		</tr>
		<tr>
			<th>所属模块：</th>
			<td>
				<select name="type">
					<option value="video">视频</option>
					<option value="stuff">教案</option>
				</select>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" name="submit" value="提 交" class="but2"/>
			</td>
		</tr>
	</table>
	</form>
</div>
<?php $this->load->view('admin/footer');?>