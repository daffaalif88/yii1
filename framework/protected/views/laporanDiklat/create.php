<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */

$this->breadcrumbs=array(
	'Laporan Diklats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LaporanDiklat', 'url'=>array('index')),
	array('label'=>'Manage LaporanDiklat', 'url'=>array('admin')),
);
?>

<h1>Create LaporanDiklat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>