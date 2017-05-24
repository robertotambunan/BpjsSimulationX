<?php
/* @var $this JenispesertaController */
/* @var $model Jenispeserta */

$this->breadcrumbs=array(
	'Jenispesertas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jenispeserta', 'url'=>array('index')),
	array('label'=>'Create Jenispeserta', 'url'=>array('create')),
	array('label'=>'View Jenispeserta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Jenispeserta', 'url'=>array('admin')),
);
?>

<h1>Update Jenispeserta <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>