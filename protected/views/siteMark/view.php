<?php
$this->breadcrumbs=array(
	'Site Marks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteMark', 'url'=>array('index')),
	array('label'=>'Create SiteMark', 'url'=>array('create')),
	array('label'=>'Update SiteMark', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteMark', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteMark', 'url'=>array('admin')),
);
?>

<h1>View SiteMark #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'service_attitude',
		'delivery_speed',
		'service_attitude_times',
		'delivery_speed_times',
	),
)); ?>
