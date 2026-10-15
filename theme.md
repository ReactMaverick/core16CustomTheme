# Core16 WordPress Theme — Developer Specification & Coding Contract (`theme.md`)

This document establishes the permanent architectural guidelines, design token definitions, WordPress coding standards, dynamic data models, and component conventions for the `core16` theme. All future templates and features must strictly adhere to these rules.

---

## A. Design Source of Truth

* **Primary Reference**: Google Stitch Project `6362733420929698964` ("Remix of Core16 Psychometric Platform").
* **Editorial Philosophy**: "Editorial Constructivism" — combining European editorial publishing gravitas (*Monocle*, *Kinfolk*) with surgical diagnostic instruments (normative calibration, FECA continuous vectors).
* **Color System**:
  * Canvas: Warm White (`#FAFAF7`)
  * Surface / Secondary: Mist (`#F1F5F6`)
  * Ink & Dark Anchor: Midnight (`#0D182A`)
  * Elevated Structural: Deep Navy (`#17365D`)
  * Active Diagnostic Accent: Core Teal (`#0EA5AB`, hover `#0b888d`)
  * Neutral Rule & Boundary: Rule Grey (`#D7DEE3`)
  * Analytical Text: Slate Subtle (`#66717D`)
  * 4 Domain Chromatics:
    * Strategic & Analytical: `#087F8C`
    * Human & Intuitive: `#6842B8`
    * Grounded & Structured: `#188A62`
    * Adaptive & Practical: `#B7871B`
* **Typography Hierarchy**:
  * Display / Headlines: `Poppins`, sans-serif (Bold/SemiBold weights)
  * System Copy & Narrative: `Inter`, sans-serif (400, 500, 600, 700 weights)
  * Diagnostic & Annotations: `JetBrains Mono`, monospace (400, 500, 600 weights)
* **Iconography**: Google Material Symbols Outlined (`verified`, `grid_view`, `analytics`, `balance`, `arrow_forward`, `psychology`, `groups`, `target`, `description`, `check_circle`, etc.)

---

## B. Complete Website Page & Section Directory

Every section across all templates is organized strictly under its dedicated folder: `template-parts/sections/<page-name>/`.

| Page / Template | URL Slug | Template File | Section Folder (`template-parts/sections/...`) |
| :--- | :--- | :--- | :--- |
| **Homepage** | `/` | `front-page.php` | `front-page/` (`hero`, `metrics`, `domains`, `feca-engine`, `dossier`, `enterprise-cta`) |
| **How Core16 Works** | `/how-core16-works/` | `page-how-core16-works.php` | `how-core16-works/` (`hero-pipeline`, `phase1-terminal`, `phase2-decoupling`, `phase3-deliverables`, `regulatory-strip`) |
| **The 16 Profiles** | `/the-16-profiles/` | `page-the-16-profiles.php` | `the-16-profiles/` (`directory-header`, `profiles-grid`, `comparison-matrix`) |
| **Single Profile** | `/profile/<slug>/` | `single-profile.php` | `profile-dossier/` (`dossier-meta-bar`, `cognitive-engine`) |
| **Individuals** | `/individuals/` | `page-individuals.php` | `individuals/` (`hero-individual`, `dossier-breakdown`) |
| **Enterprise** | `/enterprise/` | `page-enterprise.php` | `enterprise/` (`hero-enterprise`, `inquiry-form`) |
| **Science & Methodology** | `/science-methodology/` | `page-science-methodology.php` | `science-methodology/` (`hero-methodology`, `vector-mathematics`) |
| **Institutional Pricing** | `/pricing/` | `page-pricing.php` | `pricing/` (`hero-toggle`, `feature-matrix`) — *Static Only* |
| **The Core16 Review** | `/resources/` | `page-resources.php` | `resources/` (`masthead-hero`, `publication-grid`) |
| **Single Resource Article** | `/resource/<slug>/` | `single-resource.php` | Native single research paper template |
| **Single Post / Journal Article** | `/post/<slug>/` or `/<slug>/` | `single.php` | Editorial single article template |
| **Category & Topic Archive** | `/category/<slug>/` or `/resource_category/<slug>/` | `archive.php` | Editorial archive grid template |
| **About Core16** | `/about/` | `page-about.php` | `about/` (`manifesto-hero`, `heritage-timeline`) |
| **Technical Support** | `/support/` | `page-support.php` | `support/` (`search-header`, `contact-desk`) |
| **Client Portal Gateway** | `/client-login/` | `page-client-login.php` | `client-login/` (`login-form`, `lost-password`, `user-dashboard`) |

---

## C. Dynamic Content Architecture & ACF Integration

All repeated, card-based, and directory content is managed through WordPress Custom Post Types, Taxonomies, and Advanced Custom Fields (ACF).

### 1. Custom Post Types (`inc/post-types.php`)
- **`profile`**:
  - Rewrite slug: `/profile/`
  - Archive slug: `/profiles/`
  - Supports: `title`, `editor`, `excerpt`, `thumbnail`, `custom-fields`
  - Taxonomies: `cognitive_domain`
- **`resource`**:
  - Rewrite slug: `/resource/`
  - Archive slug: `/resources/`
  - Supports: `title`, `editor`, `excerpt`, `thumbnail`, `author`
  - Taxonomies: `resource_category`

### 2. Custom Taxonomies (`inc/post-types.php`)
- **`cognitive_domain`** (Hierarchical):
  - Attached to: `profile`
  - Terms: `strategist` (Strategists), `architect` (Architects), `catalyst` (Catalysts), `synthesizer` (Synthesizers).
- **`resource_category`** (Hierarchical):
  - Attached to: `resource`
  - Terms: `empirical-studies`, `executive-playbooks`, `case-studies`, `technical-monographs`.

### 3. ACF Field Groups Registered in Code (`inc/acf-fields.php`)
Field groups are registered with native fallbacks using `acf_add_local_field_group()` and accessed on the front-end via `get_field()` with `get_post_meta()` fallbacks:
- **Profile Dossier Fields**:
  - `archetype_code` (Text, e.g. "INTJ")
  - `archetype_subtitle` (Text)
  - `territory_tag` (Text)
- **Profile Dossier Fields**:
  - `archetype_code` (Text, e.g. "INTJ")
  - `archetype_subtitle` (Text)
  - `territory_tag` (Text)
  - `feca_focus` (Number, 0–100) — Focus [F]
  - `feca_execution` (Number, 0–100) — Execution [E]
  - `feca_control` (Number, 0–100) — Control [C]
  - `feca_adaptive` / `feca_adaptation` (Number, 0–100) — Adaptive [A]
  - `variance_band` (Text, e.g. "± 3.2%")
  - `cohort_percentage` (Text)
  - `executive_summary` (Textarea)
  - `cognitive_dynamics` (Textarea)
  - `stress_response` (Textarea)
  - `team_synergy` (Textarea)
- **Resource Publication Fields**:
  - `document_id` (Text, e.g. "WP-2025-04")
  - `read_time` (Text, e.g. "14 min read")
  - `publication_date` (Text, e.g. "Q3 2025")
  - `lead_author` (Text)

---

## D. Special Mandates & Platform Engines

### 1. Static Pricing Mandate
- The Pricing page (`page-pricing.php` and `template-parts/sections/pricing/`) is **100% static content only**.
- Canon pricing aligned with Master Architecture Specification:
  - **Tier 01 // Baseline**: Free / £0 / $0 (48-item validated protocol: 32 Jungian + 16 FECA).
  - **Tier 02 // Premium Report**: Planned **£20 / $25** offer (30-page dossier, full FECA profile, and AI Coach access).
  - **Tier 03 // Pro & Institutional / Schools**: Planned **£395 / $495** offer (90-minute training proposition, cohort administration, and executive dyads).
- Do not create a CPT or dynamic ACF fields for pricing plans at this stage.

### 2. Secure Client Login & AI Coach Engine
- The Client Portal Gateway (`page-client-login.php`) is **live, secure, and fully functional**.
- Powered by `inc/auth-handler.php` leveraging standard WordPress APIs (`wp_signon`, nonces, `retrieve_password`, `wp_logout`).
- **Core16 AI Coach Module** (Architecture Item #08): Embedded within the authenticated dashboard with bounded conversational starting prompts (Understand My Results, Career & Leverage, Leadership Under Stress, Dyad Relationships, Personal Growth) maintaining strict clinical boundaries.

### 3. Interactive Assessment Engine & Result Reveal
- Embedded on `/individuals/#assessment` (`template-parts/sections/individuals/assessment-engine.php`):
  - 48-item protocol (32 Jungian + 16 FECA items) with 5-point Likert scale, progress tracking, and autosave.
  - Interactive **Result Reveal** state showing the user's computed archetype figurine, FECA neutral-track gauges, and a direct conversion CTA for the **£20 Premium Report**.

---

## E. Tailwind CSS & Styling Rules

1. **Primary Styling Engine**: Tailwind CSS v3 compiled into `assets/css/style.css`.
2. **Runtime CSS Custom Properties**: All Tailwind color, typography, and radius tokens resolve to `--color-*`, `--font-*`, and `--radius-*` CSS custom properties with fallbacks so that WordPress Customizer updates take effect instantly on the frontend.
3. **No Raw Dynamic Classes**: Do not build Tailwind class names dynamically via string concatenation. Use explicit class mappings.
4. **Content Scanning**: `tailwind.config.js` scans all PHP template files (`./*.php`, `./inc/**/*.php`, `./template-parts/**/*.php`).
5. **No Production CDN**: Tailwind is compiled locally via `npm run build` and enqueued via `wp_enqueue_style()`.

---

## F. Reusable Components & Coding Standards

1. **Button System**: Always use `core16_button( $args )` (`template-parts/buttons/button.php`).
2. **Card System**: Recurring cards live in `template-parts/cards/` (`card-metric.php`, `card-domain.php`, `card-dossier-feature.php`, `card-testimonial.php`).
3. **Container Standards**: Shared width `max-w-[1440px] mx-auto px-margin-sm lg:px-margin-lg`.
4. **Data Escaping**: All output escaped using `esc_html()`, `esc_attr()`, `esc_url()`, or `wp_kses_post()`.
5. **Zero Breaking Changes**: The approved Homepage (`front-page.php`), Header, and Footer remain visually and structurally intact.
