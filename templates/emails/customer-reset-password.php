<?php
/**
 * Customer Reset Password email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.7.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php do_action('woocommerce_email_header', $email_heading); ?>

<p><?php _e( 'Someone requested that the password be reset for the following account:', 'woocommerce' ); ?></p>
<p><?php printf( __( 'Username: %s', 'woocommerce' ), $user_login ); ?></p>
<p><?php _e( 'If this was a mistake, just ignore this email and nothing will happen.', 'woocommerce' ); ?></p>
<p><?php _e( 'To reset your password, visit the following address:', 'woocommerce' ); ?></p>
<p>
    <a href="<?php echo esc_url( get_permalink( woocommerce_get_page_id( 'lost_password' ) ) . sprintf( '?key=%s&login=%s', $reset_key, $user_login ) ); ?>">
			<?php _e( 'Click here to reset your password', 'woocommerce' ); ?></a>
</p>
<p></p>

<?php do_action('woocommerce_email_footer'); ?>