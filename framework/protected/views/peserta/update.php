<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Peserta'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Peserta',
);

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Tambah Peserta', 'url'=>array('create')),
	array('label'=>'Lihat Peserta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Kelola Peserta', 'url'=>array('admin')),
);
?>

<h1>Update Peserta <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>