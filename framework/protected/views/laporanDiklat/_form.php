<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'laporan-diklat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_diklat'); ?>
		<?php echo $form->dropDownList(
			$model,
			'id_diklat',
			CHtml::listData(JadwalDiklat::model()->findAll(), 'id', function($model) {
				return $model->id . ' - ' . $model->nama_diklat;
			}),
			array('prompt' => 'Pilih Jadwal Diklat')
		); ?>
		<?php echo $form->error($model,'id_diklat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laporan'); ?>
		<?php echo $form->textArea($model,'laporan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'laporan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_kehadiran'); ?>
		<?php echo $form->textField($model, 'total_kehadiran', array(
			'type' => 'number',   // Menentukan jenis input adalah number
			'pattern' => '\d*',   // Regex yang memastikan hanya digit yang diizinkan
			'min' => '0'          // Opsional: nilai minimal jika perlu
		)); ?>
		<?php echo $form->error($model,'total_kehadiran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->