<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Settings','url'=>array('create')),
	array('label'=>'View Settings','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Settings','url'=>array('admin')),
);
?>

<h1>Update Settings <?php echo $model->id; ?></h1>
    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'buttons'=>array(
                array('label'=>'Action', 'items'=>$this->menu
                ),
            ),
        )); ?>
    </div>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>