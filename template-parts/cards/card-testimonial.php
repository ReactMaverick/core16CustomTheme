<?php
/**
 * Testimonial Card Component
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sector      = ! empty( $args['sector'] ) ? $args['sector'] : '';
$quote       = ! empty( $args['quote'] ) ? $args['quote'] : '';
$author      = ! empty( $args['author'] ) ? $args['author'] : '';
$affiliation = ! empty( $args['affiliation'] ) ? $args['affiliation'] : '';
?>
<div class="p-6 rounded-xl bg-mist border border-rule-grey flex flex-col justify-between transition-all hover:border-slate-400/50">
	<div class="space-y-2">
		<?php if ( $sector ) : ?>
			<span class="font-mono text-[10px] text-core-teal font-semibold uppercase tracking-wider"><?php echo esc_html( $sector ); ?></span>
		<?php endif; ?>
		<p class="font-body text-sm text-midnight italic leading-relaxed">
			&ldquo;<?php echo esc_html( $quote ); ?>&rdquo;
		</p>
	</div>
	<div class="pt-4 mt-4 border-t border-rule-grey/80">
		<div class="font-headline font-semibold text-sm text-midnight"><?php echo esc_html( $author ); ?></div>
		<?php if ( $affiliation ) : ?>
			<div class="font-body text-xs text-slate-subtle"><?php echo esc_html( $affiliation ); ?></div>
		<?php endif; ?>
	</div>
</div>
