<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Peserta'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Tambah Peserta', 'url'=>array('create')),
	array('label'=>'Update Peserta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Peserta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Peserta', 'url'=>array('admin')),
);
?>

<h1>View Peserta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'tanggal_lahir',
		'alamat',
		'no_telp',
		'email',
		'tanggal_pendaftaran',
		'status_keanggotaan',
		'keterangan',
	),
)); ?>
