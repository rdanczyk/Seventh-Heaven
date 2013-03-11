﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/splashtastic.css" media="screen" title="style (screen)" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body><div id="wrap">


<div id="header">

<div id="title">
<h1><?php bloginfo('name'); ?></h1><br />
<h2><?php bloginfo('description'); ?></h2><br />
</div>

</div><br />


<div id="bar">

<img class="frontphoto" src="<?php bloginfo('template_directory'); ?>/images/splash.jpg" width="326" height="300" alt="" />

<div id="menu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="#">HOME<br /><small>A short preview or summary of the page goes here.</small></a></li>
<li><a href="subpage1.html">SUBPAGE<br /><small>Click here to see what a subpage looks like.</small></a></li>
<li><a href="#">LOREM<br /><small>Ipsum dolor sit amet</small></a></li>
<li><a href="#">IPSUM<br /><small>Consectetuer adipiscing elit. Aliquam imperdiet, tortor vel dapibus</small></a></li>
</ul>
</div>

<div id="news">
<h1>Welcome</h1>
This design features a splash-like front page with a big menu to direct your visitors right to the meat of your site. To see what a subpage would look like, click <a href="subpage1.html">here</a>.
<h2>News or Links</h2>
Aliquam imperdiet, tortor vel dapibus volutpat, orci neque nonummy<br /> 
<a href="#" class="links">mauris, et</a>
<a href="#" class="links">convallis orci </a>
<a href="#" class="links">massa id lectus. </a>
<a href="#" class="links">Vivamus magna.   </a>
</div>

</div>


</div></body>

</html>
