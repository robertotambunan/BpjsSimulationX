<?php
/* @var $this JenispesertaController */
/* @var $model Jenispeserta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kdJenisPeserta'); ?>
		<?php echo $form->textField($model,'kdJenisPeserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmJenisPeserta'); ?>
		<?php echo $form->textField($model,'nmJenisPeserta',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->