
<?php
 get_header() ;
  ?>
<section>


<p class="bienvenue"> Bonjour </p>
</section>



<?php get_footer();?>
<!-- the loop (la boucle)-->
<!—The Loop (la boucle) -->
<?php if( have_posts() ) :    
  while ( have_posts() ) :      
  the_post(); ?>
    <article>    
    <h2>
    <?php the_title(); ?>
    </h2>    
    <div>
    <?php the_content(); ?>
    </div>
    </article>
    <?php endwhile; endif; ?>

