<?php
$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('admin','Create Content'),'url'=>array('create')),
	array('label'=>Yii::t('admin','Update Content'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('admin','Delete Content'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('admin','Manage Contents'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('admin','View Content'); ?> <?php echo $model->title; ?></h1>

<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>Yii::t('admin','Action'), 'items'=>$this->menu
            ),
        ),
    )); ?>
</div>

<table class="table striped bordered">

        <tr>
            <td><?php echo Yii::t('admin','Link'); ?></td>
            <td><?php echo $model->link; ?></td>
        </tr>
    <tr>
        <td>
            <?php echo Yii::t('admin','Title'); ?>
        </td>
        <td><?php echo $model->title; ?></td>
    </tr>
    <tr>
        <td>
           <?php echo Yii::t('admin','Content'); ?>
        </td>
        <td><?php echo $model->content; ?></td>
    </tr>
    <tr>
        <td>
            <?php echo Yii::t('admin','Created') ?>
        </td>
        <td><?php echo $model->created; ?></td>
    </tr>
    <tr>
        <td>
           <?php echo Yii::t('admin','On Main Page'); ?>
        </td>
        <td>
            <?php if($model->on_main_page) { ?>
                <?php echo Yii::t('admin','YES'); ?>
            <?php } else { ?>
                <?php echo Yii::t('admin','NO'); ?>
            <?php } ?>
    </tr>

</table>

