<?php
$this->breadcrumbs=array(
	'用户'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'管理用户', 'url'=>array('admin')),
);
?>

<h1>创建用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>