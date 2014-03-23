<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>

<div id="header"> 
<h1><?php echo metadata('exhibit', 'title'); ?></h1> 
</div> 

<nav id="exhibit-pages">
    <?php echo elementaire_exhibit_builder_page_nav(); ?>
</nav>

<h1><span class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></span></h1>

<nav id="exhibit-child-pages">
    <?php // echo exhibit_builder_child_page_nav(); ?>
</nav> 

<div role="main">
<?php 
if (elementaire_exhibit_page_is_empty()) {
	echo "This exhibit page is empty. Please choose a page above."; 
} else { 
	exhibit_builder_render_exhibit_page(); 
} 
?> 
</div>

<div id="exhibit-page-navigation">
    <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
    <div id="exhibit-nav-prev">
    <?php echo $prevLink; ?>
    </div>
    <?php endif; ?>
    <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
    <div id="exhibit-nav-next">
    <?php echo $nextLink; ?>
    </div>
    <?php endif; ?>
    <div id="exhibit-nav-up">
    <?php echo exhibit_builder_page_trail(); ?>
    </div>
</div>

<?php echo foot(); ?>
