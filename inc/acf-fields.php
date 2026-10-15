<?php
/**
 * Register ACF Field Groups programmatically for Core16
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register ACF Field Groups if ACF is active
 */
function core16_register_acf_field_groups() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// ==========================================
	// 1. PROFILE DETAILS FIELD GROUP
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_core16_profile_details',
			'title'                 => __( 'Profile & Archetype Metrics', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_archetype_code',
					'label' => __( 'Archetype Code', 'core16' ),
					'name'  => 'archetype_code',
					'type'  => 'text',
					'instructions' => __( '4-letter code, e.g. INTJ, ENTP, etc.', 'core16' ),
				),
				array(
					'key'   => 'field_archetype_number',
					'label' => __( 'Archetype Index Number', 'core16' ),
					'name'  => 'archetype_number',
					'type'  => 'text',
					'instructions' => __( 'e.g. 01, 02, etc.', 'core16' ),
				),
				array(
					'key'   => 'field_archetype_subtitle',
					'label' => __( 'Archetype Title / Subtitle', 'core16' ),
					'name'  => 'archetype_subtitle',
					'type'  => 'text',
					'instructions' => __( 'e.g. The Strategic Architect, The Systems Theorist, etc.', 'core16' ),
				),
				array(
					'key'   => 'field_territory_tag',
					'label' => __( 'Territory Tag', 'core16' ),
					'name'  => 'territory_tag',
					'type'  => 'text',
					'instructions' => __( 'e.g. TERRITORY 01 // STRATEGIC & ANALYTICAL', 'core16' ),
				),
				array(
					'key'   => 'field_cognitive_polarity',
					'label' => __( 'Cognitive Polarity', 'core16' ),
					'name'  => 'cognitive_polarity',
					'type'  => 'text',
					'instructions' => __( 'e.g. High Independent Autonomy, Relational Resonator, etc.', 'core16' ),
				),
				array(
					'key'   => 'field_primary_driver',
					'label' => __( 'Primary Driver', 'core16' ),
					'name'  => 'primary_driver',
					'type'  => 'text',
					'instructions' => __( 'e.g. Systemic Structural Integrity', 'core16' ),
				),
				array(
					'key'   => 'field_boardroom_cadence',
					'label' => __( 'Boardroom Cadence', 'core16' ),
					'name'  => 'boardroom_cadence',
					'type'  => 'text',
					'instructions' => __( 'e.g. Deliberative Long-Horizon', 'core16' ),
				),
				array(
					'key'   => 'field_feca_focus',
					'label' => __( 'FECA Focus [F] (%)', 'core16' ),
					'name'  => 'feca_focus',
					'type'  => 'number',
					'min'   => 0,
					'max'   => 100,
				),
				array(
					'key'   => 'field_feca_execution',
					'label' => __( 'FECA Execution [E] (%)', 'core16' ),
					'name'  => 'feca_execution',
					'type'  => 'number',
					'min'   => 0,
					'max'   => 100,
				),
				array(
					'key'   => 'field_feca_control',
					'label' => __( 'FECA Control [C] (%)', 'core16' ),
					'name'  => 'feca_control',
					'type'  => 'number',
					'min'   => 0,
					'max'   => 100,
				),
				array(
					'key'   => 'field_feca_adaptation',
					'label' => __( 'FECA Adaptation [A] (%)', 'core16' ),
					'name'  => 'feca_adaptation',
					'type'  => 'number',
					'min'   => 0,
					'max'   => 100,
				),
				array(
					'key'   => 'field_calibration_coefficient',
					'label' => __( 'Calibration Coefficient (Alpha)', 'core16' ),
					'name'  => 'calibration_coefficient',
					'type'  => 'text',
					'default_value' => 'α = 0.942',
				),
				array(
					'key'   => 'field_cohort_frequency',
					'label' => __( 'Cohort Frequency', 'core16' ),
					'name'  => 'cohort_frequency',
					'type'  => 'text',
					'default_value' => '2.1%',
				),
				array(
					'key'   => 'field_figurine_image_url',
					'label' => __( 'Figurine 3D Image URL', 'core16' ),
					'name'  => 'figurine_image_url',
					'type'  => 'url',
				),
				array(
					'key'   => 'field_behavioral_summary',
					'label' => __( 'Behavioral Cadence Summary', 'core16' ),
					'name'  => 'behavioral_summary',
					'type'  => 'textarea',
					'rows'  => 3,
				),
				array(
					'key'   => 'field_derailer_warning',
					'label' => __( 'Crisis Derailer Warning', 'core16' ),
					'name'  => 'derailer_warning',
					'type'  => 'textarea',
					'rows'  => 3,
				),
				array(
					'key'   => 'field_dyad_alignment_ceo',
					'label' => __( 'Pairwise Alignment vs CEO (%)', 'core16' ),
					'name'  => 'dyad_alignment_ceo',
					'type'  => 'number',
					'default_value' => 89,
				),
				array(
					'key'   => 'field_dyad_alignment_cfo',
					'label' => __( 'Pairwise Dynamic vs CFO (%)', 'core16' ),
					'name'  => 'dyad_alignment_cfo',
					'type'  => 'number',
					'default_value' => 71,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'profile',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
		)
	);

	// ==========================================
	// 2. RESOURCE DETAILS FIELD GROUP
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_core16_resource_details',
			'title'                 => __( 'Publication Metadata', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_volume_issue',
					'label' => __( 'Volume / Issue', 'core16' ),
					'name'  => 'volume_issue',
					'type'  => 'text',
					'default_value' => 'Volume XIV • Issue 03',
				),
				array(
					'key'   => 'field_publication_badge',
					'label' => __( 'Badge / Type Label', 'core16' ),
					'name'  => 'publication_badge',
					'type'  => 'text',
					'default_value' => 'ORIGINAL RESEARCH ESSAY',
				),
				array(
					'key'   => 'field_reading_time',
					'label' => __( 'Estimated Reading Time', 'core16' ),
					'name'  => 'reading_time',
					'type'  => 'text',
					'default_value' => '12 MIN READ',
				),
				array(
					'key'   => 'field_issn_code',
					'label' => __( 'ISSN Identifier', 'core16' ),
					'name'  => 'issn_code',
					'type'  => 'text',
					'default_value' => 'ISSN 2841-9042',
				),
				array(
					'key'   => 'field_download_file_url',
					'label' => __( 'PDF Whitepaper Download URL', 'core16' ),
					'name'  => 'download_file_url',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_featured_status',
					'label' => __( 'Lead Featured Essay?', 'core16' ),
					'name'  => 'featured_status',
					'type'  => 'true_false',
					'ui'    => 1,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'resource',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
		)
	);

	// ==========================================
	// 3. EDITABLE HERO & SECTION FIELDS FOR HOW CORE16 WORKS
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_page_how_core16_works',
			'title'                 => __( 'How Core16 Works Settings', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_hcw_hero_badge',
					'label' => __( 'Hero Eyebrow Badge', 'core16' ),
					'name'  => 'hcw_hero_badge',
					'type'  => 'text',
					'default_value' => 'System Architecture // Normative Specification v4.2',
				),
				array(
					'key'   => 'field_hcw_hero_title',
					'label' => __( 'Hero Headline', 'core16' ),
					'name'  => 'hcw_hero_title',
					'type'  => 'text',
					'default_value' => 'From Cognitive Input to Actionable Human Insight.',
				),
				array(
					'key'   => 'field_hcw_hero_desc',
					'label' => __( 'Hero Narrative Description', 'core16' ),
					'name'  => 'hcw_hero_desc',
					'type'  => 'textarea',
					'rows'  => 3,
					'default_value' => 'A 12-minute psychometric evaluation designed with clinical test-retest reliability, eliminating gamification to measure executive cadence, cognitive stamina, and strategic variance.',
				),
				array(
					'key'   => 'field_hcw_stat_sample',
					'label' => __( 'Normative Sample Stat', 'core16' ),
					'name'  => 'hcw_stat_sample',
					'type'  => 'text',
					'default_value' => 'N=184,200',
				),
				array(
					'key'   => 'field_hcw_stat_retest',
					'label' => __( 'Test-Retest Stability Stat', 'core16' ),
					'name'  => 'hcw_stat_retest',
					'type'  => 'text',
					'default_value' => 'r = 0.94',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-how-core16-works.php',
					),
				),
			),
		)
	);

	// ==========================================
	// 4. EDITABLE FIELDS FOR INDIVIDUALS PAGE
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_page_individuals',
			'title'                 => __( 'Individuals Page Settings', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_ind_hero_badge',
					'label' => __( 'Hero Eyebrow Badge', 'core16' ),
					'name'  => 'ind_hero_badge',
					'type'  => 'text',
					'default_value' => 'PERSONAL TALENT ARCHITECTURE // INDIVIDUAL MASTERY',
				),
				array(
					'key'   => 'field_ind_hero_title',
					'label' => __( 'Hero Headline', 'core16' ),
					'name'  => 'ind_hero_title',
					'type'  => 'text',
					'default_value' => 'Clarity Today. Strategic Success Tomorrow.',
				),
				array(
					'key'   => 'field_ind_hero_desc',
					'label' => __( 'Hero Narrative Description', 'core16' ),
					'name'  => 'ind_hero_desc',
					'type'  => 'textarea',
					'rows'  => 3,
					'default_value' => 'Unlock high-resolution self-awareness to make decisive career maneuvers, master interpersonal power dynamics, and eliminate persistent cognitive blindspots.',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-individuals.php',
					),
				),
			),
		)
	);

	// ==========================================
	// 5. EDITABLE FIELDS FOR ENTERPRISE PAGE
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_page_enterprise',
			'title'                 => __( 'Enterprise Page Settings', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_ent_hero_badge',
					'label' => __( 'Hero Eyebrow Badge', 'core16' ),
					'name'  => 'ent_hero_badge',
					'type'  => 'text',
					'default_value' => 'ENTERPRISE TALENT INTELLIGENCE // C-SUITE ARCHITECTURE',
				),
				array(
					'key'   => 'field_ent_hero_title',
					'label' => __( 'Hero Headline', 'core16' ),
					'name'  => 'ent_hero_title',
					'type'  => 'text',
					'default_value' => 'Talent Intelligence & Organizational Design for High-Stakes Teams.',
				),
				array(
					'key'   => 'field_ent_hero_desc',
					'label' => __( 'Hero Narrative Description', 'core16' ),
					'name'  => 'ent_hero_desc',
					'type'  => 'textarea',
					'rows'  => 3,
					'default_value' => 'De-risk executive hires, optimize C-suite dynamics, and build resilient leadership pipelines with continuous psychometric modeling.',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-enterprise.php',
					),
				),
			),
		)
	);

	// ==========================================
	// 6. EDITABLE FIELDS FOR SCIENCE & METHODOLOGY PAGE
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_page_science_methodology',
			'title'                 => __( 'Science & Methodology Settings', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_sci_hero_badge',
					'label' => __( 'Hero Eyebrow Badge', 'core16' ),
					'name'  => 'sci_hero_badge',
					'type'  => 'text',
					'default_value' => 'PSYCHOMETRIC INTEGRITY // ISO 10667-2 PROTOCOL',
				),
				array(
					'key'   => 'field_sci_hero_title',
					'label' => __( 'Hero Headline', 'core16' ),
					'name'  => 'sci_hero_title',
					'type'  => 'text',
					'default_value' => 'Psychometric Architecture & Empirical Validation.',
				),
				array(
					'key'   => 'field_sci_hero_desc',
					'label' => __( 'Hero Narrative Description', 'core16' ),
					'name'  => 'sci_hero_desc',
					'type'  => 'textarea',
					'rows'  => 3,
					'default_value' => 'Core16 replaces antiquated binary typologies with continuous latent construct modeling, calibrated across a longitudinal executive cohort of N=184,200.',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-science-methodology.php',
					),
				),
			),
		)
	);

	// ==========================================
	// 7. EDITABLE FIELDS FOR ABOUT PAGE
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_page_about',
			'title'                 => __( 'About Page Settings', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_abt_hero_badge',
					'label' => __( 'Hero Eyebrow Badge', 'core16' ),
					'name'  => 'abt_hero_badge',
					'type'  => 'text',
					'default_value' => 'INSTITUTIONAL HERITAGE // FOUNDED IN EMPIRICISM',
				),
				array(
					'key'   => 'field_abt_hero_title',
					'label' => __( 'Hero Headline', 'core16' ),
					'name'  => 'abt_hero_title',
					'type'  => 'text',
					'default_value' => 'Credibility First. Individuality Second.',
				),
				array(
					'key'   => 'field_abt_hero_desc',
					'label' => __( 'Hero Narrative Description', 'core16' ),
					'name'  => 'abt_hero_desc',
					'type'  => 'textarea',
					'rows'  => 3,
					'default_value' => 'The corporate world has spent seven decades running high-stakes succession, capital allocation, and team design on 1940s parlor psychology. We built the normative instrument modern governance demands.',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-about.php',
					),
				),
			),
		)
	);

	// ==========================================
	// 8. EDITABLE FIELDS FOR SUPPORT PAGE
	// ==========================================
	acf_add_local_field_group(
		array(
			'key'                   => 'group_page_support',
			'title'                 => __( 'Support & Governance Settings', 'core16' ),
			'fields'                => array(
				array(
					'key'   => 'field_sup_hero_badge',
					'label' => __( 'Hero Eyebrow Badge', 'core16' ),
					'name'  => 'sup_hero_badge',
					'type'  => 'text',
					'default_value' => 'GOVERNANCE & HELP CENTER // SOVEREIGN SECURITY',
				),
				array(
					'key'   => 'field_sup_hero_title',
					'label' => __( 'Hero Headline', 'core16' ),
					'name'  => 'sup_hero_title',
					'type'  => 'text',
					'default_value' => 'Support & Legal Governance.',
				),
				array(
					'key'   => 'field_sup_hero_desc',
					'label' => __( 'Hero Narrative Description', 'core16' ),
					'name'  => 'sup_hero_desc',
					'type'  => 'textarea',
					'rows'  => 3,
					'default_value' => 'Access technical documentation, psychometric validation certificates, and institutional inquiries.',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-support.php',
					),
				),
			),
		)
	);
}
add_action( 'acf/init', 'core16_register_acf_field_groups' );
