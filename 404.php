<?php get_header(); ?>
	<div id="content">
		<h2 class="center">Error 404 - Not Found</h2>

<style type="text/css">
  #goog-wm { }
  #goog-wm h3.closest-match { }
  #goog-wm h3.closest-match a { }
  #goog-wm h3.other-things { }
  #goog-wm ul li { }
  #goog-wm li.search-goog { display: block; }
</style>
<script type="text/javascript">
  var GOOG_FIXURL_LANG = 'en';
<?php
global $blog_id;
$blog_details = get_blog_details($blog_id);
?>
  var GOOG_FIXURL_SITE = 'http://<?php echo $blog_details->domain; ?>/';
</script>
<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>

<?php include('myfooter.php'); ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>