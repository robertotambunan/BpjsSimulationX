<?php
/* @var $this ProvumumController */
/* @var $model Provumum */

$this->breadcrumbs=array(
	'Provumums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Provumum', 'url'=>array('index')),
	array('label'=>'Create Provumum', 'url'=>array('create')),
	array('label'=>'View Provumum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Provumum', 'url'=>array('admin')),
);
?>

<h1>Update Provumum <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>