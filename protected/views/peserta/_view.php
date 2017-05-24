<?php
/* @var $this PesertaController */
/* @var $data Peserta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noKartu')); ?>:</b>
	<?php echo CHtml::encode($data->noKartu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nik')); ?>:</b>
	<?php echo CHtml::encode($data->nik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pisa')); ?>:</b>
	<?php echo CHtml::encode($data->pisa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglLahir')); ?>:</b>
	<?php echo CHtml::encode($data->tglLahir); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tglCetakKartu')); ?>:</b>
	<?php echo CHtml::encode($data->tglCetakKartu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provUmum')); ?>:</b>
	<?php echo CHtml::encode($data->provUmum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenisPeserta')); ?>:</b>
	<?php echo CHtml::encode($data->jenisPeserta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelasTanggungan')); ?>:</b>
	<?php echo CHtml::encode($data->kelasTanggungan); ?>
	<br />

	*/ ?>

</div>