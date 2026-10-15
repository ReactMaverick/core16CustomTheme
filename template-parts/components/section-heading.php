<?php
/**
 * Reusable Section Heading Component
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tag         = ! empty( $args['tag'] ) ? $args['tag'] : '';
$title       = ! empty( $args['title'] ) ? $args['title'] : '';
$description = ! empty( $args['description'] ) ? $args['description'] : '';
$align       = ! empty( $args['align'] ) ? $args['align'] : 'left';
$classes     = 'center' === $align ? 'text-center mx-auto' : 'text-left';
?>
<div class="max-w-3xl mb-space-lg <?php echo esc_attr( $classes ); ?>">
	<?php if ( $tag ) : ?>
		<span class="font-mono text-xs uppercase tracking-wider text-core-teal font-semibold block mb-1">
			<?php echo esc_html( $tag ); ?>
		</span>
	<?php endif; ?>

	<?php if ( $title ) : ?>
		<h2 class="font-headline font-bold text-2xl lg:text-3xl text-midnight tracking-tight">
			<?php echo esc_html( $title ); ?>
		</h2>
	<?php endif; ?>

	<?php if ( $description ) : ?>
		<p class="font-body text-sm lg:text-base text-slate-subtle mt-2 leading-relaxed">
			<?php echo esc_html( $description ); ?>
		</p>
	<?php endif; ?>
</div>
