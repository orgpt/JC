# Junior Chic Theme

Clean WooCommerce kidswear theme with pastel visuals, product quick view, mobile-first layouts, and demo XML import files.

## Included

- Theme files under `wp-content/themes/junior-chic`
- Brand assets copied from the provided reference images
- `demo-import/junior-chic-site.xml` for pages and blog starter content
- `demo-import/junior-chic-products.xml` for product/category starter content

## Core features in theme

- Focused homepage with hero, category cards, featured products, offers, best sellers, and new arrivals
- WooCommerce-ready shop archive with filter-ready sidebar
- Large product imagery, zoom/lightbox/gallery support
- Quick View modal on product cards
- Size labels on listing cards and clear variation form styling on product pages
- Low-stock visual badge
- RTL-friendly structure and multilingual-ready text domain
- Mobile-first styling and lazy-loaded product images

## Features that need plugins

The following requested features are prepared visually by the theme, but need plugins or gateway setup in WordPress:

- Wishlist and Compare
- One Page Checkout and Guest Checkout enhancements
- Cash, Vodafone Cash, and card gateways
- Auto shipping calculation
- Countdown/scarcity campaigns
- Real customer photo reviews
- Cart abandonment notifications
- Cashback or loyalty points
- Bundle pricing logic
- Advanced stock alerts in admin

## Suggested setup

1. Install WordPress and WooCommerce.
2. Copy the `junior-chic` theme folder into `wp-content/themes/`.
3. Activate the theme.
4. Import `demo-import/junior-chic-site.xml` from `Tools > Import > WordPress`.
5. Import `demo-import/junior-chic-products.xml` after WooCommerce is active.
6. Create product attributes in WooCommerce with slugs:
   - `age-group`
   - `gender`
   - `size`
   - `color`
7. Assign the Home page as the static front page.
8. Add WooCommerce filter widgets to the `Shop Sidebar`.

## Notes

- The demo XML is starter content meant to speed up setup, not a full live catalog migration.
- For the homepage product sections to render, add featured products and normal products in WooCommerce.
