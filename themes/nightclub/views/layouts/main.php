<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
</head>
<body>
<div id="container">
  <div id="header">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
  </div>
  <div id="content">
        <?php echo $content; ?>
  </div>
  <!--
  <div id="welcome">
    <h3>Welcome</h3>
    <p>Don't forgot to check free website templates every day, because we add at least one free website template daily.</p>
    <p>This is a template designed by free website templates for you for free you can replace all the text by your own 
      text. This is just a place holder so you can see how the site would look like.</p>
    <p>You can remove any link to our websites from this template you're  free to use the template without linking 
      back to us.</p>
    <p>If you're having problems editing the template please don't hesitate to ask for help on the forum.</p>
    <br />
    <br />
  </div>
  -->
  <div id="news">
    <h3>Latest News</h3>
    <div class="newsitem"> <a href="http://www.templatebeauty.com"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/photo1.jpg" alt="Photo 1" border="0" /></a> <span>10.11.2006</span>
      <p>If you're looking for beautiful and professionally made templates you can find them at Template Beauty.com.</p>
    </div>
    <div class="newsitem"> <a href="http://www.justwebtemplates.com"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/photo2.jpg" alt="Photo 2" border="0" /></a> <span>10.11.2006</span>
      <p>Even more websites all about website templates on Just Web Templates.</p>
    </div>
    <div class="clear"></div>
  </div>
  <div id="dj"> <a href="http://www.free-css.com/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/bestdjs.jpg" alt="Best DJ's" border="0" /></a> <a href="http://www.free-css.com/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/specialoffer.jpg" alt="special offer" border="0" /></a>
    <div class="clear"></div>
  </div>
  <div id="footer"> &copy; <?php echo CHtml::encode( Yii::app()->name ) . ' ' . date( 'Y', time() ); ?>.All rights reserved. | designed by <a href="http://www.freewebsitetemplates.com">free website templates</a></div>
</div>
</body>
</html>
