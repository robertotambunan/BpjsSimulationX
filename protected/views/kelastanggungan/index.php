<?php
/* @var $this KelastanggunganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kelastanggungans',
);

$this->menu=array(
	array('label'=>'Create Kelastanggungan', 'url'=>array('create')),
	array('label'=>'Manage Kelastanggungan', 'url'=>array('admin')),
);
?>

<h1>Kelastanggungans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
