<?php
/**
 * Cognitive Domain Card Component
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$domain_id         = ! empty( $args['domain_id'] ) ? $args['domain_id'] : '';
$title             = ! empty( $args['title'] ) ? $args['title'] : '';
$accent_color      = ! empty( $args['accent_color'] ) ? $args['accent_color'] : '#087F8C';
$description       = ! empty( $args['description'] ) ? $args['description'] : '';
$profiles          = ! empty( $args['profiles'] ) && is_array( $args['profiles'] ) ? $args['profiles'] : array();
$metric_label      = ! empty( $args['metric_label'] ) ? $args['metric_label'] : '';
$metric_value      = ! empty( $args['metric_value'] ) ? $args['metric_value'] : '';
$metric_percentage = ! empty( $args['metric_percentage'] ) ? (int) $args['metric_percentage'] : 90;
?>
<div class="p-6 rounded-xl bg-mist border border-rule-grey border-b-4 flex flex-col justify-between transition-all hover:border-slate-400/50" style="border-bottom-color: <?php echo esc_attr( $accent_color ); ?>;">
	<div>
		<div class="flex items-center justify-between mb-2">
			<span class="font-mono text-[11px] font-semibold uppercase tracking-wider" style="color: <?php echo esc_attr( $accent_color ); ?>;">
				<?php echo esc_html( $domain_id ); ?>
			</span>
			<span class="px-2 py-0.5 rounded bg-warm-white border border-rule-grey font-mono text-[10px] text-slate-subtle">
				<?php printf( esc_html__( '%d Archetypes', 'core16' ), count( $profiles ) ); ?>
			</span>
		</div>
		<h3 class="font-headline font-bold text-xl text-midnight"><?php echo esc_html( $title ); ?></h3>
		<p class="font-body text-sm text-slate-subtle mt-2 leading-relaxed">
			<?php echo esc_html( $description ); ?>
		</p>
		<?php if ( ! empty( $profiles ) ) : ?>
			<div class="mt-4 pt-3 border-t border-rule-grey/80">
				<span class="font-mono text-[10px] text-slate-subtle uppercase tracking-wider block mb-2 font-medium">
					<?php esc_html_e( 'Cognitive Profiles', 'core16' ); ?>
				</span>
				<div class="flex flex-wrap gap-1.5 font-mono text-xs">
					<?php foreach ( $profiles as $profile ) : ?>
						<span class="px-2.5 py-1 rounded font-semibold border" style="background-color: <?php echo esc_attr( $accent_color ); ?>15; border-color: <?php echo esc_attr( $accent_color ); ?>40; color: <?php echo esc_attr( $accent_color ); ?>;">
							<?php echo esc_html( $profile ); ?>
						</span>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<?php if ( $metric_label ) : ?>
		<div class="mt-6 pt-3 bg-warm-white border border-rule-grey rounded-lg p-3">
			<div class="flex justify-between items-center text-xs text-slate-subtle">
				<span class="font-body"><?php echo esc_html( $metric_label ); ?></span>
				<span class="font-mono text-midnight font-bold"><?php echo esc_html( $metric_value ); ?></span>
			</div>
			<div class="w-full h-1.5 bg-mist rounded-full overflow-hidden mt-1.5">
				<div class="h-full rounded-full transition-all duration-700" style="background-color: <?php echo esc_attr( $accent_color ); ?>; width: <?php echo esc_attr( $metric_percentage ); ?>%;"></div>
			</div>
		</div>
	<?php endif; ?>
</div>
