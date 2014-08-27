<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(

	array('label'=>Yii::t('admin','Create User'),'url'=>array('create')),
	array('label'=>Yii::t('admin','Update User'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('admin','Delete User'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('admin','Manage Users'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('admin','View User') ?>  <?php echo $model->username; ?></h1>
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
		'username',
		'first_name',
		'last_name',
		'age',
		'sex',
		'created',
	),
)); ?>
