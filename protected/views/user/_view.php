<div class="view">

	<b><?php echo CHtml::encode('工号'); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode('用户名'); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode('权限'); ?>:</b>
	<?php echo CHtml::encode((($data->limit_id)==='0')?'管理员':'员工'); ?>
	<br />


</div>