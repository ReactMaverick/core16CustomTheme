<?php
/**
 * Profile Dossier Comprehensive Data & Dynamic Extraction Helper
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return master dataset for all 16 Core16 archetypes.
 *
 * @return array
 */
function core16_get_all_archetypes_dictionary() {
	return array(
		'INTJ' => array(
			'code'               => 'INTJ',
			'index_num'          => '01',
			'title'              => 'The Strategic Architect',
			'domain_slug'        => 'strategist',
			'domain_name'        => 'Strategists',
			'territory'          => 'TERRITORY 01 // STRATEGIC & ANALYTICAL',
			'lead_summary'       => 'Synthesizes multi-horizon complex systems into deterministic strategic blueprints. Operates with extreme deliberative independence, emotional neutrality, and structural rigor under severe organizational ambiguity.',
			'polarity'           => 'High Independent Autonomy',
			'driver'             => 'Systemic Structural Integrity',
			'cadence'            => 'Deliberative Long-Horizon',
			'calibration_coeff'  => 'α = 0.942 (EXTREME)',
			'calibration_val'    => 94,
			'ci_band'            => '95% CI [0.91 — 0.97]',
			'cohort_freq'        => '2.1%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',

			// Section 01
			'overview_headline'  => 'Systemic Deconstruction and Deterministic Long-Horizon Governance',
			'pullquote'          => '“The Architect does not merely optimize an enterprise process; they dismantle foundational organizational axioms to construct self-reinforcing, resilient systemic architectures that outlast transient cycles.”',
			'narrative'          => 'In executive contexts, the INTJ archetype functions as an intellectual sovereign. They exhibit an uncommon immunity to consensus pressure, political appeasement, and short-term tactical panics. Instead, their cognitive bandwidth is almost exclusively dedicated to mapping complex multi-variable environments into clean, predictive, and execute-ready trajectories.',
			'axioms'             => array(
				array(
					'num'   => '01',
					'title' => 'First-Principles Deconstruction',
					'desc'  => 'Refuses legacy dogma; rigorously tests assumptions against thermodynamic and balance-sheet realities before committing capital.',
					'eval'  => 'EVAL: UNCOMPROMISING',
				),
				array(
					'num'   => '02',
					'title' => 'Low Social Desirability Bias',
					'desc'  => 'Values systemic truth and metric fidelity significantly above interpersonal consensus, ensuring unbiased enterprise audits.',
					'eval'  => 'EVAL: OBJECTIVE ANCHOR',
				),
				array(
					'num'   => '03',
					'title' => 'Long-Horizon Allocation',
					'desc'  => 'Willing to endure short-term operational frictions in exchange for compound structural dominance on 3- to 10-year horizons.',
					'eval'  => 'EVAL: MACRO-STRATEGIC',
				),
			),
			'dna_matrix'         => array(
				'energy'    => 'Autonomous Internal Synthesis',
				'decision'  => 'Deterministic Causality',
				'decomp'    => 'Solitary Deep Conceptualization',
				'boardroom' => 'Incisive, Interrogative Anchor',
				'conflict'  => 'Dispassionate Evidentiary Debate',
			),
			'calibrator'         => array(
				'headline' => 'Top 2.1% Strategic Deliberation',
				'desc'     => 'Outperforms 97.9% of executive cohort N=184,200 on multi-variable complexity mapping and cognitive patience during systemic crisis.',
				'variance' => '±1.8%',
				'sample'   => 'C-SUITE / PARTNERS',
			),

			// Section 02 - FECA
			'feca'               => array(
				'focus'        => array( 'score' => 82, 'low' => 78, 'high' => 86, 'desc' => 'Hyper-Deep Analytical Synthesis & Sustained Monotasking under noise.' ),
				'execution'    => array( 'score' => 71, 'low' => 67, 'high' => 75, 'desc' => 'Deliberate Structural Execution over Rapid Heuristic Velocity.' ),
				'control'      => array( 'score' => 89, 'low' => 85, 'high' => 93, 'desc' => 'Deterministic Governance, Process Sovereignty & Risk Elimination.' ),
				'adaptability' => array( 'score' => 76, 'low' => 71, 'high' => 81, 'desc' => 'Calculated Tactical Adaptation Grounded in Empirical Justification.' ),
			),
			'reliability'        => array(
				'alpha'    => 'α = 0.912',
				'sem'      => '±1.48',
				'retest'   => 'r = 0.89',
			),

			// Section 03 - Strengths & Watchpoints
			'strengths'          => array(
				array(
					'title'         => '1. Macro-Architectural Foresight',
					'tag'           => 'Optimal Drive',
					'desc'          => 'Inherent capacity to anticipate second- and third-order operational collisions 18 to 36 months ahead of standard committee roadmaps.',
					'manifestation' => 'Formulates bulletproof competitive moats and technology architecture bets.',
				),
				array(
					'title'         => '2. Deliberative Independence Under Pressure',
					'tag'           => 'High Impact',
					'desc'          => 'Does not succumb to herd mentality, irrational market exuberance, or executive boardroom groupthink.',
					'manifestation' => 'Acts as the ultimate sanity check during hyper-acquisitive or manic expansion phases.',
				),
				array(
					'title'         => '3. First-Order Capital Efficiency',
					'tag'           => 'Systemic Rigor',
					'desc'          => 'Instinctively purges organizational bloat, non-performing subsidiary initiatives, and cosmetic operational vanity projects.',
					'manifestation' => 'Generates lean unit economics and highly disciplined capital re-investment ratios.',
				),
				array(
					'title'         => '4. Uncompromising Intellectual Rigor',
					'tag'           => 'Systemic Rigor',
					'desc'          => 'Maintains zero tolerance for sloppy quantitative methodology, vanity metrics, or anecdotal reporting in executive reviews.',
					'manifestation' => 'Instills high analytical fidelity across all reporting managers and operating divisions.',
				),
			),
			'watchpoints'        => array(
				array(
					'title'       => '1. Compression of Stakeholder Context',
					'category'    => 'Communication',
					'desc'        => 'Assumes underlying strategic context is self-evident; issues terse final mandates without bringing cross-functional peers through the logic bridge.',
					'remediation' => 'Mandate standardized "Context-Decision-Impact" executive memos prior to vote.',
				),
				array(
					'title'       => '2. Resistance to Fluid Heuristic Pivots',
					'category'    => 'Adaptability',
					'desc'        => 'May resist short-term opportunism if it disrupts the elegant purity of the master 5-year architecture, potentially missing fleeting windfalls.',
					'remediation' => 'Pair with an agile catalyst co-pilot empowered to trigger 10% tactical balance reserves.',
				),
				array(
					'title'       => '3. Impatience with Consensus Protocols',
					'category'    => 'Alignment',
					'desc'        => 'Finds diplomatic alignment rounds exhausting; risks alienating key institutional committee members by prematurely dismissing political sensitivities.',
					'remediation' => 'Delegate pre-alignment lobbying to Chief of Staff or Head of Investor Relations.',
				),
				array(
					'title'       => '4. Under-Leveraging Relational Capital',
					'category'    => 'Leadership',
					'desc'        => 'Relies almost purely on intellectual authority and technical correctness, neglecting the emotional and motivational reserves required to inspire teams.',
					'remediation' => 'Institute bi-weekly structural recognition touchpoints focused on human capital contribution.',
				),
			),

			// Section 04 - Interpersonal & Dyads
			'interface_rules'    => array(
				array( 'title' => 'Bottom-Line First:', 'desc' => 'State the strategic conclusion and required resource allocation in the opening 30 seconds.' ),
				array( 'title' => 'Written Over Synchronous:', 'desc' => 'Provide asynchronous briefing papers 24 hours prior; they process deep nuance through text.' ),
				array( 'title' => 'Challenge via Causality:', 'desc' => 'Do not appeal to hierarchy or tradition; refute their thesis exclusively with counter-data.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: 2-PAGE EXECUTIVE PRD',
			'dyads'              => array(
				'synergy'    => array(
					'pair'  => 'INTJ + ENFP (Catalyst)',
					'tag'   => 'HIGH SYNERGY',
					'desc'  => 'ENFP supplies divergent commercial ideation; INTJ selects and rigorously builds systemic scaffolding around the best vector.',
				),
				'friction'   => array(
					'pair'  => 'INTJ + ESFJ (Facilitator)',
					'tag'   => 'HIGH FRICTION',
					'desc'  => 'Friction arises when social harmony protocols collide with INTJ dispassionate organizational restructuring demands.',
				),
				'drift_risk' => 'DYAD DRIFT RISK: 18% UNDER UNRESOLVED TARGETS',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Audit & Risk Committee Chair:', 'desc' => 'Natural peer reviewer for enterprise risk, cyber readiness, and capital covenants.' ),
				array( 'title' => 'M&A Integration Architect:', 'desc' => 'Excels at uncovering hidden operational debt and post-merger integration fault lines.' ),
				array( 'title' => 'Succession Design:', 'desc' => 'Establishes objective metric-based talent hurdles devoid of relational favoritism.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: MAXIMUM',

			// Section 05 - 90-Day Plan
			'coaching_protocol'  => 'COACHING PROTOCOL: ARCH-EX-90',
			'growth_phases'      => array(
				array(
					'days'        => 'DAYS 01 — 30',
					'title'       => 'Relational Horizon Expansion',
					'desc'        => 'Identify 3 critical non-analytical stakeholders. Institute bi-weekly 20-minute contextual listening sessions with zero prescriptive task agendas to build social equity.',
					'deliverable' => 'Stakeholder Motivation Matrix',
				),
				array(
					'days'        => 'DAYS 31 — 60',
					'title'       => 'Strategic Delegation Framework',
					'desc'        => 'Transition from personally architecting all tactical components to authoring clear "Intent Briefs" that allow operational deputies to formulate solutions independently.',
					'deliverable' => '3 Autonomous Operating Briefs',
				),
				array(
					'days'        => 'DAYS 61 — 90',
					'title'       => 'Cognitive Cadence Balancing',
					'desc'        => 'Incorporate dedicated "white space" buffers into weekly schedules to prevent analytical burnout and allow intuitive macro-synthesis to crystallize naturally.',
					'deliverable' => 'Protected Cadence Audit',
				),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate INTJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Deploy full organizational battery testing across executive committees to identify strategic frictions, blindspots, and cognitive imbalances before capital allocation votes.',
			),
		),

		'ENTJ' => array(
			'code'               => 'ENTJ',
			'index_num'          => '02',
			'title'              => 'The Executive Commander',
			'domain_slug'        => 'strategist',
			'domain_name'        => 'Strategists',
			'territory'          => 'TERRITORY 01 // STRATEGIC & DIRECTIVE',
			'lead_summary'       => 'Mobilizes institutional resources to aggressively conquer market territory and execute large-scale organizational transformations with unwavering momentum and structural clarity.',
			'polarity'           => 'High External Drive',
			'driver'             => 'Competitive Market Supremacy',
			'cadence'            => 'High-Velocity Command',
			'calibration_coeff'  => 'α = 0.938 (VERY HIGH)',
			'calibration_val'    => 92,
			'ci_band'            => '95% CI [0.89 — 0.96]',
			'cohort_freq'        => '1.8%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'High-Velocity Enterprise Mobilization and Decisive Market Execution',
			'pullquote'          => '“The Commander translates strategic vision into aggressive operational tempo, relentlessly dismantling execution bottlenecks and driving compound corporate performance.”',
			'narrative'          => 'The ENTJ operates with formidable executive presence. They cut through organizational inertia, eliminate procedural redundancies, and hold leaders strictly accountable to quantitative benchmarks.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Ruthless Objective Prioritization', 'desc' => 'Filters every institutional resource through its direct return on strategic mission.', 'eval' => 'EVAL: VELOCITY DRIVEN' ),
				array( 'num' => '02', 'title' => 'Structural Accountability', 'desc' => 'Establishes clear chains of command and unambiguous KPIs across all business divisions.', 'eval' => 'EVAL: DIRECTIVE' ),
				array( 'num' => '03', 'title' => 'Aggressive Growth Orientation', 'desc' => 'Capitalizes on market disruptions to expand institutional territory and outflank competitors.', 'eval' => 'EVAL: EXPANSIVE' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Extroverted Directive Command',
				'decision'  => 'Decisive Empirical ROI',
				'decomp'    => 'Competitive Athletics & Strategic Gaming',
				'boardroom' => 'Direct, Authoritative Driver',
				'conflict'  => 'Direct Head-On Confrontation',
			),
			'calibrator'         => array(
				'headline' => 'Top 1.8% Executive Velocity',
				'desc'     => 'Outperforms 98.2% of executive cohorts in crisis decision latency and organizational realignment velocity.',
				'variance' => '±1.6%',
				'sample'   => 'CEOS / MANAGING DIRECTORS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 90, 'low' => 85, 'high' => 93, 'desc' => 'Strategic Horizon Clarity with High Commercial Pragmatism.' ),
				'execution'    => array( 'score' => 98, 'low' => 95, 'high' => 99, 'desc' => 'Relentless Operational Throughput and P&L Maximization.' ),
				'control'      => array( 'score' => 91, 'low' => 87, 'high' => 94, 'desc' => 'Command & Control Frameworks with Strict Milestones.' ),
				'adaptability' => array( 'score' => 58, 'low' => 52, 'high' => 64, 'desc' => 'Disciplined Pivots Strictly Aligned with Core Mission.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.924', 'sem' => '±1.35', 'retest' => 'r = 0.91' ),
			'strengths'          => array(
				array( 'title' => '1. Decisive Capital Mobilization', 'tag' => 'Optimal Drive', 'desc' => 'Executes massive resource reallocations without hesitation or second-guessing.', 'manifestation' => 'Spearheads high-stakes turnaround transformations.' ),
				array( 'title' => '2. Meritocratic Performance Culture', 'tag' => 'High Impact', 'desc' => 'Eliminates cronyism and rewards top performers strictly on output and value creation.', 'manifestation' => 'Builds high-caliber, high-output executive teams.' ),
				array( 'title' => '3. Macro Strategic Vision', 'tag' => 'Systemic Rigor', 'desc' => 'Anticipates market consolidation trends and establishes defensible industry dominance.', 'manifestation' => 'Engineers successful programmatic M&A strategies.' ),
				array( 'title' => '4. Rapid Crisis Resolution', 'tag' => 'Velocity Drive', 'desc' => 'Steps into organizational voids to restore stability and decisive direction under panic.', 'manifestation' => 'Guides enterprises through macro economic shocks.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Premature Dismissal of Nuance', 'category' => 'Leadership', 'desc' => 'May steamroll subtle operational concerns in favor of rapid pace.', 'remediation' => 'Appoint designated red-team devil’s advocates.' ),
				array( 'title' => '2. Perceived Interpersonal Harshness', 'category' => 'Communication', 'desc' => 'Blunt feedback cadence risks demoralizing sensitive key performers.', 'remediation' => 'Utilize executive coaching on constructive feedback protocols.' ),
				array( 'title' => '3. Burnout Acceleration', 'category' => 'Culture', 'desc' => 'Expects peer executives to match unsustainable personal work capacities.', 'remediation' => 'Establish mandatory corporate recovery rhythms.' ),
				array( 'title' => '4. Resistance to Counter-Narratives', 'category' => 'Governance', 'desc' => 'Strong convictions can make disconfirming evidence difficult to penetrate.', 'remediation' => 'Mandate third-party independent audits before major investments.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Action Over Theory:', 'desc' => 'Present decision memos with actionable alternatives and quantified risk tradeoffs.' ),
				array( 'title' => 'Direct Conciseness:', 'desc' => 'Skip preambles; arrive at the financial and operational bottom line immediately.' ),
				array( 'title' => 'Own the Commitment:', 'desc' => 'Never promise timelines without complete operational accountability.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: 1-PAGE EXECUTIVE DECISION MATRIX',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ENTJ + INTP (Theorist)', 'tag' => 'HIGH SYNERGY', 'desc' => 'INTP provides flawless logical rigor and stress-testing; ENTJ drives commercial execution.' ),
				'friction'   => array( 'pair' => 'ENTJ + ISFP (Artisan)', 'tag' => 'HIGH FRICTION', 'desc' => 'Direct command style clashes with value-driven individualist pace and sensitivity.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 15% UNDER COMPETING AUTHORITY',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Executive Committee Chairman:', 'desc' => 'Drives boardroom consensus to rapid, actionable resolutions.' ),
				array( 'title' => 'Chief Executive Officer:', 'desc' => 'Mobilizes entire enterprise hierarchy behind strategic growth objectives.' ),
				array( 'title' => 'Turnaround Lead:', 'desc' => 'Restructures insolvent or underperforming assets with surgical precision.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: ULTRA HIGH',
			'coaching_protocol'  => 'COACHING PROTOCOL: COMM-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Empathetic Active Inquiry', 'desc' => 'Implement structured listening rounds before issuing directional directives.', 'deliverable' => 'Team Sentiment Assessment' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Decentralized Decision Delegation', 'desc' => 'Empower division heads to execute without requiring centralized C-suite sign-off.', 'deliverable' => 'Decentralization Authority Charter' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Long-Horizon Culture Investment', 'desc' => 'Invest in talent pipeline mentorship and succession resilience frameworks.', 'deliverable' => 'Executive Talent Roadmap' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ENTJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Map executive command styles to optimize enterprise alignment and eliminate leadership friction points.',
			),
		),

		'INTP' => array(
			'code'               => 'INTP',
			'index_num'          => '03',
			'title'              => 'The Systems Theorist',
			'domain_slug'        => 'strategist',
			'domain_name'        => 'Strategists',
			'territory'          => 'TERRITORY 01 // ANALYTICAL & SPECULATIVE',
			'lead_summary'       => 'Dissects technical topologies to formulate novel conceptual paradigms, uncovering hidden architectural flaws before capital or code is deployed.',
			'polarity'           => 'Pure Deliberation',
			'driver'             => 'Architectural Precision',
			'cadence'            => 'Asynchronous Analytical',
			'calibration_coeff'  => 'α = 0.935 (HIGH)',
			'calibration_val'    => 90,
			'ci_band'            => '95% CI [0.88 — 0.95]',
			'cohort_freq'        => '3.3%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'First-Principles Deconstruction and Foundational Structural Integrity',
			'pullquote'          => '“The Theorist builds internal axiomatic models of reality so precise that institutional blindspots become mathematically obvious.”',
			'narrative'          => 'The INTP is the supreme system debugger. Operating without ego or attachment to legacy solutions, they identify fundamental inconsistencies in product architectures and strategic assumptions.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Unrelenting Axiomatic Scrutiny', 'desc' => 'Requires every premise to be verified from base logical truths.', 'eval' => 'EVAL: FORENSIC' ),
				array( 'num' => '02', 'title' => 'Detached Dispassionate Analysis', 'desc' => 'Separates emotional attachments from system effectiveness.', 'eval' => 'EVAL: UNBIASED' ),
				array( 'num' => '03', 'title' => 'Combinatorial Innovation', 'desc' => 'Synthesizes frameworks from disparate domains to engineer novel solutions.', 'eval' => 'EVAL: EXPLORATORY' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Quiet Asynchronous Processing',
				'decision'  => 'Axiomatic Deductive Logic',
				'decomp'    => 'Independent Research & Coding',
				'boardroom' => 'Quiet Socratic Inquirer',
				'conflict'  => 'Analytical Deconstruction',
			),
			'calibrator'         => array(
				'headline' => 'Top 3.3% Axiomatic Reasoning',
				'desc'     => 'Unsurpassed in uncovering multi-tiered structural failure points prior to capital commitment.',
				'variance' => '±2.0%',
				'sample'   => 'CTOS / CHIEF SCIENTISTS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 94, 'low' => 90, 'high' => 97, 'desc' => 'Monotropic Theoretical Depth with Immense Focus Capacity.' ),
				'execution'    => array( 'score' => 68, 'low' => 62, 'high' => 74, 'desc' => 'Pragmatic Prototype Formulation Over Routine Administration.' ),
				'control'      => array( 'score' => 80, 'low' => 75, 'high' => 85, 'desc' => 'Rigorous Logical Consistency and Architectural Boundary Control.' ),
				'adaptability' => array( 'score' => 74, 'low' => 68, 'high' => 80, 'desc' => 'Fluid Conceptual Exploration across Dynamic Problem Spaces.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.908', 'sem' => '±1.55', 'retest' => 'r = 0.88' ),
			'strengths'          => array(
				array( 'title' => '1. Flawless Structural Diagnosis', 'tag' => 'Systemic Rigor', 'desc' => 'Pinpoints hidden failure points in complex technological topologies.', 'manifestation' => 'Prevents catastrophic software and engineering failures.' ),
				array( 'title' => '2. Zero Confirmation Bias', 'tag' => 'Optimal Drive', 'desc' => 'Gladly discards personal theories the instant counter-evidence emerges.', 'manifestation' => 'Ensures research and development accuracy.' ),
				array( 'title' => '3. Elegant Algorithmic Design', 'tag' => 'High Impact', 'desc' => 'Creates hyper-efficient frameworks with minimum operational friction.', 'manifestation' => 'Builds scalable core technology platforms.' ),
				array( 'title' => '4. Forensic Problem Deconstruction', 'tag' => 'Systemic Rigor', 'desc' => 'Breaks insurmountable bottlenecks down into solvable mathematical vectors.', 'manifestation' => 'Unlocks blocked institutional initiatives.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Analysis Paralysis', 'category' => 'Execution', 'desc' => 'Prefers refining theoretical perfection over commercial release.', 'remediation' => 'Set strict prototype freeze milestones.' ),
				array( 'title' => '2. Apathy Toward Political Hierarchy', 'category' => 'Alignment', 'desc' => 'Ignores corporate protocol, creating friction with traditional managers.', 'remediation' => 'Pair with an operational sponsor.' ),
				array( 'title' => '3. Under-Communicating Interim States', 'category' => 'Communication', 'desc' => 'Works silently until finished, leaving stakeholders in the dark.', 'remediation' => 'Establish weekly asynchronous demo checkpoints.' ),
				array( 'title' => '4. Reluctance to Direct People', 'category' => 'Leadership', 'desc' => 'Resents bureaucratic supervision duties.', 'remediation' => 'Position as Principal Fellow rather than line manager.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Written Specifications:', 'desc' => 'Provide clear asynchronous problem definitions rather than vague meetings.' ),
				array( 'title' => 'Respect Uninterrupted Focus:', 'desc' => 'Block calendar slots for deep architectural work without meetings.' ),
				array( 'title' => 'Debate on Merit:', 'desc' => 'Defend proposals with technical facts rather than executive rank.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: TECHNICAL WHITEPAPER & RFC',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'INTP + ENTJ (Commander)', 'tag' => 'HIGH SYNERGY', 'desc' => 'INTP validates foundational logic; ENTJ scales and drives market commercialization.' ),
				'friction'   => array( 'pair' => 'INTP + ESFJ (Facilitator)', 'tag' => 'HIGH FRICTION', 'desc' => 'Rigid social formalities clash with relentless objective truth-seeking.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 22% UNDER RUSHED TIMELINES',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Technology Architect:', 'desc' => 'Oversees technical integrity and infrastructure scalability.' ),
				array( 'title' => 'Principal Research Fellow:', 'desc' => 'Explores breakthrough technologies to secure future enterprise moats.' ),
				array( 'title' => 'Algorithmic Risk Reviewer:', 'desc' => 'Audits complex automated financial and algorithmic models.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: SPECIALIST HIGH',
			'coaching_protocol'  => 'COACHING PROTOCOL: THEOR-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Commercial Constraint Adoption', 'desc' => 'Integrate commercial delivery deadlines into early model construction.', 'deliverable' => 'MVP Definition Document' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Stakeholder Translation Sprints', 'desc' => 'Distill complex technical findings into executive-ready executive summaries.', 'deliverable' => '3 Non-Technical Architecture Briefs' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Mentorship Architecture', 'desc' => 'Mentor junior technical leads in first-principles decomposition.', 'deliverable' => 'Internal Technical RFC Standard' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate INTP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Bridge the gap between visionary execution and core engineering architecture.',
			),
		),

		'ENTP' => array(
			'code'               => 'ENTP',
			'index_num'          => '04',
			'title'              => 'The Visionary Challenger',
			'domain_slug'        => 'strategist',
			'domain_name'        => 'Strategists',
			'territory'          => 'TERRITORY 02 // DYNAMIC & INNOVATIVE',
			'lead_summary'       => 'Disrupts industry orthodoxy through relentless lateral hypothesis testing, cross-pollinating disparate domains into breakthrough commercial vectors.',
			'polarity'           => 'Expansive External',
			'driver'             => 'Paradigm Disruption',
			'cadence'            => 'Agile Heuristic',
			'calibration_coeff'  => 'α = 0.915 (OPTIMAL)',
			'calibration_val'    => 88,
			'ci_band'            => '95% CI [0.86 — 0.94]',
			'cohort_freq'        => '3.2%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Combinatorial Innovation and Relentless Dialectical Disruption',
			'pullquote'          => '“The Challenger does not accept established limits; they invert standard operating equations to uncover entirely new market frontiers.”',
			'narrative'          => 'The ENTP thrives in dynamic, uncharted waters. By challenging unexamined industry orthodoxies and proposing counter-intuitive models, they keep enterprises ahead of market disruptions.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Dialectical Stress Testing', 'desc' => 'Argues opposing viewpoints to uncover weaknesses in institutional consensus.', 'eval' => 'EVAL: PROVOCATIVE' ),
				array( 'num' => '02', 'title' => 'Lateral Combinatorial Insight', 'desc' => 'Bridges distant disciplines to create unexpected product breakthroughs.', 'eval' => 'EVAL: EXPANSIVE' ),
				array( 'num' => '03', 'title' => 'High Ambiguity Appetite', 'desc' => 'Operates effortlessly without detailed roadmaps or predefined operating steps.', 'eval' => 'EVAL: HEURISTIC' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'High-Frequency Lateral Ideation',
				'decision'  => 'Dynamic Opportunity Arbitrage',
				'decomp'    => 'Debate, Prototyping & Exploration',
				'boardroom' => 'Provocative Catalyst',
				'conflict'  => 'Spirited Intellectual Sparring',
			),
			'calibrator'         => array(
				'headline' => 'Top 3.2% Disruption Acuity',
				'desc'     => 'Unmatched in spotting unconventional business model shifts and emerging tech waves.',
				'variance' => '±2.2%',
				'sample'   => 'VENTURE BUILDERS / CHIEF INNOVATION OFFICERS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 78, 'low' => 72, 'high' => 84, 'desc' => 'Dynamic Situational Scanning across Multiple Emerging Horizons.' ),
				'execution'    => array( 'score' => 76, 'low' => 70, 'high' => 82, 'desc' => 'Rapid Prototype Incubation and Zero-to-One Vector Launch.' ),
				'control'      => array( 'score' => 55, 'low' => 48, 'high' => 62, 'desc' => 'Flexible Governance Designed for Rapid Iterative Discovery.' ),
				'adaptability' => array( 'score' => 95, 'low' => 91, 'high' => 98, 'desc' => 'Unrestricted Pivot Capability under High Market Volatility.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.895', 'sem' => '±1.62', 'retest' => 'r = 0.86' ),
			'strengths'          => array(
				array( 'title' => '1. Zero-to-One Vector Creation', 'tag' => 'Optimal Drive', 'desc' => 'Launches revolutionary business lines from nascent market trends.', 'manifestation' => 'Pioneers new company categories.' ),
				array( 'title' => '2. Relentless Intellectual Elasticity', 'tag' => 'High Impact', 'desc' => 'Pivots business models instantly when market evidence demands it.', 'manifestation' => 'Prevents institutional stagnation.' ),
				array( 'title' => '3. Persuasive Narrative Energy', 'tag' => 'Systemic Rigor', 'desc' => 'Captivates investors and partners with transformative visions of the future.', 'manifestation' => 'Closes major venture rounds and strategic partnerships.' ),
				array( 'title' => '4. Anti-Fragile Crisis Response', 'tag' => 'Optimal Drive', 'desc' => 'Finds creative upside and strategic arbitrage in economic chaos.', 'manifestation' => 'Turns industry downturns into expansion opportunities.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Follow-Through Fatigue', 'category' => 'Execution', 'desc' => 'Loses interest once the conceptual model is validated, neglecting scale.', 'remediation' => 'Pair with a dedicated Chief Operating Officer.' ),
				array( 'title' => '2. Continuous Redesign Traps', 'category' => 'Control', 'desc' => 'Constantly tinkers with systems, disrupting operational stability.', 'remediation' => 'Implement strict code/feature freeze windows.' ),
				array( 'title' => '3. Argumentative Fatigue', 'category' => 'Leadership', 'desc' => 'Exhausts team members with endless intellectual debates.', 'remediation' => 'Establish boundaries between brainstorming and execution.' ),
				array( 'title' => '4. Overconfidence in Improvisation', 'category' => 'Governance', 'desc' => 'Under-prepares detailed risk compliance filings.', 'remediation' => 'Mandate oversight by compliance counsel.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Brainstorm Before Locking:', 'desc' => 'Involve early in concept generation before freezing specifications.' ),
				array( 'title' => 'Focus on Possibility:', 'desc' => 'Discuss upside growth potential rather than bureaucratic process limits.' ),
				array( 'title' => 'Clear Execution Hand-offs:', 'desc' => 'Define exact operational transfer gates to operational teams.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: CONCEPT DECK & INTERACTIVE PROTOTYPE',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ENTP + INTJ (Architect)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ENTP discovers disruptive vectors; INTJ engineers immutable systemic architecture.' ),
				'friction'   => array( 'pair' => 'ENTP + ISTJ (Anchor)', 'tag' => 'HIGH FRICTION', 'desc' => 'Clash between radical experimentation and immutable regulatory protocol.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 25% UNDER RIGID REGULATION',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Innovation Officer:', 'desc' => 'Leads disruptive ventures and internal venture incubation.' ),
				array( 'title' => 'Growth & M&A Scout:', 'desc' => 'Identifies asymmetric acquisition opportunities before competitors.' ),
				array( 'title' => 'Special Projects Lead:', 'desc' => 'Solves acute non-linear challenges facing the C-suite.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: DISRUPTIVE HIGH',
			'coaching_protocol'  => 'COACHING PROTOCOL: CHAL-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Execution Filter Calibration', 'desc' => 'Establish strict ROI gating criteria before launching exploratory projects.', 'deliverable' => 'Exploration Gating Charter' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Operational Handoff Protocols', 'desc' => 'Standardize handoffs between R&D skunkworks and mainstream operations.', 'deliverable' => 'Scale-Transfer Playbook' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Deliberate Cadence Slowdown', 'desc' => 'Practice holding strategic ground without initiating immediate redesigns.', 'deliverable' => 'Stabilization Review Audit' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ENTP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Harness disruptive ideation into structured enterprise growth channels.',
			),
		),

		'INFJ' => array(
			'code'               => 'INFJ',
			'index_num'          => '05',
			'title'              => 'The Strategic Counselor',
			'domain_slug'        => 'human-centric',
			'domain_name'        => 'Human-Centric & Cognitive',
			'territory'          => 'TERRITORY 03 // HUMAN CENTRIC & COGNITIVE',
			'lead_summary'       => 'Navigates unspoken institutional currents and cultural trajectories to build deep organizational resilience and mission alignment.',
			'polarity'           => 'Reflective Synthesis',
			'driver'             => 'Institutional Mission Integrity',
			'cadence'            => 'Long-Range Deliberation',
			'calibration_coeff'  => 'α = 0.932 (HIGH)',
			'calibration_val'    => 91,
			'ci_band'            => '95% CI [0.89 — 0.95]',
			'cohort_freq'        => '1.5%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Human Architecture and Multi-Horizon Institutional Purpose',
			'pullquote'          => '“The Counselor detects organizational fractures long before they register on operational dashboards, aligning leadership around enduring institutional ethics.”',
			'narrative'          => 'The INFJ brings profound insight into human dynamics and organizational values. They harmonize high-level strategic direction with authentic human engagement.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Deep Cultural Diagnostics', 'desc' => 'Decodes latent team tensions and moral misalignment with ease.', 'eval' => 'EVAL: EMPATHIC' ),
				array( 'num' => '02', 'title' => 'Purpose-Driven Governance', 'desc' => 'Insists that corporate action adheres strictly to foundational mission.', 'eval' => 'EVAL: PRINCIPLED' ),
				array( 'num' => '03', 'title' => 'Long-Horizon Human Capital', 'desc' => 'Invests in developing leadership talent over decade-long horizons.', 'eval' => 'EVAL: NURTURING' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Deep Reflective Listening',
				'decision'  => 'Value-Aligned Strategic Calculus',
				'decomp'    => 'Solitary Nature & Philosophical Reading',
				'boardroom' => 'Moral & Strategic Conscience',
				'conflict'  => 'Harmonious Principled Resolution',
			),
			'calibrator'         => array(
				'headline' => 'Top 1.5% Intuitive Leadership',
				'desc'     => 'Exceptional in executive alignment and diagnosing multi-tiered cultural drift.',
				'variance' => '±1.7%',
				'sample'   => 'CHRO / EXECUTIVE COUNSELORS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 88, 'low' => 83, 'high' => 92, 'desc' => 'Perceptive Synthesis of Multi-Dimensional Cultural Signals.' ),
				'execution'    => array( 'score' => 80, 'low' => 74, 'high' => 85, 'desc' => 'Measured, High-Fidelity Implementation of Strategic Culture.' ),
				'control'      => array( 'score' => 84, 'low' => 79, 'high' => 88, 'desc' => 'Principled Governance Protecting Institutional Brand Integrity.' ),
				'adaptability' => array( 'score' => 62, 'low' => 56, 'high' => 68, 'desc' => 'Deliberate Evolution Anchored to Core Corporate Ethics.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.918', 'sem' => '±1.42', 'retest' => 'r = 0.89' ),
			'strengths'          => array(
				array( 'title' => '1. Cultural Pre-Emption', 'tag' => 'Optimal Drive', 'desc' => 'Senses executive disaffection and morale decline months before departures occur.', 'manifestation' => 'Maintains peerless executive retention.' ),
				array( 'title' => '2. Mission-Centric Alignment', 'tag' => 'Systemic Rigor', 'desc' => 'Keeps enterprise focused on enduring purpose during frantic market cycles.', 'manifestation' => 'Builds iconic, trusted corporate brands.' ),
				array( 'title' => '3. Trusted Confidential Advisor', 'tag' => 'High Impact', 'desc' => 'Serves as unbiased sounding board for CEOs during acute existential dilemmas.', 'manifestation' => 'Resolves boardroom impasses peacefully.' ),
				array( 'title' => '4. Authentic Narrative Framing', 'tag' => 'Optimal Drive', 'desc' => 'Communicates complex corporate pivots with moral clarity and empathy.', 'manifestation' => 'Wins stakeholder buy-in effortlessly.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Reluctance to Execute Severance', 'category' => 'Leadership', 'desc' => 'Delays dismissing underperforming executives due to deep empathy.', 'remediation' => 'Anchor performance management to strict metrics.' ),
				array( 'title' => '2. Emotional Fatigue', 'category' => 'Culture', 'desc' => 'Absorbs the emotional anxieties of the entire executive committee.', 'remediation' => 'Enforce strict psychological boundaries.' ),
				array( 'title' => '3. Perfectionistic Ideals', 'category' => 'Strategy', 'desc' => 'Can set unrealistic ethical expectations for messy market realities.', 'remediation' => 'Frame tradeoffs within pragmatic compromise matrices.' ),
				array( 'title' => '4. Conflict Avoidance', 'category' => 'Communication', 'desc' => 'Avoids explosive arguments, allowing resentment to simmer.', 'remediation' => 'Mandate structured conflict resolution sessions.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Acknowledge Intent:', 'desc' => 'Begin strategic conversations by discussing core purpose and human impact.' ),
				array( 'title' => 'Confidential Context:', 'desc' => 'Address sensitive organizational issues in 1-on-1 private briefings.' ),
				array( 'title' => 'Give Processing Space:', 'desc' => 'Allow time to reflect before requiring immediate commitments.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: EXECUTIVE VALUES & CULTURE BRIEF',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'INFJ + ENTP (Visionary)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ENTP brings energetic innovation; INFJ ensures human integrity and moral direction.' ),
				'friction'   => array( 'pair' => 'INFJ + ESTP (Mobilizer)', 'tag' => 'HIGH FRICTION', 'desc' => 'Clash between contemplative long-range ethics and immediate tactical opportunism.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 16% UNDER RUTHLESS DOWNSIZING',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief People Officer:', 'desc' => 'Directs executive development, culture, and ethical governance.' ),
				array( 'title' => 'ESG & Ethics Committee Chair:', 'desc' => 'Ensures corporate sustainability and governance alignment.' ),
				array( 'title' => 'Senior Executive Coach:', 'desc' => 'Counsels C-level leaders through succession and interpersonal strains.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: HIGH VALUE',
			'coaching_protocol'  => 'COACHING PROTOCOL: COUNS-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Objective Hard Boundary Setting', 'desc' => 'Institute metric-driven performance hurdles to balance pure empathy.', 'deliverable' => 'Objective Severance Protocol' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Decisive Public Stance', 'desc' => 'Voice convictions boldly in open executive meetings rather than solely private channels.', 'deliverable' => 'Corporate Purpose Manifesto' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Emotional Energy Shielding', 'desc' => 'Protect personal time through designated non-advisory days each month.', 'deliverable' => 'Energy Preservation Plan' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate INFJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Fortify executive team emotional intelligence and maintain organizational mission integrity.',
			),
		),

		'ISTJ' => array(
			'code'               => 'ISTJ',
			'index_num'          => '06',
			'title'              => 'The Institutional Anchor',
			'domain_slug'        => 'grounded',
			'domain_name'        => 'Grounded & Operational',
			'territory'          => 'TERRITORY 04 // OPERATIONAL & COMPLIANCE',
			'lead_summary'       => 'Safeguards fiduciary continuity and process perfection, providing the immutable ballast that stabilizes fast-moving enterprises under regulatory pressure.',
			'polarity'           => 'Methodical Anchor',
			'driver'             => 'Procedural Fidelity',
			'cadence'            => 'Systematic Cadence',
			'calibration_coeff'  => 'α = 0.948 (BENCHMARK)',
			'calibration_val'    => 96,
			'ci_band'            => '95% CI [0.93 — 0.98]',
			'cohort_freq'        => '11.6%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Procedural Governance and Inviolable Operational Precision',
			'pullquote'          => '“The Anchor provides the immutable foundation upon which high-growth enterprises rest, guaranteeing compliance, solvency, and operational excellence.”',
			'narrative'          => 'The ISTJ is the bedrock of organizational stability. With exceptional attention to detail and unwavering respect for precedent, they ensure institutional contracts and obligations are executed without failure.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Zero-Defect Standard', 'desc' => 'Tolerates zero errors in fiduciary accounts, regulatory filings, or logistics.', 'eval' => 'EVAL: UNWAVERING' ),
				array( 'num' => '02', 'title' => 'Immutable Precedent Rigor', 'desc' => 'Relies on empirically proven operating models rather than speculative fads.', 'eval' => 'EVAL: CONSERVATIVE' ),
				array( 'num' => '03', 'title' => 'Unconditional Duty Execution', 'desc' => 'Delivers on institutional obligations regardless of personal convenience.', 'eval' => 'EVAL: RELIABLE' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Systematic Structured Execution',
				'decision'  => 'Historical Precedent & Concrete Fact',
				'decomp'    => 'Routine Solo Craftsmanship & Reading',
				'boardroom' => 'Fiduciary & Risk Sentinel',
				'conflict'  => 'Factual Rule Enforcement',
			),
			'calibrator'         => array(
				'headline' => 'Top 11.6% Fiduciary Fidelity',
				'desc'     => 'Gold standard in corporate regulatory compliance, capital accounting, and process reliability.',
				'variance' => '±1.2%',
				'sample'   => 'CFOS / CHIEF AUDIT EXECUTIVES',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 92, 'low' => 88, 'high' => 95, 'desc' => 'Deep Focus on Concrete Operating Data and Fiduciary Audit.' ),
				'execution'    => array( 'score' => 96, 'low' => 93, 'high' => 98, 'desc' => 'Flawless Systematic Follow-Through on All Contractual Milestones.' ),
				'control'      => array( 'score' => 98, 'low' => 96, 'high' => 99, 'desc' => 'Absolute Process Sovereignty and Comprehensive Risk Containment.' ),
				'adaptability' => array( 'score' => 34, 'low' => 28, 'high' => 40, 'desc' => 'Cautious, Deliberate Evolution Tested Against Strict Benchmarks.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.941', 'sem' => '±1.18', 'retest' => 'r = 0.94' ),
			'strengths'          => array(
				array( 'title' => '1. Bulletproof Compliance Systems', 'tag' => 'Systemic Rigor', 'desc' => 'Maintains impeccable regulatory standings across SEC, GDPR, and tax regimes.', 'manifestation' => 'Shields enterprise from devastating regulatory penalties.' ),
				array( 'title' => '2. Precision Budget Management', 'tag' => 'Optimal Drive', 'desc' => 'Tracks variance down to the basis point, preventing capital leakage.', 'manifestation' => 'Maximizes operating margins and cash flow predictability.' ),
				array( 'title' => '3. Institutional Memory Stewardship', 'tag' => 'High Impact', 'desc' => 'Preserves institutional processes and key operating blueprints across leadership cycles.', 'manifestation' => 'Guarantees seamless executive transitions.' ),
				array( 'title' => '4. Flawless Contractual Fulfillment', 'tag' => 'Systemic Rigor', 'desc' => 'Never misses a critical deadline, covenant obligation, or vendor commitment.', 'manifestation' => 'Earns highest credit ratings and vendor trust.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Resistance to Disruptive Innovation', 'category' => 'Adaptability', 'desc' => 'May dismiss necessary new technologies because they lack proven track records.', 'remediation' => 'Create ring-fenced sandbox budgets for rapid testing.' ),
				array( 'title' => '2. Bureaucratic Overreach', 'category' => 'Governance', 'desc' => 'Imposes burdensome controls that slow down fast product iteration.', 'remediation' => 'Establish fast-track exception lanes for agile teams.' ),
				array( 'title' => '3. Reluctance to Pivot', 'category' => 'Strategy', 'desc' => 'Continues executing obsolete roadmaps due to contractual momentum.', 'remediation' => 'Institute quarterly strategic alignment checkpoints.' ),
				array( 'title' => '4. Under-Communicating Value', 'category' => 'Leadership', 'desc' => 'Silently keeps systems working without broadcasting vital contributions.', 'remediation' => 'Highlight fiduciary stewardship in annual reports.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Documented Evidence:', 'desc' => 'Support requests with audit logs, budget lines, and verified performance metrics.' ),
				array( 'title' => 'Respect Protocols:', 'desc' => 'Follow established channels and workflows rather than improvising shortcuts.' ),
				array( 'title' => 'Give Advance Notice:', 'desc' => 'Avoid springing sudden last-minute operational shifts without warning.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: AUDITED SPREADSHEET & COMPLIANCE DOSSIER',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ISTJ + ENFP (Catalyst)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ENFP explores market frontiers; ISTJ builds the robust operational machinery to sustain it.' ),
				'friction'   => array( 'pair' => 'ISTJ + ENTP (Challenger)', 'tag' => 'HIGH FRICTION', 'desc' => 'Constant paradigm questioning collides with established operational standards.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 12% UNDER PROVEN FRAMEWORKS',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Financial Officer:', 'desc' => 'Maintains impeccable balance-sheet health and capital stewardship.' ),
				array( 'title' => 'Audit Committee Secretary:', 'desc' => 'Guarantees comprehensive governance, controls, and compliance.' ),
				array( 'title' => 'Chief Operating Officer:', 'desc' => 'Runs global supply chain and administrative infrastructure with clockwork reliability.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: MAXIMUM FIDUCIARY',
			'coaching_protocol'  => 'COACHING PROTOCOL: ANCH-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Calculated Risk Sandbox', 'desc' => 'Approve an experimental initiative with relaxed procedural gates to practice agility.', 'deliverable' => 'Sandbox Governance Charter' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Process Streamlining Sprint', 'desc' => 'Audit internal procedures to eliminate redundant approval steps.', 'deliverable' => 'Process De-Bottlenecking Report' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Visionary Peer Collaboration', 'desc' => 'Co-author an innovation roadmap with exploratory product leads.', 'deliverable' => 'Joint Innovation Operations Plan' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ISTJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Ensure enterprise scaling rests on rock-solid operational and fiduciary governance.',
			),
		),

		'ESTP' => array(
			'code'               => 'ESTP',
			'index_num'          => '07',
			'title'              => 'The High-Velocity Mobilizer',
			'domain_slug'        => 'synthesizer',
			'domain_name'        => 'Adaptive & Real-Time',
			'territory'          => 'TERRITORY 04 // REAL-TIME & ADAPTIVE',
			'lead_summary'       => 'Seizes immediate tactical leverage and navigates high-stakes negotiations with instinctual real-time elegance and fearless operational bias for action.',
			'polarity'           => 'Real-Time Tactician',
			'driver'             => 'Tactical Arbitrage',
			'cadence'            => 'Immediate Velocity',
			'calibration_coeff'  => 'α = 0.918 (OPTIMAL)',
			'calibration_val'    => 87,
			'ci_band'            => '95% CI [0.86 — 0.94]',
			'cohort_freq'        => '4.3%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Tactical Mastery and Rapid-Fire Commercial Execution',
			'pullquote'          => '“The Mobilizer reads room dynamics instantly, turning volatile commercial crises into asymmetric tactical victories while competitors are still planning meetings.”',
			'narrative'          => 'The ESTP is an unrivaled crisis manager and high-stakes dealmaker. They excel in volatile environments where theoretical plans collapse and instinctual action decides survival.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Bias Toward Immediate Action', 'desc' => 'Prefers running live commercial tests immediately over debating hypotheses.', 'eval' => 'EVAL: VELOCITY' ),
				array( 'num' => '02', 'title' => 'Sensory Environmental Acuity', 'desc' => 'Reads counterparty micro-tensions in negotiations to seize instant advantages.', 'eval' => 'EVAL: TACTICAL' ),
				array( 'num' => '03', 'title' => 'Fearless Risk Tolerance', 'desc' => 'Steps willingly into high-stakes fires to rescue compromised operations.', 'eval' => 'EVAL: AUDACIOUS' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Extroverted Real-Time Tactical Engagement',
				'decision'  => 'Instant Situational Utility',
				'decomp'    => 'High-Stakes Sports & Live Social Events',
				'boardroom' => 'Dynamic Dealmaker',
				'conflict'  => 'Decisive Practical Resolution',
			),
			'calibrator'         => array(
				'headline' => 'Top 4.3% Commercial Dealmaking',
				'desc'     => 'Unsurpassed in volatile negotiations, high-speed sales blitzes, and rapid enterprise turnarounds.',
				'variance' => '±2.4%',
				'sample'   => 'HEAD OF GLOBAL SALES / CRISIS MANAGERS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 78, 'low' => 72, 'high' => 84, 'desc' => 'Hyper-Responsive Sensory Focus Tuned to Real-Time Shifts.' ),
				'execution'    => array( 'score' => 94, 'low' => 90, 'high' => 97, 'desc' => 'Aggressive Real-Time Commercial Drive and Milestone Closing.' ),
				'control'      => array( 'score' => 64, 'low' => 58, 'high' => 70, 'desc' => 'Pragmatic Governance Focused on Speed and Deal Closure.' ),
				'adaptability' => array( 'score' => 92, 'low' => 87, 'high' => 96, 'desc' => 'Flawless Instantaneous Pivoting during Live Crises.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.902', 'sem' => '±1.58', 'retest' => 'r = 0.87' ),
			'strengths'          => array(
				array( 'title' => '1. Unmatched Deal Closure Rate', 'tag' => 'Optimal Drive', 'desc' => 'Secures marquee commercial contracts in contentious, multi-party negotiations.', 'manifestation' => 'Exponentially scales top-line revenues.' ),
				array( 'title' => '2. Rapid Emergency Troubleshooting', 'tag' => 'High Impact', 'desc' => 'Flies to client crisis sites to resolve operational failures on the spot.', 'manifestation' => 'Saves critical million-dollar enterprise relationships.' ),
				array( 'title' => '3. Fearless Market Penetration', 'tag' => 'Velocity Drive', 'desc' => 'Breaks into contested territories where competitors feared to tread.', 'manifestation' => 'Captures early dominant market share.' ),
				array( 'title' => '4. High-Energy Team Mobilization', 'tag' => 'Systemic Rigor', 'desc' => 'Energizes field teams with infectious confidence and practical battle plans.', 'manifestation' => 'Consistently surpasses aggressive sales quotas.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Neglecting Long-Range Governance', 'category' => 'Strategy', 'desc' => 'May compromise long-term architecture in exchange for quick quarterly wins.', 'remediation' => 'Pair with a Strategic Architect co-pilot.' ),
				array( 'title' => '2. Impatience with Detailed Paperwork', 'category' => 'Compliance', 'desc' => 'Bypasses internal administrative protocols to accelerate deal closing.', 'remediation' => 'Provide a strong contract administrator.' ),
				array( 'title' => '3. Excessive Tactical Risk Exposure', 'category' => 'Governance', 'desc' => 'May take speculative bets that expose the enterprise to unnecessary volatility.', 'remediation' => 'Enforce clear downside loss limits.' ),
				array( 'title' => '4. Distaste for Abstract Theory', 'category' => 'Leadership', 'desc' => 'Bored by multi-year theoretical strategic planning sessions.', 'remediation' => 'Focus discussions on actionable near-term milestones.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Talk Bottom Line Numbers:', 'desc' => 'Frame proposals around tangible revenue, margin expansion, and concrete wins.' ),
				array( 'title' => 'Fast Synchronous Check-Ins:', 'desc' => 'Use quick phone calls or standups rather than long memo threads.' ),
				array( 'title' => 'Empower Freedom of Action:', 'desc' => 'Give broad targets and allow latitude on tactical execution methods.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: COMMERCIAL TERM SHEET & DEAL SUMMARY',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ESTP + INTJ (Architect)', 'tag' => 'HIGH SYNERGY', 'desc' => 'INTJ provides the master strategic roadmap; ESTP executes high-velocity commercial wins.' ),
				'friction'   => array( 'pair' => 'ESTP + INFJ (Counselor)', 'tag' => 'HIGH FRICTION', 'desc' => 'Tactical opportunism clashes with deep ethical contemplation and sensitive cultural pacing.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 20% UNDER SLOW BUREAUCRACY',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Commercial Officer:', 'desc' => 'Drives global sales engine, strategic partnerships, and revenue velocity.' ),
				array( 'title' => 'Crisis Response Director:', 'desc' => 'Takes direct command during existential operational emergencies.' ),
				array( 'title' => 'Head of Corporate Development:', 'desc' => 'Negotiates high-velocity divestitures and asset acquisitions.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: REAL-TIME MAXIMUM',
			'coaching_protocol'  => 'COACHING PROTOCOL: MOBIL-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Strategic Horizon Mapping', 'desc' => 'Dedicate weekly hours to evaluating 3-year structural implications of current deals.', 'deliverable' => '3-Year Impact Assessment' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Governance Hygiene Standards', 'desc' => 'Ensure all commercial agreements meet 100% compliance standards before signing.', 'deliverable' => 'Contract Hygiene Checklist' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Team Capability Mentorship', 'desc' => 'Codify dealmaking intuition into a repeatable commercial playbook for junior sales reps.', 'deliverable' => 'Enterprise Dealmaking Playbook' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ESTP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Equip executive leadership with high-octane commercial dealmaking and crisis agility.',
			),
		),

		'ENFP' => array(
			'code'               => 'ENFP',
			'index_num'          => '08',
			'title'              => 'The Catalyst Operator',
			'domain_slug'        => 'human-centric',
			'domain_name'        => 'Inspirational & Exploratory',
			'territory'          => 'TERRITORY 02 // INSPIRATIONAL & EXPLORATORY',
			'lead_summary'       => 'Ignites enterprise vitality and opens unconventional growth channels through sheer narrative magnetism, boundless curiosity, and agile relational capital.',
			'polarity'           => 'High Social Energy',
			'driver'             => 'Potential Manifestation',
			'cadence'            => 'Fluid Adaptive',
			'calibration_coeff'  => 'α = 0.920 (OPTIMAL)',
			'calibration_val'    => 88,
			'ci_band'            => '95% CI [0.87 — 0.94]',
			'cohort_freq'        => '8.1%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Inspirational Catalysis and Unconventional Market Discovery',
			'pullquote'          => '“The Catalyst connects people, ideas, and capital in ways traditional corporate hierarchies cannot imagine, breathing fresh vitality into calcified enterprises.”',
			'narrative'          => 'The ENFP is an exceptional evangelist and creative pioneer. Combining high social agility with broad lateral thinking, they rally disparate coalitions behind daring new missions.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Human Potential Activation', 'desc' => 'Discovers and elevates latent executive talent across hidden corporate tiers.', 'eval' => 'EVAL: INSPIRATIONAL' ),
				array( 'num' => '02', 'title' => 'Open-Horizon Exploration', 'desc' => 'Explores cross-industry possibilities before standard markets wake up.', 'eval' => 'EVAL: EXPANSIVE' ),
				array( 'num' => '03', 'title' => 'Authentic Narrative Leadership', 'desc' => 'Unites stakeholders through genuine shared conviction and compelling storytelling.', 'eval' => 'EVAL: MAGNETIC' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Expansive Empathetic Connection',
				'decision'  => 'Human Impact & Value Alignment',
				'decomp'    => 'Creative Arts, Travel & Spontaneous Socializing',
				'boardroom' => 'Charismatic Visionary',
				'conflict'  => 'Empathetic Reframing',
			),
			'calibrator'         => array(
				'headline' => 'Top 8.1% Creative Catalysis',
				'desc'     => 'Renowned for revitalizing stagnant cultures, closing early venture partnerships, and driving brand excitement.',
				'variance' => '±2.1%',
				'sample'   => 'CHIEF MARKETING OFFICERS / FOUNDERS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 72, 'low' => 66, 'high' => 78, 'desc' => 'Divergent Relational and Trend Scanning across Open Horizons.' ),
				'execution'    => array( 'score' => 74, 'low' => 68, 'high' => 80, 'desc' => 'Agile Campaign Incubation and Narrative-Driven Execution.' ),
				'control'      => array( 'score' => 48, 'low' => 42, 'high' => 54, 'desc' => 'Light-Touch Governance that Empowers Team Autonomy.' ),
				'adaptability' => array( 'score' => 96, 'low' => 92, 'high' => 99, 'desc' => 'Maximum Cognitive Elasticity and Immediate Creative Pivoting.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.906', 'sem' => '±1.52', 'retest' => 'r = 0.88' ),
			'strengths'          => array(
				array( 'title' => '1. Irresistible Brand Magnetism', 'tag' => 'Optimal Drive', 'desc' => 'Creates fanatical customer loyalty and compelling media presence.', 'manifestation' => 'Establishes iconic cultural relevance.' ),
				array( 'title' => '2. Cross-Siloe Coalition Building', 'tag' => 'High Impact', 'desc' => 'Bridges warring organizational silos and unites them around shared goals.', 'manifestation' => 'Eliminates internal political paralysis.' ),
				array( 'title' => '3. Unconventional Growth Channels', 'tag' => 'Systemic Rigor', 'desc' => 'Discovers guerrilla customer acquisition vectors at low CAC.', 'manifestation' => 'Drives hyper-growth during zero-to-one phases.' ),
				array( 'title' => '4. Authentic Culture Magnet', 'tag' => 'Optimal Drive', 'desc' => 'Attracts world-class creative and technical talent into the firm.', 'manifestation' => 'Builds high-energy, magnetic corporate cultures.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Routine Operational Fatigue', 'category' => 'Execution', 'desc' => 'Struggles with repetitive administrative tasks and governance maintenance.', 'remediation' => 'Pair with an Institutional Anchor operations manager.' ),
				array( 'title' => '2. Over-Committing Capacity', 'category' => 'Strategy', 'desc' => 'Says yes to too many exciting opportunities, spreading bandwidth too thin.', 'remediation' => 'Enforce strict annual strategic prioritization limits.' ),
				array( 'title' => '3. Sensitivity to Cold Criticism', 'category' => 'Leadership', 'desc' => 'Can feel demoralized by purely dispassionate, hyper-critical audits.', 'remediation' => 'Frame feedback around growth and shared purpose.' ),
				array( 'title' => '4. Inconsistent Performance Cadence', 'category' => 'Control', 'desc' => 'Works in bursts of inspiration rather than steady mechanical daily rhythms.', 'remediation' => 'Implement structured sprint review gates.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Inspire with Possibility:', 'desc' => 'Lead discussions with visionary potential rather than bureaucratic limits.' ),
				array( 'title' => 'Keep Formats Dynamic:', 'desc' => 'Engage in lively visual workshops rather than dry 100-page spreadsheet reviews.' ),
				array( 'title' => 'Clarify Core Milestones:', 'desc' => 'Provide clear, narrow deadlines to anchor their creative energy.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: VISUAL STORYBOARD & KEYNOTE PITCH',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ENFP + INTJ (Architect)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ENFP generates rich creative opportunities; INTJ organizes them into durable systemic empires.' ),
				'friction'   => array( 'pair' => 'ENFP + ISTJ (Anchor)', 'tag' => 'HIGH FRICTION', 'desc' => 'Fluid spontaneous creativity clashes with rigid historical operational protocols.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 18% UNDER MICROMANAGEMENT',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Brand & Communications Officer:', 'desc' => 'Leads external corporate narrative, PR, and ecosystem evangelism.' ),
				array( 'title' => 'Chief Culture Officer:', 'desc' => 'Inspires global employee engagement and organizational vitality.' ),
				array( 'title' => 'Strategic Partnerships Ambassador:', 'desc' => 'Secures breakthrough joint ventures with key global industry leaders.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: INSPIRATIONAL HIGH',
			'coaching_protocol'  => 'COACHING PROTOCOL: CAT-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Disciplined Focus Pruning', 'desc' => 'Prune active exploratory projects down to the single highest-yield commercial vector.', 'deliverable' => 'Initiative Rationalization Plan' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Operational Scaffolding Build', 'desc' => 'Partner with an operations lead to build structured routines for active campaigns.', 'deliverable' => 'Campaign SOP Framework' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Sustainable Energy Rhythm', 'desc' => 'Establish boundaries against over-promising to preserve creative vitality.', 'deliverable' => 'Personal Capacity Charter' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ENFP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Channel dynamic creative enthusiasm into structured, high-impact enterprise expansion.',
			),
		),

		'ENFJ' => array(
			'code'               => 'ENFJ',
			'index_num'          => '09',
			'title'              => 'The Transformational Catalyst',
			'domain_slug'        => 'human-centric',
			'domain_name'        => 'Human-Centric & Cognitive',
			'territory'          => 'TERRITORY 03 // HUMAN CENTRIC & COGNITIVE',
			'lead_summary'       => 'Galvanizes executive teams and cross-functional organizations around high-impact communal visions with charismatic emotional resonance and structured mentorship.',
			'polarity'           => 'High Social Resonance',
			'driver'             => 'Mission Harmonization',
			'cadence'            => 'Collaborative Rally',
			'calibration_coeff'  => 'α = 0.925 (HIGH)',
			'calibration_val'    => 89,
			'ci_band'            => '95% CI [0.88 — 0.95]',
			'cohort_freq'        => '2.5%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Transformational Leadership and High-Impact Cultural Alignment',
			'pullquote'          => '“The Catalyst creates unified momentum where cynicism once reigned, turning divided stakeholders into passionately aligned advocates.”',
			'narrative'          => 'The ENFJ is the ultimate corporate consensus builder and leadership mentor. Combining high interpersonal acuity with disciplined execution, they align diverse teams behind enterprise objectives.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Collective Empowerment', 'desc' => 'Unlocks potential in colleagues by designing supportive growth pathways.', 'eval' => 'EVAL: EMPOWERING' ),
				array( 'num' => '02', 'title' => 'Moral Cohesion', 'desc' => 'Ensures corporate decisions build authentic communal trust and stakeholder pride.', 'eval' => 'EVAL: UNIFYING' ),
				array( 'num' => '03', 'title' => 'Inspiring Articulation', 'desc' => 'Frames challenging operational mandates into motivating shared achievements.', 'eval' => 'EVAL: CHARISMATIC' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Extroverted Empathetic Alignment',
				'decision'  => 'Shared Values & Collective Impact',
				'decomp'    => 'Community Service & Family Gatherings',
				'boardroom' => 'Consensus Builder & Visionary Orator',
				'conflict'  => 'Diplomatic Win-Win Mediation',
			),
			'calibrator'         => array(
				'headline' => 'Top 2.5% Organizational Empathy',
				'desc'     => 'Unmatched in cross-silo consensus, employee engagement, and high-trust leadership culture.',
				'variance' => '±1.8%',
				'sample'   => 'CHRO / FOUNDATION PRESIDENTS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 82, 'low' => 77, 'high' => 87, 'desc' => 'Attentive Focus on Interpersonal Alignment and Culture.' ),
				'execution'    => array( 'score' => 88, 'low' => 83, 'high' => 92, 'desc' => 'Disciplined Team Mobilization and Milestone Delivery.' ),
				'control'      => array( 'score' => 80, 'low' => 74, 'high' => 85, 'desc' => 'Structured People Processes and Value Protection.' ),
				'adaptability' => array( 'score' => 78, 'low' => 72, 'high' => 83, 'desc' => 'Responsive to Team Needs and Sentiment Feedback.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.912', 'sem' => '±1.44', 'retest' => 'r = 0.89' ),
			'strengths'          => array(
				array( 'title' => '1. Magnetic Team Inspiration', 'tag' => 'Optimal Drive', 'desc' => 'Elevates workforce engagement and morale across complex transformations.', 'manifestation' => 'Drives industry-leading retention metrics.' ),
				array( 'title' => '2. Executive Conflict Mediation', 'tag' => 'High Impact', 'desc' => 'Resolves boardroom disputes by identifying underlying shared values.', 'manifestation' => 'Restores fractured leadership committees.' ),
				array( 'title' => '3. Cultural Transformation Lead', 'tag' => 'Systemic Rigor', 'desc' => 'Re-engineers corporate culture to support modernization while retaining pride.', 'manifestation' => 'Seamless post-merger integration.' ),
				array( 'title' => '4. Talent Development Pipeline', 'tag' => 'Optimal Drive', 'desc' => 'Mentors future C-suite candidates with deliberate coaching curriculums.', 'manifestation' => 'Ensures deep succession benches.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Personalizing Institutional Conflict', 'category' => 'Leadership', 'desc' => 'Takes commercial pushback as personal rejection or moral critique.', 'remediation' => 'Frame disputes strictly around balance-sheet logic.' ),
				array( 'title' => '2. Over-Protecting Underperformers', 'category' => 'Governance', 'desc' => 'Hesitates to enact necessary personnel terminations.', 'remediation' => 'Utilize objective quantitative performance hurdles.' ),
				array( 'title' => '3. Consensus Paralysis', 'category' => 'Strategy', 'desc' => 'Delays necessary executive decisions seeking 100% agreement.', 'remediation' => 'Establish majority-vote decision deadlines.' ),
				array( 'title' => '4. Overextending Emotional Bandwidth', 'category' => 'Culture', 'desc' => 'Carries excessive personal responsibility for employee happiness.', 'remediation' => 'Enforce professional coaching boundaries.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Acknowledge Human Effort:', 'desc' => 'Recognize team contributions before delivering critical critiques.' ),
				array( 'title' => 'Focus on Team Impact:', 'desc' => 'Frame strategic decisions around their collective benefits.' ),
				array( 'title' => 'Engage in Direct Dialogue:', 'desc' => 'Address interpersonal tensions in constructive 1-on-1 conversations.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: ALL-HANDS VISION MEMO & SLIDE BRIEF',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ENFJ + INTP (Theorist)', 'tag' => 'HIGH SYNERGY', 'desc' => 'INTP validates logical foundations; ENFJ mobilizes widespread organizational adoption.' ),
				'friction'   => array( 'pair' => 'ENFJ + ISTP (Craftsman)', 'tag' => 'HIGH FRICTION', 'desc' => 'Desire for emotional consensus clashes with detached, tactical individualism.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 14% UNDER HARSH DOWNSIZING',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief People Officer:', 'desc' => 'Leads organizational health, executive alignment, and culture.' ),
				array( 'title' => 'Senior Vice President of Communications:', 'desc' => 'Spearheads external relations and stakeholder trust.' ),
				array( 'title' => 'Executive Development Director:', 'desc' => 'Counsels rising executive stars and builds leadership capability.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: HIGH CONSENSUS',
			'coaching_protocol'  => 'COACHING PROTOCOL: TRAN-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Dispassionate Boundary Calibration', 'desc' => 'Institute strict objective metrics to separate empathy from personnel evaluations.', 'deliverable' => 'Objective Assessment Matrix' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Decisive Command Sprints', 'desc' => 'Practice making rapid, unilateral operational decisions when consensus lags.', 'deliverable' => 'Unilateral Decision Log' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Sustainable Emotional Rhythms', 'desc' => 'Delegate secondary interpersonal disputes to mid-tier HR leaders.', 'deliverable' => 'HR Escalation SOP' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ENFJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Foster enduring cultural harmony and mobilize executive momentum behind company objectives.',
			),
		),

		'INFP' => array(
			'code'               => 'INFP',
			'index_num'          => '10',
			'title'              => 'The Authentic Visionary',
			'domain_slug'        => 'human-centric',
			'domain_name'        => 'Human-Centric & Cognitive',
			'territory'          => 'TERRITORY 03 // HUMAN CENTRIC & COGNITIVE',
			'lead_summary'       => 'Guards ethical authenticity and crafts profound creative resonance, ensuring enterprises maintain moral integrity amidst relentless commercial pressures.',
			'polarity'           => 'Introspective Principle',
			'driver'             => 'Ethical Congruence',
			'cadence'            => 'Autonomous Creative',
			'calibration_coeff'  => 'α = 0.910 (HIGH)',
			'calibration_val'    => 86,
			'ci_band'            => '95% CI [0.86 — 0.93]',
			'cohort_freq'        => '4.4%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Moral Sovereignty and Deep Narrative Authenticity',
			'pullquote'          => '“The Visionary protects the enterprise soul, verifying that rapid scaling never compromises the foundational ethics that earned customer trust.”',
			'narrative'          => 'The INFP brings deep moral discernment and creative insight. They serve as corporate truth-tellers, evaluating products and strategies through authentic human resonance.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Uncompromising Value Fidelity', 'desc' => 'Refuses to participate in deceptive corporate messaging or shallow shortcuts.', 'eval' => 'EVAL: AUTHENTIC' ),
				array( 'num' => '02', 'title' => 'Deep Empathic Resonance', 'desc' => 'Connects with customer emotional realities to design beloved products.', 'eval' => 'EVAL: VISCERAL' ),
				array( 'num' => '03', 'title' => 'Individualist Creative Agency', 'desc' => 'Champions unconventional creative voices that traditional corporate processes stifle.', 'eval' => 'EVAL: ORIGINAL' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Quiet Reflective Synthesis',
				'decision'  => 'Inner Ethical Consistency',
				'decomp'    => 'Writing, Arts & Solitude',
				'boardroom' => 'Principled Conscience',
				'conflict'  => 'Quiet Principled Resistance',
			),
			'calibrator'         => array(
				'headline' => 'Top 4.4% Creative Authenticity',
				'desc'     => 'Unsurpassed in brand narrative authenticity, human-centric design, and values-led product innovation.',
				'variance' => '±2.1%',
				'sample'   => 'CREATIVE DIRECTORS / HEADS OF ETHICS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 84, 'low' => 78, 'high' => 89, 'desc' => 'Deep Focus on Artistic and Moral Dimensions of Products.' ),
				'execution'    => array( 'score' => 62, 'low' => 56, 'high' => 68, 'desc' => 'High Craftsmanship on Selected High-Resonance Projects.' ),
				'control'      => array( 'score' => 68, 'low' => 62, 'high' => 74, 'desc' => 'Protection of Brand Purity and Creative Standards.' ),
				'adaptability' => array( 'score' => 90, 'low' => 85, 'high' => 94, 'desc' => 'Fluid Exploration of Expressive Creative Frontiers.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.902', 'sem' => '±1.52', 'retest' => 'r = 0.87' ),
			'strengths'          => array(
				array( 'title' => '1. Genuine Brand Authenticity', 'tag' => 'Optimal Drive', 'desc' => 'Crafts product narratives that form lasting emotional bonds with consumers.', 'manifestation' => 'Creates legendary brand reverence.' ),
				array( 'title' => '2. Moral Risk Detection', 'tag' => 'High Impact', 'desc' => 'Warns of reputational and ethical fallout before marketing campaigns backfire.', 'manifestation' => 'Shields brand from public relations crises.' ),
				array( 'title' => '3. Deep Customer Empathy', 'tag' => 'Systemic Rigor', 'desc' => 'Understands unspoken user aspirations and designs delightful experiences.', 'manifestation' => 'Drives record net promoter scores.' ),
				array( 'title' => '4. Inclusive Creative Culture', 'tag' => 'Optimal Drive', 'desc' => 'Creates a safe harbor for eccentric creative talent to flourish.', 'manifestation' => 'Generates breakthrough creative IP.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Withdrawal Under Conflict', 'category' => 'Communication', 'desc' => 'Shuts down completely when confronted by aggressive executive politics.', 'remediation' => 'Provide structured written channels for feedback.' ),
				array( 'title' => '2. Reluctance to Scale Operations', 'category' => 'Execution', 'desc' => 'Distrusts mass commercialization, fearing loss of craft quality.', 'remediation' => 'Pair with a commercial scaling operator.' ),
				array( 'title' => '3. Perfectionistic Delay', 'category' => 'Strategy', 'desc' => 'Refuses to release work until every artistic nuance feels authentic.', 'remediation' => 'Establish hard release milestone dates.' ),
				array( 'title' => '4. Aversion to Financial Tradeoffs', 'category' => 'Governance', 'desc' => 'Views budget pruning as moral failure rather than fiduciary duty.', 'remediation' => 'Involve financial mentors to contextualize margins.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Respect Core Values:', 'desc' => 'Never ask them to compromise on brand truth or ethical principles.' ),
				array( 'title' => 'Provide Autonomy:', 'desc' => 'Give generous independent creative runway without heavy micromanagement.' ),
				array( 'title' => 'Gentle Direct Feedback:', 'desc' => 'Deliver constructive critiques with sensitivity and clear reasoning.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: CREATIVE MANIFESTO & PHILOSOPHICAL ESSAY',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'INFP + ENTJ (Commander)', 'tag' => 'HIGH SYNERGY', 'desc' => 'INFP provides profound soul and vision; ENTJ supplies scale and market dominance.' ),
				'friction'   => array( 'pair' => 'INFP + ESTJ (Director)', 'tag' => 'HIGH FRICTION', 'desc' => 'Clash between rigid administrative rule enforcement and flexible individualist authenticity.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 26% UNDER SPREADSHEET-ONLY GOVERNANCE',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Creative Officer:', 'desc' => 'Oversees aesthetic integrity, brand story, and consumer resonance.' ),
				array( 'title' => 'Ethics & Trust Ombudsman:', 'desc' => 'Audits corporate initiatives against public trust and customer welfare.' ),
				array( 'title' => 'Principal UX/Design Fellow:', 'desc' => 'Pioneers intuitive, deeply human digital interfaces.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: CREATIVE SPECIALIST',
			'coaching_protocol'  => 'COACHING PROTOCOL: AUTH-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Commercial Pragmatism Alignment', 'desc' => 'Integrate market realities and unit economic constraints into creative proposals.', 'deliverable' => 'Commercialized Creative Blueprint' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Executive Voice Amplification', 'desc' => 'Advocate for ethical product stances directly in C-suite meetings.', 'deliverable' => 'Boardroom Position Paper' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Operational Handoff Rigor', 'desc' => 'Establish clean documentation for production teams to execute designs at scale.', 'deliverable' => 'Design System Governance Manual' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate INFP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Anchor corporate innovation in undeniable brand authenticity and deep customer resonance.',
			),
		),

		'ESTJ' => array(
			'code'               => 'ESTJ',
			'index_num'          => '11',
			'title'              => 'The Operational Director',
			'domain_slug'        => 'grounded',
			'domain_name'        => 'Grounded & Operational',
			'territory'          => 'TERRITORY 04 // OPERATIONAL & COMPLIANCE',
			'lead_summary'       => 'Imposes order on complex multi-tiered logistics, enforcing accountability, scheduling milestones, and rigorous operational benchmarks with unwavering discipline.',
			'polarity'           => 'Systematic Directive',
			'driver'             => 'Process Accountability',
			'cadence'            => 'Structured Execution',
			'calibration_coeff'  => 'α = 0.945 (VERY HIGH)',
			'calibration_val'    => 95,
			'ci_band'            => '95% CI [0.92 — 0.97]',
			'cohort_freq'        => '8.7%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Systematic Operational Command and High-Throughput Governance',
			'pullquote'          => '“The Director guarantees that promises made in boardroom pitch decks become delivered operational realities on the factory floor.”',
			'narrative'          => 'The ESTJ is the engine of corporate execution. Clear, direct, and unyielding on standards, they organize resources, establish milestones, and eliminate ambiguities.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Clear Standard Operating Procedures', 'desc' => 'Builds repeatable workflows so quality does not depend on individual mood.', 'eval' => 'EVAL: STRUCTURED' ),
				array( 'num' => '02', 'title' => 'Uncompromising Schedule Rigor', 'desc' => 'Holds every stakeholder strictly accountable to agreed delivery timelines.', 'eval' => 'EVAL: UNRELENTING' ),
				array( 'num' => '03', 'title' => 'Empirical Benchmark Verification', 'desc' => 'Measures output with objective metrics rather than subjective claims.', 'eval' => 'EVAL: VERIFIABLE' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Extroverted Directorial Cadence',
				'decision'  => 'Empirical Evidence & Established Rules',
				'decomp'    => 'Organized Sports, Outdoor Hobbies & Family',
				'boardroom' => 'Operational Enforcer',
				'conflict'  => 'Direct Factual Confrontation',
			),
			'calibrator'         => array(
				'headline' => 'Top 8.7% Operational Throughput',
				'desc'     => 'Unbeatable in supply chain execution, organizational logistics, and large-scale delivery management.',
				'variance' => '±1.3%',
				'sample'   => 'COOS / VP OF OPERATIONS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 90, 'low' => 85, 'high' => 94, 'desc' => 'Sharp Focus on Day-to-Day Operational Metrics.' ),
				'execution'    => array( 'score' => 95, 'low' => 91, 'high' => 98, 'desc' => 'Relentless High-Throughput Delivery across Complex Programs.' ),
				'control'      => array( 'score' => 96, 'low' => 93, 'high' => 99, 'desc' => 'Total Governance over Schedules, Costs, and Resource Utilization.' ),
				'adaptability' => array( 'score' => 46, 'low' => 40, 'high' => 52, 'desc' => 'Measured, Controlled Change via Structured SOP Revisions.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.938', 'sem' => '±1.22', 'retest' => 'r = 0.92' ),
			'strengths'          => array(
				array( 'title' => '1. Flawless Project Delivery', 'tag' => 'Systemic Rigor', 'desc' => 'Delivers complex multi-million dollar projects on time and on budget.', 'manifestation' => 'Eliminates project overrun costs.' ),
				array( 'title' => '2. Rapid Organizational Order', 'tag' => 'Optimal Drive', 'desc' => 'Steps into disorganized divisions and restores structure within weeks.', 'manifestation' => 'Turns operational chaos into clockwork.' ),
				array( 'title' => '3. Direct Accountability Cadence', 'tag' => 'High Impact', 'desc' => 'Leaves no doubt about who is responsible for which deliverable.', 'manifestation' => 'Eliminates dropped balls and finger-pointing.' ),
				array( 'title' => '4. Fiduciary Margin Discipline', 'tag' => 'Systemic Rigor', 'desc' => 'Audits unit costs continuously to safeguard operational profitability.', 'manifestation' => 'Sustains healthy EBITDA margins.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Inflexibility Under Ambiguity', 'category' => 'Adaptability', 'desc' => 'Resists necessary strategic pivots if they contradict existing SOPs.', 'remediation' => 'Introduce quarterly SOP evolution reviews.' ),
				array( 'title' => '2. Perceived Autocratic Tone', 'category' => 'Leadership', 'desc' => 'Issues directives without listening to frontline concerns.', 'remediation' => 'Mandate structured feedback roundtables.' ),
				array( 'title' => '3. Under-Valuing Creative R&D', 'category' => 'Strategy', 'desc' => 'Dismisses early-stage innovation because it lacks immediate ROI.', 'remediation' => 'Ring-fence exploratory innovation budgets.' ),
				array( 'title' => '4. Micromanagement Traps', 'category' => 'Governance', 'desc' => 'Dives into low-level details, bottlenecking senior deputies.', 'remediation' => 'Implement management-by-exception protocols.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Be Organized & Punctual:', 'desc' => 'Arrive with clear agendas, verified data, and defined objectives.' ),
				array( 'title' => 'Give Direct Status Reports:', 'desc' => 'Report roadblocks candidly with proposed corrective actions.' ),
				array( 'title' => 'Follow Chains of Command:', 'desc' => 'Respect operational hierarchy and formal approval stages.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: GANTT CHART & KPI DASHBOARD',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ESTJ + INFP (Visionary)', 'tag' => 'HIGH SYNERGY', 'desc' => 'INFP provides inspiring purpose and design; ESTJ drives systematic delivery at scale.' ),
				'friction'   => array( 'pair' => 'ESTJ + ENTP (Challenger)', 'tag' => 'HIGH FRICTION', 'desc' => 'Constant disruptive experimentation clashes with rigid operational predictability.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 14% UNDER EXPERIMENTAL FLUIDITY',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Operating Officer:', 'desc' => 'Directs global production, supply chain, and program delivery.' ),
				array( 'title' => 'Program Management Office Director:', 'desc' => 'Enforces enterprise-wide governance and milestones.' ),
				array( 'title' => 'Supply Chain Vice President:', 'desc' => 'Optimizes vendor logistics and procurement efficiencies.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: MAXIMUM OPERATIONAL',
			'coaching_protocol'  => 'COACHING PROTOCOL: DIR-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Active Inquiry & Listening', 'desc' => 'Host listening sessions with creative and R&D leads to understand agile workflows.', 'deliverable' => 'Cross-Functional Empathy Audit' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Agile Exception Framework', 'desc' => 'Create streamlined approval lanes for fast-moving digital initiatives.', 'deliverable' => 'Fast-Track Operational Charter' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Strategic Empowerment Delegation', 'desc' => 'Delegate day-to-day scheduling to senior managers to focus on macro scaling.', 'deliverable' => 'Delegation Matrix' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ESTJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Guarantee corporate strategic milestones translate into flawless execution and healthy margins.',
			),
		),

		'ISFJ' => array(
			'code'               => 'ISFJ',
			'index_num'          => '12',
			'title'              => 'The Relational Guardian',
			'domain_slug'        => 'grounded',
			'domain_name'        => 'Grounded & Operational',
			'territory'          => 'TERRITORY 04 // OPERATIONAL & COMPLIANCE',
			'lead_summary'       => 'Preserves institutional stability, customer care, and procedural integrity with tireless dedication, quiet thoroughness, and deep loyalty.',
			'polarity'           => 'Attentive Custodianship',
			'driver'             => 'Institutional Well-being',
			'cadence'            => 'Methodical Service',
			'calibration_coeff'  => 'α = 0.938 (HIGH)',
			'calibration_val'    => 93,
			'ci_band'            => '95% CI [0.90 — 0.96]',
			'cohort_freq'        => '13.8%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Attentive Institutional Stewardship and Reliable Excellence',
			'pullquote'          => '“The Guardian works behind the scenes to guarantee that no client is forgotten, no administrative detail is dropped, and the corporate community thrives.”',
			'narrative'          => 'The ISFJ provides warm, dependable institutional ballast. With unmatched conscientiousness and genuine care for team members, they ensure steady continuity and client satisfaction.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Conscientious Thoroughness', 'desc' => 'Reviews every contract and customer ticket with meticulous attention.', 'eval' => 'EVAL: METICULOUS' ),
				array( 'num' => '02', 'title' => 'Quiet Institutional Loyalty', 'desc' => 'Supports leadership through corporate turbulence with steady resolve.', 'eval' => 'EVAL: LOYAL' ),
				array( 'num' => '03', 'title' => 'Empathetic Service Standard', 'desc' => 'Treats every employee and customer with dignity and care.', 'eval' => 'EVAL: DEDICATED' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Quiet Supportive Service',
				'decision'  => 'Historical Precedent & Relational Care',
				'decomp'    => 'Home, Gardening & Quiet Family Time',
				'boardroom' => 'Institutional Conscience & Caretaker',
				'conflict'  => 'Gentle Diplomatic De-escalation',
			),
			'calibrator'         => array(
				'headline' => 'Top 13.8% Customer Fidelity',
				'desc'     => 'Industry benchmark for customer service retention, administrative reliability, and workplace stability.',
				'variance' => '±1.1%',
				'sample'   => 'VP CUSTOMER SUCCESS / CHIEF OF STAFF',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 88, 'low' => 83, 'high' => 92, 'desc' => 'Detailed Focus on Operational Accuracy and Client Care.' ),
				'execution'    => array( 'score' => 86, 'low' => 81, 'high' => 90, 'desc' => 'Consistent, Dependable Daily Delivery without Flaws.' ),
				'control'      => array( 'score' => 92, 'low' => 88, 'high' => 95, 'desc' => 'Rigorous Data Integrity, Archival Care, and Standards.' ),
				'adaptability' => array( 'score' => 50, 'low' => 44, 'high' => 56, 'desc' => 'Steady Evolution Rooted in Trusted Past Practices.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.928', 'sem' => '±1.26', 'retest' => 'r = 0.91' ),
			'strengths'          => array(
				array( 'title' => '1. Exceptional Client Retention', 'tag' => 'Optimal Drive', 'desc' => 'Builds deeply loyal client relationships that endure through economic shocks.', 'manifestation' => 'Achieves zero customer churn.' ),
				array( 'title' => '2. Meticulous Operational Records', 'tag' => 'Systemic Rigor', 'desc' => 'Maintains impeccable administrative logs and documentation archives.', 'manifestation' => 'Passes complex regulatory audits cleanly.' ),
				array( 'title' => '3. Workplace Cohesion Steward', 'tag' => 'High Impact', 'desc' => 'Remembers employee milestones and fosters a caring corporate culture.', 'manifestation' => 'Boosts internal morale and stability.' ),
				array( 'title' => '4. Crisis Support Rock', 'tag' => 'Systemic Rigor', 'desc' => 'Stays late to support teams through operational crunches without complaint.', 'manifestation' => 'Rescues overwhelmed operating teams.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Reluctance to Advocate for Self', 'category' => 'Leadership', 'desc' => 'Overworks silently without seeking appropriate compensation or recognition.', 'remediation' => 'Institute proactive executive compensation audits.' ),
				array( 'title' => '2. Over-Commitment to Routine', 'category' => 'Adaptability', 'desc' => 'Hesitates to adopt new automated tools out of loyalty to legacy processes.', 'remediation' => 'Provide gradual, supported digital transitions.' ),
				array( 'title' => '3. Internalizing Criticism', 'category' => 'Communication', 'desc' => 'Takes constructive system critiques deeply to heart.', 'remediation' => 'Reassure of personal esteem before operational reviews.' ),
				array( 'title' => '4. Conflict Avoidance', 'category' => 'Governance', 'desc' => 'Withholds feedback on poor peer performance to preserve peace.', 'remediation' => 'Provide confidential review mechanisms.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Be Polite & Respectful:', 'desc' => 'Show warmth and appreciation for their thorough preparation.' ),
				array( 'title' => 'Provide Clear Instructions:', 'desc' => 'Outline exactly what is needed with clear examples and templates.' ),
				array( 'title' => 'Give Time to Adapt:', 'desc' => 'Introduce major workflow changes incrementally with training.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: THOROUGH CHECKLIST & SOP REFERENCE',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ISFJ + ENTP (Visionary)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ENTP pioneers bold ideas; ISFJ ensures practical execution and patient client care.' ),
				'friction'   => array( 'pair' => 'ISFJ + ENTJ (Commander)', 'tag' => 'HIGH FRICTION', 'desc' => 'Aggressive directive pressure can overwhelm gentle, conscientious pacing.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 11% UNDER AGGRESSIVE RESTRUCTURING',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief of Staff:', 'desc' => 'Manages executive operations, schedules, and confidential governance.' ),
				array( 'title' => 'VP of Customer Success:', 'desc' => 'Maintains enterprise client satisfaction and retention.' ),
				array( 'title' => 'Corporate Secretary:', 'desc' => 'Ensures accurate board minutes and regulatory compliance.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: STEADY TRUSTED',
			'coaching_protocol'  => 'COACHING PROTOCOL: REL-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Assertive Self-Advocacy', 'desc' => 'Practice voicing resource needs directly in executive budgeting meetings.', 'deliverable' => 'Resource Allocation Request' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Digital Tool Adoption', 'desc' => 'Lead the pilot implementation of an automated administrative platform.', 'deliverable' => 'Automation Pilot Review' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Boundaries and Rest Rhythms', 'desc' => 'Establish strict non-working hours to protect personal recovery and longevity.', 'deliverable' => 'Personal Sustainability Charter' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ISFJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Preserve customer loyalty, organizational stability, and procedural thoroughness.',
			),
		),

		'ESFJ' => array(
			'code'               => 'ESFJ',
			'index_num'          => '13',
			'title'              => 'The Institutional Facilitator',
			'domain_slug'        => 'grounded',
			'domain_name'        => 'Grounded & Operational',
			'territory'          => 'TERRITORY 04 // OPERATIONAL & COMPLIANCE',
			'lead_summary'       => 'Builds seamless operational networks, community cohesion, and stakeholder harmony with boundless warmth, structured hospitality, and practical service.',
			'polarity'           => 'Harmonic Alignment',
			'driver'             => 'Team Cohesion',
			'cadence'            => 'Engaging Interpersonal',
			'calibration_coeff'  => 'α = 0.922 (OPTIMAL)',
			'calibration_val'    => 88,
			'ci_band'            => '95% CI [0.87 — 0.94]',
			'cohort_freq'        => '12.3%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Harmonious Community Operations and Practical Facilitation',
			'pullquote'          => '“The Facilitator transforms corporate organizations into cohesive families where everyone understands their duties, feels appreciated, and works together.”',
			'narrative'          => 'The ESFJ is a master organizer of community events, team workflows, and customer experiences. They combine systematic order with genuine human connection to keep operations running smoothly.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Hospitality as Governance', 'desc' => 'Ensures internal and external stakeholders feel respected and valued.', 'eval' => 'EVAL: HOSPITABLE' ),
				array( 'num' => '02', 'title' => 'Structured Team Care', 'desc' => 'Establishes clear routines and celebrations that bond colleagues together.', 'eval' => 'EVAL: COHESIVE' ),
				array( 'num' => '03', 'title' => 'Practical Problem Resolution', 'desc' => 'Solves logistical friction quickly with commonsense action.', 'eval' => 'EVAL: PRAGMATIC' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Warm Extroverted Connection',
				'decision'  => 'Shared Norms & Community Well-being',
				'decomp'    => 'Hosting Friends, Cooking & Social Clubs',
				'boardroom' => 'Consensus Facilitator & Team Voice',
				'conflict'  => 'Collaborative Harmony Seeking',
			),
			'calibrator'         => array(
				'headline' => 'Top 12.3% Community Alignment',
				'desc'     => 'Unmatched in client hospitality, corporate event operations, and cross-functional team happiness.',
				'variance' => '±1.5%',
				'sample'   => 'VP HUMAN RESOURCES / HOSPITALITY DIRECTORS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 76, 'low' => 70, 'high' => 82, 'desc' => 'Broad Social Scanning and Operational Coordination.' ),
				'execution'    => array( 'score' => 88, 'low' => 83, 'high' => 92, 'desc' => 'High-Touch Logistical Follow-Through and Delivery.' ),
				'control'      => array( 'score' => 85, 'low' => 80, 'high' => 89, 'desc' => 'Respect for Social Conventions and Operational Norms.' ),
				'adaptability' => array( 'score' => 65, 'low' => 59, 'high' => 71, 'desc' => 'Responsive to Immediate People and Event Needs.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.916', 'sem' => '±1.38', 'retest' => 'r = 0.90' ),
			'strengths'          => array(
				array( 'title' => '1. Flawless Event Facilitation', 'tag' => 'Optimal Drive', 'desc' => 'Organizes corporate summits and client galas with precision and grace.', 'manifestation' => 'Elevates enterprise reputation.' ),
				array( 'title' => '2. Rapid Social Onboarding', 'tag' => 'High Impact', 'desc' => 'Integrates new executive hires into company social fabric immediately.', 'manifestation' => 'Reduces new hire ramp-up time.' ),
				array( 'title' => '3. Cross-Departmental Goodwill', 'tag' => 'Systemic Rigor', 'desc' => 'Maintains warm relationships across all departments, smoothing approvals.', 'manifestation' => 'Speeds up cross-silo initiatives.' ),
				array( 'title' => '4. Dedicated Service Culture', 'tag' => 'Optimal Drive', 'desc' => 'Models exceptional service standards for frontline customer teams.', 'manifestation' => 'Wins customer service accolades.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Distress Over Harsh Conflict', 'category' => 'Leadership', 'desc' => 'Disheartened by cutthroat corporate politics and cynical executive behavior.', 'remediation' => 'Shield with objective corporate governance guidelines.' ),
				array( 'title' => '2. Fear of Disrupting Social Order', 'category' => 'Strategy', 'desc' => 'Hesitates to propose necessary restructurings that might upset colleagues.', 'remediation' => 'Frame changes around long-term company welfare.' ),
				array( 'title' => '3. Over-Sensitivity to Status', 'category' => 'Culture', 'desc' => 'Can worry excessively about corporate hierarchy and external perceptions.', 'remediation' => 'Focus on intrinsic team achievements.' ),
				array( 'title' => '4. Reluctance to Challenge Authority', 'category' => 'Governance', 'desc' => 'Rarely speaks out against established leadership policies.', 'remediation' => 'Solicit feedback in anonymous executive surveys.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Warm & Collegial Tone:', 'desc' => 'Open meetings with friendly rapport and mutual appreciation.' ),
				array( 'title' => 'Clear Roles & Deliverables:', 'desc' => 'Specify exactly who handles which responsibilities.' ),
				array( 'title' => 'Acknowledge Contributions:', 'desc' => 'Publicly celebrate the team members who did the heavy lifting.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: COLLABORATIVE AGENDA & LOGISTICS PLAN',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ESFJ + INTP (Theorist)', 'tag' => 'HIGH SYNERGY', 'desc' => 'INTP provides abstract architecture; ESFJ manages team communication and implementation.' ),
				'friction'   => array( 'pair' => 'ESFJ + INTJ (Architect)', 'tag' => 'HIGH FRICTION', 'desc' => 'Social harmony protocols collide with dispassionate systemic restructuring demands.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 18% UNDER COLD RESTRUCTURING',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'VP of Corporate Affairs:', 'desc' => 'Manages community partnerships, corporate events, and internal comms.' ),
				array( 'title' => 'Head of Customer Experience:', 'desc' => 'Guarantees delightful client touchpoints across all channels.' ),
				array( 'title' => 'Executive Office Administrator:', 'desc' => 'Coordinates executive committee meetings and logistical operations.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: COMMUNITY HIGH',
			'coaching_protocol'  => 'COACHING PROTOCOL: FACIL-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Hard Decisions Training', 'desc' => 'Practice delivering difficult performance reviews with objective clarity.', 'deliverable' => 'Performance Counseling Playbook' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Strategic Distance Mastery', 'desc' => 'Evaluate proposals on commercial merit rather than interpersonal relationships.', 'deliverable' => 'Unbiased Evaluation Memo' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Personal Restoration Focus', 'desc' => 'Delegate event coordination tasks to protect personal focus time.', 'deliverable' => 'Event Management Delegation SOP' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ESFJ Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Create seamless corporate community operations and exceptional stakeholder satisfaction.',
			),
		),

		'ISTP' => array(
			'code'               => 'ISTP',
			'index_num'          => '14',
			'title'              => 'The Tactical Craftsman',
			'domain_slug'        => 'synthesizer',
			'domain_name'        => 'Adaptive & Real-Time',
			'territory'          => 'TERRITORY 04 // REAL-TIME & ADAPTIVE',
			'lead_summary'       => 'Responds to technical emergencies with calm composure, mastering tools, mechanics, and real-time troubleshooting with surgical precision and economy of effort.',
			'polarity'           => 'Applied Pragmatism',
			'driver'             => 'Real-Time Problem Solving',
			'cadence'            => 'Quiet Calibration',
			'calibration_coeff'  => 'α = 0.930 (HIGH)',
			'calibration_val'    => 90,
			'ci_band'            => '95% CI [0.88 — 0.95]',
			'cohort_freq'        => '5.4%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Applied Technical Mastery and Crisis Troubleshooting',
			'pullquote'          => '“The Craftsman does not debate abstract theories; they pick up the tools, identify the exact broken gear, and make the machine run perfectly.”',
			'narrative'          => 'The ISTP is the ultimate practical troubleshooter. In moments of operational breakdown or technology failure, their calm, analytical focus cuts through panic to restore functionality.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Economy of Action', 'desc' => 'Solves problems with minimum wasted words, meetings, and movements.', 'eval' => 'EVAL: EFFICIENT' ),
				array( 'num' => '02', 'title' => 'Empirical Mechanical Mastery', 'desc' => 'Understands how complex systems actually operate in physical reality.', 'eval' => 'EVAL: PRAGMATIC' ),
				array( 'num' => '03', 'title' => 'Cool Demeanor Under Pressure', 'desc' => 'Operates with ice-cold clarity during high-stakes operational outages.', 'eval' => 'EVAL: UNSHAKABLE' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Quiet Observant Diagnostics',
				'decision'  => 'Practical Mechanical Logic',
				'decomp'    => 'Motorsports, Coding & Woodworking',
				'boardroom' => 'Technical Realist & Troubleshooter',
				'conflict'  => 'Detached Pragmatic Resolution',
			),
			'calibrator'         => array(
				'headline' => 'Top 5.4% Mechanical Diagnosis',
				'desc'     => 'Unsurpassed in urgent troubleshooting, engineering diagnostics, and real-time infrastructure rescue.',
				'variance' => '±1.7%',
				'sample'   => 'VP OF ENGINEERING / SITE RELIABILITY DIRECTORS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 90, 'low' => 85, 'high' => 94, 'desc' => 'Intense Forensic Focus on Specific Broken Mechanical Links.' ),
				'execution'    => array( 'score' => 82, 'low' => 76, 'high' => 87, 'desc' => 'High Craftsmanship Applied Directly to Core Bottlenecks.' ),
				'control'      => array( 'score' => 78, 'low' => 72, 'high' => 83, 'desc' => 'Precise Technical Standards with Minimal Bureaucracy.' ),
				'adaptability' => array( 'score' => 85, 'low' => 80, 'high' => 89, 'desc' => 'Instant Tactical Troubleshooting Under Live Outages.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.918', 'sem' => '±1.40', 'retest' => 'r = 0.89' ),
			'strengths'          => array(
				array( 'title' => '1. Critical Infrastructure Rescue', 'tag' => 'Optimal Drive', 'desc' => 'Restores complex cloud or industrial outages faster than competitors.', 'manifestation' => 'Prevents catastrophic downtime losses.' ),
				array( 'title' => '2. Ruthless Fluff Elimination', 'tag' => 'Systemic Rigor', 'desc' => 'Cuts through corporate jargon to identify tangible core engineering challenges.', 'manifestation' => 'Eliminates wasted engineering cycles.' ),
				array( 'title' => '3. Adaptable Tool Mastery', 'tag' => 'High Impact', 'desc' => 'Masters novel technical architectures and programming stacks effortlessly.', 'manifestation' => 'Keeps tech stacks modern and lean.' ),
				array( 'title' => '4. Unflappable Emergency Presence', 'tag' => 'Optimal Drive', 'desc' => 'Maintains calm focus while alarms sound and executive committees panic.', 'manifestation' => 'Anchors teams during existential crises.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Aversion to Strategic Bureaucracy', 'category' => 'Leadership', 'desc' => 'Skips long-range corporate planning meetings to stay in the lab.', 'remediation' => 'Pair with a Strategic Planning coordinator.' ),
				array( 'title' => '2. Under-Communicating Status', 'category' => 'Communication', 'desc' => 'Fixes issues silently without informing anxious executive leadership.', 'remediation' => 'Assign an operational communicator during outages.' ),
				array( 'title' => '3. Reluctance to Direct People', 'category' => 'Governance', 'desc' => 'Prefers doing the work directly over managing large organizational teams.', 'remediation' => 'Position as Distinguished Technical Architect.' ),
				array( 'title' => '4. Boredom with Steady Routine', 'category' => 'Execution', 'desc' => 'Loses interest once systems are stable and emergencies subside.', 'remediation' => 'Rotate onto new mission-critical engineering initiatives.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Skip Preambles:', 'desc' => 'State the exact technical bug or operational bottleneck immediately.' ),
				array( 'title' => 'Respect Hand-On Time:', 'desc' => 'Keep meetings short and allow uninterrupted time at the keyboard.' ),
				array( 'title' => 'Value Output Over Optics:', 'desc' => 'Evaluate them on working systems rather than polished PowerPoint slides.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: ROOT-CAUSE ANALYSIS & PULL REQUEST',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ISTP + ESTJ (Director)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ESTJ coordinates budgets and logistics; ISTP builds and debugs the core technical machinery.' ),
				'friction'   => array( 'pair' => 'ISTP + ENFJ (Catalyst)', 'tag' => 'HIGH FRICTION', 'desc' => 'Detached practical efficiency clashes with desire for emotional rallies and group alignment.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 20% UNDER HEAVY BUREAUCRACY',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Technology Officer (Infrastructure):', 'desc' => 'Guarantees rock-solid uptime and platform engineering.' ),
				array( 'title' => 'Principal Security Incident Commander:', 'desc' => 'Directs cyber and security incident response.' ),
				array( 'title' => 'Distinguished Systems Architect:', 'desc' => 'Solves acute high-concurrency technical bottlenecks.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: TECHNICAL MAXIMUM',
			'coaching_protocol'  => 'COACHING PROTOCOL: CRAFT-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Incident Communication Framework', 'desc' => 'Implement automated broadcast channels to keep executives updated during outages.', 'deliverable' => 'Incident Comms Protocol' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Junior Engineer Mentorship', 'desc' => 'Host weekly paired debugging sessions to codify intuitive troubleshooting.', 'deliverable' => 'Troubleshooting Heuristic Guide' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Strategic Tech Debt Roadmap', 'desc' => 'Author a comprehensive plan to eliminate legacy tech debt before crises occur.', 'deliverable' => 'Technical Debt Remediation Plan' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ISTP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Empower executive leadership with world-class engineering diagnostics and emergency agility.',
			),
		),

		'ISFP' => array(
			'code'               => 'ISFP',
			'index_num'          => '15',
			'title'              => 'The Harmonious Artisan',
			'domain_slug'        => 'synthesizer',
			'domain_name'        => 'Adaptive & Real-Time',
			'territory'          => 'TERRITORY 02 // DYNAMIC & INNOVATIVE',
			'lead_summary'       => 'Crafts rich sensory designs, authentic experiences, and values-aligned brand resonance through quiet, observant individual craftsmanship and situational fluidity.',
			'polarity'           => 'Quiet Individualism',
			'driver'             => 'Aesthetic Authenticity',
			'cadence'            => 'Situational Fluidity',
			'calibration_coeff'  => 'α = 0.908 (OPTIMAL)',
			'calibration_val'    => 86,
			'ci_band'            => '95% CI [0.86 — 0.93]',
			'cohort_freq'        => '8.8%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Sensory Aesthetic Mastery and Authentic Craftsmanship',
			'pullquote'          => '“The Artisan captures customer emotion through subtle aesthetic nuance, crafting brand experiences that feel intimately genuine and deeply resonant.”',
			'narrative'          => 'The ISFP translates subtle human sensitivities into tangible designs and environments. Operating with gentle integrity, they ensure products have visceral emotional appeal.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Sensory Perfectionism', 'desc' => 'Refines visual, physical, and tonal qualities until they evoke true beauty.', 'eval' => 'EVAL: ARTISTIC' ),
				array( 'num' => '02', 'title' => 'Authentic Modesty', 'desc' => 'Prefers letting the beauty of finished work speak rather than boasting.', 'eval' => 'EVAL: UNASSUMING' ),
				array( 'num' => '03', 'title' => 'Real-Time Attunement', 'desc' => 'Adapts to changing environmental atmospheres with instinctual elegance.', 'eval' => 'EVAL: INTUITIVE' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'Quiet Independent Immersion',
				'decision'  => 'Personal Aesthetic Values & Felt Harmony',
				'decomp'    => 'Music, Fine Arts & Nature Walks',
				'boardroom' => 'Quiet Brand & Aesthetics Voice',
				'conflict'  => 'Peaceful Tactical Retreat',
			),
			'calibrator'         => array(
				'headline' => 'Top 8.8% Sensory Design',
				'desc'     => 'Unsurpassed in industrial product aesthetics, retail atmosphere, and brand visual harmony.',
				'variance' => '±2.0%',
				'sample'   => 'VP DESIGN / PRODUCT STYLING DIRECTORS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 78, 'low' => 72, 'high' => 84, 'desc' => 'Attentive Focus on Visual Harmony and User Sensory Experience.' ),
				'execution'    => array( 'score' => 66, 'low' => 60, 'high' => 72, 'desc' => 'Deep Handcrafted Focus on Physical Prototype Excellence.' ),
				'control'      => array( 'score' => 64, 'low' => 58, 'high' => 70, 'desc' => 'Integrity Guarding Core Brand Aesthetics and Soul.' ),
				'adaptability' => array( 'score' => 92, 'low' => 87, 'high' => 96, 'desc' => 'Fluid Improvisation Guided by Real-Time Aesthetic Feeling.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.904', 'sem' => '±1.50', 'retest' => 'r = 0.88' ),
			'strengths'          => array(
				array( 'title' => '1. Iconic Aesthetic Taste', 'tag' => 'Optimal Drive', 'desc' => 'Shapes product form factors that win global design awards and customer admiration.', 'manifestation' => 'Elevates enterprise brand prestige.' ),
				array( 'title' => '2. Tactile Customer Empathy', 'tag' => 'High Impact', 'desc' => 'Senses subtle consumer irritations in user interfaces and physical goods.', 'manifestation' => 'Eliminates product friction points.' ),
				array( 'title' => '3. Calm Flexible Collaboration', 'tag' => 'Systemic Rigor', 'desc' => 'Adapts to creative feedback without defensive ego or territorial friction.', 'manifestation' => 'Maintains harmonious design studios.' ),
				array( 'title' => '4. Authentic Trend Attunement', 'tag' => 'Optimal Drive', 'desc' => 'Catches emerging cultural aesthetic movements years before they hit mainstream.', 'manifestation' => 'Keeps product lines ahead of consumer tastes.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Silence in Contentious Meetings', 'category' => 'Communication', 'desc' => 'Remains quiet during debates, allowing inferior designs to pass without objection.', 'remediation' => 'Provide pre-meeting design review writeups.' ),
				array( 'title' => '2. Resistance to Aggressive Pacing', 'category' => 'Execution', 'desc' => 'Resents being rushed, prioritizing craft perfection over shipping deadlines.', 'remediation' => 'Establish phased design milestone tiers.' ),
				array( 'title' => '3. Aversion to Financial Modeling', 'category' => 'Governance', 'desc' => 'Dislikes analyzing margin implications of premium design materials.', 'remediation' => 'Pair with a product finance analyst.' ),
				array( 'title' => '4. Over-Sensitivity to Criticism', 'category' => 'Leadership', 'desc' => 'Experiences corporate design critiques as personal rejection.', 'remediation' => 'Focus feedback sessions on user testing data.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Critique Work Not Person:', 'desc' => 'Frame design reviews around specific customer feedback and objective goals.' ),
				array( 'title' => 'Give Creative Space:', 'desc' => 'Allow quiet solo time to explore prototypes before requiring formal reviews.' ),
				array( 'title' => 'Value Visual Demonstrations:', 'desc' => 'Review interactive design mockups rather than text-only specification briefs.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: DESIGN PORTFOLIO & PHYSICAL MOCKUP',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ISFP + ENTJ (Commander)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ISFP crafts world-class aesthetic soul; ENTJ supplies scale, distribution, and monetization.' ),
				'friction'   => array( 'pair' => 'ISFP + ESTJ (Director)', 'tag' => 'HIGH FRICTION', 'desc' => 'Rigid bureaucratic demands clash with gentle, organic creative pacing.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 24% UNDER AGGRESSIVE METRIC-DRIVEN PRESSURE',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Head of Brand Design:', 'desc' => 'Directs visual identity, packaging, and tactile customer experiences.' ),
				array( 'title' => 'Principal Industrial Designer:', 'desc' => 'Creates physical product architectures and ergonomic forms.' ),
				array( 'title' => 'Creative Atmosphere Director:', 'desc' => 'Curates physical retail and corporate environment aesthetics.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: ARTISTIC SPECIALIST',
			'coaching_protocol'  => 'COACHING PROTOCOL: ART-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Design Rationale Articulation', 'desc' => 'Practice pitching aesthetic choices using commercial conversion and retention data.', 'deliverable' => 'Design ROI Case Study' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Proactive Meeting Voice', 'desc' => 'Speak up early in product council meetings to defend brand aesthetic standards.', 'deliverable' => 'Brand Design Standards Memo' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Modular Design Acceleration', 'desc' => 'Build a reusable component kit to speed up delivery without sacrificing craftsmanship.', 'deliverable' => 'Scalable Design System Kit' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ISFP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Ensure enterprise products win hearts through undeniable beauty, craft, and emotional authenticity.',
			),
		),

		'ESFP' => array(
			'code'               => 'ESFP',
			'index_num'          => '16',
			'title'              => 'The Spontaneous Performer',
			'domain_slug'        => 'synthesizer',
			'domain_name'        => 'Adaptive & Real-Time',
			'territory'          => 'TERRITORY 02 // DYNAMIC & INNOVATIVE',
			'lead_summary'       => 'Brings immediate charismatic energy and emotional presence to any room, mastering real-time audience engagement and turning dry corporate encounters into vibrant partnerships.',
			'polarity'           => 'Real-Time Engagement',
			'driver'             => 'Experiential Vitality',
			'cadence'            => 'Energetic Catalyst',
			'calibration_coeff'  => 'α = 0.902 (OPTIMAL)',
			'calibration_val'    => 85,
			'ci_band'            => '95% CI [0.85 — 0.93]',
			'cohort_freq'        => '8.5%',
			'figurine_url'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDLlkaUaZvn5hloTUDab3rjPf5hnLW-65ZdosOLfYOVh7Dk9Ftc3yKg-n_lIyXg-3wKHKgK5vFlb5yKOg4Mm-T1lpx4I6kV1mWldEjz7FKecu70N7jcnTQmt1VX6vyWXEgIwYBMrXwyVuoZ_KtFXuDp-FplijQLLMozg3HgbpHLEADaoOoHnfYz2obZg0HQEPBXyx7BXPYuKrF_VUeagTtiJXQYieMgGKllATe14_LZT6YwIxs1_E-o',
			'overview_headline'  => 'Experiential Magnetism and Real-Time Audience Engagement',
			'pullquote'          => '“The Performer commands the room with spontaneous charm and warmth, turning skeptical prospects into passionate brand champions in minutes.”',
			'narrative'          => 'The ESFP is a brilliant communicator, natural host, and brand evangelist. In customer-facing summits, product launches, and media tours, their natural vitality creates unforgettable human connections.',
			'axioms'             => array(
				array( 'num' => '01', 'title' => 'Instantaneous Rapport', 'desc' => 'Connects with any audience by reading energy and injecting spontaneous humor.', 'eval' => 'EVAL: MAGNETIC' ),
				array( 'num' => '02', 'title' => 'Unbounded Enthusiasm', 'desc' => 'Generates contagious excitement around enterprise milestones and products.', 'eval' => 'EVAL: VIBRANT' ),
				array( 'num' => '03', 'title' => 'Sensory Stage Presence', 'desc' => 'Delivers keynote presentations that captivate audiences and dominate media.', 'eval' => 'EVAL: CAPTIVATING' ),
			),
			'dna_matrix'         => array(
				'energy'    => 'High-Voltage Social Immersion',
				'decision'  => 'Immediate Human Impact & Engagement',
				'decomp'    => 'Performing Arts, Social Festivities & Travel',
				'boardroom' => 'Charismatic Evangelist & Customer Voice',
				'conflict'  => 'Lighthearted De-escalation',
			),
			'calibrator'         => array(
				'headline' => 'Top 8.5% Audience Engagement',
				'desc'     => 'Unsurpassed in live event presentations, keynote evangelism, media tours, and consumer delight.',
				'variance' => '±2.2%',
				'sample'   => 'CHIEF MARKETING OFFICERS / BRAND AMBASSADORS',
			),
			'feca'               => array(
				'focus'        => array( 'score' => 70, 'low' => 64, 'high' => 76, 'desc' => 'Broad Real-Time Scanning of Live Audience Sentiment.' ),
				'execution'    => array( 'score' => 84, 'low' => 78, 'high' => 89, 'desc' => 'Dynamic High-Energy Campaign Delivery and Live Launch.' ),
				'control'      => array( 'score' => 52, 'low' => 46, 'high' => 58, 'desc' => 'Flexible Governance that Encourages Spontaneous Flair.' ),
				'adaptability' => array( 'score' => 96, 'low' => 92, 'high' => 99, 'desc' => 'Effortless Improvisation during Live Media Encounters.' ),
			),
			'reliability'        => array( 'alpha' => 'α = 0.898', 'sem' => '±1.60', 'retest' => 'r = 0.86' ),
			'strengths'          => array(
				array( 'title' => '1. Keynote Stage Magnetism', 'tag' => 'Optimal Drive', 'desc' => 'Turns dry product launches into must-see cultural moments and viral media.', 'manifestation' => 'Captures massive earned media value.' ),
				array( 'title' => '2. Relationship Building Charm', 'tag' => 'High Impact', 'desc' => 'Charms enterprise VIPs, influencers, and press contacts with ease.', 'manifestation' => 'Secures tier-one global press coverage.' ),
				array( 'title' => '3. Contagious Team Morale', 'tag' => 'Optimal Drive', 'desc' => 'Lifts executive spirits and restores optimism during demanding roadshows.', 'manifestation' => 'Re-energizes exhausted project teams.' ),
				array( 'title' => '4. Quick Improvisational Recovery', 'tag' => 'Systemic Rigor', 'desc' => 'Saves faltering live presentations with spontaneous wit and grace.', 'manifestation' => 'Prevents embarrassing public relations slip-ups.' ),
			),
			'watchpoints'        => array(
				array( 'title' => '1. Aversion to Administrative Routine', 'category' => 'Execution', 'desc' => 'Ignores internal expense reports and bureaucratic paperwork.', 'remediation' => 'Pair with a detail-oriented executive assistant.' ),
				array( 'title' => '2. Sensitivity to Abstract Criticism', 'category' => 'Leadership', 'desc' => 'Feels alienated by cold quantitative audits devoid of human warmth.', 'remediation' => 'Deliver feedback with positive reinforcement.' ),
				array( 'title' => '3. Impulsive Tactical Commitments', 'category' => 'Governance', 'desc' => 'Makes generous promises on stage before checking operational feasibility.', 'remediation' => 'Review all public commitment guidelines in advance.' ),
				array( 'title' => '4. Boredom with Solo Analysis', 'category' => 'Strategy', 'desc' => 'Struggles with solitary multi-day data analysis tasks.', 'remediation' => 'Conduct strategy in collaborative, lively workshops.' ),
			),
			'interface_rules'    => array(
				array( 'title' => 'Bring Energy & Enthusiasm:', 'desc' => 'Engage with upbeat warmth and clear interactive demonstrations.' ),
				array( 'title' => 'Focus on Human Stories:', 'desc' => 'Illustrate concepts with customer stories rather than dry formulas.' ),
				array( 'title' => 'Keep Formats Dynamic:', 'desc' => 'Use video, interactive demos, and live discussions.' ),
			),
			'preferred_format'   => 'PREFERRED FORMAT: VIDEO DEMO & LIVE KEYNOTE RUN-OF-SHOW',
			'dyads'              => array(
				'synergy'    => array( 'pair' => 'ESFP + ISTJ (Anchor)', 'tag' => 'HIGH SYNERGY', 'desc' => 'ESFP generates massive public excitement; ISTJ keeps the backend operations running flawlessly.' ),
				'friction'   => array( 'pair' => 'ESFP + INTJ (Architect)', 'tag' => 'HIGH FRICTION', 'desc' => 'Spontaneous real-time showmanship clashes with cold, solitary systemic deconstruction.' ),
				'drift_risk' => 'DYAD DRIFT RISK: 22% UNDER STRICT SPREADSHEET AUDITS',
			),
			'boardroom_roles'    => array(
				array( 'title' => 'Chief Brand Evangelist:', 'desc' => 'Represents the company at major global summits and broadcast media.' ),
				array( 'title' => 'Global Events Vice President:', 'desc' => 'Produces unforgettable flagship user conferences and launches.' ),
				array( 'title' => 'Influencer & VIP Partnerships Lead:', 'desc' => 'Maintains close relationships with top cultural and industry icons.' ),
			),
			'board_discharge'    => 'BOARD DISCHARGE CAPACITY: EVANGELIST HIGH',
			'coaching_protocol'  => 'COACHING PROTOCOL: PERF-EX-90',
			'growth_phases'      => array(
				array( 'days' => 'DAYS 01 — 30', 'title' => 'Governance Hygiene Standards', 'desc' => 'Establish weekly administrative check-ins to keep expenses and logs updated.', 'deliverable' => 'Administrative Compliance Log' ),
				array( 'days' => 'DAYS 31 — 60', 'title' => 'Pre-Stage Commitment Audits', 'desc' => 'Practice sticking strictly to vetted announcements during media interviews.', 'deliverable' => 'Approved Media Talking Points' ),
				array( 'days' => 'DAYS 61 — 90', 'title' => 'Long-Range Brand Strategy', 'desc' => 'Co-author an annual brand storytelling calendar with the strategy team.', 'deliverable' => 'Annual Brand Narrative Roadmap' ),
			),
			'csuite_banner'      => array(
				'title' => 'Integrate ESFP Profiles into C-Suite Dyad Modeling',
				'desc'  => 'Electrify customer markets and turn enterprise milestones into viral cultural phenomena.',
			),
		),
	);
}

/**
 * Get unified profile dossier data for a given post.
 * Merges post data, post meta, and fallback dictionary.
 *
 * @param int|WP_Post|null $post_id Post ID or object.
 * @return array Unified dossier data array.
 */
function core16_get_profile_dossier_data( $post_id = 0 ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}
	$post = get_post( $post_id );

	// Determine profile code
	$meta_code = get_post_meta( $post_id, 'archetype_code', true );
	$slug      = $post ? strtoupper( $post->post_name ) : 'INTJ';
	$title_raw = $post ? $post->post_title : 'INTJ';

	// Extract code
	$code = 'INTJ';
	if ( ! empty( $meta_code ) ) {
		$code = strtoupper( trim( $meta_code ) );
	} elseif ( preg_match( '/\b(INTJ|ENTJ|INTP|ENTP|INFJ|ENFJ|INFP|ENFP|ISTJ|ESTJ|ISFJ|ESFJ|ISTP|ESTP|ISFP|ESFP)\b/i', $title_raw, $matches ) ) {
		$code = strtoupper( $matches[1] );
	} elseif ( preg_match( '/\b(INTJ|ENTJ|INTP|ENTP|INFJ|ENFJ|INFP|ENFP|ISTJ|ESTJ|ISFJ|ESFJ|ISTP|ESTP|ISFP|ESFP)\b/i', $slug, $matches ) ) {
		$code = strtoupper( $matches[1] );
	}

	$all_data = core16_get_all_archetypes_dictionary();
	$fallback = isset( $all_data[ $code ] ) ? $all_data[ $code ] : $all_data['INTJ'];

	// Post meta lookups
	$custom_subtitle = get_post_meta( $post_id, 'archetype_subtitle', true );
	$custom_num      = get_post_meta( $post_id, 'archetype_number', true );
	$custom_tag      = get_post_meta( $post_id, 'territory_tag', true );
	$custom_polarity = get_post_meta( $post_id, 'cognitive_polarity', true );
	$custom_driver   = get_post_meta( $post_id, 'primary_driver', true );
	$custom_cadence  = get_post_meta( $post_id, 'boardroom_cadence', true );
	$custom_coeff    = get_post_meta( $post_id, 'calibration_coefficient', true );
	$custom_freq     = get_post_meta( $post_id, 'cohort_frequency', true );
	$custom_figurine = get_post_meta( $post_id, 'figurine_image_url', true );
	$custom_summary  = get_post_meta( $post_id, 'behavioral_summary', true );

	// Numeric FECA
	$meta_f = get_post_meta( $post_id, 'feca_focus', true );
	$meta_e = get_post_meta( $post_id, 'feca_execution', true );
	$meta_c = get_post_meta( $post_id, 'feca_control', true );
	$meta_a = get_post_meta( $post_id, 'feca_adaptation', true );

	$data = $fallback;
	$data['post_id'] = $post_id;
	$data['code']    = $code;

	if ( ! empty( $custom_subtitle ) ) $data['title'] = $custom_subtitle;
	if ( ! empty( $custom_num ) )      $data['index_num'] = $custom_num;
	if ( ! empty( $custom_tag ) )      $data['territory'] = $custom_tag;
	if ( ! empty( $custom_polarity ) ) $data['polarity'] = $custom_polarity;
	if ( ! empty( $custom_driver ) )   $data['driver'] = $custom_driver;
	if ( ! empty( $custom_cadence ) )  $data['cadence'] = $custom_cadence;
	if ( ! empty( $custom_coeff ) )    $data['calibration_coeff'] = $custom_coeff;
	if ( ! empty( $custom_freq ) )     $data['cohort_freq'] = $custom_freq;
	if ( ! empty( $custom_figurine ) ) $data['figurine_url'] = $custom_figurine;
	if ( ! empty( $custom_summary ) )  $data['narrative'] = $custom_summary;

	if ( $post && ! empty( $post->post_excerpt ) ) {
		$data['lead_summary'] = $post->post_excerpt;
	}

	if ( is_numeric( $meta_f ) && $meta_f > 0 ) {
		$data['feca']['focus']['score'] = intval( $meta_f );
		$data['feca']['focus']['low']   = max( 0, intval( $meta_f ) - 4 );
		$data['feca']['focus']['high']  = min( 100, intval( $meta_f ) + 4 );
	}
	if ( is_numeric( $meta_e ) && $meta_e > 0 ) {
		$data['feca']['execution']['score'] = intval( $meta_e );
		$data['feca']['execution']['low']   = max( 0, intval( $meta_e ) - 4 );
		$data['feca']['execution']['high']  = min( 100, intval( $meta_e ) + 4 );
	}
	if ( is_numeric( $meta_c ) && $meta_c > 0 ) {
		$data['feca']['control']['score'] = intval( $meta_c );
		$data['feca']['control']['low']   = max( 0, intval( $meta_c ) - 4 );
		$data['feca']['control']['high']  = min( 100, intval( $meta_c ) + 4 );
	}
	if ( is_numeric( $meta_a ) && $meta_a > 0 ) {
		$data['feca']['adaptability']['score'] = intval( $meta_a );
		$data['feca']['adaptability']['low']   = max( 0, intval( $meta_a ) - 5 );
		$data['feca']['adaptability']['high']  = min( 100, intval( $meta_a ) + 5 );
	}

	return $data;
}

/**
 * Return array of all published profiles with link, code, and title for switcher.
 *
 * @return array
 */
function core16_get_all_profiles_switcher_list() {
	$list = array();
	$dictionary = core16_get_all_archetypes_dictionary();

	// Query published profile posts
	$query = new WP_Query( array(
		'post_type'      => 'profile',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'orderby'        => 'title',
		'order'          => 'ASC',
	) );

	$published_by_code = array();
	if ( $query->have_posts() ) {
		foreach ( $query->posts as $p ) {
			$meta_code = get_post_meta( $p->ID, 'archetype_code', true );
			if ( empty( $meta_code ) ) {
				if ( preg_match( '/\b(INTJ|ENTJ|INTP|ENTP|INFJ|ENFJ|INFP|ENFP|ISTJ|ESTJ|ISFJ|ESFJ|ISTP|ESTP|ISFP|ESFP)\b/i', $p->post_name, $m ) ) {
					$meta_code = strtoupper( $m[1] );
				} elseif ( preg_match( '/\b(INTJ|ENTJ|INTP|ENTP|INFJ|ENFJ|INFP|ENFP|ISTJ|ESTJ|ISFJ|ESFJ|ISTP|ESTP|ISFP|ESFP)\b/i', $p->post_title, $m ) ) {
					$meta_code = strtoupper( $m[1] );
				}
			}
			if ( ! empty( $meta_code ) ) {
				$published_by_code[ strtoupper( $meta_code ) ] = array(
					'id'        => $p->ID,
					'permalink' => get_permalink( $p->ID ),
					'title'     => $p->post_title,
				);
			}
		}
	}

	foreach ( $dictionary as $code => $info ) {
		if ( isset( $published_by_code[ $code ] ) ) {
			$list[ $code ] = array(
				'code'      => $code,
				'title'     => $info['title'],
				'permalink' => $published_by_code[ $code ]['permalink'],
			);
		} else {
			$list[ $code ] = array(
				'code'      => $code,
				'title'     => $info['title'],
				'permalink' => home_url( '/profile/' . strtolower( $code ) . '/' ),
			);
		}
	}

	return $list;
}
