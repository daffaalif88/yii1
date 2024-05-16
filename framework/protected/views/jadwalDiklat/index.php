<?php
/* @var $this JadwalDiklatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwal Diklats',
);

$this->menu=array(
	array('label'=>'Create JadwalDiklat', 'url'=>array('create')),
	array('label'=>'Manage JadwalDiklat', 'url'=>array('admin')),
);
?>

<h1>Informasi Jadwal Diklat</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
