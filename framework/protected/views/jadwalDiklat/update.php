<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JadwalDiklat', 'url'=>array('index')),
	array('label'=>'Create JadwalDiklat', 'url'=>array('create')),
	array('label'=>'View JadwalDiklat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JadwalDiklat', 'url'=>array('admin')),
);
?>

<h1>Update JadwalDiklat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>