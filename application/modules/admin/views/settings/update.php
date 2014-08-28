<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('admin','Create Settings'),'url'=>array('create')),
	array('label'=>Yii::t('admin','View Settings'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('admin','Manage Settings'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('admin','Update Settings'); ?> <?php echo $model->name; ?></h1>
    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'buttons'=>array(
                array('label'=>Yii::t('admin','Action'), 'items'=>$this->menu
                ),
            ),
        )); ?>
    </div>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>