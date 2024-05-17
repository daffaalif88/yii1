<?php
/* @var $this KehadiranController */
/* @var $model Kehadiran */

$this->breadcrumbs=array(
	'Kehadiran'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Kehadiran',
);

$this->menu=array(
	array('label'=>'List Kehadiran', 'url'=>array('index')),
	array('label'=>'Tambah Kehadiran', 'url'=>array('create')),
	array('label'=>'Lihat Kehadiran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Kelola Kehadiran', 'url'=>array('admin')),
);
?>

<h1>Update Kehadiran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>