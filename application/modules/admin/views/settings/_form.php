<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">
        <?php echo Yii::t('admin','Fields with <span class="required">*</span> are required.'); ?>

    </p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow(
        $model,
        'name',
        array(
            'class'=>'span5',
            'maxlength'=>255,
            'disabled'=>(Yii::app()->controller->action->id) === 'create' ? '' : 'disabled'
        )
    ); ?>

	<?php echo $form->textAreaRow($model,'value',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

    <?php if(Yii::app()->user->checkAccess('ROLE_SUPERADMIN')) : ?>
        <?php echo $form->dropDownListRow($model, 'type', array('site'=>'Site', 'modules'=>'Module')); ?>
    <?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('admin','Create') : Yii::t('admin','Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
