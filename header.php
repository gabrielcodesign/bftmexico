<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|');?></title>
		<meta name="description" content="<?php bloginfo('description');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<?php wp_head(); ?>
		
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$bft = array( 'bft-class', 'my-class' );
		else:
			$bft = array( 'no-bft-class' );
		endif;
		
	?>

<body data-spy="scroll" data-target=".navbar" data-offset="60" <?php body_class( $bft ); ?>>

	<div id="bft-page" class="bft-site">
	<?php get_template_part( 'template-parts/header/movingheader' ); ?>
	