<div class="press">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
	<div class="col-sm-2 img-press">
	<?php the_post_thumbnail('thumbnail');  ?>
    </div>
    <div class="col-sm-9 ">
	<header class="entry-header" style="padding:10px;" >
		<h2 class="entry-title"><?php the_title(); ?></h2>

		<?php if ('post' == get_post_type()) { ?> 
		<div class="entry-meta">
			<?php bootstrapBasicPostOn(); ?> 
		</div><!-- .entry-meta -->
		<?php } //endif; ?> 
	</header><!-- .entry-header -->

	
	<?php if (is_search()) { // Only display Excerpts for Search ?> 
	<div class="entry-summary" style="padding:10px;">
		<?php the_excerpt(); ?> 
        <a href="<?php the_permalink(); ?> ">View Item</a>
		<div class="clearfix"></div>
	</div><!-- .entry-summary -->
	<?php } else { ?> 
	<div class="entry-content">
		<?php the_content(bootstrapBasicMoreLinkText()); ?> 
		<div class="clearfix"></div>
		<?php 
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?> 
	</div><!-- .entry-content -->
	<?php } //endif; ?> 

	
	<footer class="entry-meta">
		

		
	</footer><!-- .entry-meta -->
    </div></div><div class="clearfix"></div>
</article><!-- #post-## -->
</div>