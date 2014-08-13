<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Realistic</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/web/css/layout.css" type="text/css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/web/js/jquery-1.4.1.min.js"></script>
</head>
<body id="top">
<div class="wrapper">
    <div id="header">
        <h1><a href="index.html">Realistic</a></h1>
        <p>Ideas that help grow your business</p>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="topbar">
        <div class="fl_left">Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com</div>
        <div class="fl_right">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
                    <input type="submit" name="go" id="go" value="Search" />
                </fieldset>
            </form>
        </div>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="topnav">
        <ul class="nav">
            <li class="active"><a href="index.html">Homepage</a></li>
            <li><a href="style-demo.html">Style Demo</a></li>
            <li><a href="full-width.html">Full Width</a></li>
            <li><a href="#">DropDown</a>
                <ul>
                    <li><a href="#">menu item</a></li>
                    <li><a href="#">menu item</a>
                        <ul>
                            <li><a href="#">menu item</a></li>
                            <li><a href="#">menu item</a>
                                <ul>
                                    <li><a href="#">menu item</a></li>
                                    <li><a href="#">menu item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">menu item</a>
                        <ul>
                            <li><a href="#">menu item</a></li>
                            <li><a href="#">menu item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">menu item</a></li>
                </ul>
            </li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li class="last"><a href="gallery.html">Gallery</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div class="container">

        <?php echo $content; ?>


    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="footer">        <div class="latestgallery">
            <h2>Latest Projects</h2>
            <ul>
                <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
                <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
                <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
                <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
                <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
                <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
                <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
                <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Latest From The Blog</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <div class="footbox last">
            <h2>Keep In Touch</h2>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li><a href="#">Praesent et eros</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Suspendisse in neque</a></li>
                <li class="last"><a href="#">Praesent et eros</a></li>
            </ul>
        </div>
        <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
    <div id="copyright">
        <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <br class="clear" />
    </div>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/web/scripts/superfish.js"></script>
<script type="text/javascript">
    jQuery(function () {
        jQuery('ul.nav').superfish();
    });
</script>
</body>
</html>
