<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'留言列表', 'url'=>array('index')),
	array('label'=>'创建留言', 'url'=>array('create')),
	array('label'=>'本留言', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理留言', 'url'=>array('admin')),
);
?>

<h1>Update Comment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>