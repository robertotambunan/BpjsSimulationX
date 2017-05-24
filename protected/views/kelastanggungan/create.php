<?php
/* @var $this KelastanggunganController */
/* @var $model Kelastanggungan */

$this->breadcrumbs=array(
	'Kelastanggungans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kelastanggungan', 'url'=>array('index')),
	array('label'=>'Manage Kelastanggungan', 'url'=>array('admin')),
);
?>

<h1>Create Kelastanggungan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>