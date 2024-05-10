<?php
/* @var $this JadwalDiklatController */
/* @var $data JadwalDiklat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_diklat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_diklat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tangga_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tangga_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jam_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->jam_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jam_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->jam_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat')); ?>:</b>
	<?php echo CHtml::encode($data->tempat); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('instruktur')); ?>:</b>
	<?php echo CHtml::encode($data->instruktur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kuota_peserta')); ?>:</b>
	<?php echo CHtml::encode($data->kuota_peserta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

</div>