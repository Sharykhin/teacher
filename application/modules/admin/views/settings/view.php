<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Create Settings','url'=>array('create')),
	array('label'=>'Update Settings','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Settings','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Settings','url'=>array('admin')),
);
?>

<h1>View Settings #<?php echo $model->id; ?></h1>
<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'Action', 'items'=>$this->menu
            ),
        ),
    )); ?>
</div>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'value',
	),
)); ?>
