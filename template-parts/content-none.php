<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sinhthaitieucanh
 */

?>

<section class="no-results not-found">
    <h1>Content-none</h1>
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Không tìm thấy kết quả', 'sinhthaitieucanh' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sinhthaitieucanh' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Không tìm thấy kết quả phù hợp với từ khóa tìm kiếm của bạn. Vui lòng thử lại với từ khóa khác.', 'sinhthaitieucanh' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sinhthaitieucanh' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
