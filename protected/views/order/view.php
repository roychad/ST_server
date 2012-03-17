<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

if(Yii::app()->user->isAdmin)
{
	$this->menu=array(
		array('label'=>'管理订单', 'url'=>array('admin')),
		array('label'=>'回首页', 'url'=>array('admin')),
	);
}
else
{
	$this->menu=array(
		array('label'=>'回首页', 'url'=>array('admin')),
	);
}
?>

<h3><?php   echo $isCreate?'创建成功！':'';?></h3>

<h1>订单号：<?php echo $model->oid;?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'create_time',
		'state',
		'input_user',
	),
)); 

if($isCreate)
{
	if($model->state==='1')
	{
		echo CHtml::link('继续创建', array('create', 'state'=>1));
	}
	else
	{
		echo CHtml::link('继续创建', array('update', 'state'=>$model->state));
	}
}

?>

