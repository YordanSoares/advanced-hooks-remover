=== Advanced Hooks Remover ===

Contributors: yordansoares
Tags: method action removal, class action removal, method filter removal, class filter removal, method hook removal, class hook removal
Donate link: https://yordansoar.es/
Requires at least: 5.0
Tested up to: 5.5
Requires PHP: 7.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Advanced Hooks Remover 

== Description ==

Feature plugin that extends the `remove_filter()` and `remove action()` functions to allow for the removal of hooks within classes. This first release is based in [this comment](https://wordpress.stackexchange.com/a/339046) on StackExchange.com by [Jonny](https://wordpress.stackexchange.com/users/93562/jonny).

= How to use =

Exact match:
```
add_action('plugins_loaded', function() {
    advanced_hooks_remover('plugins_loaded', 'MyClass', 'my_action', 0);
});
```

Any priority:
```
add_action('plugins_loaded', function() {
    advanced_hooks_remover('plugins_loaded', 'MyClass', 'my_action');
});
```

Any class and any priority:
```
add_action('plugins_loaded', function() {
    advanced_hooks_remover('plugins_loaded', '', 'my_action');
});
```

== Installation ==
= Automatic installation =
1. Go to your Dashboard » Plugins » Add new
2. In the search form write "Advanced Hooks Remover"
3. When the search return the result, click on the "Install Now" button
4. Finally, click on the "Activate" button
5. Enjoy the plugin!

= Manual Installation = 
1. Download the plugin from this page clicking on the "Download" button
2. Go to your Dashboard » Plugins » Add new
3. Now select "Upload Plugin" button
4. Click on "Select file" button and select the file you just download
5. Click on "Install Now" button and the "Activate Plugin"
6. Enjoy the plugin!

= FTP Installation =
1. Download the plugin from this page clicking on the "Download" button
2. Decompress the file in your desktop
3. Run your FTP client software and conect to your WordPress installation
4. Copy to [root folder]/wp-content/plugins/ the plugin directory you just descompress
5. Go to your Dashboard » Plugins » Find the plugin and click on "Activate" option
6. Enjoy the plugin!

== Changelog ==
= 1.0 - Oct 08, 2020 =
First release based in [this comment](https://wordpress.stackexchange.com/a/339046) on StackExchange.com by [Jonny](https://wordpress.stackexchange.com/users/93562/jonny).