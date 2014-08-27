<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('admin','Manage Users'),'url'=>array('admin')),
);
?>

<h1>
    <?php echo Yii::t('admin','Create User') ?></h1>
    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'buttons'=>array(
                array('label'=>Yii::t('admin','Action'), 'items'=>$this->menu
                ),
            ),
        )); ?>
    </div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>