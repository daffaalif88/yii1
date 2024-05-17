<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */

$this->breadcrumbs=array(
	'Laporan Diklat'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LaporanDiklat', 'url'=>array('index')),
	array('label'=>'Create LaporanDiklat', 'url'=>array('create')),
	array('label'=>'Update LaporanDiklat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LaporanDiklat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LaporanDiklat', 'url'=>array('admin')),
);
?>

<h1>View LaporanDiklat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_diklat',
		'laporan',
		'total_kehadiran',
	),
)); ?>
