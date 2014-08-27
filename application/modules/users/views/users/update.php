<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('admin','Create User'),'url'=>array('create')),
	array('label'=>Yii::t('admin','View User'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('admin','Manage Users'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('admin','Update User') ?> <?php echo $model->username; ?></h1>
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