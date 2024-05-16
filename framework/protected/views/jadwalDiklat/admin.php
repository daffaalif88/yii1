<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JadwalDiklat', 'url'=>array('index')),
	array('label'=>'Create JadwalDiklat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jadwal-diklat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jadwal Diklat</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-outline-dark')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jadwal-diklat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama_diklat',
		'tanggal_mulai',
		'tangga_selesai',
		'jam_mulai',
		'jam_selesai',
		'tempat',
		'instruktur',
		'keterangan',
		'kategori',
		'kuota_peserta',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
