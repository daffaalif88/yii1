<?php
/* @var $this LaporanDiklatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Laporan Diklats',
);

$this->menu=array(
	array('label'=>'Create LaporanDiklat', 'url'=>array('create')),
	array('label'=>'Manage LaporanDiklat', 'url'=>array('admin')),
);
?>

<h1>Laporan Diklats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
