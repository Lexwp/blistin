<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title><?php if(isset($title)): ?><?php echo $title; ?><?php else: ?><?php echo $this->data['title']; ?><?php endif ?></title>
  	<meta name="description" content="">
  	<meta name="viewport" content="width=device-width">
	<?php echo link_tag('assets/css/style.css'); ?>
	<?php echo link_tag('assets/js/libs/fancybox/jquery.fancybox-1.3.4.css'); ?>
	<script src="<?php echo base_url(); ?>assets/js/libs/modernizr-2.5.0.min.js"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-31638531-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>
	HEADER

	<?php $this->load->view($view); ?>
	FOOTER
  	<!-- JavaScript at the bottom for fast page loading -->
  	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  	<!-- scripts concatenated and minified via build script -->
  	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/libs/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/libs/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
 	<!-- end scripts -->
</body>
</html>