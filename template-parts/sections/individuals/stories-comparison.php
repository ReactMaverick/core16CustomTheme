<?php
/**
 * Individuals Page - Verified Individual Perspectives & Comparative Standards Table
 * Exact match with Stitch "For Individuals" Landing Page (Screen c97dfe44713248cdbdba807a9a4770ab)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$stories_badge = get_field( 'ind_stories_badge' ) ?: __( 'EMPIRICAL CASE HISTORIES', 'core16' );
$stories_title = get_field( 'ind_stories_title' ) ?: __( 'Verified Individual Perspectives.', 'core16' );
$stories_sub   = get_field( 'ind_stories_sub' ) ?: __( 'Independent cohort reviews • Verified via LinkedIn & Professional Guilds', 'core16' );

$compare_badge = get_field( 'ind_compare_badge' ) ?: __( 'COMPARATIVE STANDARDS', 'core16' );
$compare_title = get_field( 'ind_compare_title' ) ?: __( 'How Core16 Surpasses Legacy Typologies', 'core16' );
?>

<!-- Section 5: Verified Individual Stories -->
<section class="w-full bg-surface-container-low py-space-xl lg:py-margin-lg border-b border-surface-container-high">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<!-- Section Header -->
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
			<div>
				<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest block mb-space-xs">
					<?php echo esc_html( $stories_badge ); ?>
				</span>
				<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight">
					<?php echo esc_html( $stories_title ); ?>
				</h2>
			</div>
			<div class="font-label-mono text-label-mono text-on-surface-variant">
				<?php echo esc_html( $stories_sub ); ?>
			</div>
		</div>

		<!-- 4 Editorial Testimonial Cards -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
			<!-- Story 1: Dr. Aris Thorne -->
			<div class="p-space-lg bg-surface-container-lowest rounded-xl border border-surface-container-high flex flex-col justify-between">
				<div>
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high mb-space-md">
						<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase font-bold"><?php esc_html_e( 'CLINICAL TRANSITION', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-outline"><?php esc_html_e( 'COHORT 2024.3', 'core16' ); ?></span>
					</div>
					<p class="font-headline-sm text-headline-sm text-on-surface font-semibold italic">
						<?php esc_html_e( '"Unpacking my FECA relational control score saved my transition from chief surgeon to clinical executive."', 'core16' ); ?>
					</p>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
						<?php esc_html_e( '"In the operating theater, absolute directive control is life-saving. In boardroom leadership, it created defensive inertia. Core16 gave me an objective, statistical vocabulary to recalibrate my communication cadence without feeling like I was faking empathy."', 'core16' ); ?>
					</p>
				</div>
				<div class="mt-space-lg pt-space-md border-t border-surface-container-high flex items-center justify-between">
					<div>
						<div class="font-body-medium text-body-medium font-bold text-on-surface"><?php esc_html_e( 'Dr. Aris Thorne', 'core16' ); ?></div>
						<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Chief Medical Officer, CellBio Therapeutics', 'core16' ); ?></div>
					</div>
					<div class="text-right">
						<span class="font-label-mono-sm text-label-mono-sm bg-surface-container px-2 py-0.5 rounded text-on-surface font-semibold"><?php esc_html_e( 'THE ARCHITECT', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Story 2: Maya Lin-Vance -->
			<div class="p-space-lg bg-surface-container-lowest rounded-xl border border-surface-container-high flex flex-col justify-between">
				<div>
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high mb-space-md">
						<span class="font-label-mono-sm text-label-mono-sm text-secondary uppercase font-bold"><?php esc_html_e( 'TECHNICAL DISTINCTION', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-outline"><?php esc_html_e( 'COHORT 2024.1', 'core16' ); ?></span>
					</div>
					<p class="font-headline-sm text-headline-sm text-on-surface font-semibold italic">
						<?php esc_html_e( '"First time an evaluation didn\'t flatten me into an autistic engineering caricature."', 'core16' ); ?>
					</p>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
						<?php esc_html_e( '"Most HR frameworks assume deep analytical minds are socially inept. Core16 recognized that my high focus combined with an elevated adaptive vector made me a potent strategic negotiator. I used the 90-day blueprint to negotiate a promotion into technical fellow."', 'core16' ); ?>
					</p>
				</div>
				<div class="mt-space-lg pt-space-md border-t border-surface-container-high flex items-center justify-between">
					<div>
						<div class="font-body-medium text-body-medium font-bold text-on-surface"><?php esc_html_e( 'Maya Lin-Vance', 'core16' ); ?></div>
						<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Staff Principal Engineer, Distributed Systems', 'core16' ); ?></div>
					</div>
					<div class="text-right">
						<span class="font-label-mono-sm text-label-mono-sm bg-surface-container px-2 py-0.5 rounded text-on-surface font-semibold"><?php esc_html_e( 'THE STRATEGIST', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Story 3: Julian Mercer -->
			<div class="p-space-lg bg-surface-container-lowest rounded-xl border border-surface-container-high flex flex-col justify-between">
				<div>
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high mb-space-md">
						<span class="font-label-mono-sm text-label-mono-sm text-tertiary uppercase font-bold"><?php esc_html_e( 'CAPITAL DEPLOYMENT', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-outline"><?php esc_html_e( 'COHORT 2023.8', 'core16' ); ?></span>
					</div>
					<p class="font-headline-sm text-headline-sm text-on-surface font-semibold italic">
						<?php esc_html_e( '"The dyad friction analysis altered how I evaluate founding teams and negotiate term sheets."', 'core16' ); ?>
					</p>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
						<?php esc_html_e( '"As a VC, understanding my own cognitive impatience was crucial. The report accurately flagged my vulnerability to founders with high rhetoric but low execution vectors. It is now part of our standard diligence protocol for all partners."', 'core16' ); ?>
					</p>
				</div>
				<div class="mt-space-lg pt-space-md border-t border-surface-container-high flex items-center justify-between">
					<div>
						<div class="font-body-medium text-body-medium font-bold text-on-surface"><?php esc_html_e( 'Julian Mercer', 'core16' ); ?></div>
						<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'General Partner, Mercer Horizon Capital', 'core16' ); ?></div>
					</div>
					<div class="text-right">
						<span class="font-label-mono-sm text-label-mono-sm bg-surface-container px-2 py-0.5 rounded text-on-surface font-semibold"><?php esc_html_e( 'THE SYNTHESIZER', 'core16' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Story 4: Elena Cassian -->
			<div class="p-space-lg bg-surface-container-lowest rounded-xl border border-surface-container-high flex flex-col justify-between">
				<div>
					<div class="flex items-center justify-between pb-space-sm border-b border-surface-container-high mb-space-md">
						<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase font-bold"><?php esc_html_e( 'CREATIVE DIRECTION', 'core16' ); ?></span>
						<span class="font-label-mono-sm text-label-mono-sm text-outline"><?php esc_html_e( 'COHORT 2024.4', 'core16' ); ?></span>
					</div>
					<p class="font-headline-sm text-headline-sm text-on-surface font-semibold italic">
						<?php esc_html_e( '"The nuance between intuitive synthesis and practical execution is breathtaking."', 'core16' ); ?>
					</p>
					<p class="font-body-default text-body-default text-on-surface-variant mt-space-sm">
						<?php esc_html_e( '"Creative leadership is fraught with ambiguous subjectivity. The Core16 report pinpointed why I felt drained after managing production logistics and gave me precise language to delegate without relinquishing aesthetic sovereignty."', 'core16' ); ?>
					</p>
				</div>
				<div class="mt-space-lg pt-space-md border-t border-surface-container-high flex items-center justify-between">
					<div>
						<div class="font-body-medium text-body-medium font-bold text-on-surface"><?php esc_html_e( 'Elena Cassian', 'core16' ); ?></div>
						<div class="font-caption text-caption text-on-surface-variant"><?php esc_html_e( 'Creative Director & Editorial Author', 'core16' ); ?></div>
					</div>
					<div class="text-right">
						<span class="font-label-mono-sm text-label-mono-sm bg-surface-container px-2 py-0.5 rounded text-on-surface font-semibold"><?php esc_html_e( 'THE CATALYST', 'core16' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section 6: Comparative Standards Table -->
<section class="w-full bg-surface py-space-xl lg:py-margin-lg border-b border-surface-container-high">
	<div class="max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg">
		<div class="text-center max-w-2xl mx-auto mb-space-xl">
			<span class="font-label-mono-sm text-label-mono-sm text-primary uppercase tracking-widest block mb-space-xs">
				<?php echo esc_html( $compare_badge ); ?>
			</span>
			<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
				<?php echo esc_html( $compare_title ); ?>
			</h2>
		</div>

		<div class="overflow-x-auto">
			<table class="w-full text-left border-collapse bg-surface-container-lowest rounded-xl overflow-hidden border border-surface-container-high">
				<thead>
					<tr class="bg-surface-container-low border-b border-surface-container-high">
						<th class="p-space-md font-label-mono text-label-mono text-outline uppercase tracking-wider"><?php esc_html_e( 'Evaluation Dimension', 'core16' ); ?></th>
						<th class="p-space-md font-label-mono text-label-mono text-on-surface uppercase tracking-wider font-bold"><?php esc_html_e( 'Core16 Individual Assessment', 'core16' ); ?></th>
						<th class="p-space-md font-label-mono text-label-mono text-outline uppercase tracking-wider"><?php esc_html_e( 'Standard Online Quizzes', 'core16' ); ?></th>
						<th class="p-space-md font-label-mono text-label-mono text-outline uppercase tracking-wider"><?php esc_html_e( 'Traditional MBTI® Instruments', 'core16' ); ?></th>
					</tr>
				</thead>
				<tbody class="divide-y divide-surface-container-high font-body-sm text-body-sm">
					<tr>
						<td class="p-space-md font-semibold text-on-surface"><?php esc_html_e( 'Scoring Model', 'core16' ); ?></td>
						<td class="p-space-md text-primary font-bold"><?php esc_html_e( 'Multidimensional Continuous FECA Percentiles', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Arbitrary binary percentages', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Static categorical assignment (e.g. INFJ)', 'core16' ); ?></td>
					</tr>
					<tr>
						<td class="p-space-md font-semibold text-on-surface"><?php esc_html_e( 'Psychometric Validation', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface font-medium"><?php esc_html_e( 'ISO 10667-2 Compliant (Cohort N=184,200)', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Unvalidated proprietary algorithms', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Historical self-report baseline', 'core16' ); ?></td>
					</tr>
					<tr>
						<td class="p-space-md font-semibold text-on-surface"><?php esc_html_e( 'Report Depth', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface font-medium"><?php esc_html_e( '30-page editorial monograph + 25m audio debrief', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( '2-4 generic digital web pages', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Standardized 8-12 page narrative sheet', 'core16' ); ?></td>
					</tr>
					<tr>
						<td class="p-space-md font-semibold text-on-surface"><?php esc_html_e( 'Actionable Strategy', 'core16' ); ?></td>
						<td class="p-space-md text-primary font-bold"><?php esc_html_e( '90-day roadmap + Boardroom dialogue scripts', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Vague inspirational platitudes', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'General career field recommendations', 'core16' ); ?></td>
					</tr>
					<tr>
						<td class="p-space-md font-semibold text-on-surface"><?php esc_html_e( 'Test-Retest Stability', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface font-medium"><?php esc_html_e( '92.4% over 18-month longitudinal retests', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Under 50% across repeated attempts', 'core16' ); ?></td>
						<td class="p-space-md text-on-surface-variant"><?php esc_html_e( 'Approximately 70-75% consistency', 'core16' ); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
