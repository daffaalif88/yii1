<?php
/* @var $this KehadiranController */
/* @var $model Kehadiran */

$this->breadcrumbs=array(
	'Kehadiran'=>array('index'),
	'Tambah Kehadiran',
);

$this->menu=array(
	array('label'=>'List Kehadiran', 'url'=>array('index')),
	array('label'=>'Kelola Kehadiran', 'url'=>array('admin')),
);
?>

<h1>Tambah Kehadiran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>