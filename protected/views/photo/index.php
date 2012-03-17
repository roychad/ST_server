<?php
$this->breadcrumbs=array(
	'Photos',
);

$this->menu=array(
	array('label'=>'Create Photo', 'url'=>array('create')),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
?>

<h1>Photos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
