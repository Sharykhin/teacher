<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <?php echo Yii::app()->bootstrap->init(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/web/css/admin.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/web/plugins/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="container">
    <?php if(Yii::app()->user->checkAccess('ROLE_ADMIN') && !Yii::app()->user->isGuest) : ?>
    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
        'type'=>'inverse', // null or 'inverse'
        'brand'=>Yii::t('app','Teacher'),
        'brandUrl'=>'/',
        'collapse'=>true, // requires bootstrap-responsive.css
        'items'=>array(
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'items'=>array(
                    array('label'=>Yii::t('admin','Dashboard'), 'url'=>'/admin/dashboard', 'active'=>true),
                    array('label'=>Yii::t('admin','Management'), 'url'=>'#', 'items'=>array(
                        array('label'=>Yii::t('admin','Users'), 'url'=>'/admin/users'),
                        array('label'=>Yii::t('admin','Content'), 'url'=>'/admin/content'),
                        '---',
                        array('label'=>Yii::t('admin','Settings')),
                        array('label'=>Yii::t('admin','Site'), 'url'=>'/admin/settings/admin?f=site'),
                        array('label'=>Yii::t('admin','Modules'), 'url'=>'/admin/settings/admin?f=modules')


                    )),
                ),
            ),
            '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'htmlOptions'=>array('class'=>'pull-right'),
                'items'=>array(
                    array('label'=>Yii::app()->user->username, 'url'=>'#', 'items'=>array(
                        array('label'=>Yii::t('admin','Logout'), 'url'=>'/logout'),
                    )),
                ),
            ),
        ),
    )); ?>
    <?php endif; ?>
    <div style="height: 40px;"></div>
        <?php echo $content; ?>

</div>
</body>
</html>
