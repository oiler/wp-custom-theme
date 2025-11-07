# Fox Labs

A WordPress theme. 

## Installation

### CSS
Use Sass installed via Homebrew:

* `brew install sass/sass/sass`
* `brew upgrade sass`

Compile Sass with watch or build actions:

* `cd src/scss`
* `sass styles.scss:../../assets/css/styles.css --watch`
* `sass styles.scss:../../assets/css/styles.css --style=compressed`

Using zsh, you can also work this way:

```
alias sassw='sass styles.scss:../../assets/css/styles.css --watch'
alias sassb='sass styles.scss:../../assets/css/styles.css --style=compressed'

## usage: sassp filename [build]
sassp() {
    if [[ -z "$1" ]]; then
        echo "Usage: sasspage <filename> [watch]"
        return 1
    fi
    
    if [[ "$2" == "build" ]]; then
        sass pages/${1}.scss:../../assets/css/pages/${1}.css --style=compressed
    else
        sass pages/${1}.scss:../../assets/css/pages/${1}.css --watch
    fi
}
```

### Project Structure

```
theme-root/
├── src/
│   └── scss/
│       ├── vendor/        # Third-party CSS (reset.css, etc.)
│       ├── core/          # Reusable files (vars.scss, utils.scss, mixins.scss)
│       ├── pages/         # Page-specific CSS loaded individually
│       └── styles.scss    # Main entry point
├── assets/
│    └── css/
│        ├── styles.css     # Compiled main stylesheet
│        └── pages/         # Compiled page stylesheets
├── inc/
│   └── functions/
│       ├── css_pagetype.php
│       ├── js_scripts.php
│       ├── theme_media.php
│       └── custom_post_types.php
├── template-parts/
│   ├── content-post.php
│   ├── content-page.php
│   ├── footer-markup.php
│   └── header-markup.php
├── 404.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── sidebar.php
├── style.css
└── template-front.php

```
