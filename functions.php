<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));

define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '%s/images/default_header.jpg');
define('HEADER_IMAGE_WIDTH', 800);
define('HEADER_IMAGE_HEIGHT', 200);

add_custom_image_header('TDF_header_style', 'TDF_header_style');
function TDF_header_style() {
?>

<style type="text/css">
#headimg{
	vertical-align: middle;
	margin: auto 0;
	font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	line-height:1.5;
	background: url(<?php (get_header_image()) ? header_image() : printf(HEADER_IMAGE, get_template_directory_uri()); ?>) no-repeat;
	background-repeat: no-repeat;
	height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	text-align:left;
	width:<?php echo HEADER_IMAGE_WIDTH; ?>px;
	padding: 0;
	height: 200px;
}

#headimg h1{
	font-family: Sylfaen, Georgia, "Times New Roman", Times, serif;
	font-weight:normal;
	letter-spacing: -1px;
	margin: 0 0 0 45px;
	padding-top: 45px;
	font-size:24pt;
	text-align: left;
}

#headimg #desc{
	<?php if(get_header_textcolor() != 'blank') { ?>color:#<?php header_textcolor() ?>;<?php } ?>
	font-size:12pt;
	margin: -0.5em 0 0 55px;
}

<?php if ( 'blank' == get_header_textcolor() ) { ?>
#headimg h1, #headimg #desc {
	display: none;
}
<?php } ?>
</style>

<?php
} //END TDF_header_style()
