<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */

$this->breadcrumbs=array(
	'Laporan Diklats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LaporanDiklat', 'url'=>array('index')),
	array('label'=>'Create LaporanDiklat', 'url'=>array('create')),
	array('label'=>'View LaporanDiklat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LaporanDiklat', 'url'=>array('admin')),
);
?>

<h1>Update LaporanDiklat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>