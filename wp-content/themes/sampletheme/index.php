<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="post_loop">
	
<?php while (have_posts()) : the_post(); ?>

	<h2><a href="<?php the_permalink(); ?>"><?php  the_title();	?></a></h2>
	<p>By:<?php the_author(); ?><?php the_category(); ?> </p>
	<p><?php  the_content();  ?></p>

</div>
<?php endwhile ?>
<?php get_footer(); ?>