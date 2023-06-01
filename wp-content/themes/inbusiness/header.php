<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="verify-v1" content="sh11lWn/d/ztFPVkm2cR/YsxuiQni0tLiJO9cm+eTIo=" /> 
	<title><?php wp_title(); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php bloginfo('name'); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>

<style type="text/css">
<!--
.style1 {color: #A53512}
-->
</style>
</head>
<body>
<div class="all">
	<div class="box">
<!-- The menu, tabs -->
	  <div class="menu"><a href="<?php echo get_settings('home'); ?>">EasyArticle</a>
	  <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"> RSS </a>
	  <a href="<?php echo get_settings('home'); ?>/?feed=comments-rss2">Comments RSS</a>
	  </div>
<!-- The header -->
		<div class="header"><img alt="" style="float:right; " src="<?php bloginfo('stylesheet_directory'); ?>/images/www.jpg" width="225" height="95" />
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		  
		  <div class="clearfix"></div>
	  </div>