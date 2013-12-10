<?php
/*
Template Name: Posts Page
*/
?>
<?php get_header(); ?>
<div class="container">

      <div class="jumbotron">
		    <h1>News Page</h1>  
		    <p>This is a listing of all the posts</p>
      </div>

      <div class="row">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-6 col-sm-6 col-lg-4">
          <h2><?php the_title(); ?> </h2>
          <p><em><?php the_time('l, F jS, Y'); ?></em></p> 
          <p><?php the_content(); ?></p>
		  <p><a class="btn btn-default" href="<?php the_permalink(); ?>" role="button">View details »</a></p>
		    <?php comments_template(); ?>
          
        </div><!--/span-->
        <?php endwhile; else: ?>
		  <p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
       
      </div>
	
</div>

<?php get_footer(); ?>

