<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'product_name',
		'product_introduce',
		'product_mark',
		'product_create_time',
		'product_marked_times',
		'mask_photo_id',
	),
)); 

echo '<div class="view">';

foreach($photos as $photo)
{
	echo '<div class="view">';
	echo ($photo->id === $model->mask_photo_id)?'封面（不能删除）<br />':'';
	echo CHtml::image(Yii::app()->baseUrl.'/images/photos/'.$model->product_id.'/'.$photo->photo_name,'图片的说明',array('width'=>'200px','height'=>'150px')).'<br />'; 
	echo CHtml::ajaxButton('删除', '#', array(),array('submit'=>array('deletePhoto','id'=>$photo->id,'modelId'=>$model->id)));
	echo ($photo->id !== $model->mask_photo_id)?CHtml::ajaxButton('设为封面', '#', array(),array('submit'=>array('setThumbnail','id'=>$photo->id,'modelId'=>$model->id))):'';
	echo '</div>';
}
echo '</div>';

?>
