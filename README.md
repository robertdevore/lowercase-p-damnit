# Lowercase p Damnit

The "Lowercase p Damnit" plugin ensures consistent capitalization by replacing any instance of "WordPress" with "Wordpress" in your site content. It works across post content and titles, widget text, and even Gutenberg blocks, making sure the modification is applied both on the front end and within the block editor.

## Installation

1. Download the plugin as a ZIP file.
2. In your WordPress dashboard, go to **Plugins > Add New**.
3. Click **Upload Plugin** and upload the downloaded ZIP file.
4. After uploading, click **Install Now** and then **Activate** the plugin.

Alternatively, you can extract the ZIP file contents and upload them directly to the `/wp-content/plugins/lowercase-p-damnit` directory.

## Usage

Once activated, the plugin will automatically replace every instance of "WordPress" with "Wordpress" within your post content and widget content. It works with both the Classic Editor and Gutenberg, so you’ll see the change across all editor types.

## How It Works

The plugin uses a few WordPress filters to replace instances of "WordPress" in your site content:
- **`the_content`**: Applies to the main post content.
- **`the_title`**: Applies to the text in post/page titles.
- **`widget_text`**: Applies to the text in widgets.
- **`render_block`**: Applies to each individual block in the Gutenberg editor.

These filters allow the plugin to modify content wherever it appears, maintaining consistency across your site.

## Changelog

### 1.0.0
- Initial release.
- Replaces "WordPress" with "Wordpress" in post content, widget content, and Gutenberg block content.

## License

This plugin is licensed under the GPL-2.0+ license.  
[Learn more about GPL-2.0+](http://www.gnu.org/licenses/gpl-2.0.txt)

## Frequently Asked Questions

### Does this plugin work with Gutenberg?
Yes, the plugin uses the `render_block` filter to apply changes to each block in the Gutenberg editor.

### Will this affect my existing posts?
The plugin applies its changes on the fly, so it won’t modify your database. It only changes the displayed output.

### Who is this plugin for?
This plugin is perfect for anyone who wants to enforce a consistent lowercase style for the word "Wordpress" throughout their website content.

## Support

If you encounter any issues or have questions, feel free to reach out at [https://robertdevore.com](https://robertdevore.com).
