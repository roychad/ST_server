<?php
$this->breadcrumbs=array(
	'订单'=>array('index'),
	'管理',
);

if(Yii::app()->user->isAdmin)
{
	$this->menu=array(
		array('label'=>'回首页', 'url'=>array('admin')),
	);
}

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('order-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理订单</h1>



<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'create_time',
		'state',
		'input_user',
		'oid',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
