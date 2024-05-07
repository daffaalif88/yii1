<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JadwalDiklat', 'url'=>array('index')),
	array('label'=>'Create JadwalDiklat', 'url'=>array('create')),
	array('label'=>'Update JadwalDiklat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JadwalDiklat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JadwalDiklat', 'url'=>array('admin')),
);
?>

<h1>View JadwalDiklat #<?php echo $model->id; ?></h1>

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
