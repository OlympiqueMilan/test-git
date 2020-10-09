<?php

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<?php wp_head(); ?>
	<title> <?php bloginfo('name');?> - <?php bloginfo('description');?> </title>
	<aside>
   <?php get_sidebar();?>
   </aside>
   <nav id="menuprincipal">
      <?php wp_page_menu('show_home=1');?>
   </nav>
</head>


<body>

    <header>
	
        <!-- en-tête -->
            <h1>Page design</h1>
        <nav>
        <!-- menu principal -->
        </nav>
     </header>      
	