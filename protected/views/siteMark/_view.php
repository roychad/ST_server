<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_attitude')); ?>:</b>
	<?php echo CHtml::encode($data->service_attitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_speed')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_speed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_attitude_times')); ?>:</b>
	<?php echo CHtml::encode($data->service_attitude_times); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_speed_times')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_speed_times); ?>
	<br />


</div>