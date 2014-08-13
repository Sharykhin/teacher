
<div class="loginForm">
    <?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle=Yii::app()->name . ' - Login';
    $this->breadcrumbs=array(
        'Sign In',
    );
    ?>
    <h1>Sign In</h1>

    <p>Please fill out the following form with your login credentials:</p>


    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username'); ?>
        <?php echo $form->error($model,'username'); ?>

    </div>

    <div class="">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->error($model,'rememberMe'); ?>
    </div>

    <div class="buttons">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label'=>'Login',
            'type'=>'primary',
            'buttonType'=>'submit'
        )); ?>

    </div>

    <?php $this->endWidget(); ?>


</div>
