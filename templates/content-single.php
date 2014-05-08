<?php while (have_posts()) : the_post(); ?>

<div class="col">
  <article <?php post_class(); ?>>
    
    <div class="row">
    	<div class="col-md-12 col-sm-12 col-xs-12">
            <header>
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <?php get_template_part('templates/entry-meta'); ?>
            </header>
        </div>
    </div>
    
    <div class="row blog-post-content">
    	<div class="col-md-4 col-sm-4">
        	<?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'post-image')); ?>
        </div>
    	<div class="col-md-8 col-sm-8">
    		<div class="entry-content">
    		  <?php the_content(); ?>
    		</div>
         </div>
     </div>
   	
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    
    <div class="row">
    	<div class="col-md-12 col-sm-12">
    		<?php comments_template('/templates/comments.php'); ?>
        </div>
    </div>
    
  </article>
  </div>
<?php endwhile; ?>
