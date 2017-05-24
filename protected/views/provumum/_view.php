<?php
/* @var $this ProvumumController */
/* @var $data Provumum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kdProvider')); ?>:</b>
	<?php echo CHtml::encode($data->kdProvider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmProvider')); ?>:</b>
	<?php echo CHtml::encode($data->nmProvider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kdCabang')); ?>:</b>
	<?php echo CHtml::encode($data->kdCabang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmCabang')); ?>:</b>
	<?php echo CHtml::encode($data->nmCabang); ?>
	<br />


</div>