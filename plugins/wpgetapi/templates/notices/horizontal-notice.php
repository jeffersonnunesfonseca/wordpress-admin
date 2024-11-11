<?php
if ( ! defined( 'WPGETAPIDIR' ) ) {
	die( 'No direct access allowed' );
}
?>

<?php if ( ! empty( $button_meta ) && 'review' == $button_meta ) : ?>

	<div class="wpgetapi-ad-container updated below-h2">
	<div class="wpgetapi_notice_container wpgetapi_review_notice_container">
		<div class="wpgetapi_advert_content_left_extra">
			<img src="<?php echo esc_url( WPGETAPIURL . 'assets/img/' . $image ); ?>" width="100" alt="<?php _e( 'notice image', 'wpgetapi' ); ?>" />
		</div>
		<div class="wpgetapi_advert_content_right">
			<p>
				<?php echo $text; ?>
			</p>
					
			<?php if ( ! empty( $button_link ) ) { ?>
				<div class="wpgetapi_advert_button_container">
					<a class="button button-primary" href="<?php echo esc_url( $button_link ); ?>" target="_blank" onclick="jQuery(this).closest('.wpgetapi-ad-container').slideUp(); jQuery.post(ajaxurl, {action: 'wpgetapi_dismiss_review_notice', subaction: 'wpgetapi_dismiss_notice', nonce: '<?php echo esc_js( wp_create_nonce( 'wpgetapi-notice-ajax-nonce' ) ); ?>', data: { notice: '<?php echo esc_js( $dismiss_time ); ?>', dismiss_forever: '1'}});">
						<?php _e( 'Ok, you deserve it', 'wpgetapi' ); ?>
					</a>
					<div class="dashicons dashicons-calendar"></div>
					<a class="wpgetapi_notice_link" href="#" onclick="jQuery(this).closest('.wpgetapi-ad-container').slideUp(); jQuery.post(ajaxurl, {action: 'wpgetapi_notice_dismiss', subaction: 'wpgetapi_dismiss_review_notice', nonce: '<?php echo esc_js( wp_create_nonce( 'wpgetapi-notice-ajax-nonce' ) ); ?>', data: { notice: '<?php echo esc_js( $dismiss_time ); ?>', dismiss_forever: '0'}});">
						<?php _e( 'Maybe later', 'wpgetapi' ); ?>
					</a>
					<div class="dashicons dashicons-no-alt"></div>
					<a class="wpgetapi_notice_link" href="#" onclick="jQuery(this).closest('.wpgetapi-ad-container').slideUp(); jQuery.post(ajaxurl, {action: 'wpgetapi_notice_dismiss', subaction: 'wpgetapi_dismiss_review_notice', nonce: '<?php echo esc_js( wp_create_nonce( 'wpgetapi-notice-ajax-nonce' ) ); ?>', data: { notice: '<?php echo esc_js( $dismiss_time ); ?>', dismiss_forever: '1'}});">
						<?php _e( 'Never', 'wpgetapi' ); ?>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="clear"></div>
</div>

<?php else : ?>

<div class="wpgetapi-ad-container updated below-h2">
	<div class="wpgetapi_notice_container">
		<div class="wpgetapi_advert_content_left">
			<img src="<?php echo esc_url( WPGETAPIURL . 'assets/img/' . $image ); ?>" width="60" height="60" alt="<?php _e( 'notice image', 'wpgetapi' ); ?>" />
		</div>
		<div class="wpgetapi_advert_content_right">
			<h3 class="wpgetapi_advert_heading">
				<?php
				if ( ! empty( $prefix ) ) {
					echo $prefix . ' ';
				}
					echo $title;
				?>
				<div class="wpgetapi_advert_dismiss">
				<?php if ( ! empty( $dismiss_time ) ) { ?>
					<a href="#" onclick="jQuery('.wpgetapi-ad-container').slideUp(); jQuery.post(ajaxurl, {action: 'wpgetapi_notice_dismiss', subaction: '<?php echo esc_js( $dismiss_time ); ?>', nonce: '<?php echo esc_js( wp_create_nonce( 'wpgetapi-notice-ajax-nonce' ) ); ?>' });"><?php esc_html_e( 'Dismiss', 'wpgetapi' ); ?></a>
				<?php } else { ?>
					<a href="#" onclick="jQuery('.wpgetapi-ad-container').slideUp();"><?php esc_html_e( 'Dismiss', 'wpgetapi' ); ?></a>
				<?php } ?>
				</div>
			</h3>
			<p>
				<?php
					echo $text;

				if ( isset( $discount_code ) ) {
					echo ' <b>' . $discount_code . '</b>';
				}

				if ( ! empty( $button_link ) && ! empty( $button_meta ) ) {
					?>
				<a class="wpgetapi_notice_link" href="<?php echo esc_url( $button_link ); ?>" target="_blank">
						<?php
						if ( 'updraftcentral' == $button_meta ) {
							_e( 'Get UpdraftCentral', 'wpgetapi' );
						} elseif ( 'updraftplus' == $button_meta ) {
							_e( 'Get UpdraftPlus', 'wpgetapi' );
						} elseif ( 'wp-optimize' == $button_meta ) {
							_e( 'Get WP-Optimize', 'wpgetapi' );
						} elseif ( 'all-in-one-wp-security-and-firewall' == $button_meta ) {
							_e( 'Get Premium.', 'wpgetapi' );
						} elseif ( 'signup' == $button_meta ) {
							_e( 'Sign up', 'wpgetapi' );
						} elseif ( 'go_there' == $button_meta ) {
							_e( 'Go there', 'wpgetapi' );
						} elseif ( 'learn_more' == $button_meta ) {
							_e( 'Learn more', 'wpgetapi' );
						} else {
							_e( 'Read more', 'wpgetapi' );
						}
						?>
					</a>
					<?php
				}
				?>
			</p>
		</div>
	</div>
	<div class="clear"></div>
</div>

	<?php

endif;
