<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

if(Yii::app()->user->isAdmin)
{
	$this->menu=array(
		array('label'=>'List Order', 'url'=>array('index')),
		array('label'=>'Create Order', 'url'=>array('create')),
		array('label'=>'Update Order', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Order', 'url'=>array('admin')),
	);
}
?>

<h1>View Order #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'order_id',
		'order_state_id',
		'create_time',
		'product_id',
		'entered_pid',
		'remark',
	),
)); 

echo CHtml::link(CHtml::encode('继续入库'), array(
						(($model->order_state_id==='1')?'create':'update'), 
						'sid' => $model->order_state_id
					)); 

?>
