<?php

add_action( 'bizberg_before_homepage_blog', 'education_business_school_editor_choice' );
function education_business_school_editor_choice(){ 

	$status = bizberg_get_theme_mod( 'editor_post_status' );

	if( $status == false ){
		return;
	}

	$editor_post_category_id = bizberg_get_theme_mod( 'editor_post_category' );

	$args = array(
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
		'posts_per_page'      => 3,
		'cat'                 => $editor_post_category_id
	); 

	$editor_query = new WP_Query( $args );

	if( $editor_query->have_posts() ): ?>

		<section class="featured-post">

			<div class="container">

				<div class="featured-post-inner">

					<div class="row">

						<?php

						$count = 0;

						while( $editor_query->have_posts() ): $editor_query->the_post();

							global $post;

							$category_detail = get_the_category( $post->ID );
							$cat_name        = !empty( $category_detail[0]->name ) ? $category_detail[0]->name : '';

							$featured_image = has_post_thumbnail( $post->ID ) ? get_the_post_thumbnail_url( $post->ID, 'medium_large' ) : get_stylesheet_directory_uri() . '/assets/images/placeholder.jpg'; ?>

							<div class="col-md-4 <?php echo ( $count == 0 ? 'col-sm-12' : 'col-sm-6' ); ?>">

								<div class="featured-post-item">

									<a href="<?php the_permalink(); ?>"  
									class="featured-post-image" 
									style="background-image:url( <?php echo esc_url( $featured_image ); ?> )">
									</a>

									<div class="featured-post-content">

										<a href="<?php echo esc_url( get_category_link( $category_detail[0] ) ); ?>" class="featured-category">
											<?php echo esc_html( $cat_name ); ?>
										</a>

										<h4 class="">
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h4>
										<p class="featured-date">
											<?php echo esc_html( get_the_date() ); ?>
										</p>
									</div>
								</div>
							</div>

							<?php

							$count++;

						endwhile; ?>

						</div>

					</div>

				</div>

			</section>

		<?php

	endif;

}