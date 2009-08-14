<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>findTwitter</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	<div id="header">
		<h1><?php echo $html->link('findTwitter', array('controller' => 'search', 'action' => 'index')); ?></h1>
	</div>
	<div id="content">
    <?php if ($session->check('Message.flash'))
        {
          $session->flash();
        }
        echo $content_for_layout;
    ?>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
  <p>
    | <?php echo $html->link(__('blog', true), 'http://www.1x1.jp/blog/', array('target' => '_blank')); ?> | <?php echo $html->link(__('Twitter', true), 'http://twitter.com/shin1x1', array('target' => '_blank')); ?> | <?php echo $html->link(__('github', true), 'http://github.com/shin1x1/findTwitter/tree/master', array('target' => '_blank')); ?> |<br />
	  Copyright &copy; 2009 findTwitter. <br />
    Designed by <a href="http://www.freecsstemplates.org"><strong>Free CSS Templates</strong></a>
  </p>
</div>
</body>
</html>
<?php echo $cakeDebug; ?>
