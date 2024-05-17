<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Peserta'=>array('index'),
	'Tambah Peserta',
);

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Kelola Peserta', 'url'=>array('admin')),
);
?>

<h1>Create Peserta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>