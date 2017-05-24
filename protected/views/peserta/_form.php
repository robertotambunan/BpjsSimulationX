<?php
/* @var $this PesertaController */
/* @var $model Peserta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peserta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'noKartu'); ?>
		<?php echo $form->textField($model,'noKartu'); ?>
		<?php echo $form->error($model,'noKartu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nik'); ?>
		<?php echo $form->textField($model,'nik'); ?>
		<?php echo $form->error($model,'nik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pisa'); ?>
		<?php echo $form->textField($model,'pisa'); ?>
		<?php echo $form->error($model,'pisa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglLahir'); ?>
		<?php echo $form->textField($model,'tglLahir'); ?>
		<?php echo $form->error($model,'tglLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglCetakKartu'); ?>
		<?php echo $form->textField($model,'tglCetakKartu'); ?>
		<?php echo $form->error($model,'tglCetakKartu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provUmum'); ?>
		<?php echo $form->textField($model,'provUmum',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'provUmum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenisPeserta'); ?>
		<?php echo $form->textField($model,'jenisPeserta',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'jenisPeserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelasTanggungan'); ?>
		<?php echo $form->textField($model,'kelasTanggungan',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'kelasTanggungan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->