<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-mark-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_attitude'); ?>
		<?php echo $form->textField($model,'service_attitude'); ?>
		<?php echo $form->error($model,'service_attitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_speed'); ?>
		<?php echo $form->textField($model,'delivery_speed'); ?>
		<?php echo $form->error($model,'delivery_speed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_attitude_times'); ?>
		<?php echo $form->textField($model,'service_attitude_times'); ?>
		<?php echo $form->error($model,'service_attitude_times'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_speed_times'); ?>
		<?php echo $form->textField($model,'delivery_speed_times'); ?>
		<?php echo $form->error($model,'delivery_speed_times'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->