<?php
/**
 * Metric Card Component
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title       = ! empty( $args['title'] ) ? $args['title'] : '';
$value       = ! empty( $args['value'] ) ? $args['value'] : '';
$unit        = ! empty( $args['unit'] ) ? $args['unit'] : '';
$icon        = ! empty( $args['icon'] ) ? $args['icon'] : 'analytics';
$description = ! empty( $args['description'] ) ? $args['description'] : '';
$footnote    = ! empty( $args['footnote'] ) ? $args['footnote'] : '';
?>
<div class="p-6 rounded-xl bg-mist border border-rule-grey flex flex-col justify-between transition-all hover:border-slate-400/50">
	<div>
		<div class="flex items-center justify-between mb-2">
			<span class="font-mono text-[11px] text-slate-subtle uppercase tracking-wider"><?php echo esc_html( $title ); ?></span>
			<span class="material-symbols-outlined text-core-teal text-[20px]"><?php echo esc_html( $icon ); ?></span>
		</div>
		<div class="font-headline font-bold text-3xl sm:text-4xl text-midnight tracking-tight"><?php echo esc_html( $value ); ?></div>
		<div class="font-body text-sm font-semibold text-midnight mt-1"><?php echo esc_html( $unit ); ?></div>
		<p class="font-body text-xs text-slate-subtle mt-2 leading-relaxed">
			<?php echo esc_html( $description ); ?>
		</p>
	</div>
	<?php if ( $footnote ) : ?>
		<div class="pt-4 mt-4 border-t border-rule-grey/80">
			<span class="font-mono text-[10px] text-slate-subtle"><?php echo esc_html( $footnote ); ?></span>
		</div>
	<?php endif; ?>
</div>
