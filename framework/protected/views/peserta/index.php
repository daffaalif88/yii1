<?php
/* @var $this PesertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peserta',
);

$this->menu=array(
	array('label'=>'Tambah Peserta', 'url'=>array('create')),
	array('label'=>'Kelola Peserta', 'url'=>array('admin')),
);
?>


<h1>Peserta</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>