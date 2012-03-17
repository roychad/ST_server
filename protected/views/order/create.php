<?php
$this->breadcrumbs=array(
	'订单'=>array('index'),
	'创建',
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

<h1>创建订单</h1>

<h3>步骤：准备开始制作</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>