<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<h3><?php the_time('F jS, Y') ?></h3>
      <?php the_content('Read the rest of this entry &raquo;'); ?>

<p>Filed under: <?php the_category(', ') ?></p>

<?php comments_template(); ?>
<?php endwhile; else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

<?php get_footer(); ?>