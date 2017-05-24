<?php
/* @var $this KelastanggunganController */
/* @var $model Kelastanggungan */

$this->breadcrumbs=array(
	'Kelastanggungans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kelastanggungan', 'url'=>array('index')),
	array('label'=>'Create Kelastanggungan', 'url'=>array('create')),
	array('label'=>'View Kelastanggungan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kelastanggungan', 'url'=>array('admin')),
);
?>

<h1>Update Kelastanggungan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>