<?php get_header(); ?> 

				<div class="container">
					<div class="row">
	        	
	        	
							<div class="col-md-12 content-area" id="main-column">
								
								<main id="main" class="site-main" role="main">
									
									
									
									
									<section class="error-404 not-found">
										
										
										<br><br>
										
										<header class="page-header">
											<h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'bootstrap-basic'); ?></h1>
										</header><!-- .page-header -->
			
										
										
										
										
										
										<div class="page-content">
											
											
											
											
											<p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bootstrap-basic'); ?></p>
			






												<!--search form-->
												<form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
													<div class="form-group">
															
															
															<div class="col-xs-8 col-sm-10 col-md-5">
																<input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'bootstrap-basic'); ?>" title="<?php echo esc_attr_x('Search &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
															</div>
															
															
															
															<div class="col-xs-2 col-sm-2 col-md-2">
																<button type="submit" class="btn btn-default"><?php _e('Search', 'bootstrap-basic'); ?></button>
															</div>
															
															
													</div>
												</form>
			
																				
																				
																				
																				
																				
																				
																				
										</div><!-- .page-content -->
										
										
										
										<br><br>
										
									</section><!-- .error-404 -->
									
									
								</main>
							</div>
							
					</div>
					
					</div>

<?php get_footer(); ?> 