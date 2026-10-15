# Core16 WordPress Theme

A custom, pixel-perfect, fully responsive WordPress theme engineered from the **Google Stitch** "Core16 Psychometrics Platform" master specification using **Tailwind CSS v3**, modular PHP template parts, and WordPress Customizer design tokens.

---

## 🚀 Key Features

* **Exact Stitch Design Fidelity**: Matches the "Editorial Constructivism" layout, color tokens, typography scales, and component architecture from Stitch project `6362733420929698964`.
* **Tailwind CSS Integration**: Scans all theme PHP files and builds an optimized, minified stylesheet (`assets/css/style.css`, ~19 KB).
* **Live Design Tokens**: Connects WordPress Customizer color, typography, and radius settings directly to CSS custom properties (`:root`) with fallback tokens—allowing live frontend updates without rebuilding CSS.
* **Modular Architecture**: Clean separation of concerns with reusable button components (`core16_button()`), card components (`card-metric`, `card-domain`, `card-dossier-feature`, `card-testimonial`), and section template parts.
* **Fully Responsive**: Mobile-first grid layouts, accessible mobile navigation drawer, fluid typography, and zero horizontal overflow across 320px–1440px+ viewports.
* **Accessible & Standard-Compliant**: Semantic HTML5 markup, ARIA navigation attributes, keyboard focus states, and WordPress coding standards.

---

## 📁 Theme Structure

```text
wp-content/themes/core16/
├── assets/
│   ├── css/
│   │   └── style.css            # Compiled production Tailwind CSS
│   ├── js/
│   │   └── main.js              # Vanilla JS for mobile nav & interactions
│   └── images/
│       ├── logo.svg             # Stitch vector brand logo
│       ├── logo.png             # Stitch high-res brand logo
│       ├── archetype-sculpture.png # Series 01 Archetype 3D studio render
│       └── dossier-spread.png   # 38-Page diagnostic dossier spread mockup
├── inc/
│   ├── theme-setup.php          # Theme support, navigation menus, content width
│   ├── enqueue-assets.php       # Enqueues Google Fonts, CSS, JS, inline vars
│   ├── helpers.php              # Reusable button helper & image resolver
│   ├── template-functions.php   # Body classes & card render wrappers
│   └── customizer.php           # Global design tokens in WordPress Customizer
├── src/
│   ├── css/
│   │   └── input.css            # Source Tailwind stylesheet with CSS variables
│   └── js/
│       └── main.js              # Source JavaScript
├── template-parts/
│   ├── header/
│   │   └── site-header.php      # Sticky frosted glass header & mobile drawer
│   ├── footer/
│   │   └── site-footer.php      # 5-column editorial footer & legal notice
│   ├── buttons/
│   │   └── button.php           # Reusable button template part
│   ├── cards/
│   │   ├── card-metric.php      # Empirical reliability & taxonomy metric card
│   │   ├── card-domain.php      # 4 Cognitive Domains with trait tags & gauge
│   │   ├── card-dossier-feature.php # Executive deliverable feature row
│   │   └── card-testimonial.php # Enterprise validation quote card
│   ├── sections/
│   │   └── front-page/
│   │       ├── hero.php             # Section 1: Hero Showcase & artifact card
│   │       ├── metrics.php          # Section 2: Scientific Credibility Metrics
│   │       ├── domains.php          # Section 3: The Four Cognitive Domains
│   │       ├── feca-engine.php      # Section 4: FECA Continuous Scoring Engine
│   │       ├── dossier.php          # Section 5: Executive Deliverable (Dossier)
│   │       └── enterprise-cta.php   # Section 6: Testimonials & Pre-footer Conversion
│   └── components/
│       ├── section-heading.php  # Reusable section heading wrapper
│       └── container.php        # Max-width layout container wrapper
├── front-page.php               # Homepage template invoking modular sections
├── header.php                   # HTML5 document head & header wrapper
├── footer.php                   # Footer wrapper & wp_footer()
├── functions.php                # Theme initialization
├── index.php                    # Fallback template
├── style.css                    # Theme metadata stylesheet
├── tailwind.config.js           # Tailwind content paths & theme tokens
├── package.json                 # Build scripts & dependencies
├── theme.md                     # Permanent coding contract & design rules
└── README.md                    # Setup and usage documentation
```

---

## 🛠️ Build & Development Workflow

### Prerequisites
* **Node.js**: v18+ (tested on v26.10.0)
* **npm**: v9+ (tested on 11.19.1)
* **PHP**: 8.0+ (tested on PHP 8.2)

### 1. Compile Tailwind CSS (Production)
Inside `wp-content/themes/core16`:
```bash
npm run build
```
This minifies the CSS and outputs to `assets/css/style.css`.

### 2. Development Mode (Watch)
```bash
npm run dev
```

---

## 🎨 WordPress Customizer Controls

Navigate to **WordPress Admin > Appearance > Customize > Core16 Design Tokens**:
* **Brand & Diagnostic Colors**:
  * Primary Focus (`--color-core-teal`, default `#0EA5AB`)
  * Primary Hover (`--color-teal-hover`, default `#0b888d`)
  * Secondary Base (`--color-deep-navy`, default `#17365D`)
  * Ink / Dark Anchor (`--color-midnight`, default `#0D182A`)
  * Canvas Base (`--color-warm-white`, default `#FAFAF7`)
  * Secondary Surface (`--color-mist`, default `#F1F5F6`)
  * Divider / Rule (`--color-rule-grey`, default `#D7DEE3`)
  * Sub-text (`--color-slate-subtle`, default `#66717D`)
* **Global Typography Tokens**:
  * Headline Font Family (default `Poppins`)
  * Body Font Family (default `Inter`)
  * Monospace / Diagnostic Font Family (default `JetBrains Mono`)
* **Layout & Geometry**:
  * Container Max Width (default `1440px`)
  * Button Radius (default `0.25rem`)
  * Card Radius (default `0.75rem`)

All changes in the Customizer inject live `:root` variables on the frontend immediately without a CSS rebuild.

---

## 🧪 Quality Assurance & Verification

* **PHP Syntax**: Verified with `php -l` across all files with zero syntax errors.
* **Local HTTP Test**: Verified at `http://core16.local` returning HTTP 200 with all 6 homepage sections rendered.
* **Asset Loading**: Verified Google Fonts, Tailwind CSS, and local images load properly.
* **Component Reuse**: Verified that buttons and cards use shared rendering functions and template parts.
