# Advanced Hooks Remover

 * Plugin Name: Advanced Hooks Remover
 * Plugin URI: https://github.com/YordanSoares/advanced-hooks-remover
 * Description: Feature plugin that extends the `remove_filter()` and `remove action()` functions to allow for the removal of hooks within classes.
 * Version: 1.0
 * Author: Yordan Soares
 * Author URI: https://yordansoar.es/
 * Text Domain: advanced-hooks-remover
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Tested up to: 5.5

Feature plugin that extends the `remove_filter()` and `remove action()` functions to allow for the removal of hooks within classes. This first release is based in [this comment](https://wordpress.stackexchange.com/a/339046) on StackExchange.com by [Jonny](https://wordpress.stackexchange.com/users/93562/jonny).

## Installation

### Manual Installation
1. Go to [Releases](https://github.com/YordanSoares/advanced-hooks-remover/releases) and download the last release
2. Go to your **Dashboard » Plugins » Add new**
3. Now select **Upload Plugin** button
4. Click on **Select file** button and select the file you just download
5. Click on **Install Now** button and the **Activate Plugin**
6. Enjoy the plugin!

### FTP Installation
1. Go to [Releases](https://github.com/YordanSoares/advanced-hooks-remover/releases) and download the last release
2. Decompress the file in your desktop
3. Run your FTP client software and conect to your WordPress installation
4. Copy to [root folder]/wp-content/plugins/ the plugin directory you just descompress
5. Go to your Dashboard » Plugins » Find the plugin and click on **Activate** option
6. Enjoy the plugin!

## How to use

Exact match:

```
add_action('plugins_loaded', function() {
    remove_class_action('plugins_loaded', 'MyClass', 'my_action', 0);
});
```

Any priority:

```
add_action('plugins_loaded', function() {
    remove_class_action('plugins_loaded', 'MyClass', 'my_action');
});
```

Any class and any priority:
```
add_action('plugins_loaded', function() {
    remove_class_action('plugins_loaded', '', 'my_action');
});
```

## Changelog
* 1.0 - Oct 08, 2020
  * First release based in [this comment](https://wordpress.stackexchange.com/a/339046) on StackExchange.com by [Jonny](https://wordpress.stackexchange.com/users/93562/jonny).