<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */

$this->breadcrumbs=array(
	'Laporan Diklat'=>array('index'),
	'Tambah Laporan Diklat',
);

$this->menu=array(
	array('label'=>'List Laporan Diklat', 'url'=>array('index')),
	array('label'=>'Kelola Laporan Diklat', 'url'=>array('admin')),
);
?>

<h1>Tambah LaporanDiklat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>