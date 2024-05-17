<?php
/* @var $this JadwalDiklatController */
/* @var $model JadwalDiklat */

$this->breadcrumbs=array(
	'Jadwal Diklat'=>array('index'),
	'Keloa Jadwal Diklat',
);

$this->menu=array(
	array('label'=>'List Jadwal Diklat', 'url'=>array('index')),
	array('label'=>'Tambah Jadwal Diklat', 'url'=>array('create')),
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

<h1>Kelola Jadwal Diklat</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-outline-dark')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="container">


</div>

<!-- <div class="table-responsive"> -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'jadwal-diklat-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    // 'cssFile' => false, // Nonaktifkan CSS default
    'itemsCssClass' => 'table table-striped table-bordered', // Tambahkan kelas Bootstrap
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
<!-- </div> -->