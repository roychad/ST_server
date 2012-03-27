<?php
$this->breadcrumbs=array(
	'Site Marks',
);

$this->menu=array(
	array('label'=>'Create SiteMark', 'url'=>array('create')),
	array('label'=>'Manage SiteMark', 'url'=>array('admin')),
);
?>

<h1>Site Marks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
