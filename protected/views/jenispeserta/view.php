<?php
/* @var $this JenispesertaController */
/* @var $model Jenispeserta */

$this->breadcrumbs=array(
	'Jenispesertas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Jenispeserta', 'url'=>array('index')),
	array('label'=>'Create Jenispeserta', 'url'=>array('create')),
	array('label'=>'Update Jenispeserta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Jenispeserta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jenispeserta', 'url'=>array('admin')),
);
?>

<h1>View Jenispeserta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kdJenisPeserta',
		'nmJenisPeserta',
	),
)); ?>
