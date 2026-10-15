<?php
/**
 * Dossier Feature Row Component
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$icon        = ! empty( $args['icon'] ) ? $args['icon'] : 'check_circle';
$title       = ! empty( $args['title'] ) ? $args['title'] : '';
$description = ! empty( $args['description'] ) ? $args['description'] : '';
?>
<div class="p-4 rounded-xl bg-mist border border-rule-grey flex items-start gap-3.5 transition-all hover:border-slate-400/50">
	<div class="w-9 h-9 rounded-lg bg-warm-white border border-rule-grey flex items-center justify-center shrink-0">
		<span class="material-symbols-outlined text-core-teal text-[20px]"><?php echo esc_html( $icon ); ?></span>
	</div>
	<div>
		<h4 class="font-headline font-semibold text-sm text-midnight"><?php echo esc_html( $title ); ?></h4>
		<p class="font-body text-xs text-slate-subtle mt-0.5 leading-relaxed">
			<?php echo esc_html( $description ); ?>
		</p>
	</div>
</div>
