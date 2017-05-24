<?php
/* @var $this ProvumumController */
/* @var $model Provumum */

$this->breadcrumbs=array(
	'Provumums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Provumum', 'url'=>array('index')),
	array('label'=>'Manage Provumum', 'url'=>array('admin')),
);
?>

<h1>Create Provumum</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>