# Aura Birthing Partner — SEO Improvement Plan
> Audit Date: March 2026 | Pages Audited: 28 HTML files

---

## Executive Summary

The site has a solid foundation — good content, relevant services, and some well-written descriptions on key pages. However, there are **systemic, site-wide issues** that are likely suppressing search rankings across every page. The good news: most of these are quick, mechanical fixes that don't require new content.

---

## 🔴 Critical Issues (Fix First)

These are blocking SEO across the entire site and should be addressed immediately.

---

### 1. Every Page Has the Same `<title>` Tag

**All 28 pages are titled "Aura Birthing Partner"** — search engines use the title as the strongest ranking signal for a page. Identical titles mean Google can't distinguish your pages from each other.

**Fix for every page:**

| Page | Suggested Title |
|------|----------------|
| `index.html` | `Aura Birthing Partner — Prenatal & Postnatal Wellness, Bangalore` |
| `prenatal-yoga-and-fitness.html` | `Prenatal Yoga & Fitness Classes in Bangalore — Aura Birthing` |
| `postnatal-yoga-and-fitness.html` | `Postnatal Yoga & Fitness Classes in Bangalore — Aura Birthing` |
| `labor-management-workshop.html` | `Labor & Birth Prep Workshop Bangalore — Aura Birthing` |
| `lactationcounseling.html` | `Lactation Counseling & Breastfeeding Support — Aura Birthing` |
| `childbirth.html` | `Childbirth Education & Consultation — Aura Birthing` |
| `aura-team.html` | `Meet the Aura Team — Pregnancy & Parenting Experts, Bangalore` |
| `get-to-know-aura.html` | `About Aura Birthing Partner — Our Story & Mission` |
| `contact.html` | `Contact Aura Birthing — Kalyan Nagar & Rajajinagar, Bangalore` |
| `testimonials.html` | `Client Testimonials — Aura Birthing Partner Reviews` |
| `birth-stories.html` | `Real Birth Stories — Aura Birthing Partner Community` |
| `get-certified.html` | `Prenatal & Postnatal Fitness Instructor Certification — Aura` |
| `join-our-team.html` | `Careers at Aura Birthing Partner — Join Our Team` |
| `pediatricdentalcare.html` | `Pediatric Dental Consultation — Aura Birthing Partner` |
| `newborn-care.html` | `Newborn Care Workshop Bangalore — Aura Birthing` |
| `postpartum-depression-care.html` | `Postpartum Depression Support & Care — Aura Birthing` |
| `prenatal_postnatalnutrition.html` | `Prenatal & Postnatal Nutrition Consultation — Aura Birthing` |
| `wall-of-fame.html` | `Aura Wall of Fame — Our Community Milestones` |
| `privacy-policy.html` | `Privacy Policy — Aura Birthing Partner` |
| `terms.html` | `Terms & Conditions — Aura Birthing Partner` |
| `cancellation.html` | `Cancellation Policy — Aura Birthing Partner` |

**Rule:** Keep titles under 60 characters. Always end with `— Aura Birthing` for brand recognition.

---

### 2. Duplicate & Mismatched Meta Descriptions

**8+ pages have TWO `<meta name="description">` tags.** Browsers and search engines use the first one they find, which on many pages is this useless placeholder:

> *"ARE YOU READY TO TRANSFORM YOURSELF THROUGH HEALTH NUTRITION AND FITNESS?"*

This is clearly a leftover from a template and is appearing as the Google search snippet for your pages.

**Action:** Remove the first (placeholder) `<meta name="description">` from every page that has it. These files are affected:
- `aura-team.html`
- `birth-stories.html`
- `breast-feeding-workshop.html`
- `comingsoon.html`
- `regular-yoga-and-fitness.html`
- `support-aura.html`
- `wall-of-fame.html`
- and several others

**Also fix mismatched descriptions** — these pages describe the wrong service:

| Page | Current Description (Wrong) | Should Describe |
|------|-----------------------------|-----------------|
| `childbirth.html` | Breastfeeding journey | Childbirth education & consultation |
| `prenatal_postnatalnutrition.html` | Breastfeeding journey | Prenatal/postnatal nutrition plans |

---

### 3. No Canonical Tags on Any Page

None of the 28 pages have a `<link rel="canonical">` tag. Without this, Google may treat `index.html`, `/` and any cached/shared versions as duplicate content and penalise all of them.

**Add to every page `<head>`:**
```html
<link rel="canonical" href="https://www.aurabirthingpartner.com/PAGE-NAME.html" />
```

---

### 4. No H1 Tags on Most Pages

H1 is the primary on-page ranking signal after the title. Most pages are starting their heading hierarchy at H2, which wastes a major SEO opportunity.

**Pattern to fix:** Replace the first prominent heading on each page from `<h2>` to `<h1>`. For example, on `aura-team.html`:

```html
<!-- Before -->
<h2 class="section-heading text-uppercase" style="color: #790870ec;">Meet Our Expert Care Team</h2>

<!-- After -->
<h1 class="section-heading text-uppercase" style="color: #790870ec;">Meet Our Expert Care Team</h1>
```

Apply the same fix across all service pages — the main page heading should always be `<h1>`.

---

## 🟠 High Priority Issues (Fix This Month)

---

### 5. No Open Graph / Social Sharing Meta Tags

When someone shares your pages on WhatsApp, Instagram stories, Facebook, or LinkedIn, there is no image preview, no title, no description — just a plain URL. This kills click-through rates from social referrals.

**Add to every page `<head>` (customize per page):**
```html
<meta property="og:title" content="Prenatal Yoga & Fitness — Aura Birthing Partner" />
<meta property="og:description" content="Join our expert-led prenatal yoga classes in Bangalore. Safe, structured, and supportive for every trimester." />
<meta property="og:image" content="https://www.aurabirthingpartner.com/images/og-prenatal-yoga.jpg" />
<meta property="og:url" content="https://www.aurabirthingpartner.com/prenatal-yoga-and-fitness.html" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Aura Birthing Partner" />

<!-- WhatsApp & Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Prenatal Yoga & Fitness — Aura Birthing Partner" />
<meta name="twitter:description" content="Join our expert-led prenatal yoga classes in Bangalore." />
<meta name="twitter:image" content="https://www.aurabirthingpartner.com/images/og-prenatal-yoga.jpg" />
```

**Priority pages to do first** (highest social sharing potential):
1. `index.html`
2. `prenatal-yoga-and-fitness.html`
3. `postnatal-yoga-and-fitness.html`
4. `labor-management-workshop.html`
5. `birth-stories.html`
6. `testimonials.html`

---

### 6. No Structured Data (Schema.org / JSON-LD)

Google uses structured data to create **rich results** — star ratings, FAQ dropdowns, service cards, team profiles. None of your pages have any. This is a significant lost opportunity in a competitive local health/wellness space.

**Add to `index.html`** — Local Business Schema:
```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HealthAndBeautyBusiness",
  "name": "Aura Birthing Partner",
  "url": "https://www.aurabirthingpartner.com",
  "logo": "https://www.aurabirthingpartner.com/images/new_logo.png",
  "description": "Comprehensive prenatal and postnatal wellness programs including yoga, fitness, childbirth education, and lactation counseling in Bangalore.",
  "telephone": "+919986702572",
  "email": "info@aurabirthingpartner.com",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Bangalore",
    "addressRegion": "Karnataka",
    "addressCountry": "IN"
  },
  "sameAs": [
    "https://www.instagram.com/aura.birthingpartner/",
    "https://www.facebook.com/Aurabirthingpartner/",
    "https://www.linkedin.com/company/aura-birthing-partner/"
  ]
}
</script>
```

**Add to `aura-team.html`** — Person Schema for each team member:
```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Shree LP",
  "jobTitle": "Founder & Childbirth Educator",
  "worksFor": { "@type": "Organization", "name": "Aura Birthing Partner" },
  "description": "Internationally certified Pregnancy Fitness Educator, Childbirth Educator, and Yoga Instructor"
}
</script>
```

**Add FAQ Schema** to service pages (e.g. `prenatal-yoga-and-fitness.html`):
```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "When can I start prenatal yoga?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can start prenatal yoga after the first trimester (12 weeks), with doctor's approval."
      }
    }
  ]
}
</script>
```

---

### 7. Google Analytics Tag is Incomplete

The `gtag` configuration script appears in every page's `<head>`, but the **actual Google Analytics library script is missing**. The config code runs but has nothing to send data to.

**Current (broken):**
```html
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-EKZF0R8XQF');
</script>
```

**Add this line BEFORE the block above:**
```html
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EKZF0R8XQF"></script>
```

Without this, you are getting zero analytics data right now.

---

## 🟡 Medium Priority Issues (Fix This Quarter)

---

### 8. Image Alt Text is Missing on Social Icons

Every social media icon in the header and footer has `alt=""`. This misses a chance to signal brand names and hurts accessibility (which Google now factors into rankings).

```html
<!-- Before -->
<img src="./2023 Aura pictures/instagram.png" alt="">

<!-- After -->
<img src="./2023 Aura pictures/instagram.png" alt="Aura Birthing Partner on Instagram">
<img src="./2023 Aura pictures/facebook.png" alt="Aura Birthing Partner on Facebook">
<img src="./2023 Aura pictures/linkedin.png" alt="Aura Birthing Partner on LinkedIn">
<img src="./2023 Aura pictures/whatsapp.png" alt="Chat with Aura Birthing Partner on WhatsApp">
```

The logo also uses `alt="logo-img"` — change to `alt="Aura Birthing Partner Logo"`.

---

### 9. Duplicate "Coming Soon" Pages

There are two separate coming-soon pages: `coming-soon.html` and `comingsoon.html`. This creates:
- Duplicate content signals
- Wasted crawl budget
- Confusing internal links

**Action:** Pick one URL (recommend `coming-soon.html`), add a 301 redirect from `comingsoon.html` to it, and ensure all internal links use the canonical URL.

---

### 10. No Sitemap or Robots.txt

There's no `sitemap.xml` visible in the project. Without a sitemap:
- Search engines may miss or deprioritise pages
- New content takes longer to get indexed

**Create `sitemap.xml`** in the project root listing all 20+ public pages with their `<lastmod>` dates. Submit it in Google Search Console.

**Create `robots.txt`** in the project root:
```
User-agent: *
Allow: /
Disallow: /search.html
Sitemap: https://www.aurabirthingpartner.com/sitemap.xml
```

---

### 11. Page Load Performance (JavaScript Bloat)

Every page loads the full Revolution Slider JS library (`jquery.themepunch.revolution.min.js` + 8 extension files). Most pages don't use a revolution slider. This is adding unnecessary load time, and Google's Core Web Vitals (especially LCP and FID) directly affect rankings.

**Action:** Remove Revolution Slider scripts from pages that don't use a slideshow (most of them). Keep only on `index.html` if it's used there.

---

### 12. No Breadcrumb Navigation

Adding breadcrumbs helps users and search engines understand page hierarchy, and can unlock breadcrumb rich results in Google.

**Example for `prenatal-yoga-and-fitness.html`:**
```html
<nav aria-label="Breadcrumb">
  <ol>
    <li><a href="index.html">Home</a></li>
    <li><a href="#">Parents</a></li>
    <li aria-current="page">Prenatal Yoga & Fitness</li>
  </ol>
</nav>
```

Pair with BreadcrumbList schema.

---

## 🟢 Quick Wins Checklist

These take less than 30 minutes total and have immediate impact:

- [ ] Fix Google Analytics — add the missing `<script async src="...gtag/js?id=G-EKZF0R8XQF">` to all pages
- [ ] Remove the `"ARE YOU READY TO TRANSFORM YOURSELF..."` placeholder description from all pages
- [ ] Fix `childbirth.html` — replace breastfeeding description with a childbirth-specific one
- [ ] Fix `prenatal_postnatalnutrition.html` — replace breastfeeding description with nutrition-specific one
- [ ] Fix logo alt text from `"logo-img"` to `"Aura Birthing Partner Logo"` (appears in all pages via shared header)
- [ ] Fix social icon alt text in header and footer
- [ ] Add unique `<title>` tags to the 5 highest-traffic service pages first

---

## Priority Order: What to Fix First

| Priority | Action | Impact | Effort |
|----------|--------|--------|--------|
| 🔴 1 | Fix Google Analytics script | Track traffic data | 5 mins |
| 🔴 2 | Remove placeholder descriptions | Fix Google snippets | 30 mins |
| 🔴 3 | Unique title tags for all pages | Ranking signal | 1 hour |
| 🔴 4 | Fix mismatched descriptions (childbirth, nutrition) | Search relevance | 15 mins |
| 🔴 5 | Add canonical tags to all pages | Avoid duplicate penalties | 1 hour |
| 🟠 6 | Add H1 to every page | On-page ranking | 1 hour |
| 🟠 7 | Add Open Graph tags to top 6 pages | Social sharing | 1 hour |
| 🟠 8 | Add LocalBusiness JSON-LD to index.html | Rich results eligibility | 30 mins |
| 🟡 9 | Fix image alt text site-wide | Accessibility + SEO | 30 mins |
| 🟡 10 | Create sitemap.xml + robots.txt | Crawl coverage | 30 mins |
| 🟡 11 | Remove Revolution Slider from non-slider pages | Page speed | 1 hour |
| 🟡 12 | Add FAQ schema to service pages | Rich results | 2 hours |

---

## Pages That Need New Content

Beyond technical fixes, these pages have **thin or missing content** which limits their ability to rank:

- `wall-of-fame.html` — needs a description + schema
- `support-aura.html` — unclear purpose, needs copy
- `regular-yoga-and-fitness.html` — generic, needs differentiating content
- `pediatricdentalcare.html` — needs a proper meta description and more body content

---

## Local SEO (Critical for a Bangalore-based Business)

Google Maps and local pack rankings matter enormously for a service business. To improve local visibility:

1. **Verify and fully complete Google Business Profile** — Add all services, photos, team bios, hours, Q&A
2. **Add location keywords** to page titles and descriptions: "Bangalore", "Kalyan Nagar", "Rajajinagar"
3. **Embed Google Map** on `contact.html` for both branch locations
4. **Get reviews** — Actively ask clients to leave Google reviews after workshops/sessions. Reviews directly impact local pack ranking.
5. **NAP Consistency** — Ensure Name, Address, Phone number is identical across the website, Google Business, Instagram bio, Facebook page, and Justdial/Sulekha listings

---

*This plan covers all 28 HTML pages audited. Start with the Quick Wins and Critical Issues — those alone should produce measurable improvement in search visibility within 4–6 weeks.*
