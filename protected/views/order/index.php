<?php
$this->breadcrumbs=array(
	'订单',
);

if(Yii::app()->user->isAdmin)
{
	$this->menu=array(
		array('label'=>'管理订单', 'url'=>array('admin')),
	);
}
?>

<h1>订单</h1>
<div class = "view">
<div class = "orderViewTitle">
请选择步骤：
</div>
<div class = "orderView">

<?php echo CHtml::link(CHtml::encode('1.准备开始制作'), array('create', 'state'=>1)); ?>
</div>
<div class = "orderView">
<?php echo CHtml::link(CHtml::encode('2.正在制作'), array('update', 'state'=>2)); ?>
</div>
<div class = "orderView">
<?php echo CHtml::link(CHtml::encode('3.正在吹干'), array('update', 'state'=>3)); ?>
</div>
<div class = "orderView">
<?php echo CHtml::link(CHtml::encode('4.已发货'), array('update', 'state'=>4)); ?>
</div>
</div>
