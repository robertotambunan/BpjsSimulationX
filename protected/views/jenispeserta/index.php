<?php
/* @var $this JenispesertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenispesertas',
);

$this->menu=array(
	array('label'=>'Create Jenispeserta', 'url'=>array('create')),
	array('label'=>'Manage Jenispeserta', 'url'=>array('admin')),
);
?>

<h1>Jenispesertas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
