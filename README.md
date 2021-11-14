# MainWP Child Plugin Auto Downloader.

Donate link: https://www.buymeacoffee.com/kwcjr   
Requires at least: 5.8.2   
Tested up to: 5.8.2   
Stable tag: 1.0.0   
License: GPLv2 or later   
License URI: http://www.gnu.org/licenses/gpl-2.0.html   

## Description

This plugin checks to see if the MainWP Child plugin is installed and activated; If not, it will download it & install / activate it.

## Setup

1. Download this repository & Unzip to desktop
1. Open folder & Rename `company-worker.php` to `your-company-worker.php`
1. Edit `your-company-worker.php` & update with `YOUR COMPANY` info under `@wordpress-plugin`
1. Highlight files & Create `your-company-worker.zip`

## Installation ##

Installable just like a regular WP plugin from the WordPress UI or manually via SFTP.

1. Upload `your-company-worker.zip` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

### Workflow Ideas
Create a signup form simply requesting an `Admin Account Username` that your client created with an EXTREAMLY long password that nobody ever sees - and then provide this plugin as a downloadable when your service has been purchased - provide the derfault WP Plugin installation instructions above. 


#### Changelog

= 1.0.0 =
* Initial release.

#### Roadmap

* Add core Email notifications
* Add settings so it’s easier to setup White-labeling ( config )
* Add settings to Auto Hide the MainWP Child Plugin from the gate ( config )
* Add settings for Auto Enable MainWP Child Plugin Security ID & append to Email Notifications ( config ) 
* Add core Updater Script to keep the MainWP Child Auto Uploader core updated from witin WordPress Admin. ( ignoring settings config files )


 Feel free to submit requests and issues with the provided tags here:   
 https://github.com/kwcjr/MainWP-Child-Auto-Downloader/issues
