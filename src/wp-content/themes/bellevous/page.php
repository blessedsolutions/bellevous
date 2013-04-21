<?php get_header(); ?>

<div id="main">

<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'page' ); ?>
	<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>

<?php $pageObj = get_page( $page_id ); ?>

<?php 
if ($pageObj->ID !=2) {
?>
<h1><?php the_title(); ?></h1>
<?php 
}
?>
<?php the_content(); ?>


</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>