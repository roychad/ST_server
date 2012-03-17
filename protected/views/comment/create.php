<?php
$this->breadcrumbs=array(
	'留言'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'留言列表', 'url'=>array('index')),
	array('label'=>'管理留言', 'url'=>array('admin')),
);
?>

<h1>Create Comment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>