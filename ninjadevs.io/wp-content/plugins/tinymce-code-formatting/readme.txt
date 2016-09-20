=== TinyMCE Code Formatting ===
Contributors: mortalis
Tags: formatting, tinymce, editor, shortcut, button, pre, code
Requires at least: 4.1
Tested up to: 4.1
Stable tag: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds the Pre and Code buttons to the TinyMCE toolbar with customizable shortcuts

== Description ==

The **Pre** button toggles the preformatted style on the selected text or the current line (applies `<pre>` tag to blocks).  
The **Code** button toggles the code style on the selected text or the current word (applies `<code>` tag to inline elements).

The default shortcuts for the buttons are:

- Ctrl+Q - Pre
- Ctrl+D - Code

In the admin **Settings submenu** it's possible to **change** these shortcuts.  
Press a key combination in the text fields with the **Ctrl** key included and the text will be filled automatically. Or you can type it manually.  

Some combinations may *conflict* with the *default* editor or browser shortcuts.  
So check them on your instance.  

You may use these types of shortcuts:  

- `Ctrl+B, .., Z (except AXCV)`
- `Ctrl+0, .., 9`
- ``Ctrl+[symbols] (-=`[];'\/,.)``
- `Ctrl+F1, .., F12`
- `Ctrl+Pad0, .., Pad9`
- `Ctrl+Pad/, Pad*, Pad+, Pad.`
- `Ctrl+Shift+...`
- `Ctrl+Alt+...`
- `Ctrl+Shift+Alt+...`

This plugin GitHub repository: https://github.com/mortalis13/tinymce-code-formatting.

== Installation ==

1. Upload `tinymce-pre-button` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. The buttons in the default TinyMCE editor.
2. The buttons with the TinyMCE Advanced plugin activated.
3. Plugin options page allows to select custom shortcuts.
