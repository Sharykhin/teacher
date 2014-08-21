<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	'Create',
);

$this->menu=array(

	array('label'=>'Manage Settings','url'=>array('admin')),
);
?>

<h1>Create Settings</h1>
    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'buttons'=>array(
                array('label'=>'Action', 'items'=>$this->menu
                ),
            ),
        )); ?>
    </div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>