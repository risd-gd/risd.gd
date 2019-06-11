risd.gd
=======

RISD Graphic Design website, designed and developed by [Rohan Chaurasia](https://rohanchau.com/) and [Julian Kelly](https://juliankellydesign.com), and advised by John Caserta and James Goggin. Rather than hardcoded templates for each page, the site is built on a system of modular blocks that can be customized in the panel.

The site runs on [Kirby CMS](https://getkirby.com/), and the modular system is powered by [Kirby Builder](https://github.com/TimOetting/kirby-builder). Slideshowed are powered by [Flickity](https://flickity.metafizzy.co/), page transitions by [Smoothstate.js](https://github.com/miguel-perez/smoothState.js), the marquee with [jQuery.Marquee](https://github.com/aamirafridi/jQuery.Marquee), and uses SCSS.


Updating content
----------------

Don't do it here! Go to risd.gd/panel and log in (ask Sue for the credentials). If you're looking to refresh the content from the current server, just download the /content directory from the server via FTP and merge it with your local copy. Git will ignore any changes to /content.


Local development
-----------------

### PHP
You need to run a PHP server. I use [MAMP](https://www.mamp.info/en/), you're free to use whatever you want. Running PHP from the command line is hairy, but there's a guide to do it [here](https://getkirby.com/docs/guide/installation).

### SCSS

In addition, you need some way to compile SCSS (Sass). Please don't edit the outputted CSS, as it will be overwritten by any changes to the SCSS (don't worry, you can write plain CSS in the SCSS file). Because this isn't a Node project, it isn't quite as simple as bundling a script. I use [Koala](http://koala-app.com/). **Make sure to set the output path to the /assets/css/ folder.**


Site structure
--------------

### PHP (/site)
Check out the Kirby guide first, this site's structure closely follows that.

**Snippets** are the header, footer, and repeatable elements like notices. The /blocks contains elements for the builder functionality. In addition, SVG files are saved here as PHP snippets so they can be easily reused as inline SVG.

**Templates** are for the pages themselves. They're all pretty similar due to the builder, save notices. You should make a better error page!

**Blueprints** are what connect the templates and snippets to the CMS, and thus are structured similarly.

### SCSS (/assets/scss)
The SCSS is styled using BEM (```base--element__modifier```), except I switched the underscores and hyphens because I don't like seeing a lot of underscores in my code.

**Variables** contains the colors, type sizes, and unit sizes for each screen size. These values are independent, and can be adjusted to change the look of the site. 

**Breakpoints** define the points at which the site adjusts the layout, as well as a couple helper mixins. For the most part we don't change things past the bp-sm breakpoint. The ```breakpoints``` mixin accepts a property and values to for each breakpoint. the ```bp-units``` mixin accepts a property and a multiplier, to easily use our base unit at a series of sizes for things like padding and margins.\

**Typography** has base styles for type across the website. Typeface (```font-family```) isn't defined here, since we use PHP to define it in the header.php snippet.

**Animations** contains preset animations, some unused, for smoothstate to use when rendering stuff.

**Layout** is..the layout of the website. Components are all structured with a container section, and DIVs inside dictate the padding. There are a couple of self-explanatory mixins here to ease coding. In general, styles are localized to the component, so you don't have to go searching around everywhere to change padding. The inconsistency this might create is handled by the variable system we use. 

### JS (/assets/js)
The main javascript file is used for the printing functionality, smoothstate, the expanding notices, and the marquee. Note that you have to call any functions at the end of ```main.smoothstate``` for them to fire.


Using FTP
---------

When uploading your files to the site, make sure you don't overwrite the /content folder. That's all. Right now I rename the CSS and JS files and references in header.php with the current date so they refresh browser caches, there might be a better way to do this (that's your job!).