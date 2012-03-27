<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_method'); ?>
		<?php echo $form->textField($model,'contact_method',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact_method'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->