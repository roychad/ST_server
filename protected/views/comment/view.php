<?php
$this->breadcrumbs=array(
	'留言'=>array('index'),
	'内容',
);

$this->menu=array(
	array('label'=>'留言列表', 'url'=>array('index')),
	array('label'=>'创建留言', 'url'=>array('create')),
	array('label'=>'更改留言', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除留言', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理留言', 'url'=>array('admin')),
);
?>

<h1>内容</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'create_time',
		'text',
	),
)); ?>
