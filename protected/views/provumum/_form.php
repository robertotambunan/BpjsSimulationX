<?php
/* @var $this ProvumumController */
/* @var $model Provumum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'provumum-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kdProvider'); ?>
		<?php echo $form->textField($model,'kdProvider',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'kdProvider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nmProvider'); ?>
		<?php echo $form->textField($model,'nmProvider',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nmProvider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kdCabang'); ?>
		<?php echo $form->textField($model,'kdCabang',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'kdCabang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nmCabang'); ?>
		<?php echo $form->textField($model,'nmCabang',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nmCabang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->