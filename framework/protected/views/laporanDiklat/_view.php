<?php
/* @var $this LaporanDiklatController */
/* @var $data LaporanDiklat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_diklat')); ?>:</b>
	<?php echo CHtml::encode($data->id_diklat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laporan')); ?>:</b>
	<?php echo CHtml::encode($data->laporan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_kehadiran')); ?>:</b>
	<?php echo CHtml::encode($data->total_kehadiran); ?>
	<br />


</div>