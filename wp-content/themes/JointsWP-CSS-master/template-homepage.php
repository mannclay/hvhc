<?php
/*
Template Name: Template Homepage (No Sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="homepage-content-links" class="row">

        <h2>CLINICAL TOPICS</h2>
		    <section id="homepage-content-links" class="large-12 medium-12 columns" role="homepage-content-links">
					<?php joints_homepage_content_links(); ?>
				</section>

		</div>

		<div id="inner-content" class="row">

		    <main id="main" class="large-6 medium-6 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		    <section id="main-secondary" class="large-6 medium-6 columns" role="main-secondary">

		    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/color-flower.svg">

			</section> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
