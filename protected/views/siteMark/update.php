<?php
$this->breadcrumbs=array(
	'Site Marks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteMark', 'url'=>array('index')),
	array('label'=>'Create SiteMark', 'url'=>array('create')),
	array('label'=>'View SiteMark', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteMark', 'url'=>array('admin')),
);
?>

<h1>Update SiteMark <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>