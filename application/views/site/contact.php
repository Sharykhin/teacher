<div class="container">
    <div class="whitebox">
        <h1><?php echo Yii::t('app','Contacts page'); ?></h1>
        <?php if(Yii::app()->user->hasFlash('success')):?>
            <span class="success_notifier">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </span>
        <?php endif; ?>
        <div id="respond">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'contact-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>
            <p>
                <?php echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username'); ?>
                <?php echo $form->error($model,'username'); ?>
            </p>

            <p>
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email'); ?>
                <?php echo $form->error($model,'email'); ?>
            </p>

            <p>
                <?php echo $form->labelEx($model,'text'); ?>
                <?php echo $form->textArea($model,'text',array('class'=>'textarea')); ?>
                <?php echo $form->error($model,'text'); ?>
            </p>


            <?php if(CCaptcha::checkRequirements() && Yii::app()->user->isGuest) : ?>
                <p>
                    <?php echo CHtml::activeLabelEx($model, 'verifyCode'); ?>
                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo CHtml::activeTextField($model, 'verifyCode'); ?>
                    <?php echo $form->error($model,'verifyCode'); ?>

                </p>
            <?php endif; ?>


            <p>
                <input name="submit" type="submit" id="submit" value="Submit Form" />
                &nbsp;
                <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
            </p>

            <?php $this->endWidget(); ?>

        </div>
    </div>
</div>