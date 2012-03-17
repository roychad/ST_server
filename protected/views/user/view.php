<?php
$this->breadcrumbs=array(
	'用户'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'创建用户', 'url'=>array('create')),
	array('label'=>'删除用户', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理用户', 'url'=>array('admin')),
);
?>

<h1>用户信息</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'right',
	),
)); ?>
