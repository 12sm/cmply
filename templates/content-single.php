<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(container); ?>>
    <header>
	 <div class="row">
	 	<div class="col-sm-12">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
		</div>
	  </div>
    </header>
	<div class="row">
		<div class="col-md-4 featured-image">
			<div class="entry-content">
				
			<?php 
							
							if ( '' != get_the_post_thumbnail() ) {
								the_post_thumbnail( small, $attr );
							} else {
								the_title();
							}
										
							?>
							
				</div>
			</div>
			<div class="col-md-8">
				<div class="entry-content">
			 	 <?php the_content(); ?>
			</div>
		</div>
	</div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
