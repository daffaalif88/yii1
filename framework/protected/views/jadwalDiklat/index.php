<?php
/* @var $this JadwalDiklatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwal Diklat',
);

$this->menu=array(
	array('label'=>'Tambah JadwalDiklat', 'url'=>array('create')),
	array('label'=>'Kelola JadwalDiklat', 'url'=>array('admin')),
);
?>

<h1>Informasi Jadwal Diklat</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
