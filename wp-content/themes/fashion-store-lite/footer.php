<?php ?>

	</div><!-- #content -->

	<section class="main_footer">
		<div class="container">
			<div class="row">

				<div class="col-xs-6 col-sm-3">
					<aside class="sidebarfooter1-">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
					</aside>
				</div>

				<div class="col-xs-6 col-sm-3">
					<aside class="sidebar-footer2">
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
					</aside>
				</div>
				<div class="col-xs-6 col-sm-3">
					<aside class="sidebar-footer3">
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
					</aside>
				</div>
				<div class="col-xs-6 col-sm-3">
					<aside class="sidebar-footer4">
					<?php dynamic_sidebar( 'sidebar-8' ); ?>
					</aside>
				</div>

			</div>
		</div>
	</section>






	<section class="main_footer">
		<div class="container">
			<div class="row">

				<div class="col-md-8">
					<div class="footer-left">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fashion-store-lite' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fashion-store-lite' ), 'WordPress' ); ?></a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="footer-right">
						<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'fashion-store-lite' ), 'Fashion Store lite', '<a href="http://classicrgb.com/" rel="designer">ClassicRGB</a>' ); ?>
					</div>
				</div>

			</div>
		</div>
	</section>


</div>

<?php wp_footer(); ?>

</body>
</html>
