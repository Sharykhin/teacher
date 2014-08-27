<?php
$this->breadcrumbs=array(
	'Contents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Content','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('content-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>Yii::t('admin','Action'), 'items'=>$this->menu
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
	'id'=>'content-grid',
    'type'=>array('striped','bordered'),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'link',
		'title',
        array(
          'name'=>'content',
           'value'=>function($item) {
                   return $item->content;
               },
           'type' => 'raw',
        ),
		'created',
		'modified',
        array(
            'name' => 'on_main_page',
            'value' =>function($item) use ($model) {
                    return ($item->on_main_page) ? 'YES' : 'NO';
                },
        ),

		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
