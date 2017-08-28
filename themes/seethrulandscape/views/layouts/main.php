<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo Yii::app()->name ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

	<header>
		<h1><?php echo Yii::app()->name ?></h1>
	</header>
	<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</nav>

<div id="wrapper">
	<div id="content-main">
                <article class="articlecontent">
                    <?php echo $content ?>
                </article>
                <!--
				<article class="articlecontent">
					<header>
						<h2>This is the title of your article</h2>
					</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. <a href="#">Cras enim nibh, sodales ultricies elementum vel</a>, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio. Curabitur in odio augue. Morbi congue auctor interdum. Phasellus sit amet metus justo. Phasellus vitae tellus orci, at elementum ipsum. In in quam eget diam adipiscing condimentum. Maecenas gravida diam vitae nisi convallis vulputate quis sit amet nibh. Nullam ut velit tortor. Curabitur ut elit id nisl volutpat consectetur ac ac lorem. Quisque non elit et elit lacinia lobortis nec a velit. Sed ac nisl sed enim consequat porttitor.</p>
					
						<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sunflower.jpg" alt="sunflower" class="alignleft" />	<p>Pellentesque ut sapien arcu, egestas mollis massa. Fusce lectus leo, fringilla at aliquet sit amet, volutpat non erat. Aenean molestie nibh vitae turpis venenatis vel accumsan nunc tincidunt. Suspendisse id purus vel felis auctor mattis non ac erat. Pellentesque sodales venenatis condimentum. Aliquam sit amet nibh nisi, ut pulvinar est. Sed ullamcorper nisi vel tortor volutpat eleifend. Vestibulum iaculis ullamcorper diam consectetur sagittis. Quisque vitae mauris ut elit semper condimentum varius nec nisl. Nulla tempus porttitor dolor ac eleifend. Proin vitae purus lectus, a hendrerit ipsum. Aliquam mattis lacinia risus in blandit.</p>

				</article>

				<article class="articlecontent">
					<header>
						<h2>Here's another article title</h2>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
					<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/slicedfruit.png" alt="sliced fruit" class="alignright" /><p>Vivamus vitae nulla dolor. Suspendisse eu lacinia justo. Vestibulum a felis ante, non aliquam leo. Aliquam eleifend, est viverra semper luctus, metus purus commodo elit, a elementum nisi lectus vel magna. Praesent faucibus leo sit amet arcu vehicula sed facilisis eros aliquet. Etiam sodales, enim sit amet mollis vestibulum, ipsum sapien accumsan lectus, eget ultricies arcu velit ut diam. Aenean fermentum luctus nulla, eu malesuada urna consequat in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque massa lacus, sodales id facilisis ac, lobortis sed arcu. Donec hendrerit fringilla ligula, ac rutrum nulla bibendum id. Cras sapien ligula, tincidunt eget euismod nec, ultricies eu augue. Nulla vitae velit sollicitudin magna mattis eleifend. Nam enim justo, vulputate vitae pretium ac, rutrum at turpis. Aenean id magna neque. Sed rhoncus aliquet viverra.</p>
				</article>
                -->

		</div>
		
		<aside>
			<section>
				<header>
					<h3>Categories</h3>
				</header>
				<ul>
					<li><a href="#">Blue Skies</a></li>
					<li><a href="#">Rolling Hills</a></li>
					<li><a href="#">Green Grass</a></li>
					<li><a href="#">Wild Flowers</a></li>
					<li><a href="#">Bright Sunshine</a></li>
				</ul>
			</section>
			
			<section>
				<header>
					<h3>Sponsors</h3>
				</header>
					<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/ad125.jpg" alt="ad" />
					<br />
			</section>
			
			<section>
				<header>
					<h3>Connect With Us</h3>
				</header>
				<ul>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Google Buzz</a></li>
				</ul>
			</section>

			<section>
				<header>
					<h3>Recent Articles</h3>
				</header>
					<ul>
						<li><a href="#">How To Keep Your Lawn Green</a></li>
						<li><a href="#">Are Rolling Hills Ideal?</a></li>
					</ul>
			</section>
			
		</aside>

	<footer>
		<br />
		<p>&copy; 2010 <a href="#" title="your site name">yoursite.com</a></p>
	</footer>
</div>
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
