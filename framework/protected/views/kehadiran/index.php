<?php
/* @var $this KehadiranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kehadiran',
);

$this->menu=array(
	array('label'=>'Tambah Kehadiran', 'url'=>array('create')),
	array('label'=>'Kelola Kehadiran', 'url'=>array('admin')),
);
?>

<h1>Kehadiran</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
