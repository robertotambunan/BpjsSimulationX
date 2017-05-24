<?php
/* @var $this JenispesertaController */
/* @var $model Jenispeserta */

$this->breadcrumbs=array(
	'Jenispesertas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jenispeserta', 'url'=>array('index')),
	array('label'=>'Manage Jenispeserta', 'url'=>array('admin')),
);
?>

<h1>Create Jenispeserta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>