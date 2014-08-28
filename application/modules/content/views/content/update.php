<?php
$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('admin','Create Content'),'url'=>array('create')),
	array('label'=>Yii::t('admin','View Content'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('admin','Manage Contents'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('admin','Update Content'); ?> <?php echo $model->title; ?></h1>
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