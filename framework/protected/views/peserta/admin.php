<?php
/* @var $this PesertaController */
/* @var $model Peserta */

$this->breadcrumbs=array(
	'Peserta'=>array('index'),
	'Kelola Peserta',
);

$this->menu=array(
	array('label'=>'List Peserta', 'url'=>array('index')),
	array('label'=>'Tambah Peserta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#peserta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Peserta</h1>


<?php echo CHtml::link('Pencarian Lanjutan','#',array('class'=>'search-button btn btn-outline-dark')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'peserta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-striped table-bordered', 
	'columns'=>array(
		'id',
		'nama',
		'tanggal_lahir',
		'alamat',
		'no_telp',
		'email',
		'tanggal_pendaftaran',
		'status_keanggotaan',
		'keterangan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>