=== Plugin Name ===
Contributors: renshuki
Donate link: https://fcbrossard.net/
Tags:  doubleclick, dfp, management, ads, advertising
Requires at least: 4.0.1
Tested up to: 4.8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This Wordpress plugin aims to create and manage ad units via DFP API.

== Description ==

**Disclaimer:**  
**I'm not in any case affiliate to DoubleClick for Publishers. DoubleClick for Publishers is the property of Google.**  
**I disclaim all warranties and I'll not be responsible for the use of DFP Manager.**

*DFP Manager* is a Wordpress plugin to create and manage *Ad Units* via the [DFP API](https://www.google.com/intl/en_ALL/doubleclick/tos/dfp-api-terms.html).  
Create your *Ad Slots*, define *Ad Sizes* and your *Ad Units* will be created/updated on post publish/update. 

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `dfp-manager` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Try it!

== Configuration == 

= General Settings =  
1) Go to DFP Manager -> General Settings  
2) Enter your **Network Code**  
3) Enter an **Application Name**  
4) Upload your **JSON API Key file** to allow the plugin to access your DFP Manager account API  

> Don't forget that you should allow API access in your DFP account settings 

= Advanced Settings =
5) Add an **Ad Unit Prefix** if you want to recognize created Ad Units (for example: *wp_* for Wordpress)  
6) Check include "Post Type" to add the post_type corresponding to your Ad Unit  (like *post*, *page* or *custom_posts* names)
7) You can fill **Ad Slot Prefix** in case you want to customize IDs for your frontend Ad Units Slots  

> For example with an **Ad Slot Prefix** set to *ad-banner-*:
> ```javascript
> googletag.defineSlot('/5048360/test_12_post_C', [[100,100]], 'ad-banner-C').addService(googletag.pubads());
> ```

= Usage =
DFP Manager hook will be executed everytime you __Save__ / __Update__ or __Publish__ a Wordpress post. It will check if the Ad Unit is already present in your DFP account otherwise it will create it for you.  

> Caution: In case an Ad Unit already exists and is archived, the plugin will not reactivate it for you.  

## CLI Example

> Don't forget to register your *Network Code*, *Application Name* and to upload your credentials JSON file in the **General Settings** page.  

1) Go to `includes` directory of *dfp-manager* plugin.

2) Execute:  
`php class-dfp-cli-example.php`

3) Result:  
```
0) An ad unit with ID '21620414035' and name 'test_5976e475523ad' was created.  
Created 1 ad unit(s).
```

== Frequently Asked Questions ==

== Screenshots ==

1. DFP Manager - Menu
2. DFP Manager - Ad Slots
3. DFP Manager - Ad Sizes
4. DFP Manager - General Settings
5. DFP Manager - Advanced Settings

== Changelog ==

= 1.0.0 =  
* Remote Ad Units creation with DFP API
* Ad Slots management
* Ad Sizes management
* General settings
* Advanced settings

== Upgrade Notice ==

= 1.0.0 =
Alpha pre-release of DFP Manager. It's still purely experimental. 