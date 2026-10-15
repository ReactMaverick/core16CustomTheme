<?php
/**
 * Shared Container Component
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tag     = ! empty( $args['tag'] ) ? $args['tag'] : 'div';
$class   = ! empty( $args['class'] ) ? $args['class'] : '';
$content = ! empty( $args['content'] ) ? $args['content'] : '';
?>
<<?php echo esc_html( $tag ); ?> class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg <?php echo esc_attr( $class ); ?>">
	<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</<?php echo esc_html( $tag ); ?>>
