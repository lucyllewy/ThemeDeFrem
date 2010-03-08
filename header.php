<?php echo '<?xml version="1.0" ?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta name="verify-v1" content="GH5JuAt3feuwAv3oDQcFJ8MbuCFL9DeioBh3FjH/9b8=" />
<meta name="google-site-verification" content="<?php get_option('google_webmaster_tools_id'); ?>" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php print $title; ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=4" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/collapsiblesidebar.js"></script>

</head>
<body>

<div id="pagewrapper">
<div id="page">

<?php $home = get_option('home'); ?>
<div id="headimg">
	<h1><a href="<?php echo $home; ?>"><?php bloginfo('name'); ?></a></h1>
	<div id="desc"><?php bloginfo('description'); ?></div>
</div>
