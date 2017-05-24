<?php
/* @var $this KelastanggunganController */
/* @var $model Kelastanggungan */

$this->breadcrumbs=array(
	'Kelastanggungans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kelastanggungan', 'url'=>array('index')),
	array('label'=>'Create Kelastanggungan', 'url'=>array('create')),
	array('label'=>'Update Kelastanggungan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kelastanggungan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kelastanggungan', 'url'=>array('admin')),
);
?>

<h1>View Kelastanggungan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kdKelas',
		'nmKelas',
	),
)); ?>
