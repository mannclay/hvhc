<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar expanded row" id="top-bar-menu">
	<div class="large-3 medium-3 columns logo-container">
		<a href="<?php echo home_url(); ?>">
	    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hvhc-logo.svg" width="190px" height="50px" alt="HVHC logo">
		</a>
		<span class="hide-for-small-only"><?php bloginfo('name'); ?></span>
	</div>
	<div class="show-for-medium large-9 medium-9 columns">
		<section class="row">
			<div id="top-nav-secondary" class="large-12 columns">
				<?php joints_top_nav_secondary(); ?>
			</div>
			<div id="top-nav" class="large-12 columns">
				<?php joints_top_nav(); ?>
				<?php joints_top_nav_sub(); ?>
			</div>
		</section>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswpsec' ); ?></a></li>
		</ul>
	</div>
</div>
