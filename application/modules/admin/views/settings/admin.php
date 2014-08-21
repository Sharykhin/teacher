<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Settings','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('settings-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Settings</h1>


<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'Action', 'items'=>$this->menu
            ),
        ),
    )); ?>
</div>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'settings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'value',
        'type',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
