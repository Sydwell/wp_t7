<!-- This is a secondary template because of the Template Name php comment. -->
<!-- Creating a new page in the admin area, find "Page Attributes" under "Template" select this template "Stats Page". -->
<!-- Because this is a secondary template, no index.php, page.php, or page-< slug >.php will be used. -->

<?php
/*
Template Name: Stats Page
*/
?>

<!-- You have full control over what header etc you want to display or not -->
<?php the_title(); ?>
<?php the_excerpt(); ?> 
<?php the_permalink(); ?>
<?php get_calendar(); ?>


<?php the_time('d M y'); ?>
<!-- All POST defined in our will be listed here -->    
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <!-- <?php the_excerpt(); ?>  why don't see the whole post, when clicking the tag -->
   <?php the_content(); ?> 
</div>
<?php endwhile; ?>
<?php endif; ?>
 
