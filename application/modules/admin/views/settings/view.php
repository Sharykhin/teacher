<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('admin','Create Settings'),'url'=>array('create')),
	array('label'=>Yii::t('admin','Update Settings'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('admin','Delete Settings'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('admin','Manage Settings'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('admin','View Settings'); ?> <?php echo $model->name; ?></h1>
<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>Yii::t('admin','Action'), 'items'=>$this->menu
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
