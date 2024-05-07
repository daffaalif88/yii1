<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JadwalDiklat', 'url'=>array('index')),
	array('label'=>'Manage JadwalDiklat', 'url'=>array('admin')),
);
?>

<h1>Create JadwalDiklat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>