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
	<table>
		<tr>
		<td>
		<?php echo $form->labelEx($model,'noKartu'); ?>
		<?php echo $form->textField($model,'noKartu'); ?>
		<?php echo $form->error($model,'noKartu'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($modelProvUmum,'kdProvider'); ?>
		<?php echo $form->textField($modelProvUmum,'kdProvider'); ?>
		<?php echo $form->error($modelProvUmum,'kdProvider'); ?>
		</td>
		</tr>

		<tr>
		<td>
		<?php echo $form->labelEx($model,'nik'); ?>
		<?php echo $form->textField($model,'nik'); ?>
		<?php echo $form->error($model,'nik'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($modelProvUmum,'nmProvider'); ?>
		<?php echo $form->textField($modelProvUmum,'nmProvider'); ?>
		<?php echo $form->error($modelProvUmum,'nmProvider'); ?>
		</td>
		</tr>

		<tr>
		<td>
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nama'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($modelProvUmum,'kdCabang'); ?>
		<?php echo $form->textField($modelProvUmum,'kdCabang'); ?>
		<?php echo $form->error($modelProvUmum,'kdCabang'); ?>
		</td>
		</tr>		
		<tr>
		<td>
		<?php echo $form->labelEx($model,'pisa'); ?>
		<?php echo $form->textField($model,'pisa'); ?>
		<?php echo $form->error($model,'pisa'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($modelProvUmum,'nmCabang'); ?>
		<?php echo $form->textField($modelProvUmum,'nmCabang'); ?>
		<?php echo $form->error($modelProvUmum,'nmCabang'); ?>
		</td>
		</tr>	

		<tr>
		<td>	
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sex'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($modelKelasTanggungan,'kdKelas'); ?>
		<?php echo $form->textField($modelKelasTanggungan,'kdKelas'); ?>
		<?php echo $form->error($modelKelasTanggungan,'kdKelas'); ?>
		</td>
		</tr>

		<tr>
		<td>
		<?php echo $form->labelEx($model,'tglLahir'); ?>
		<?php echo $form->textField($model,'tglLahir'); ?>
		<?php echo $form->error($model,'tglLahir'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($modelKelasTanggungan,'nmKelas'); ?>
		<?php echo $form->textField($modelKelasTanggungan,'nmKelas'); ?>
		<?php echo $form->error($modelKelasTanggungan,'nmKelas'); ?>
		</td>
		</tr>


		<tr>
		<td>
		<?php echo $form->labelEx($model,'tglCetakKartu'); ?>
		<?php echo $form->textField($model,'tglCetakKartu'); ?>
		<?php echo $form->error($model,'tglCetakKartu'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($modelJenisPeserta,'kdJenisPeserta'); ?>
		<?php echo $form->textField($modelJenisPeserta,'kdJenisPeserta'); ?>
		<?php echo $form->error($modelJenisPeserta,'kdJenisPeserta'); ?>
		</td>
		</tr>


		<tr>
		<td>
		</td>
		<td>
		<?php echo $form->labelEx($modelJenisPeserta,'nmJenisPeserta'); ?>
		<?php echo $form->textField($modelJenisPeserta,'nmJenisPeserta'); ?>
		<?php echo $form->error($modelJenisPeserta,'nmJenisPeserta'); ?>
		</td>
		</tr>



	<!--<div class="row">
		<?php echo $form->labelEx($model,'provUmum'); ?>
		<?php echo $form->textField($model,'provUmum',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'provUmum'); ?>
	</div>
	--> 
<!--
		<tr>
		<td>
		<?php echo $form->labelEx($model,'jenisPeserta'); ?>
		<?php echo $form->textField($model,'jenisPeserta',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'jenisPeserta'); ?>
		</td>
		<td>
		</td>
		</tr>

		<tr>
		<td>
		<?php echo $form->labelEx($model,'kelasTanggungan'); ?>
		<?php echo $form->textField($model,'kelasTanggungan',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'kelasTanggungan'); ?>
		</td>
		<td>
		</td>
		</tr>

-->
	
	</table>
	<!--<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>
-->
		<div class="row buttons">
		<?php echo CHtml::button('Simpan', array('submit' => array('peserta/createBPJS'))); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->