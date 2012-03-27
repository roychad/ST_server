<?php
$this->breadcrumbs=array(
	'订单',
);

if(Yii::app()->user->isAdmin)
{
	$this->menu=array(
		array('label'=>'Create Order', 'url'=>array('create')),
		array('label'=>'Manage Order', 'url'=>array('admin')),
	);
}

?>

<h1>订单</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_orderState',
)); ?>
