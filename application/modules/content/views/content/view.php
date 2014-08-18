<?php
$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Content','url'=>array('index')),
	array('label'=>'Create Content','url'=>array('create')),
	array('label'=>'Update Content','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Content','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Content','url'=>array('admin')),
);
?>

<h1>View Content #<?php echo $model->id; ?></h1>

<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'Action', 'items'=>$this->menu
            ),
        ),
    )); ?>
</div>

<table class="table striped bordered">

        <tr>
            <td>Link</td>
            <td><?php echo $model->link; ?></td>
        </tr>
    <tr>
        <td>Title</td>
        <td><?php echo $model->title; ?></td>
    </tr>
    <tr>
        <td>Content</td>
        <td><?php echo $model->content; ?></td>
    </tr>
    <tr>
        <td>Created</td>
        <td><?php echo $model->created; ?></td>
    </tr>
    <tr>
        <td>On Main Page</td>
        <td><?php echo $model->on_main_page; ?></td>
    </tr>

</table>

