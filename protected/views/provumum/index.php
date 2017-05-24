<?php
/* @var $this ProvumumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provumums',
);

$this->menu=array(
	array('label'=>'Create Provumum', 'url'=>array('create')),
	array('label'=>'Manage Provumum', 'url'=>array('admin')),
);
?>

<h1>Provumums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
