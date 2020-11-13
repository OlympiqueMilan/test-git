<?php
/**
*Template Name: Rose
*Description: Page Rose
*/

get header(); ?>

  <section style="background-color:pink;">
  
  <p>Milou</p>
  <!--The loop (la boucle)-->
  <?php if (have_posts()):
    while (have_posts()):
	the_post();?>
	<article>
	<h2><?php the_title();?></h2>
	<div><?php the_content();?></div>
	
	</article>
	<?php endwhile; else : ?> <p> Déso </p>
	<?php endif;?>
	</section>
	<?php get_footer(); ?>
  