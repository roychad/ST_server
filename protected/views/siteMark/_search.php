<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_attitude'); ?>
		<?php echo $form->textField($model,'service_attitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delivery_speed'); ?>
		<?php echo $form->textField($model,'delivery_speed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_attitude_times'); ?>
		<?php echo $form->textField($model,'service_attitude_times'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delivery_speed_times'); ?>
		<?php echo $form->textField($model,'delivery_speed_times'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->