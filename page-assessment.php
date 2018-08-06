/**
 page-< slug >.php - will be used to display the WordPress PAGE unless "caught by" a custom template. 
*/
<?php get_header(); ?>

<!--  Test Bootstrap Styling: Needs to be a in container class  -->
<!-- <div class="jumbotron">
The Content Lead: Call to Action 
</div> -->

<!-- All POST defined in our will be listed here --> 
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <!-- <?php the_excerpt(); ?>  why don't see the whole post, when clicking the tag -->
   <?php the_content(); ?> 
</div>
<?php endwhile; ?>
<?php endif; ?>
 
</div> <!-- div.container : defined in header.php -->   
<h1> Caught by page slug </h1>    


