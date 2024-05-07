<?php
/* @var $this PesertaController */
/* @var $model Peserta */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'peserta-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'nama'); ?>
		<?php echo $form->textField($model, 'nama', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'nama'); ?>
	</div>

	<!-- <div class="row">
		percobaan1
		<?php echo $form->labelEx($model, 'tanggal_lahir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tanggal_lahir',
			'options' => array(
				'dateFormat' => 'yy-mm-dd', // Format tanggal yang diinginkan
				// Opsi tambahan untuk konfigurasi datepicker (jika diperlukan)
			),
			'htmlOptions' => array(
				'class' => 'form-control', // Kelas CSS untuk styling (jika diperlukan)
			),
		)); ?>
		<?php echo $form->error($model, 'tanggal_lahir'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model, 'tanggal_lahir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tanggal_lahir',
			'options' => array(
				'dateFormat' => 'yy-mm-dd', // Format tanggal yang diinginkan
				'changeYear' => true, // Mengizinkan pengguna untuk memilih tahun
				'yearRange' => '1900:' . (date('Y') + 1), // Rentang tahun yang tersedia
				// Opsi tambahan untuk konfigurasi datepicker (jika diperlukan)
			),
			'htmlOptions' => array(
				'class' => 'form-control', // Kelas CSS untuk styling (jika diperlukan)
				'readonly' => 'readonly', // Membuat input hanya bisa dibaca (readonly)
			),
		)); ?>
		<?php echo $form->error($model, 'tanggal_lahir'); ?>
	</div>

	<!-- <div class="row"> Tanggal Lahir Default
		<?php echo $form->labelEx($model, 'tanggal_lahir'); ?>
		<?php echo $form->textField($model, 'tanggal_lahir'); ?>
		<?php echo $form->error($model, 'tanggal_lahir'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model, 'alamat'); ?>
		<?php echo $form->textArea($model, 'alamat', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'no_telp'); ?>
		<?php echo $form->textField($model, 'no_telp', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255, 'pattern' => '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$')); ?>
		<?php echo $form->error($model, 'email'); ?>
	</div>

	<!-- <div class="row"> email default
		<?php echo $form->labelEx($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'email'); ?>
	</div> -->

	<!-- <div class="row"> Tanggal Pendaftaran default
		<?php echo $form->labelEx($model, 'tanggal_pendaftaran'); ?>
		<?php echo $form->textField($model, 'tanggal_pendaftaran'); ?>
		<?php echo $form->error($model, 'tanggal_pendaftaran'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model, 'tanggal_pendaftaran'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tanggal_pendaftaran',
			'options' => array(
				'dateFormat' => 'yy-mm-dd', // Format tanggal yang diinginkan
				'changeYear' => true, // Mengizinkan pengguna untuk memilih tahun
				'yearRange' => '1900:' . (date('Y') + 1), // Rentang tahun yang tersedia
				// Opsi tambahan untuk konfigurasi datepicker (jika diperlukan)
			),
			'htmlOptions' => array(
				'class' => 'form-control', // Kelas CSS untuk styling (jika diperlukan)
				'readonly' => 'readonly', // Membuat input hanya bisa dibaca (readonly)
			),
		)); ?>
		<?php echo $form->error($model, 'tanggal_pendaftaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'status_keanggotaan'); ?>
		<?php echo $form->textField($model, 'status_keanggotaan', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'status_keanggotaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'keterangan'); ?>
		<?php echo $form->textArea($model, 'keterangan', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->