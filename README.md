# Kingsley Distribution

```
├── site/
│   ├── assets/
│   │   ├── css/
│   │   │   ├── base/
│   │   │   │   ├── _accessibility.scss
│   │   │   │   ├── _colours.scss
│   │   │   │   ├── _media.scss
│   │   │   │   ├── _reset.scss
│   │   │   │   └── _typography.scss
│   │   │   ├── components/
│   │   │   │   ├── _buttons.scss
│   │   │   │   ├── _consent.scss
│   │   │   │   ├── _forms.scss
│   │   │   │   └── _letters.scss
│   │   │   ├── layout/
│   │   │   │   ├── _call-to.scss
│   │   │   │   ├── _container.scss
│   │   │   │   ├── _footer.scss
│   │   │   │   ├── _grid.scss
│   │   │   │   ├── _header.scss
│   │   │   │   ├── _navigation.scss
│   │   │   │   ├── _newsletter.scss
│   │   │   │   └── _ranges.scss
│   │   │   ├── pages/
│   │   │   │   ├── errors/
│   │   │   │   │   └── _404.scss
│   │   │   │   ├── ranges/
│   │   │   │   │   └── * all ranges offered
│   │   │   │   ├── _about.scss
│   │   │   │   ├── _contact.scss
│   │   │   │   ├── _error.scss
│   │   │   │   ├── _faq.scss
│   │   │   │   └── _index.scss
│   │   │   ├── utils/
│   │   │   │   ├── _mixins.scss
│   │   │   │   ├── _placeholders.scss
│   │   │   │   └── _variables.scss
│   │   │   ├── style.min.css
│   │   │   └──  style.scss
│   │   ├─── js/
│   │   │   ├── scripts.js
│   │   │   └── scripts.min.js
│   ├── includes/
│   │   ├── parts/
│   │   │   ├── call-to/
│   │   │   │   └── newsletter.php
│   │   │   ├── forms/
│   │   │   │   ├── general-enquiries.php
│   │   │   │   └── open-account.php
│   │   │   ├── header/
│   │   │   │   ├── hero_index.php
│   │   │   │   ├── hero_ranges.php
│   │   │   ├──  navigation/
│   │   │   │   ├── nav__main.php
│   │   │   │   └── nav__to-top.php
│   │   │   └── ranges/
│   │   │       └── ranges_grid.php
│   │   ├── config.php
│   │   ├── consent.php
│   │   ├── footer.php
│   │   ├── header.php
│   │   ├── lazyload.php
│   │   ├── schema.php
│   │   ├── serviceworker.php
│   │   └── social.php
│   ├── pages/
│   │   ├── error/
│   │   ├── ranges/
│   │   │   └── * all ranges offered
│   │   ├── about.php
│   │   ├── contact.php
│   │   └── faq.php
│   └── index.php
├── theme/
│   ├── assets/
│   │   ├── css/
│   │   │   ├── base/
│   │   │   │   ├── _accessibility.scss
│   │   │   │   ├── _colours.scss
│   │   │   │   ├── _media.scss
│   │   │   │   ├── _reset.scss
│   │   │   │   └── _typography.scss
│   │   │   ├── components/
│   │   │   │   ├── _buttons.scss
│   │   │   │   ├── _consent.scss
│   │   │   │   ├── _forms.scss
│   │   │   │   └── _letters.scss
│   │   │   ├── layout/
│   │   │   │   ├── _call-to.scss
│   │   │   │   ├── _container.scss
│   │   │   │   ├── _footer.scss
│   │   │   │   ├── _grid.scss
│   │   │   │   ├── _header.scss
│   │   │   │   ├── _navigation.scss
│   │   │   │   ├── _newsletter.scss
│   │   │   │   ├── _overlay.scss
│   │   │   │   └── _ranges.scss
│   │   │   ├── pages/
│   │   │   │   ├── errors/
│   │   │   │   │   └── _404.scss
│   │   │   │   ├── ranges/
│   │   │   │   │   └── * all ranges offered
│   │   │   │   ├── _about.scss
│   │   │   │   ├── _contact.scss
│   │   │   │   ├── _error.scss
│   │   │   │   ├── _faq.scss
│   │   │   │   ├── _index.scss
│   │   │   │   └── _policies.scss
│   │   │   ├── utils/
│   │   │   │   ├── _mixins.scss
│   │   │   │   ├── _placeholders.scss
│   │   │   │   └── _variables.scss
│   │   │   ├── style.min.css
│   │   │   └──  style.scss
│   │   └── js/
│   │       ├── scripts.js
│   │       └── scripts.min.js
│   ├── includes/
│   │   ├── admins/
│   │   │   ├── admin-functions.php
│   │   │   ├── admin-scripts.js
│   │   │   ├── admin-scripts.min.js
│   │   │   ├── admin-style.min.css
│   │   │   └── admin-style.scss
│   │   ├── login/
│   │   │   ├── login-functions.php
│   │   │   ├── login-scripts.js
│   │   │   ├── login-scripts.min.js
│   │   │   ├── login-style.min.css
│   │   │   └── login-style.scss
│   │   └── parts/
│   │       ├── call-to/
│   │       │   └── newsletter.php
│   │       ├── consent/
│   │       │   └── consent.php
│   │       ├── footer/
│   │       │   ├── lazyload.php
│   │       │   └── serviceworker.php
│   │       ├── header/
│   │       │   ├── hero__index.php
│   │       │   ├── hero__policies.php
│   │       │   ├── hero__ranges.php
│   │       │   ├── schema.php
│   │       │   └── social.php
│   │       └── nav/
│   │           ├── nav__main.php
│   │           ├── nav__policies.php
│   │           └── nav__to-top.php
│   ├── 404.php
│   ├── footer.php
│   ├── functions.php
│   ├── header.php
│   ├── index.php
│   ├── page.php
│   ├── ranges.php
│   ├── shortcodes.php
│   └── style.css
├── CHANGELOG.md
└── README.md
```
