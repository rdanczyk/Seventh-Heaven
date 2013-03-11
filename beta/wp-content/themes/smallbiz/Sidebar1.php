<?php
/*
Template Name: Optional Sidebar-1
*/
if (is_front_page() && (get_option('smallbiz_mobile-layout-enabled') && $GLOBALS["smartphone"])){
    include("page.php");
} else { 
?>
<?php get_header(); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
if(isset($real_id)){
  $recent = new WP_Query("page_id=$real_id"); while($recent->have_posts()) : $recent->the_post();
  $pageClass = preg_replace("/[^a-z\d]/i", "", strtolower($recent->post->post_title));
  include("page_while.php"); 
  endwhile; 
} else {
?>

<?php if(!is_page('home')) :?><h2 class="entry-title"><?php the_title(); ?></h2><?php endif; ?>

<div class="entry">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
</div>
<?php }?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif;  ?>
				
	
<?php include(TEMPLATEPATH."/right-sidebar-1.php");?>
<?php get_footer(); ?>
<?php } ?>