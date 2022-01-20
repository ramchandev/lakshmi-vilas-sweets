<?php

get_header();

?>
	<div class="single-post-container">
		<div class="row">
			<div class="entry-content">
				<article id="post-<?php echo esc_attr( get_the_ID() ); ?>">

					<h1><?php the_title(); ?></h1>

					<?php
					/**
					 *  Executes actions before the post content.
					 *
					 * @since 2.3.8
					 */

					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							the_content();
						}
					} else {
						echo "No Post Found";
					}

					?>
				</article>
			</div>
		</div>
	</div>
<?php
get_footer();
