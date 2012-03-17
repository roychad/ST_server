<div class="view">

	<b>序号</b>
	<?php echo CHtml::encode($data->id)?>
	<br />
	
	<b>内容</b>
	<?php echo CHtml::link(CHTML::encode($data->text), array('view', 'id'=>$data->id)); ?>
	<br />

	<b>创建时间</b>
	<?php echo CHtml::encode($data->create_time); ?>


</div>