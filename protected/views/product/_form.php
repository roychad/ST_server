<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_name'); ?>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'product_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_introduce'); ?>
		<?php echo $form->textArea($model,'product_introduce',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'product_introduce'); ?>
	</div>
	
	<?php
		$this->widget('CMultiFileUpload', array(
			'name' => 'images',
			'accept'=>'jpg|gif',
			'options'=>array(
					'onFileSelect'=>'function(e, v, m){}',
					'afterFileSelect'=>'function(e, v, m){ }',
					'onFileAppend'=>'function(e, v, m){  }',
					'afterFileAppend'=>'function(e, v, m){  }',
					'onFileRemove'=>'function(e, v, m){ }',
					'afterFileRemove'=>'function(e, v, m){  }',
			),
		));
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->