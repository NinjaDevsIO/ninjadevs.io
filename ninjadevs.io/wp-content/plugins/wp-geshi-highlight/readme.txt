=== WP-GeSHi-Highlight — simple, fast, and reliable syntax highlighting ===
Contributors: jgehrcke
Donate link: http://gehrcke.de/donate/
Tags: syntax, highlight, simple, geshi, highlighting, valid, fast
Tested up to: 4.2
Requires at least: 3.0
Stable tag: 1.3.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Syntax highlighting for many languages. Simple usage. Based on GeSHi, an established and rock-solid highlight engine. Valid HTML output.

== Description ==

**• Go, have a look at the [live demo](https://gehrcke.de/wp-geshi-highlight-demo/).**

**• Plugin highlights:**

* Syntax highlighting for [240 languages](http://gehrcke.de/files/perm/wp-geshi-highlight/wp-geshi-highlight_languages_1_2_3.txt).
* Lightweight and super-simple usage.
* Mobile-friendly: saves bandwidth and battery (no client-side code execution required, usually only one additional HTTP request). This is much better than using one of these heavy-scripted client-side solutions!
* High performance, with near-zero additional load on the back-end. Especially in combination with a caching solution this does not affect your page load time at all.
* Line numbering (only if you want to). No displacements between code line and line number. Numbers are not copied in most browsers.
* I have tested the default style with more than 20 themes, including Twenty Ten to Fifteen.
* If you do not like the default style: just provide your on CSS file. Styles are highly & easily configurable.
* Per-block styles: each code block on a single web page can be designed on its own, if that is something you need to do.
* Clean, small and valid HTML output. That's super-important!
* Clean and well-documented source code, using modern WordPress API calls.
* Well-maintained for several years already, and I'll continue to provide support.
* This is based on [GeSHi](http://qbnz.com/highlighter/), a reliable and well-established PHP highlighting engine, used by popular forum softwares such as phpBB or wiki applications such as Dokuwiki or MediaWiki.
* Stability, performance and security are inherited from GeSHi. And I'll continue to merge in upstream changes.

WP-GeSHi-Highlight works as a drop-in replacement for [WP-Syntax](http://wordpress.org/extend/plugins/wp-syntax/), which does not seem to be maintained anymore. Make the switch, it should just work (let me know how it went)!

**• Usage:**

Bear in mind: do not use the visual post editor. Use the raw editor instead. There, insert code blocks as canonical `pre` blocks, and use the `lang` argument to define the language of the code snippet:

`<pre lang="languagestring">
    CODE
</pre>`

A short example for the `bash` language:

`<pre lang="bash">
    $ dd if=/dev/zero of=image.ext3 bs=1M count=10000 oflag=append conv=notrunc
</pre>`

This is all you need to do. Right, it is that simple! Isn't that cool?

Be sure to also check out the reference documentation for all available options. You can find it on the [plugin's website](https://gehrcke.de/wp-geshi-highlight). Note that more usage examples can be found on the [demo website](https://gehrcke.de/wp-geshi-highlight-demo/).

**• Issues:**

Many websites have used this plugin for years, and it seems to serve its purpose very well. Most issues so far were style-related. If you find an issue, please let me know: drop a [mail](mailto:jgehrcke@googlemail.com) or leave a [comment](http://gehrcke.de/wp-geshi-highlight).

**• Theme compatibility of the default style sheet:**

The default style sheet was tested with recent versions of all official themes (Twenty Ten to Twenty Fifteen), and with a large range of non-official themes such as Vantage, Customizr, ColorWay, Zerif Lite, Responsive, Storefront, Virtue, evolve, Make, Sparkling, Spacious, Enigma, Sydney, Point, Interface, SinglePage.

Certain themes might define styles with a high specificity that negatively affect the visual code block appearance. It is difficult to impossible to anticipate all these cases in advance, so I expect this to happen in rare cases (the past has proven that these things happen). So, I need you to look out for these situations, and please report them!


== Installation ==
1. Upload the `wp-geshi-highlight` directory to the `/wp-content/plugins` directory.
1. Activate the plugin through the plugins menu in WordPress.
1. Use it.


== Frequently Asked Questions ==
Please have a look at the [plugin's website](http://gehrcke.de/wp-geshi-highlight/#faq).


== Screenshots ==
I feel that a [live demonstration](https://gehrcke.de/wp-geshi-highlight-demo/) is better than just screenshots.


== Changelog ==
= 1.3.0 (2015-06-18) =
* Enhance compatibility of the default stylesheet with a large range of themes by increasing the specificity of certain CSS selectors and by adding more style directives. This ensures a better out-of-the-box experience. Thanks to Pascal Krause for reporting an incompatilibity with Twenty Ten.

= 1.2.4 (2015-06-17) =
* Increase compatibility with CDNs: fix double slash appearing in CSS file URL.
* Remove redundant call to `wp_register_style()`.
* Change style sheet ID prefix, add newline characters to GeSHi CSS code output.
* Improve code documentation and readability.

= 1.2.3 (2015-01-12) =
* Update GeSHi to 1.0.8.12 (language file updates).

= 1.2.2 (2014-05-26) =
* Improve default CSS (add box-shadow:none to pre block, override external setting).

= 1.2.1 (2014-05-21) =
* Use plugin_dir_path/url() instead of obsolete WP_PLUGIN_DIR/URL constants (improve compatibility with HTTPS-driven websites).
* Remove obsolete screenshot from release.
* Minor code cleanup.

= 1.2.0 (2014-04-16) =
* Update GeSHi to git state of 2014-04-16 (tons of language updates).
* Largely improve default style, for compatibility with modern browsers.

= 1.1.0 (2013-06-22) =
* Adjust default style for compatibility with Twentythirteen theme.
* Remove GeSHi's hard-coded font-size and line-height code styles.
* Reduce box shadow and border radius in default style.
* Slightly increase top and bottom padding in default style.

= 1.0.8 (2013-01-17) =
* Improve default stylesheet: make use of CSS3 box shadows, several tweaks.
* If the code block style file is found in the [theme style directory](http://codex.wordpress.org/Function_Reference/get_stylesheet_directory), it now has priority over the one in the plugin directory.
* Update GeSHi to 1.0.8.11 (numerous language file updates).
* Include GeSHi language file for nginx configuration files (taken from GeSHi SVN revision r2572, to be released with 1.0.8.12).
* Use [wp_enqueue_style](http://codex.wordpress.org/Function_Reference/wp_enqueue_style) method for style sheet inclusion.
* Deactivate GeSHi economic mode when printing style sheet.
* Do not print credits to HTML source anymore.

= 1.0.7 (2012-05-12) =
* Fix collision with other plugins including their own version of GeSHi (thanks to Bas for reporting).

= 1.0.6 (2012-05-12) =
* Fix line-spacing bug when displaying code blocks with different line numbering settings on the same page (thanks to Bas ten Berge for reporting).

= 1.0.5 (2011-02-27) =
* Update GeSHi to 1.0.8.10 ("Some minor parser tweaks and fixes to existing language files. It adds 15 more languages.").

= 1.0.4 (2011-01-12) =
* Optimize: now, CSS code is only printed once if the same language is used for multiple code blocks on the same page.
* Minor code changes.

= 1.0.3 (2011-01-06) =
* Fix: comments are not always showing up (thanks to Uli for reporting).

= 1.0.2 (2011-01-04) =
* Minor code changes.
* Remove beta tag.

= 1.0.1-beta (2010-12-18) =
* Fix: highlight in comments not always showing up.

= 1.0.0-beta (2010-11-22) =
* Initial release.

