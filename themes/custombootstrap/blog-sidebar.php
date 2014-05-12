<?php
/*
Template Name: Blog Sidebar Page
*/
?>
<?php get_header(); ?>
<div class="container">
    <div class="jumbotron">
      <h1>Blog Page</h1>  
      <p>This is a listing of all the posts</p>
    </div>
</div>
<div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>           
          
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
          </div><!--/row-->
        </div><!--/span-->

      <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <?php get_sidebar(); ?>
      </div>
    </div>
	
</div>

<?php get_footer(); ?>
