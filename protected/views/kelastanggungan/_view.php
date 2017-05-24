<?php
/* @var $this KelastanggunganController */
/* @var $data Kelastanggungan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kdKelas')); ?>:</b>
	<?php echo CHtml::encode($data->kdKelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmKelas')); ?>:</b>
	<?php echo CHtml::encode($data->nmKelas); ?>
	<br />


</div>