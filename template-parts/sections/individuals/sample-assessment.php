<?php
/**
 * Individuals Page - Interactive Mini Assessment Teaser
 * Exact match with Stitch "For Individuals" Landing Page (Screen c97dfe44713248cdbdba807a9a4770ab)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sample_badge = get_field( 'ind_sample_badge' ) ?: __( 'SAMPLE DIAGNOSTIC INTERACTION', 'core16' );
$sample_title = get_field( 'ind_sample_title' ) ?: __( 'Test your cognitive alignment right now.', 'core16' );
$sample_desc  = get_field( 'ind_sample_desc' ) ?: __( 'Core16 does not ask simplistic "Do you like parties?" questions. Every prompt forces a trade-off between two equally valid executive competencies.', 'core16' );
?>

<!-- Section 4: Interactive Mini Assessment Teaser -->
<section class="w-full bg-surface py-space-xl lg:py-margin-lg border-b border-surface-container-high">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="bg-surface-container-lowest rounded-xl border border-surface-container-high p-space-lg lg:p-space-xl">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
				<div class="lg:col-span-5 space-y-space-md">
					<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest font-semibold">
						<?php echo esc_html( $sample_badge ); ?>
					</span>
					<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
						<?php echo esc_html( $sample_title ); ?>
					</h3>
					<p class="font-body-default text-body-default text-on-surface-variant">
						<?php echo esc_html( $sample_desc ); ?>
					</p>
					<div class="flex items-center gap-space-sm pt-space-xs">
						<span class="font-label-mono text-label-mono text-outline"><?php esc_html_e( 'Calibration Question #04 of 48', 'core16' ); ?></span>
						<span class="w-1.5 h-1.5 rounded-full bg-primary-container"></span>
						<span class="font-label-mono text-label-mono text-primary font-bold"><?php esc_html_e( 'Domain: Execution Cadence', 'core16' ); ?></span>
					</div>
				</div>

				<div class="lg:col-span-7 bg-surface-container-low rounded-lg p-space-md border border-surface-container-high space-y-space-md">
					<div class="font-headline-sm text-headline-sm text-on-surface font-semibold">
						<?php esc_html_e( '"When an executive project lacks clear parameters, your immediate instinct is to:"', 'core16' ); ?>
					</div>

					<!-- Choice Radio Array -->
					<div class="space-y-space-sm" id="sample-question-group">
						<label class="flex items-start gap-space-md p-space-sm bg-surface-container rounded border border-primary cursor-pointer transition-all">
							<input checked class="mt-1 accent-[#0EA5AB]" name="sample_q" type="radio" value="1" />
							<div>
								<span class="font-body-medium text-body-medium text-on-surface block font-semibold"><?php esc_html_e( 'Build immediate momentum through rapid experimental prototypes.', 'core16' ); ?></span>
								<span class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Prioritizes velocity, real-time discovery, and tolerance for ambiguous errors.', 'core16' ); ?></span>
							</div>
						</label>

						<label class="flex items-start gap-space-md p-space-sm bg-surface-container-lowest rounded border border-surface-container-high cursor-pointer hover:border-primary transition-all">
							<input class="mt-1 accent-[#0EA5AB]" name="sample_q" type="radio" value="2" />
							<div>
								<span class="font-body-medium text-body-medium text-on-surface block font-semibold"><?php esc_html_e( 'Step back to construct a comprehensive taxonomical framework.', 'core16' ); ?></span>
								<span class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Prioritizes architectural solidity, structural foresight, and systemic longevity.', 'core16' ); ?></span>
							</div>
						</label>
					</div>

					<div class="flex items-center justify-between pt-space-xs">
						<span class="font-label-mono-sm text-label-mono-sm text-outline"><?php esc_html_e( 'Both choices yield valid leadership archetypes.', 'core16' ); ?></span>
						<a class="font-label-mono-sm text-label-mono-sm text-primary font-bold uppercase tracking-wider hover:underline flex items-center gap-1" href="#assessment-flow">
							<?php esc_html_e( 'Take Full Assessment', 'core16' ); ?> <span>→</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
