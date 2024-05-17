<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */

$this->breadcrumbs=array(
	'Laporan Diklat'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Laporan Diklat',
);

$this->menu=array(
	array('label'=>'List Laporan Diklat', 'url'=>array('index')),
	array('label'=>'Tambah Laporan Diklat', 'url'=>array('create')),
	array('label'=>'Lihat Laporan Diklat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Kelola Laporan Diklat', 'url'=>array('admin')),
);
?>

<h1>Update LaporanDiklat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>