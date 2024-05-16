<?php
/* @var $this LaporanDiklatController */
/* @var $model LaporanDiklat */

$this->breadcrumbs=array(
	'Laporan Diklats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LaporanDiklat', 'url'=>array('index')),
	array('label'=>'Create LaporanDiklat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#laporan-diklat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Laporan Diklat</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-outline-dark')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'laporan-diklat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_diklat',
		'laporan',
		'total_kehadiran',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
