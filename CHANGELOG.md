# 1.7.0 - 2018-05-2

### Added
- GDPR; compliant banner
- GDPR; javascript
- Includes folder
- config (php)

### Changed
- config - server directory (all pages updated)
- logo; link to home page
- nav; styles awkward for < 599px, changed height
- burger cross; 3rd bar float right
- variables; removed "color-" prefix
- relocated files into includes, parts into includes
- rename folder; template-parts -> parts

### Removed
- blog index page (unfinished)

------------------------------------------------------------

## 1.6.4 - 2018-05-11

### Added
- faq page (html + css)
- contact page (html + css)
- navigation (new)
- grey button style
- forms template (general enquiries & open account)
- forms partial
- variables partial

### Changed
- removed some files from repo (tidied up)
- css optimized (deleted redundant styles)
- js; dropping jQuery dependency
- mixins; pages styles automated
- header; added script for "faq" and "contact"
- newsletter; tidy styles
- letters; added text-align
- functions; remove minify styles doing nothing, deleted
- changed icomoon icons

------------------------------------------------------------

## 1.5.4 - 2018-04-27

### Added
- about page
- service worker (currently not responding with status 200 when offline)
- schema; added via template in header folder
- templates; lazyload and serviceworker in footer folder
- about hero function and template

### Changed
- changed "newsletter" folder to "call-to"
- "open-graph" folder changed to "social"
- separated index and ranges heroes into separate template files
- media file; added "each" function for errors pages and ttcombat
- shortcodes and templates; index grid missing srcset and src - was giving w3c validation errors
- footer; relocated lazyload and sw into php template

------------------------------------------------------------

## 1.4.4 - 2018-04-18

### Added
- browserconfig.xml
- icons for iOS, OSX, Windows
- input bar newsletter

### Changed
- cookie consent wasn't appearing on live site (whooooops); header.php footer.php
- relocated icons from icons/ to icons/{sub_folder}/
- letters; not displaying properly on iOS - added translate(x,y)
- ranges grid; added image optimization with cloudinary
- media queries; background attachment issues on iOS - added @/supports webkit-overflow
- main navigation; made logo into a link back to index

------------------------------------------------------------

## 1.4.3 - 2018-04-12

### Added
- Error page 404 (404.php)
- Template - ranges: grid for index
- Template - blog: latest posts for index
- Head - if else statements to automate headers

### Changed
- relocated css, img, js to assets
- parts renamed to template-parts
- header.php changed to head.php
- hero.php changed to hero__index.php
- index; added the rest of the ranges

------------------------------------------------------------

## 1.4.2 - 2018-03-03

### Changed
- Microart WWX product information

------------------------------------------------------------

## 1.4.1 - 2018-03-01

### Added
- Micro Art Studios (html + css)

------------------------------------------------------------

## 1.3.1 - 2018-02-27

### Added
- Cloudinary
- Shortcodes.php
- LazyLoad (footer)
- TTCombat (html + css)
- Dragon Shield (html + css)
- Wolsung (html + css)

### Updated
- Pages (changed to php)
- Images (now served over Cloudinary, <img> swapped for <picture> on all pages)

### Changed
- Header (typo in open graph description, see images)
- Functions (remove render blocking JS, removed dashicons, added shortcodes)
- Typography (change to import google font)
- Navigation (remove padding)

------------------------------------------------------------

## 1.2.1 - 2018-02-14

### Added
- manifest.json
- favicon
- Aristeia (html + css)
- CF7 labels (via jQuery)
- Manifest.json
- Web App (theme colour)
- Open Graph data (facebook, twitter)
- Fuctions (added last-modified)
- Accessibility (css, cf7 labels)

### Updated
- Index (new icons)
- Functions (clean up wp_head)
- Wep App (address bar match brand, splash screen)

### Changed
- Functions (login removed JS from footer)
- Removed prevention of zoom (head)
- Relocated hero into a template part

------------------------------------------------------------

## 1.1.1 - 2018-02-08

### Updated
- Header (stopped all contents from flying away)
- Footer (added active class)

------------------------------------------------------------

## 1.1.0 - 2018-02-07

### Added
- Custom login (styles, scripts)
- Fontello (fontelico) fonts

### Updated
- Functions (added login, move scripts to before </body>, defer parsing of scripts)
- Styles (index; target all icons instead of individually)
- Footer (footer previously contained within .content)
- Colours (change bludrk)
- Icomoon (wider variety of icons)

------------------------------------------------------------

## 1.0.0 - 2018-02-02

### Added
- Analytics
- Styles
- Scripts
- Template Parts
- Login (not finished)
