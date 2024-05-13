<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_diklat'); ?>
		<?php echo $form->textField($model,'id_diklat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laporan'); ?>
		<?php echo $form->textArea($model,'laporan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_kehadiran'); ?>
		<?php echo $form->textField($model,'total_kehadiran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->