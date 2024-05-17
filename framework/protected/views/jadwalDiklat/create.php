<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklat'=>array('index'),
	'Tambah Jadwal Diklat',
);

$this->menu=array(
	array('label'=>'List Jadwal Diklat', 'url'=>array('index')),
	array('label'=>'Kelola Jadwal Diklat', 'url'=>array('admin')),
);
?>

<h1>Tambah JadwalDiklat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>