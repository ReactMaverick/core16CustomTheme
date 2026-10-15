<?php
/**
 * Site Header Template Part
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$logo_url = core16_get_image_url(
	'logo.png',
	'https://lh3.googleusercontent.com/aida-public/AB6AXuBgwj5JTr6FCyh0b411d4uhd06MAZCjQGccaknZVyzvvIGyRkZ9eEfDidYEZR0uZ_Di8_2qRmM62llbAx5R-CZOSfs4YVeD3POs0Oe7uKNOoxp43hWZ201NFzsUb-Nc910chXH8faa1AK1oHceTmrNxHbwhEBKpqPyqMcXkoVahmUIPNPVJF_DGMQtCXkAaHOM2nalnn-r277g-oz8rh-477CYOdZRtHhRsqAcOWtZWQ3hIkd0ardvj7hU8Zzi36zf6Nw'
);
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-[#FAFAF7]/95 backdrop-blur-md border-b border-rule-grey">
	<div class="h-20 max-w-[1580px] mx-auto px-margin-sm lg:px-margin-lg flex items-center justify-between gap-gutter">
		
		<!-- Left: Logo & Norm Spec Tag -->
		<div class="flex items-center gap-space-md">
			<a class="flex items-center gap-3 group" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img alt="<?php bloginfo( 'name' ); ?>" class="h-10 w-auto object-contain shrink-0" src="<?php echo esc_url( $logo_url ); ?>"/>
				<div class="flex flex-col">
					<span class="font-headline font-bold text-lg tracking-tight text-midnight leading-none">CORE16</span>
					<span class="font-body text-[9px] tracking-[0.22em] font-semibold text-slate-subtle uppercase leading-tight mt-0.5">Personalities</span>
				</div>
			</a>
			<span class="hidden lg:inline-block font-mono text-[10px] uppercase border border-rule-grey bg-mist px-2 py-0.5 rounded text-slate-subtle font-medium">
				<?php esc_html_e( 'v4.2 Psychometrics', 'core16' ); ?>
			</span>
		</div>

		<!-- Center: Navigation Links -->
		<?php
		$is_framework   = is_front_page();
		$is_profiles    = is_page( 'the-16-profiles' ) || is_singular( 'profile' ) || is_post_type_archive( 'profile' );
		$is_feca        = is_page( 'how-core16-works' );
		$is_enterprise  = is_page( 'enterprise' );
		$is_science     = is_page( 'science-methodology' );
		?>
		<nav class="hidden md:flex items-center gap-space-lg font-body text-sm font-medium text-slate-subtle">
			<a class="transition-colors py-1 <?php echo $is_framework ? 'text-core-teal font-semibold border-b-2 border-core-teal' : 'hover:text-midnight'; ?>" data-path="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo $is_framework ? 'aria-current="page"' : ''; ?>>
				<?php esc_html_e( 'Framework', 'core16' ); ?>
			</a>
			<a class="transition-colors py-1 <?php echo $is_profiles ? 'text-core-teal font-semibold border-b-2 border-core-teal' : 'hover:text-midnight'; ?>" data-path="the-16-profiles" href="<?php echo esc_url( home_url( '/the-16-profiles/' ) ); ?>" <?php echo $is_profiles ? 'aria-current="page"' : ''; ?>>
				<?php esc_html_e( 'The 16 Profiles', 'core16' ); ?>
			</a>
			<a class="transition-colors py-1 <?php echo $is_feca ? 'text-core-teal font-semibold border-b-2 border-core-teal' : 'hover:text-midnight'; ?>" data-path="how-core16-works" href="<?php echo esc_url( home_url( '/how-core16-works/' ) ); ?>" <?php echo $is_feca ? 'aria-current="page"' : ''; ?>>
				<?php esc_html_e( 'FECA Scoring', 'core16' ); ?>
			</a>
			<a class="transition-colors py-1 <?php echo $is_enterprise ? 'text-core-teal font-semibold border-b-2 border-core-teal' : 'hover:text-midnight'; ?>" data-path="enterprise-and-coaching" href="<?php echo esc_url( home_url( '/enterprise/' ) ); ?>" <?php echo $is_enterprise ? 'aria-current="page"' : ''; ?>>
				<?php esc_html_e( 'Enterprise & Coaching', 'core16' ); ?>
			</a>
		</nav>

		<!-- Right: Actions & Mobile Hamburger -->
		<div class="flex items-center gap-space-md">
			<a class="hidden sm:inline-block font-mono text-xs uppercase tracking-wider text-slate-subtle hover:text-midnight transition-colors" data-path="client-login" href="<?php echo esc_url( home_url( '/client-login/' ) ); ?>">
				<?php echo is_user_logged_in() ? esc_html__( 'Portal Dashboard', 'core16' ) : esc_html__( 'Client Login', 'core16' ); ?>
			</a>
			
			<?php
			core16_button(
				array(
					'text'      => __( 'Take Core16 Assessment', 'core16' ),
					'url'       => home_url( '/individuals/#assessment' ),
					'variant'   => 'pill-midnight',
					'data_path' => 'take-core16-assessment',
				)
			);
			?>

			<!-- Mobile Menu Button -->
			<button id="core16-mobile-menu-toggle" type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded text-slate-subtle hover:text-midnight hover:bg-mist focus:outline-none" aria-controls="core16-mobile-drawer" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'core16' ); ?>">
				<span class="material-symbols-outlined text-[24px]">menu</span>
			</button>
		</div>

	</div>
</header>

<!-- Mobile Navigation Drawer -->
<div id="core16-mobile-drawer" class="hidden fixed inset-0 z-50 bg-midnight/70 backdrop-blur-sm md:hidden transition-all">
	<div class="fixed inset-y-0 right-0 max-w-xs w-full bg-warm-white shadow-xl p-6 flex flex-col justify-between border-l border-rule-grey overflow-y-auto">
		<div>
			<div class="flex items-center justify-between pb-4 border-b border-rule-grey">
				<div class="flex items-center gap-2">
					<img alt="Core16 Logo" class="h-8 w-auto object-contain shrink-0" src="<?php echo esc_url( $logo_url ); ?>"/>
					<span class="font-headline font-bold text-base tracking-tight text-midnight">CORE16</span>
				</div>
				<button id="core16-mobile-drawer-close" type="button" class="p-2 rounded text-slate-subtle hover:text-midnight hover:bg-mist focus:outline-none" aria-label="<?php esc_attr_e( 'Close navigation', 'core16' ); ?>">
					<span class="material-symbols-outlined text-[22px]">close</span>
				</button>
			</div>

			<nav class="mt-6 flex flex-col space-y-3 font-body text-sm font-medium">
				<a class="<?php echo $is_framework ? 'text-core-teal font-semibold' : 'text-slate-subtle hover:text-midnight'; ?> py-1" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Framework', 'core16' ); ?></a>
				<a class="<?php echo $is_profiles ? 'text-core-teal font-semibold' : 'text-slate-subtle hover:text-midnight'; ?> py-1" href="<?php echo esc_url( home_url( '/the-16-profiles/' ) ); ?>"><?php esc_html_e( 'The 16 Profiles', 'core16' ); ?></a>
				<a class="<?php echo $is_feca ? 'text-core-teal font-semibold' : 'text-slate-subtle hover:text-midnight'; ?> py-1" href="<?php echo esc_url( home_url( '/how-core16-works/' ) ); ?>"><?php esc_html_e( 'FECA Scoring', 'core16' ); ?></a>
				<a class="<?php echo $is_enterprise ? 'text-core-teal font-semibold' : 'text-slate-subtle hover:text-midnight'; ?> py-1" href="<?php echo esc_url( home_url( '/enterprise/' ) ); ?>"><?php esc_html_e( 'Enterprise & Coaching', 'core16' ); ?></a>
				<a class="text-slate-subtle hover:text-midnight py-1" href="<?php echo esc_url( home_url( '/science-methodology/' ) ); ?>"><?php esc_html_e( 'Science & Methodology', 'core16' ); ?></a>
				<a class="text-slate-subtle hover:text-midnight py-1" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php esc_html_e( 'Institutional Pricing', 'core16' ); ?></a>
				<a class="text-slate-subtle hover:text-midnight py-1" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'The Core16 Review', 'core16' ); ?></a>
				<a class="text-slate-subtle hover:text-midnight py-1" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Core16', 'core16' ); ?></a>
				<a class="text-slate-subtle hover:text-midnight py-1" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Technical Support Desk', 'core16' ); ?></a>
				<a class="text-slate-subtle hover:text-midnight py-1 font-mono text-xs uppercase pt-2 border-t border-rule-grey" href="<?php echo esc_url( home_url( '/client-login/' ) ); ?>">
					<?php echo is_user_logged_in() ? esc_html__( 'Portal Dashboard', 'core16' ) : esc_html__( 'Client Login', 'core16' ); ?>
				</a>
			</nav>
		</div>

		<div class="pt-6 border-t border-rule-grey space-y-3">
			<?php
			core16_button(
				array(
					'text'      => __( 'Take Core16 Assessment', 'core16' ),
					'url'       => home_url( '/individuals/#assessment' ),
					'variant'   => 'teal',
					'class'     => 'w-full',
					'icon'      => 'arrow_forward',
					'data_path' => 'take-core16-assessment',
				)
			);
			?>
			<div class="text-center font-mono text-[10px] text-slate-subtle">
				<?php esc_html_e( 'Normative v4.2 • ISO 10667 Compliant', 'core16' ); ?>
			</div>
		</div>
	</div>
</div>
