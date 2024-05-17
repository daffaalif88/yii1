<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklat'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Jadwal Diklat',
);

$this->menu=array(
	array('label'=>'List Jadwal Diklat', 'url'=>array('index')),
	array('label'=>'Tambah Jadwal Diklat', 'url'=>array('create')),
	array('label'=>'Lihat Jadwal Diklat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Kelola Jadwal Diklat', 'url'=>array('admin')),
);
?>

<h1>Update JadwalDiklat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>