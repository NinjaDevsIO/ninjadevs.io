=== Enlighter - Customizable Syntax Highlighter ===
Contributors: Andi Dittrich
Tags: syntax highlighting, javascript, code, coding, sourcecode, mootools, jquery, customizable, visual editor, tinymce, themes, css, html, php, js, xml, c, cpp, c#, ruby, shell, java, python, sql, rust, matlab, json, ini, config, cython, lua, assembly, asm
Donate link: http://enlighterjs.org
Requires at least: 3.9
Tested up to: 4.6
Stable tag: 3.2
License: MIT X11-License
License URI: http://opensource.org/licenses/MIT

Simple post syntax-highlighted code using the EnlighterJS Javascript Plugin.

== Description ==

Enlighter is a free, easy-to-use, syntax highlighting tool for WordPress. It's build in PHP and uses the MooTools(Javascript) based [EnlighterJS](http://enlighterjs.org) to provide a beautiful code-appearance.
Using it can be as simple as selecting an editor style or adding shortcode around your scripts which you want to highlight and Enlighter takes care of the rest. An easy to use Theme-Customizer is included to modify the build-in themes **without any css knowlegde!**
It also supports the automatic creation of tab-panes to display code-groups together (useful for multi-language examples - e.g. html+css+js)
[Theme Demo](http://enlighterjs.org/Theme.Enlighter.html "EnlighterJS Theme Browser") - [Language Examples](http://enlighterjs.org/Language.Javascript.html "EnlighterJS Language Example")

= Plugin Features =
* Support for all common used languages including powerful generic highlighting
* **Full** Visual-Editor (TinyMCE) Integration (Admin Panel + Frontend)
* Theme Customizer including **LIVE Preview Mode**
* Inline Syntax Highlighting
* Markdown fenced code blocks
* [bbPress](https://bbpress.org/) shortcode + markdown code blocks support
* Shortcodes within content, comments and widgets
* Easy to use Text-Editor mode through the use of Shortcodes and QuickTags
* Advanced configuration options (CDN usage, ..) are available within the options page.
* Supports code-groups (displays multiple code-blocks within a tab-pane)
* Extensible language and theme engines - add your own one.
* Simple CSS based themes
* Integrated CSS file caching (suitable for high traffic sites)
* Standalone Shortcode-Processor to avoid wpautop filter issues in Text-Editor Mode
* Webfont Loader to add missing Monospace Fonts to your website

= Supported Languages (build-in) =
Click to view Language/Theme Examples

* [AVR Assembly](http://enlighterjs.org/Language.AVR-Assembly.html)
* [Generic Assembly](http://enlighterjs.org/Language.Assembly.html)
* [C](http://enlighterjs.org/Language.C.html)
* [CSS](http://enlighterjs.org/Language.CSS.html)
* [C#](http://enlighterjs.org/Language.CSharp.html)
* [C++](http://enlighterjs.org/Language.Cpp.html)
* [Cython](http://enlighterjs.org/Language.Cython.html)
* [Diff](http://enlighterjs.org/Language.Diff.html)
* [Generic](http://enlighterjs.org/Language.Generic.html)
* [HTML](http://enlighterjs.org/Language.HTML.html)
* [Ini](http://enlighterjs.org/Language.Ini.html)
* [JSON](http://enlighterjs.org/Language.JSON.html)
* [Java](http://enlighterjs.org/Language.Java.html)
* [Javascript](http://enlighterjs.org/Language.Javascript.html)
* [LUA](http://enlighterjs.org/Language.LUA.html)
* [MarkDown](http://enlighterjs.org/Language.MarkDown.html)
* [Matlab](http://enlighterjs.org/Language.Matlab.html)
* [NSIS](http://enlighterjs.org/Language.NSIS.html)
* [PHP](http://enlighterjs.org/Language.PHP.html)
* [Python](http://enlighterjs.org/Language.Python.html)
* [RAW](http://enlighterjs.org/Language.RAW.html)
* [Ruby](http://enlighterjs.org/Language.Ruby.html)
* [Rust](http://enlighterjs.org/Language.Rust.html)
* [SQL](http://enlighterjs.org/Language.SQL.html)
* [Squirrel](http://enlighterjs.org/Language.Squirrel.html)
* [Shell](http://enlighterjs.org/Language.Shell.html)
* [VHDL](http://enlighterjs.org/Language.VHDL.html)
* [XML](http://enlighterjs.org/Language.XML.html)

= Shortcode Quickstart Example =
Highlight javascript code (theme defined on your settings page)

	[js]
	window.addEvent('domready', function(){
		console.info('Hello Enlighter');
	});	
	[/js]

= Inline Syntax Highlighting with Shortcode =

	Lorem ipsum dolor sit amet, [js]window.alert('Hello World');[/js] consetetur sadipscing elitr,
	sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

= Codegroup Example =
Display multiple codes within a tab-pane. You can define a custom tab-pane title for each snippet if you want.

	[codegroup]
	 	[js tab="Javascript Message"]
		window.addEvent('domready', function(){
			// display string on console
			console.info('Hello Enlighter');
			
			// show element
			$('#myelement').show();
		});	
		[/js]
		
		[html]
		<div id="myelement">
		INITIALIZATION START
		</div>		
		[/html]
		
		[css tab="Styling"]
		#myelement{
			color: #cc2222;
			padding: 15px;
			font-size: 20px;
			text-align: center;		
		}		
		[/css]	
	[/codegroup]

= Legacy Example =
It's also possible to use the plugin with legacy shortcode (disabled language shortcodes)

	[enlighter lang="js"]
	window.addEvent('domready', function(){
		// display string on console
		console.info('Hello Enlighter');
		
		// show element
		$('#myelement').show();
	});		
	[/enlighter]


= Translations (I18n) =
Please keep in mind that not all translations are up to date. You are welcome to contribute!

* **English** (default)
* **German** (de_DE by Andi Dittrich)
* **Serbo-Croatian** (sr_RS by Borisa Djuraskovic from webhostinghub.com)
 
= Related Links =
* [Enlighter Plugin on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter)
* [EnlighterJS Documentation](http://enlighterjs.org)

== Compatibility ==

All browsers supported by MooTools (enabled Javascript required) and with HTML5 capabilities for "data-" attributes are compatible with Enlighter. It's possible that it may work with earlier/other browsers.
Generally Enlighter (which javascript part [EnlighterJS](http://enlighterjs.org) is based on [MooTools Javascript Framework](http://mootools.net/)) should work together with jQuery in [noConflict Mode](http://docs.jquery.com/Using_jQuery_with_Other_Libraries) - when you are using jQuery within your Wordpress Theme/Page you have to take care of it!

* Chrome 10+
* Safari 5+
* Internet Explorer 6+
* Firefox 2+
* Opera 9+
    
== Installation ==

= System requirements =
* PHP 5.3, including `json` functions
* Webbrowser with enabled Javascript (required for highlighting)
* Accessable cache directory (`/wp-content/plugins/enlighter/cache/`)

= Installation =
1. Download the .zip file of the plugin and extract the content
2. Upload the complete `enlighter` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Goto to the Enlighter settings page and select the default theme which should be used.
5. That's it! You're done. You can select an editor style for your codefragment or enter the following code into a post or page to highlight it (e.g. javascript): `[js]var enlighter = new EnlighterJS({});[/js]` 

== Screenshots ==

1. HTML highlighting Example (Enlighter Theme)
2. Visual Editor Integration
3. Visual Editor Code Settings
4. Visual Editor Inline/Block Formats
5. Options Page - Appearance Settings
6. Options Page - Advanced Settings
7. Theme Customizer - General styles
8. Theme Customizer - Language Token styling
9. Special options for use with a CDN (Content Delivery Network)
10. Tab-Pane Example (multiple languages)
11. Frontend Editing using wp_editor feature
12. Theme Customizer - Live Preview-Mode

== Upgrade Notice ==

= 3.0 =
New fault-tolerant Shortcode-Processor is integrated. You can switch back to the old one on the Enlighter Settings Page -> Editing -> Shortcode

= 2.11 =
Bugfix Release (initialization may fail when upgrading to 2.10)

= 2.9 =
Bugfix Release (TinyMCE and EnlighterJS Core)

= 2.6 =
Renamed the EnlighterJS files to `EnlighterJS.min.css` and `EnlighterJS.min.js`. In case you have applied custom modifications these changes may broke your setup and you need to change it!
Added [EnlighterJS v2.5](http://enlighterjs.org/) with some optimization.

= 2.4 =
Removed WordPress 3.8 Visual Editor compatibility - Enlighter now requires WordPress >= 3.9 including TinyMCE 4

= 2.2 =
Full Visual-Editor (TinyMCE4) Integration including codeblock-settings (WordPress >= 3.9 required)

= 2.0 =
Added Inline-Syntax-Highlighting as well as some other cool feature - please go to the settings page and click "Apply Settings"

= 1.8 =
Added Visual-Editor (TinyMCE) Integration (will avoid auto-whitespace-removing issues)


== Frequently Asked Questions ==

= Can i use Enlighter togehter with Crayon ? =
No, you can't use Enlighter together with the Crayon Syntax highlighter because it may take over the Enlighter elements.

= Should i use Shortcode`s or the Visual-Editor Integration ? =
If possible, use the VisualEditpr mode! The use of Shortcode is only recommended when working in Text-Mode. By switching to the Visual-Editor-Mode whitespaces (linebreaks, indents, ..) within the shortcode will get removed by the editor - using Visual-Editor mode will avoid such problems.

= I am using shortcodes and random p/br tags are added to my code =
This problem is caused by WordPress' `wpAutoP` filter - to fix this issue, go to "Enlighter Settings -> Advanced -> WpAutoP Filter Priority" and change this value to "Priority 12 (after shortcode). For cross-plugin-compatibility this feature is disabled by default.

= I can't see any style options within the Visual-Editor-Toolbar =
You have to enable the full toolbar by clicking on the **Show/Hide Kitchen Sink** button (last icon on the toolbar)

= I get an "file permission" php error in my blog =
The directory `/wp-content/plugins/enlighter/cache/` must be writable - the generated css files as well as some cached content will be stored there for performance reasons. Try to set chmod to `0644` or `0770`

= When using the ThemeCustomizer the Code appears in plain-text =
The cache-directory `wp-content/plugins/enlighter/cache` have to be writable, the generated stylesheet will be stored there. Set the directory permission (chmod) to `0644` or `0777`

= Inline Styles are missing within the Visual Editor =
This feature requires WordPress 3.9 (new TinyMCE Version) - but you can still use shortcodes for inline highlighting! 

= How can i enable the Theme-Customizer ? =
To enable the Theme-Customizer you have to select the theme named *Custom* as default theme. The Theme-Customizer will appear immediately.

= Is it possible to point out special lines of code ? =
Yes! since version 1.5 all shortcodes support the attribute ``highlight``.
Shortcode Example: highlight the lines 2,3,4,8 of the codeblock `[js highlight="2-4,8"]....some code..[/js]`
	
= Are the uncompressed EnlighterJS Javasscript and CSS sources available ? =
The complete EnlighterJS project can be found on [GitHub](https://github.com/AndiDittrich/EnlighterJS "EnligherJS Project")

= Can i add custom Themes ? =
Yes you can! - The simplest way is to download the [EnlighterJS CSS sources](https://github.com/AndiDittrich/EnlighterJS/tree/master/Source/Themes "EnligherJS Project") and modify one of the standard themes. Finally create a directory named `enlighter` into your WordPress theme and put the css file into it.

= There are no Enlighter features visible within the Frontend Editor =
You have to enable the frontend editing function: `Enlighter Settings Page -> Advanced -> TinyMCE Integration (Visual Editor) -> Enable Frontend Integration`. This feature also requires a logged-in user with `edit_posts` and/or `edit_pages` [privileges](http://codex.wordpress.org/Function_Reference/current_user_can) and is only available for the `wp_editor` function - no third party editors are supported!

= I'am already using MooTools and my page throws Javascript-Errors =
If you are already using MooTools on your page, you have to disable the automatic inclusion of MooTools by Enlighter. Goto the Enlighter options page -> Advanced and select "Not include" as MooTools source. 
**Note:** EnlighterJS requires MooTools > 1.4

= Can Enlighter by disabled on selected pages? =
Of course, the filter hook [enlighter_startup](https://github.com/AndiDittrich/WordPress.Enlighter/blob/master/docs/FilterHooks.md) can be used to terminate the plugin initialization

= Security Vulnerabilities =
In case you found a security issue in this plugin - please write a message **directly** to [Andi Dittrich](http://andidittrich.de/contact) - __**DO NOT POST THIS ISSUE ON GITHUB OR WORDPRESS.ORG**__ - the issue will be public released if it is fixed!

= I miss some features / I found a bug =
Write a message to [Andi Dittrich](http://andidittrich.de/contact) (andi DOT dittrich AT a3non DOT O R G) or open a [New Issue on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues)
== Changelog ==

= 3.2 =
* Added: [GFM](https://help.github.com/articles/creating-and-highlighting-code-blocks/) style Markdown support for fenced code blocks
* Added: bbPress support for Markdown fenced code blocks 
* Added: Environment Check to ensure Enlighter is working in a well configured environment
* Added: Filter hook `enlighter_startup` to disable Enlighter on selected pages - feature requested on [WordPress.org Forums](https://wordpress.org/support/topic/best-way-to-dequeue-enlighter-plugin?replies=2) #43
* Added: Filter `enlighter_inline_javascript` - applied to inline javascript which is injected into the page
* Added: Filter `enlighter_frontend_editing`- forced enabling/disabling of the frontend editing functions
* Replaced: PHP-Version-Errorpage by global admin_notice - ensure that **PHP 5.3 or greater** is used to avoid weird errors
* Changed: The autofix permission helper will set the cache directory permissions to **0774**
* Bugfix: PHP Error message was thrown in case a the cache was not writable and a file operation failed
* Bugfix: The cache check did not checked if the directory was accessible
* Bugfix: The autoset permission link was broken since v3.0
* Bugfix: Backtick style code elements of bbPress will break the highlighting

= 3.1 =
* Added: [EnlighterJS v2.10.1](http://enlighterjs.org/)
* Added: About/News Page which is shown on plugin activation/upgrade
* Added: New Options Page `Extensions` for Enlighter related third-party plugin integration
* Added: Experimental Support for [Jetpack Infinite Scroll](https://jetpack.me/support/infinite-scroll/) - feature requested on [WordPress.org Forums](https://wordpress.org/support/topic/not-working-when-infinite-scroll-is-enabled)
* Added: Experimental [bbPress](https://bbpress.org/) Shortcode support - feature requested by [DevynCJohnson on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/33)
* Added: global constant `ENLIGHTER_PLUGIN_URL` - pre-processed version of `plugins_url('/enlighter/')`
* Added: local enqueue wrappers to the `ResourceLoader.php`
* Added: Enlighter Shortcode support for Text-Widgets
* Added: Enlighter Shortcode support for User Comments
* Added: Options to enable/disable the Editor Quicktags on the Frontend as well as Backend
* Added: HTML Tag restrictions to Visual Editor: disallows any kind of formatting elements (strong, span, em, ..) within code-blocks
* Added: Event `enlighter_init` which is triggered on plugin initialization complete
* Added: Filter `enlighter_themes` to modify the internal theme list - ability to **add** and/or **remove** themes
* Added: Filter `enlighter_languages` to modify the internal language list - ability to **add** and/or **remove** languages
* Added: Filter `enlighter_resource_url` to modify the domain/protocol of related Enlighter resources
* Added: Filter `enlighter_shortcode_filters` to enable shortcodes in specific sections by hooking into 3rd party filters
* Added: Minified Versions of the TinyMCE Plugin
* Changed: The EnlighterJS Config object is now populated as `EnlighterJS_Config` to enable third-party integrations/plugins
* Changed: Moved [Cryptex](https://wordpress.org/plugins/cryptex/) Settings from `Options` to `Extensions`
* Changed: External Plugins (colorpicker, jquery.cookie) are moved from `extern/` to `resources/extern`
* Changed: toolbar button link to http://enlighterjs.org
* Changed: The Plugin is now initialized [on init](https://codex.wordpress.org/Plugin_API/Action_Reference/init) to enable users to hook-in
* Changed: Renamed the Visual Editor configuration object to `EnlighterJS_EditorConfig`
* Changed: Renamed the TinyMCE plugin from `enlighter` to `enlighterjs`
* Changed: Renamed the TinyMCE plugin files to `EnlighterJS.TinyMCE.min.js`, `EnlighterJS.TinyMCE.min.css`
* Changed: Removed the "Advanced" page - settings are moved to "Options"
* Bugfix: The special-line color of the Atomic theme was too dark. changed to 0x392d3b - thanks to [CraigMcKenna on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/24)
* Bugfix: Users with role `author` and `contributor` were not able to set language, theme or other options in Editor Mode (html attributes were stripped by the [KSES filter](http://codex.wordpress.org/Function_Reference/wp_kses_allowed_html))
* Bugfix: Codegroup title cannot be set manually caused by wrong attribute name - thanks to [PixelT on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/34)
* Bugfix: Codeblock edit button does not work in WP 4.5 caused by cross-plugin event-propagation
* Bugfix: Users with role `author` and `contributor` were not able to use the frontend-editor-extension because of missing privileges to edit pages. Condition is changed to `IS_LOGGED_IN AND (CAN_EDIT_POSTS OR CAN_EDIT_PAGES)` - thanks to [Petr on WordPress Forums](https://wordpress.org/support/topic/tinymce-btn-on-frontend-for-non-admin?replies=4#post-8374924)
* Bugfix: HTML Code Fragment within the generated `cache/TinyMCE.css` file caused CSS validation error
* Cleaned up the internal Plugin Structure
* Visual Editor (TinyMCE) Plugin is outsourced to [AndiDittrich/EnlighterJS.TinyMCE](https://github.com/AndiDittrich/EnlighterJS.TinyMCE)

= 3.0 =
* Added: New robust and fault-tolerant `LowLevel Shortcode Handler` to avoid issues with wpautop filter and unescaped html characters (text mode)
* Added: Visual Editor Customization
* Added: Option to disable Enlighter shortcodes
* Added: Option to use the old/legacy Shortcode handler 
* Added: Shortcode Processor info to the SystemInformation sidebar
* Added: Unique Hash to all cached resources to force cache-update on file-change/settings-update
* Added: Option to cancel WordPress Editor width limit (set to auto)
* Added: [QuickTags](https://codex.wordpress.org/Quicktags_API) to the Text/HTML Editor
* Bugfix: Theme Customizer was not able to modify the special-line-highlighting-color of codeblocks **without** line-numbers - thanks to [CraigMcKenna on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/24)
* Bugfix: MooTools <= 1.5.1 [#2705](https://github.com/mootools/mootools-core/pull/2705) will throw the javascript error `The specified value "t" is not a valid email address` - [updated to v1.6.0](http://mootools.net/blog/2016/01/14/mootools-1-6-0-release) - thanks to [lots0logs on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/25)
* Bugfix: Removed TinyMCE debugging output (written to console)
* Bugfix: The Edit Icon (Visual Editor) is now dynamically positioned based on editor width
* Bugfix: Foreground Color of Theme-Customizers color elements is changed dynamically based on the background color brightness
* Changed: Moved the Enlighter Settings Page to the Top-Level of WordPress Administration Menu
* Changed: Moved Language Shortcode options from advanced settings to editing section
* Changed: Moved TinyMCE Editor options from advanced settings to editing options
* Changed: The Visual Editor Code-block appearance (modernized)
* Changed: Language Titles in the Visual Editor Box are dynamically generated
* Changed: Internal file structure (editor resources)
* Changed: The Menu Slug/URL from `options-general.php?page=enlighter/class/Enlighter.php` to `admin.php?page=Enlighter` - direct, custom links to the settings page **require an update** !
* Changed: Editor Config object is renamed to `Enlighter_EditorConfig`
* Changed: New Resource Manager structure is used
* Changed: Cached files are observed and re-generated if missing
* Replaced: the low-level PHP based ObjectCache by the [WordPress Transient API](https://codex.wordpress.org/Transients_API)
* Dependencies: Updated MooTools to [v1.6.0](http://mootools.net/blog/2016/01/14/mootools-1-6-0-release)
* Deprecated: The "WpAutoP" Filter Priority setting will be removed in the future - the new LowLevel Shortcode Handler will avoid wpautop issues!

= 2.11 =
* Bugfix: the default option of "Enlighter Config" is now set to "inline" - this may avoid highlighting when upgrading to 2.10 - I apologize for the inconvenience - thanks to [ciambellino on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/21)

= 2.10 =
* Added: [EnlighterJS v2.10.0](http://enlighterjs.org/)
* Added: [Cython](http://cython.org/) Language support - thanks to [DevynCJohnson on GitHub](https://github.com/AndiDittrich/EnlighterJS/pull/14)
* Added: [Squirrel](http://www.squirrel-lang.org/) Language support - thanks to [DevynCJohnson on GitHub](https://github.com/AndiDittrich/EnlighterJS/pull/16)
* Added: [General Assembly Language support](https://en.wikipedia.org/wiki/Assembly_language) - feature requested on [GitHub](https://github.com/AndiDittrich/EnlighterJS/issues/12)
* Added: [LUA](http://www.lua.org/) Language support
* Added: Minimal Theme (bright, high contrast)
* Added: Atomic Theme (dark, colorful)
* Added: Rowhammer Theme (light)
* Added: missing AVR Assembly features (used [AVR-1022](www.atmel.com/Images/doc1022.pdf) reference) 
* Added: Universal Google Webfonts loader: Droid Sans Mono, Inconsolata .. (all available monospace fonts, Nov 2015)
* Added: option to control the global script position (header/footer) of related javascript files - features requested on [GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/17)
* Added: link to the official [EnlighterJS Website](http://enlighterjs.org) to the plugin overview page
* Added: ENLIGHTER_VERSION string to all related js/css resources
* Changed: moved settins page link on the plugin overview page to the action links (left column)
* Changed: the editor font-size is set to **0.7em** and the font-family is changed to "Source Code Pro"
* Renamed: Webfonts style name changed to `enlighter-webfonts`
* Removed: option to control the initialization script position (replaced by an additional global script position option)
* Removed: calls to `wp_register_style` and `wp_register_script` - instead the `wp_enqueue_` methods are used directly
* Bugfix: removed some incorrect html attribute quotes within the settings page
* Bugfix: removed unused html table tag from the settings page
* Bugfix: removed `console.log` debugging output from tokenizer
* Bugfix: in some cases the ThemeCustomizer cannot load the base css files (theme name not transformed to lowercase)
* Bugfix: an empty paragraph is added after each codeblock in the VisualEditor-Mode (permits users to add content after the codeblock)
* Bugfix: copy&paste within a Enlighter codeblock had spilt the block into multiple parts (VisualEditor-Mode)

= 2.9 =
* Added: [EnlighterJS v2.9](http://enlighterjs.org/)
* Bugfix: Under some special conditions the tokenizer repeats the last sequence of a codeblock - thanks to [Kalydon](https://github.com/AndiDittrich/EnlighterJS/issues/8) and [dan-j on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/13)
* Bugfix: TinyMCE Editor plugin didn't work in some special cases (use of other editor plugin) - [Thanks to esumit on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/12)
* Bugfix: the final character of highlighted code got removed by the tokenizer engine in case it's a text token - thanks to [dan-j on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/15)
* Bugfix: Generic highlighting was accidentally removed from EnlighterJS 

= 2.8 =
* Added: [EnlighterJS v2.7.0](http://enlighterjs.andidittrich.de/)
* Added: [Rust](http://www.rust-lang.org/) language support - feature requested on [GitHub](https://github.com/AndiDittrich/EnlighterJS/issues/7)
* Added: [VHDL](http://en.wikipedia.org/wiki/VHDL) language support
* Added: [Matlab](http://en.wikipedia.org/wiki/MATLAB) language support
* Added: New Shell/Bash language engine
* Added: New PHP language engine
* Added: New CSS language engine - some styles have changed!
* Added: Shell script example
* Added: "MooTwo" theme inspired by the mootools.net website
* Added: "Godzilla" theme inspired by the MDN
* Added: "Droide" theme
* Added: New EnlighterJS Info Button (Toolbar)
* Added: New Tokenizer Engine which increases the rendering performance by nearly **700%**
* Bugfix: Wrong highlighting class used for SQL comments
* Changed: Smart Tokenizer Engine is used instead of the old Lazy Bruteforce matching
* Changed: All Fonts of the modern Themes are replaced by "Source Code Pro" as default
* Changed: Classic Themes `kw3` color switched with `kw4`
* Changed: The *hover* css-class is now added to the outer `ol,ul` container instead of each `li` line - all themes have been adapted 
* Changed: Inline gif imaages are used for the button toolbar instead of png images (size optimization)
* Many performance improvements
* Reduced the CSS and JS file-size by massive sourcecode optimizations (43kB JS; 28KB CSS; including all Themes and Languages!)

= 2.7 =
* Added: [EnlighterJS v2.6.0](http://enlighterjs.andidittrich.de/)
* Added: Native JSON highlighting support
* Added: Support for the [Cryptex Email Obfuscation](https://wordpress.org/plugins/cryptex/) plugin (>= v5.0) - email addresses within highlighted code can now protected too
* Added: Plugin Upgrade notifications for upcoming major releases to the admins plugin page
* Bugfix: The contextual help link was not "full" selectable (covered by the tab nav)
* Bugfix: ObjectCache file existent check failed (triggers a php warning  `unlink(...) No such file or directory ..`
* The `readme.txt` (WordPress plugin repository) is generated from the markdown file `README.md`, `FAQ.md` and `CHANGES.md` (GitHub style)

= 2.6 =
* Added: Settings page link to the plugin page (metadata row)
* Added: Link to author's Twitter Channel (latest Enlighter updates/news)
* Added: [EnlighterJS v2.5](http://enlighterjs.andidittrich.de/)
* Added: Language support for ini files
* Added: Language support for AVR-Assembler
* Added: XML Namespace highlighting
* Added: Links to the Language Examples to the `README.txt` file
* Bugfix: Highlighting of multi-line XML/HTML tags failed - thanks to [Suleiman19 on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/8)
* Renamed the EnlighterJS files to `EnlighterJS.min.css` and `EnlighterJS.min.js`

= 2.5 =
* Added LIVE Preview-Mode to the Theme-Customizer (requires a browser with enabled pop-up windows)
* Added Preview-Mode screenshot
* Renamed: MooTools js file to `mootools-core-yc.js` (removed the version string)
* Updated: the pot/language files

= 2.4 =
* Added: Compatibility to the [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) Plugin
* Added: Frontend Visual Editor Integration using the [wp_editor](http://codex.wordpress.org/Function_Reference/wp_editor) feature - requested on [WordPress Forums](https://wordpress.org/support/topic/inserting-button-to-frontend-tinymce)
* Added: Additional check to the ObjectCache to ensure that it's writeable whe
* Removed: WordPress 3.8 Visual Editor compatibility - Enlighter now requires WordPress >= 3.9 (TinyMCE 4)
* Hardened the Enlighter TinyMCE Plugin 
* Bugfix: With disabled option "Show Linenumbers" the Visual Editor Plugin will crash the TinyMCE Editor - [Thanks to ryansnowden on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/7)
* Bugifx: In case of a missconfigured WordPress installation (disabling the `admin_print_scripts` hook), the Visual-Editor-Plugin will crash the TinyMCE editor - [Thanks to Nikodemsky on WordPress Forums](https://wordpress.org/support/topic/switching-between-visualtext-editor-is-broken-loading-code)
* Bugfix: Closed possible XSS vector within the HTML generator (authenticated users who **can edit** content were able to inject html code) - this is not a security issue because such users can insert HTML code by default.

= 2.3 =
* Added insert-option for "Align-Left-Indentation" - all leading tabs got replaced by spaces and the minimum indent is removed from each line - this is a usefull feature when pasting code-snippets (the "Code-Indent" option has to be set to n-Spaces!)
* Added insert-option "block/inline" to easily insert inline code - feature requested on [WordPress Forums](http://wordpress.org/support/topic/code-indent-removed-by-wordpress-editor?replies=9#post-5652635)
* Added cache-directory check to ensure that it's writeable as well as a `Autofix` function which automatically set's the permissions of the cache-directory on user request (+w for user + group).
* Added Language-Type "generic" to selection menu
* Added EnlighterJS 2.4
* Added Theme "Classic"
* Added Theme "Eclipse"
* Added Theme "Beyond"
* Added Language "Diff" for changelogs
* Added: License Informations to settings-page footer
* Added: Info of available CDN locations (full url)
* Added: Additional user-role check (administrator + `manage_options` required)
* Added: [Contextual Help](http://codex.wordpress.org/Adding_Contextual_Help_to_Administration_Menus) based help/usage/informations
* Added: Checks the availability of the EnlighterJS library before initializing - this will avoid errors caused by missing scripts
* Added: Option to include the required javscript config as external file, within wp_footer or wp_head
* Added: Support for external/custom EnlighterJS Themes - feature requested on [WordPress Forums](https://wordpress.org/support/topic/install-new-theme-2)
* Updated MooTools (local+CDN) to v1.5.1
* Removed Setting "Config-Type" - Javascript based initialization is now used
* Changed the `wpAutoP` filter priority back to 10 as default (no changes) - this will [avoid conflicts with other plugins](https://wordpress.org/support/view/plugin-reviews/enlighter?filter=2) - in case you are using shortcodes, you should set it to 12
* Changed: some setting keys got renamed, especially the toolbar buttons - please check your settings
* Bugfix: Theme-Customizers CSS cache got removed on plugin upgrade - added automatical CSS recreation/cache check
* Bugfix: Entities didn't got escaped by using the "Code Insert Dialog" - thank's to [nextchi on GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/6) and [Mathias on WordPress Forums](https://wordpress.org/support/topic/html-indention-not-working-as-it-should)
* New settings page - now matches WordPress corporate UI style
* Removed WordPress <= 3.7 compatibility mode/legacy UI style
* Bugfix: Added some missing I18n namespaces
* Many internal changes/improvements

= 2.2 =
* Added "Code Insert Dialog" to avoid copy-auto-formatting issues - feature requested on [WordPress Forums](http://wordpress.org/support/topic/code-indent-removed-by-wordpress-editor?replies=9#post-5652635)
* Added "Enlighter Settings Button" to control the Enlighter Settings (highlight, show-linenumbers, ..) directly from the Visual-Editor - just click into a codeblock and the button will appear (requires WordPress >=3.9)
* Added Enlighter Toolbar Menu-Buttons
* New Visual-Editor integration style
* Bugfix: Added missing codeblock-name for "C#"

= 2.1 =
* Added EnlighterJS 2.2
* Added language support for C# (csharp) [provided by Joshua Maag](https://github.com/joshmaag)
* Bugfix: Indentation of first line got lost - thanks to [cdonts](http://wordpress.org/support/topic/no-indentation-in-the-first-line?replies=2)

= 2.0 =
* Added EnlighterJS 2.1
* Added Inline-Syntax-Highlighting
* Added new Theme "Enlighter"
* Added Inline-Highlighting support to the Visual-Editor
* Added setting "Show Linenumbers"
* Added shortcode attribute "linenumbers" the force the visibility for each codeblock - feature requested on [GitHub](https://github.com/AndiDittrich/WordPress.Enlighter/issues/1)
* Added shortcode attribute "offset" to set the start-index of line-number-counting - feature requested on [WordPress Forums](http://wordpress.org/support/topic/feature-request-initial-start-line-number?replies=2)
* Added Inline-CSS-Selector setting
* Added an optional "raw-code-button" as well as customization options for the appearing Raw-Code-Panel
* Added build-script to generate Theme-Templates required by the ThemeCustomizer directly from the CSS files
* Added seperate token settings for "font-style" and "font-weight"
* Improved Theme-Generator: only one CSS file is included instead of two
* Moved option "Language Shortcodes" to "Advanced Options"
* Removed setting "Output-Style" (replaced by Show-Linenumbers)
* Removed waste Theme-Customizer setting "Line Number Styles -> Line height"
* Bugfix: "Loading Theme Style" doesn't set "text-decoration" corretly

= 1.8 =
* Added: Visual-Editor (TinyMCE) Integration (**optionally** - you can turn it off on the settings page)
* Added: Serbo-Croatian Translation sr_RS (Thank`s to Borisa Djuraskovic from webhostinghub.com)
* Bugfix: Visual-Editor integration will avoid auto-whitespace-removing issues
* Improved: Added new Screenshots

= 1.7 =
* Added: Environment Pre-Check (PHP 5.3 requirement!)

= 1.6 =
* Added: Support for new WordPress 3.8 UI design
* Added: CDNJS Service (Cloudflare) as CDN provider for MooTools @see http://cdnjs.com/
* Added: **I18n** (Internationalization) support (settings page)
* Added: I18n generation tools
* Added: POT file for additional translations
* Added: German translation (de_DE)
* PHP Namespaces used to isolate plugin (PHP >= 5.3 required!)
* Improved Plugin backend structure
* Changed: Admin CSS+JS files are moved to ``resources/admin/``
* Changed: Replaced table layout of settings page
* Bugfix: "Load Theme styles" selects wrong items as default style
* Bugfix: ColorPicker elements doesn't get initialized

= 1.5 =
* Bugfix: The plugin now modifies the priotiry of ``wpautop`` filter to avoid unrequested linebreaks (**optionally** - you can turn it off on the settings page) @see https://github.com/AndiDittrich/WordPress.Enlighter/issues/2 - thanks to **ankitpokhrel**
* Added EnlighterJS 1.8
* Added line based marking to point special lines - just add the attribute ``highlight="1,2-5,9"`` to the shortcode to mark line 1,2,3,4,5,9. The line-color is configurable within the ThemeCustomizer - feature requested on WordPress.org Forum
* Added the ability to set custom hover colors within the ThemeCustomizer as well as custom line highlighting colors
* Improved settings page, new design

= 1.4 =
* Added EnlighterJS 1.7
* Added Language-Aliases for use with generic shortcode
* Fix: CSS Hotfix for bad linenumbers in Chrome @see http://wordpress.org/support/topic/bad-line-numbers-in-chrome?replies=3 - thanks to **cdonts**

= 1.3 =
* Bugfix: CSS Selector got ignored when using metadata-based initialization (all "pre"-tags are highlighted)
* Added EnlighterJS 1.6
* Added "RAW" language - code is not highlighted/parsed

= 1.2 =
* Added EnlighterJS 1.5.1
* Added language support for NSIS (Nullsoft Scriptable Install System)

= 1.1 =
* First public release
* Includes EnlighterJS 1.4