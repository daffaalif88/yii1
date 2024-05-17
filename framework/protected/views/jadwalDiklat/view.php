<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklat'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Jadwal Diklat', 'url'=>array('index')),
	array('label'=>'Tambah Jadwal Diklat', 'url'=>array('create')),
	array('label'=>'Update Jadwal Diklat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Jadwal Diklat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Jadwal Diklat', 'url'=>array('admin')),
);
?>

<h1>Lihat Jadwal Diklat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_diklat',
		'tanggal_mulai',
		'tangga_selesai',
		'jam_mulai',
		'jam_selesai',
		'tempat',
		'instruktur',
		'keterangan',
		'kategori',
		'kuota_peserta',
		'status',
	),
)); ?>
