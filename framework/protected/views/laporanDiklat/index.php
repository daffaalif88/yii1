<?php
/* @var $this LaporanDiklatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Laporan Diklat',
);

$this->menu=array(
	array('label'=>'Tambah Laporan Diklat', 'url'=>array('create')),
	array('label'=>'Kelola Laporan Diklat', 'url'=>array('admin')),
);
?>

<h1>Laporan Diklat</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
