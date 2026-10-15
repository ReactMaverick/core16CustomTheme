<?php
/**
 * The 16 Profiles - Grid Section (Dynamic WP_Query with fallback)
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$domains_config = array(
	'strategic' => array(
		'name'      => __( 'Strategic & Analytical', 'core16' ),
		'domain_id' => 'Territory 01 // Domain Alpha',
		'color'     => '#087F8C',
		'desc'      => __( 'High conceptual abstraction coupled with deterministic logic. Optimized for multi-horizon enterprise vision and sovereign risk arbitrage.', 'core16' ),
		'dominant'  => 'FOCUS / ADAPTATION',
	),
	'human' => array(
		'name'      => __( 'Human & Intuitive', 'core16' ),
		'domain_id' => 'Territory 02 // Domain Beta',
		'color'     => '#6842B8',
		'desc'      => __( 'Deep systemic empathy combined with ethical alignment. Master architects of corporate ethos, psychological safety, and cohesion.', 'core16' ),
		'dominant'  => 'ADAPTATION / EXECUTION',
	),
	'grounded' => array(
		'name'      => __( 'Grounded & Structured', 'core16' ),
		'domain_id' => 'Territory 03 // Domain Gamma',
		'color'     => '#188A62',
		'desc'      => __( 'Uncompromising procedural fidelity and operational resilience. Safeguards structural equilibrium, governance cadence, and regulatory precision.', 'core16' ),
		'dominant'  => 'CONTROL / EXECUTION',
	),
	'adaptive' => array(
		'name'      => __( 'Adaptive & Practical', 'core16' ),
		'domain_id' => 'Territory 04 // Domain Delta',
		'color'     => '#B7871B',
		'desc'      => __( 'Exceptional situational agility and live tactical troubleshooting. Operates with maximum leverage under acute volatility.', 'core16' ),
		'dominant'  => 'ADAPTATION / EXECUTION',
	),
);

// Query all profiles
$profiles_query = new WP_Query(
	array(
		'post_type'      => 'profile',
		'posts_per_page' => -1,
		'orderby'        => 'menu_order title',
		'order'          => 'ASC',
	)
);

// Fallback profile dataset if no profiles published yet
$fallback_profiles = array(
	'strategic' => array(
		array( 'code' => 'INTJ', 'num' => '01', 'sub' => 'The Strategic Architect', 'tag' => 'Architectural', 'color' => '#273A8A', 'desc' => 'Synthesizes macro systems into unyielding strategic blueprints; operates with high deliberative cadence.', 'v1_lbl' => 'FOCUS (F)', 'v1_val' => 96, 'v2_lbl' => 'EXECUTION (E)', 'v2_val' => 88 ),
		array( 'code' => 'INTP', 'num' => '02', 'sub' => 'The Systems Theorist', 'tag' => 'Theoretic', 'color' => '#3157B7', 'desc' => 'Deconstructs complex paradoxes through rigorous first-principles logic; optimizes for latent systemic truth.', 'v1_lbl' => 'FOCUS (F)', 'v1_val' => 94, 'v2_lbl' => 'ADAPTATION (A)', 'v2_val' => 89 ),
		array( 'code' => 'ENTJ', 'num' => '03', 'sub' => 'The Executive Commander', 'tag' => 'Executive', 'color' => '#087F8C', 'desc' => 'Orchestrates institutional capital and personnel toward aggressive milestone targets; decisive and macroscopic.', 'v1_lbl' => 'CONTROL (C)', 'v1_val' => 97, 'v2_lbl' => 'EXECUTION (E)', 'v2_val' => 95 ),
		array( 'code' => 'ENTP', 'num' => '04', 'sub' => 'The Visionary Catalyst', 'tag' => 'Catalytic', 'color' => '#16A6A1', 'desc' => 'Challenges dogma to pioneer counter-intuitive market propositions; thrives in high-entropy ambiguity.', 'v1_lbl' => 'ADAPTATION (A)', 'v1_val' => 96, 'v2_lbl' => 'FOCUS (F)', 'v2_val' => 84 ),
	),
	'human' => array(
		array( 'code' => 'INFJ', 'num' => '05', 'sub' => 'The Strategic Counselor', 'tag' => 'Counsel', 'color' => '#6842B8', 'desc' => 'Architect of long-term cultural alignment and tacit psychological dynamics; foresees organizational shifts.', 'v1_lbl' => 'FOCUS (F)', 'v1_val' => 92, 'v2_lbl' => 'ADAPTATION (A)', 'v2_val' => 87 ),
		array( 'code' => 'INFP', 'num' => '06', 'sub' => 'The Value Sentinel', 'tag' => 'Integrity', 'color' => '#8759C7', 'desc' => 'Protects institutional purpose and moral integrity; aligns organizational missions with deep-seated authenticity.', 'v1_lbl' => 'ADAPTATION (A)', 'v1_val' => 91, 'v2_lbl' => 'FOCUS (F)', 'v2_val' => 86 ),
		array( 'code' => 'ENFJ', 'num' => '07', 'sub' => 'The Culture Harmonizer', 'tag' => 'Sponsorship', 'color' => '#A23B78', 'desc' => 'Galvanizes multi-disciplinary teams around unified vision; masters executive sponsorship and interpersonal cohesion.', 'v1_lbl' => 'EXECUTION (E)', 'v1_val' => 93, 'v2_lbl' => 'CONTROL (C)', 'v2_val' => 85 ),
		array( 'code' => 'ENFP', 'num' => '08', 'sub' => 'The Agile Synthesizer', 'tag' => 'Synthesis', 'color' => '#C44778', 'desc' => 'Cross-pollinates disparate creative vectors into institutional breakthroughs; inspires high-momentum transformation.', 'v1_lbl' => 'ADAPTATION (A)', 'v1_val' => 97, 'v2_lbl' => 'EXECUTION (E)', 'v2_val' => 81 ),
	),
	'grounded' => array(
		array( 'code' => 'ISTJ', 'num' => '09', 'sub' => 'The Institutional Anchor', 'tag' => 'Governance', 'color' => '#2E7654', 'desc' => 'Guardians of operational predictability and regulatory excellence; delivers audit-proof governance with discipline.', 'v1_lbl' => 'CONTROL (C)', 'v1_val' => 98, 'v2_lbl' => 'EXECUTION (E)', 'v2_val' => 94 ),
		array( 'code' => 'ISFJ', 'num' => '10', 'sub' => 'The Trust Steward', 'tag' => 'Fidelity', 'color' => '#5B9272', 'desc' => 'Preserves organizational memory, stakeholder continuity, and team welfare; builds quiet, enduring stability.', 'v1_lbl' => 'CONTROL (C)', 'v1_val' => 91, 'v2_lbl' => 'EXECUTION (E)', 'v2_val' => 89 ),
		array( 'code' => 'ESTJ', 'num' => '11', 'sub' => 'The Operational Director', 'tag' => 'Operations', 'color' => '#188A62', 'desc' => 'Transforms strategy into deterministic operational SOPs and accountability cadences; drives high throughput.', 'v1_lbl' => 'EXECUTION (E)', 'v1_val' => 97, 'v2_lbl' => 'CONTROL (C)', 'v2_val' => 93 ),
		array( 'code' => 'ESFJ', 'num' => '12', 'sub' => 'The Enterprise Facilitator', 'tag' => 'Relational', 'color' => '#38A47A', 'desc' => 'Engineers high-functioning collaborative environments; ensures flawless client delivery through relational stewardship.', 'v1_lbl' => 'EXECUTION (E)', 'v1_val' => 91, 'v2_lbl' => 'ADAPTATION (A)', 'v2_val' => 83 ),
	),
	'adaptive' => array(
		array( 'code' => 'ISTP', 'num' => '13', 'sub' => 'The Tactical Artificer', 'tag' => 'Tactical', 'color' => '#B7871B', 'desc' => 'Troubleshoots mission-critical bottlenecks with surgical precision under extreme operational pressure.', 'v1_lbl' => 'ADAPTATION (A)', 'v1_val' => 95, 'v2_lbl' => 'FOCUS (F)', 'v2_val' => 88 ),
		array( 'code' => 'ISFP', 'num' => '14', 'sub' => 'The Resilient Craftsman', 'tag' => 'Craft', 'color' => '#C99518', 'desc' => 'Executes high-craft deliverables with acute situational sensitivity; responds dynamically to nuanced context.', 'v1_lbl' => 'ADAPTATION (A)', 'v1_val' => 93, 'v2_lbl' => 'EXECUTION (E)', 'v2_val' => 84 ),
		array( 'code' => 'ESTP', 'num' => '15', 'sub' => 'The High-Velocity Mobilizer', 'tag' => 'Velocity', 'color' => '#C66B2B', 'desc' => 'Navigates immediate crises and high-stakes negotiations through rapid reconnaissance; capitalizes on volatility.', 'v1_lbl' => 'EXECUTION (E)', 'v1_val' => 96, 'v2_lbl' => 'ADAPTATION (A)', 'v2_val' => 94 ),
		array( 'code' => 'ESFP', 'num' => '16', 'sub' => 'The Dynamic Operator', 'tag' => 'Kinetic', 'color' => '#D65A3A', 'desc' => 'Drives customer engagement and execution velocity; creates immediate momentum through high-energy presence.', 'v1_lbl' => 'EXECUTION (E)', 'v1_val' => 94, 'v2_lbl' => 'ADAPTATION (A)', 'v2_val' => 92 ),
	),
);
?>
<section class="w-full max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg py-space-lg space-y-space-xl" id="archetypeDirectory">
	<?php foreach ( $domains_config as $domain_key => $domain_info ) : ?>
		<div class="territory-group space-y-space-lg" data-territory="<?php echo esc_attr( $domain_key ); ?>">
			<!-- Territory Header -->
			<div class="bg-mist p-space-lg rounded-xl flex flex-col md:flex-row md:items-end justify-between gap-space-md border border-rule-grey">
				<div class="space-y-space-xs max-w-2xl">
					<div class="flex items-center gap-space-sm">
						<span class="w-3 h-3 rounded-full" style="background-color: <?php echo esc_attr( $domain_info['color'] ); ?>"></span>
						<span class="font-mono text-xs uppercase tracking-wider font-semibold" style="color: <?php echo esc_attr( $domain_info['color'] ); ?>">
							<?php echo esc_html( $domain_info['domain_id'] ); ?>
						</span>
					</div>
					<h2 class="font-headline text-2xl font-bold text-midnight"><?php echo esc_html( $domain_info['name'] ); ?></h2>
					<p class="font-body text-xs text-slate-subtle leading-relaxed"><?php echo esc_html( $domain_info['desc'] ); ?></p>
				</div>
				<div class="font-mono text-xs text-slate-subtle flex flex-col md:items-end shrink-0">
					<span class="text-midnight font-semibold"><?php echo esc_html( sprintf( __( 'DOMINANT: %s', 'core16' ), $domain_info['dominant'] ) ); ?></span>
					<span><?php esc_html_e( '4 ARCHETYPES • CALIBRATED v4.2', 'core16' ); ?></span>
				</div>
			</div>

			<!-- Cards Grid -->
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
				<?php
				$items = $fallback_profiles[ $domain_key ];
				foreach ( $items as $card ) :
					// Check if a real post exists for this archetype code
					$post_obj = null;
					if ( $profiles_query->have_posts() ) {
						foreach ( $profiles_query->posts as $p ) {
							$code = get_field( 'archetype_code', $p->ID );
							if ( $code === $card['code'] || $p->post_title === $card['code'] ) {
								$post_obj = $p;
								break;
							}
						}
					}

					$profile_link = $post_obj ? get_permalink( $post_obj->ID ) : add_query_arg( 'profile', $card['code'], home_url( '/profile/' . strtolower( $card['code'] ) . '/' ) );
					$display_title = $post_obj ? $post_obj->post_title : $card['code'];
					$subtitle = ( $post_obj && get_field( 'archetype_subtitle', $post_obj->ID ) ) ? get_field( 'archetype_subtitle', $post_obj->ID ) : $card['sub'];
					$desc = ( $post_obj && $post_obj->post_excerpt ) ? $post_obj->post_excerpt : $card['desc'];
					$v1_val = ( $post_obj && get_field( 'feca_focus', $post_obj->ID ) ) ? get_field( 'feca_focus', $post_obj->ID ) : $card['v1_val'];
					$v2_val = ( $post_obj && get_field( 'feca_execution', $post_obj->ID ) ) ? get_field( 'feca_execution', $post_obj->ID ) : $card['v2_val'];
				?>
					<article class="archetype-card bg-white border border-rule-grey rounded-xl p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
						<div class="absolute top-0 left-0 right-0 h-1" style="background-color: <?php echo esc_attr( $card['color'] ); ?>"></div>
						<div>
							<div class="flex justify-between items-start mb-space-md pt-space-xs">
								<div>
									<span class="font-mono text-xs font-semibold uppercase" style="color: <?php echo esc_attr( $card['color'] ); ?>">
										<?php echo esc_html( 'ARCHETYPE ' . $card['num'] ); ?>
									</span>
									<h3 class="font-headline text-2xl font-bold text-midnight tracking-tight mt-0.5"><?php echo esc_html( $card['code'] ); ?></h3>
								</div>
								<span class="px-2 py-0.5 rounded-full font-mono text-[11px] uppercase font-semibold" style="background-color: <?php echo esc_attr( $card['color'] ); ?>15; color: <?php echo esc_attr( $card['color'] ); ?>">
									<?php echo esc_html( $card['tag'] ); ?>
								</span>
							</div>

							<!-- SVG Figurine Graphic Container -->
							<div class="w-full h-36 bg-midnight rounded-lg p-space-sm mb-space-md flex items-center justify-center relative overflow-hidden">
								<div class="text-center font-mono text-white text-xs">
									<span class="material-symbols-outlined text-4xl block mb-1" style="color: <?php echo esc_attr( $card['color'] ); ?>">psychology</span>
									<span class="text-[10px] text-slate-300 uppercase"><?php echo esc_html( 'FIGURINE ARC-' . $card['num'] ); ?></span>
								</div>
								<div class="absolute bottom-2 right-3 font-mono text-[9px] text-[#FAFAF7]/70 uppercase">
									<?php echo esc_html( 'FIG. ' . $card['num'] ); ?>
								</div>
							</div>

							<h4 class="font-headline text-base font-semibold text-midnight mb-1"><?php echo esc_html( $subtitle ); ?></h4>
							<p class="font-body text-xs text-slate-subtle line-clamp-3 mb-space-md"><?php echo esc_html( $desc ); ?></p>

							<!-- Primary Metric Bars -->
							<div class="space-y-1.5 mb-space-lg bg-mist p-space-sm rounded-lg border border-rule-grey">
								<div class="flex items-center justify-between font-mono text-[11px] text-slate-subtle">
									<span><?php echo esc_html( $card['v1_lbl'] ); ?></span>
									<span class="text-midnight font-semibold"><?php echo esc_html( $v1_val . '%' ); ?></span>
								</div>
								<div class="w-full bg-rule-grey h-1.5 rounded-full overflow-hidden">
									<div class="h-full rounded-full" style="width: <?php echo esc_attr( $v1_val ); ?>%; background-color: <?php echo esc_attr( $card['color'] ); ?>;"></div>
								</div>
								<div class="flex items-center justify-between font-mono text-[11px] text-slate-subtle pt-1">
									<span><?php echo esc_html( $card['v2_lbl'] ); ?></span>
									<span class="text-midnight font-semibold"><?php echo esc_html( $v2_val . '%' ); ?></span>
								</div>
								<div class="w-full bg-rule-grey h-1.5 rounded-full overflow-hidden">
									<div class="h-full rounded-full" style="width: <?php echo esc_attr( $v2_val ); ?>%; background-color: <?php echo esc_attr( $card['color'] ); ?>;"></div>
								</div>
							</div>
						</div>

						<div class="pt-space-sm border-t border-rule-grey flex items-center justify-between">
							<span class="font-mono text-[11px] text-slate-subtle uppercase">ISO 10667-2</span>
							<a class="font-body text-xs font-semibold text-core-teal hover:underline inline-flex items-center gap-1" href="<?php echo esc_url( $profile_link ); ?>">
								<?php esc_html_e( 'View Dossier', 'core16' ); ?>
								<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
							</a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endforeach; ?>
</section>
