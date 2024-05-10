<?php
/* @var $this KehadiranController */
/* @var $model Kehadiran */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'kehadiran-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'id_peserta'); ?>
		<?php echo $form->dropDownList(
			$model,
			'id_peserta',
			CHtml::listData(Peserta::model()->findAll(), 'id', function($model) {
				return $model->id . ' - ' . $model->nama;
			}),
			array('prompt' => 'Pilih Peserta')
		); ?>
		<?php echo $form->error($model, 'id_peserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'status'); ?>
		<?php echo $form->dropDownList(
			$model,
			'status',
			array('Masuk' => 'Masuk', 'Keluar' => 'Keluar'),
			array('prompt' => 'Pilih Status')
		); ?>
		<?php echo $form->error($model, 'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'tanggal'); ?>
		<?php echo $form->textField($model, 'tanggal', array('readonly' => true)); ?>
		<?php echo $form->error($model, 'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'waktu'); ?>
		<?php echo $form->textField($model, 'waktu', array('readonly'=>true)); ?>
		<?php
		Yii::app()->clientScript->registerScript('auto-fill-time', "
    $(function() {
        var currentDateTime = new Date();
        var hours = currentDateTime.getHours();
        var minutes = currentDateTime.getMinutes();
        // Menambahkan '0' jika jam atau menit kurang dari 10
        hours = (hours < 10) ? '0' + hours : hours;
        minutes = (minutes < 10) ? '0' + minutes : minutes;

        $('#" . CHtml::activeId($model, 'waktu') . "').val(hours + ':' + minutes);
    });
", CClientScript::POS_READY);
		?>

		<?php echo $form->error($model, 'waktu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->