<?php
$this->breadcrumbs=array(
	'订单创建'=>array('index'),
	'步骤一',
);

if(Yii::app()->user->isAdmin)
{
	$this->menu=array(
		array('label'=>'List Order', 'url'=>array('index')),
		array('label'=>'Manage Order', 'url'=>array('admin')),
	);
}

?>

<h1>创建订单</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>