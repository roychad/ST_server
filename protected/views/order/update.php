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


<h2>
<?php
	switch($state)
	{
	case 2:
		$state_str = '步骤：正在制作';
		break;
	case 3:
		$state_str = '步骤：正在吹干';
		break;
	case 4:
		$state_str = '步骤：已发货';
		break;
	}
	echo $state_str;
?>
</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>