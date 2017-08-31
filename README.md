_Please don't use this for the moment..._  
_It's still under development._  
_Thank you =)_  

# What is DFP?

*[DoubleClick for Publishers](https://www.doubleclickbygoogle.com/ja/solutions/revenue-management/dfp/)* is an online advertising system owned by **Google**.  
This service can be used in combination with *Google AdSense*. 

# DFP Manager

**Disclaimer:**  
**I'm not in any case affiliate to DoubleClick for Publishers. DoubleClick for Publishers is the property of Google.**  
**I disclaim all warranties and I'll not be responsible for the use of DFP Manager.**

*DFP Manager* is a Wordpress plugin to create and manage *Ad Units* via the [DFP API](https://www.google.com/intl/en_ALL/doubleclick/tos/dfp-api-terms.html).  
Create your *Ad Slots*, define *Ad Sizes* and your *Ad Units* will be created/updated on post publish/update. 

## Features  

  + Remote Ad Units creation with DFP API
  + Ad Slots management
  + Ad Sizes management
  + Advanced settings
    - Ad Unit prefix  

      > For example your site language code like *ja_* or for environments purpose *test_*, *staging_*, *prod_*, etc...  

    - Include "Post type"  

      > In case you use custom posts, you can append the post type to the Ad Unit name/code

## Requirements

You'll need to install php-soap extension as DFP API is based on this protocol.

Ubuntu/Debian like:  
`$ sudo apt-get install php-soap`

RHEL/Fedora like:  
`$ sudo yum install php-soap`


## Installation

1) Git clone the repo in your `/wp-content/plugins/` directory
2) Go to your **WP dashboard -> Plugins -> Installed Plugins**
3) Activate DFP Manager


## Update  

You can use the awesome plugin [github-updater](https://github.com/afragen/github-updater/) to keep *dfp-manager* up to date or just use `git pull` command.  

> Note: I also plan to release this plugin on [Wordpress.org plugins repository](https://wordpress.org/plugins/) in a near future

## Configuration  

Coming soon...

## Usage

Coming soon...

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

## Screenshots

Coming soon...

## Changelog

Coming soon...

## Todos
  
  - [ ] Add an option to custom ad banners name for responsive_ads_header
  - [ ] Code refactoring (like taxonomy registration and custom_post)
  - [ ] Custom post filtering function in advanced settings
    - List custom posts and check the ones you want to use DFP Manager
    - This will enable/disable publish hook for these custom posts
  - [ ] Add a plugin share hook (public + private)
  - [ ] Clean up all the stuff on plugin uninstall (like DFP API key)
  - [ ] Ad Unit menu item in DFP Manager to list them (remotely from DFP)
  - [ ] Post: DFP Manager metabox info (Ad Unit already created or not? Present in a DFP Placement?)
  - [ ] Worpdress shortcode for DFP Manager
  - [ ] Background job for Ad Units creation
  - [ ] Populate Ad Sizes on plugin installation
  - [ ] [Installed Application] or [Web Application Flow] checkbox
    - Should disable "Client ID", "Client Secret" and "Refresh Token" if not checked
  - [ ] Add (optional) to Endpoint

## Bedones  

 - [x] General Settings
 - [x] Advanced Settings
 - [x] DFP configuration parameters
 - [x] DFP Key upload
 - [x] Ad Slots (custom post)
 - [x] Ad Sizes (taxonomy)
 - [x] Publish hook for Ad Units creation
 - [x] `wp_header` hook for DFP JS script loader

## FAQ  

Coming soon...

## Contributions

Feel free to contribute to this open-source project :)