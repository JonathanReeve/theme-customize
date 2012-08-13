<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo settings('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!--Stylesheets-->
    		<?php
      			elementaire_queue_css('reset.css');
      			elementaire_queue_css('screen.css');
			display_css();
    		?>

<!-- JavaScripts -->
<?php echo js('prototype'); ?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

<!-- Custom Styles --> 
<style type="text/css"> 
	body { 
		background-color: <?php echo get_theme_option('Background Color'); ?>;
	} 
	#wrap { 
		background-color: <?php echo get_theme_option('Inner Background Color'); ?>;
	} 
	h1 a, h1 a:visited { 
		color: <?php echo get_theme_option('Heading Color'); ?>;
	}
	p { 
		color: <?php echo get_theme_option('Body Text Color'); ?>;
	} 
	

</style>

</head>
<body<?php echo $bodyclass ? ' class="'.$bodyclass.'"' : ''; ?>  id="<?php echo html_escape($exhibit->theme); ?>">

<div id="wrap">
	<h5><a href="<?php echo html_escape(uri('exhibits')); ?>">Back to Exhibits</a></h5>
	<h1><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h1>

    <div id="exhibit-nav">
    	<?php echo exhibit_builder_section_nav();?>
    </div>

    <div id="content">
    	<?php echo exhibit_builder_page_nav(); ?>
    <?php echo flash(); ?>				

		
