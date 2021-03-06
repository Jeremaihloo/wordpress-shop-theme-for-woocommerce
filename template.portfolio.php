<?php 
/*
 * Template Name: Portfolio Fullwidth
 */
get_header(); ?>
			<div class="column-wide">
			
					<ul class="filterable clearfix">
						<?php 
							$single_cat = single_cat_title("",false);
						?>
						<li <?php if($single_cat=="") echo 'class="active"';?>><a href="<?php  echo get_permalink( of_get_option('portfoliodesc') ) ?>" data-value="all" data-type="all" class="all"><?php _e('all', 'site5framework'); ?></a></li>
						<?php  
						$categories=  get_categories('taxonomy=types&title_li='); foreach ($categories as $category){ ?>
						<?php //print_r(get_term_link($category->slug, 'types')) ?>
						<li <?php if($single_cat==$category->name) echo 'class="active"';?>><a href="<?php echo get_term_link($category->slug, 'types') ?>" class="<?php echo $category->category_nicename;?>" data-type="<?php echo $category->category_nicename;?>"><?php echo $category->name;?></a></li>
						<?php }?>
											
					</ul>

					<div class="portfolio-container">

						<ul id="portfolio-items-one-fourth"  class="portfolio-items clearfix">
							
							<?php 
							global $post;
							$term = get_query_var('term'); 
       						$tax = get_query_var('taxonomy'); 
							$args=array('post_type'=> 'portfolio','post_status'=> 'publish', 'orderby'=> 'menu_order', 'caller_get_posts'=>1, 'paged'=>$paged, 'posts_per_page'=>of_get_option('portfolioitemsperpage')); 
							$taxargs = array($tax=>$term);
							if($term!='' && $tax!='') { $args  = array_merge($args, $taxargs); }

							query_posts($args); 
							
							while ( have_posts()):the_post();
								$categories = wp_get_object_terms( get_the_ID(), 'types');
							?>
							
							<li class="item <?php foreach ($categories as $category) { echo $category->slug. ' '; } ?>" data-id="id-<?php the_ID(); ?>" data-type="<?php foreach ($categories as $category) { echo $category->slug. ' '; } ?>">
								<div class="portfolio-item ">
									<div class="item-content">
										<div class="link-holder">
											<div class="portfolio-item-holder">
												<div class="portfolio-item-hover-content">
													
													<?php
													$thumbId = get_image_id_by_link ( get_post_meta($post->ID, 'snbp_pitemlink', true) );
													$thumb = wp_get_attachment_image_src($thumbId, 'portfolio-item-small', false);
													$large = wp_get_attachment_image_src($thumbId, 'large', false);
													?>
													<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
													<?php
													if (!$thumb == ''){ ?>
													
													<img src="<?php echo $thumb[0] ?>" alt="<?php the_title(); ?>"  class="portfolio-img"  />
													<?php } else { ?>
													<?php } ?>

													</a>

													<div class="hover-options"></div>
												</div>
											</div>
											<div class="description">
												<p>
													<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>
												</p>
												<span><?php $separator = ''; foreach ($categories as $category) { echo $separator . $category->name; $separator=' / ';} ?></span>
											</div>
										</div>
									</div>
								</div>
							</li>

							<?php endwhile;  ?>	

						</ul>

						<!-- begin #pagination -->
							<?php if (function_exists("emm_paginate")) { 
									emm_paginate();  
								 } else { ?>
							<div class="navigation">
						        <div class="alignleft"><?php next_posts_link('Older') ?></div>
						        <div class="alignright"><?php previous_posts_link('Newer') ?></div>
						    </div>
					    <?php } ?>
					    <!-- end #pagination -->

						<?php 
							wp_reset_query();
							wp_reset_postdata();	
						?>
					</div>
				

				

				


			</div>
<?php get_footer(); ?>