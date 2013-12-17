<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php 
  if(is_home()){
     bloginfo('name');
?> |
	<?php bloginfo('description');
  }else{
     wp_title( '|', true, 'right' ); bloginfo('name');
  }
?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /><link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/latest.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/menu.js" type="text/javascript"></script>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<?php 
  if(is_single()){
?>
<meta name="keywords" content="<?php 
  $tags = get_the_tags();
  foreach($tags as $tag) {
    $newtag.=$tag->name.",";}
	$newtag=rtrim($newtag, ",");
   echo $newtag;
?>"/>
<meta name="description" content="<?php the_excerpt()?>"/>
<?php }else if (is_home()){?>
<meta name="keywords" content="<?php bloginfo('name'); ?>"/>
<meta name="description" content="<?php bloginfo('description'); ?>"/>
<?php }?>
<meta name="author" content="waitingfy.com" />
<meta name="Copyright" content="waitingfy.com" />
</head>
<body>
<div id="page">

<div id="top"></div>
<div id="header">
	<div id="headerimg">
		<?php if (is_front_page()) { ?> 
     <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
 
<?php } else { ?> 
      <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
 
<?php } ?>		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>
	<div class="clear whitespace"> </div>

<?php
function custom_excerpt_length( $length ) {
	return 400;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>
