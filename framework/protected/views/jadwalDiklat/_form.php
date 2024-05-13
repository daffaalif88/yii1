<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'jadwal-diklat-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'nama_diklat'); ?>
		<?php echo $form->textField($model, 'nama_diklat', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'nama_diklat'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model, 'tanggal_mulai'); ?>
		<?php echo $form->textField($model, 'tanggal_mulai'); ?>
		<?php echo $form->error($model, 'tanggal_mulai'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model, 'tanggal_mulai'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tanggal_mulai',
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
		<?php echo $form->error($model, 'tanggal_mulai'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model, 'tangga_selesai'); ?>
		<?php echo $form->textField($model, 'tangga_selesai'); ?>
		<?php echo $form->error($model, 'tangga_selesai'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model, 'tangga_selesai'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tangga_selesai',
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
		<?php echo $form->error($model, 'tangga_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'jam_mulai'); ?>
		<?php echo $form->textField($model, 'jam_mulai'); ?>
		<?php echo $form->error($model, 'jam_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'jam_selesai'); ?>
		<?php echo $form->textField($model, 'jam_selesai'); ?>
		<?php echo $form->error($model, 'jam_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'tempat'); ?>
		<?php echo $form->textField($model, 'tempat', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'tempat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'instruktur'); ?>
		<?php echo $form->textField($model, 'instruktur', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'instruktur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'keterangan'); ?>
		<?php echo $form->textArea($model, 'keterangan', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'kategori'); ?>
		<?php echo $form->dropDownList($model, 'kategori', array(
			'gratis' => 'Gratis',
			'berbayar' => 'Berbayar'
		)); ?>
		<?php echo $form->error($model, 'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'kuota_peserta'); ?>
		<?php echo $form->textField($model, 'kuota_peserta'); ?>
		<?php echo $form->error($model, 'kuota_peserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'status'); ?>
		<?php echo $form->dropDownList($model, 'status', array(
			'Selesai' => 'Selesai',
			'Belum Dilaksanakan' => 'Belum Dilaksanakan'
		)); ?>
		<?php echo $form->error($model, 'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->