<!--footer starts-->

<footer>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
					<?php if ( is_active_sidebar( 'footer-one' ) ) {
						dynamic_sidebar( 'footer-one' );
					} ?>
                </div>

                <div class="col-md-3 col-sm-6">
	                <?php if ( is_active_sidebar( 'footer-two' ) ) {
		                dynamic_sidebar( 'footer-two' );
	                } ?>
                </div>

                <div class="col-md-3 col-sm-6">
	                <?php if ( is_active_sidebar( 'footer-three' ) ) {
		                dynamic_sidebar( 'footer-three' );
	                } ?>
                </div>

                <div class="col-md-3 col-sm-6">
	                <?php if ( is_active_sidebar( 'footer-four' ) ) {
		                dynamic_sidebar( 'footer-four' );
	                } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
	            <?php if ( is_active_sidebar( 'footer-copyright' ) ) {
		            dynamic_sidebar( 'footer-copyright' );
	            } ?>
            </div>
        </div>
    </div>

</footer>

<!--footer ends-->
<?php wp_footer(); ?>
</body>

</html>