<?php
/* @var $this ProvumumController */
/* @var $model Provumum */

$this->breadcrumbs=array(
	'Provumums'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Provumum', 'url'=>array('index')),
	array('label'=>'Create Provumum', 'url'=>array('create')),
	array('label'=>'Update Provumum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Provumum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Provumum', 'url'=>array('admin')),
);
?>

<h1>View Provumum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kdProvider',
		'nmProvider',
		'kdCabang',
		'nmCabang',
	),
)); ?>
