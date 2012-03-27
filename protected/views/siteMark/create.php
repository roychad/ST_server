<?php
$this->breadcrumbs=array(
	'Site Marks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteMark', 'url'=>array('index')),
	array('label'=>'Manage SiteMark', 'url'=>array('admin')),
);
?>

<h1>Create SiteMark</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>