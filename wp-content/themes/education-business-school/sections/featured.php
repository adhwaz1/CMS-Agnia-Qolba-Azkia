<?php

add_action( 'bizberg_before_homepage_blog', 'education_business_school_featured_post' );
function education_business_school_featured_post(){

	$status = bizberg_get_theme_mod( 'featured_post_status' );

	if( $status == false ){
		return;
	} 

	$categories = bizberg_get_theme_mod( 'featured_post_categories' );
	$categories = array_map( 'array_filter', $categories );
	$categories = array_filter( $categories );

	if( !empty( $categories ) ){ ?>

		<section class="imagepost">

			<div class="container">

				<div class="imagepost-inner">

					<div class="row">

						<?php 
						foreach( $categories as $key => $value ){ 
							
							$cat_id    = !empty( $value['cat_id'] )   ? absint( $value['cat_id'] )   : '';
							$image_id  = !empty( $value['image_id'] ) ? absint( $value['image_id'] ) : '';

							$src       = wp_get_attachment_image_src( $image_id, "medium_large" );
							$image_url = !empty( $src[0] ) ? $src[0] : '';
							$title     = get_cat_name( $cat_id ); ?>

							<div class="col-md-4  <?php echo ( $key == 0 ? 'col-sm-12' : 'col-sm-6' );  ?>">

								<div class="imagepost-item">

									<a 
									href  = "<?php echo esc_url( get_term_link( $cat_id ) ); ?>" 
									class = "imagepost-content" 
									style = "background-image: linear-gradient( to right, #00000036, #0000 ) , url( <?php echo esc_url( $image_url ); ?> );">
									</a>

									<?php 
									if( !empty( $title ) ){ ?>
										<h5 class="qodef-m-title">
											<?php 
											echo esc_html( $title );
											?>	
										</h5>
										<?php 
									} ?>

								</div>

							</div>

							<?php 
						} ?>

					</div>

				</div>

			</div>

		</section>

		<?php

	}

}