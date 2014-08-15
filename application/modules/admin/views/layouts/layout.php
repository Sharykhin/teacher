<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <?php echo Yii::app()->bootstrap->init(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/web/css/admin.css" />
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
                    array('label'=>'Dashboard', 'url'=>'/admin/dashboard', 'active'=>true),
                    array('label'=>'Management', 'url'=>'#', 'items'=>array(
                        array('label'=>'Users', 'url'=>'/admin/users/list'),
                        array('label'=>'Another action', 'url'=>'#'),
                        array('label'=>'Something else here', 'url'=>'#'),
                        '---',
                        array('label'=>'NAV HEADER'),
                        array('label'=>'Separated link', 'url'=>'#'),
                        array('label'=>'One more separated link', 'url'=>'#'),
                    )),
                ),
            ),
            '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'htmlOptions'=>array('class'=>'pull-right'),
                'items'=>array(
                    array('label'=>'Link', 'url'=>'#'),
                    array('label'=>Yii::app()->user->_username, 'url'=>'#', 'items'=>array(
                        array('label'=>'Action', 'url'=>'#'),
                        array('label'=>'Another action', 'url'=>'#'),
                        array('label'=>'Something else here', 'url'=>'#'),
                        '---',
                        array('label'=>Yii::t('app','logout'), 'url'=>'/logout'),
                    )),
                ),
            ),
        ),
    )); ?>
    <?php endif; ?>
        <?php echo $content; ?>

</div>
</body>
</html>
