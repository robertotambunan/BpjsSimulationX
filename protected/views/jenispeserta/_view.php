<?php
/* @var $this JenispesertaController */
/* @var $data Jenispeserta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kdJenisPeserta')); ?>:</b>
	<?php echo CHtml::encode($data->kdJenisPeserta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmJenisPeserta')); ?>:</b>
	<?php echo CHtml::encode($data->nmJenisPeserta); ?>
	<br />


</div>