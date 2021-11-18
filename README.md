# MainWP Child Plugin Auto Downloader

Donate link: https://www.buymeacoffee.com/kwcjr   
Requires at least: 5.8.2   
Tested up to: 5.8.2   
Stable tag: 1.0.0   
License: GPLv2 or later   
License URI: http://www.gnu.org/licenses/gpl-2.0.html   

## Description

This plugin checks to see if the MainWP Child plugin is installed and activated; If not, it will download it & install / activate it.

## Setup

#### Prefered Method [GitHub CLI](https://cli.github.com/) ( Can keep updated with Git ) 

1. Open a Terminal and type the following command `gh repo clone kwcjr/MainWP-Child-Auto-Downloader ./your-company-worker`
1. Open folder & Edit `company-worker.php` & update with `YOUR COMPANY` info under `@wordpress-plugin`
1. Highlight folder & Create `your-company-worker.zip`

#### Alternative Method

1. Download this repository & Unzip to desktop
1. Open folder & Edit `company-worker.php` & update with `YOUR COMPANY` info under `@wordpress-plugin`
1. Highlight files & Create `your-company-worker.zip`

## Installation

Installable just like a regular WP plugin from the WordPress UI or manually via SFTP.

**WordPress UI**
1. Upload `your-company-worker.zip` by visiting this URL `/wp-admin/plugin-install.php?tab=upload` on the Child Site.
1. Activate the plugin by clicking the BLUE [ Activate Plugin ] button. 

**Manual via SFTP**
1. Upload `your-company-worker.zip` to the `/wp-content/plugins/` directory 
1. Activate the plugin through the 'Plugins' menu in WordPress
---
##### Workflow Ideas

Create a signup form simply requesting an **Admin Account Username** of which you have instructed your client to create with    
an **EXTREAMLY secure/long password** that nobody will ever see - and then provide this plugin as a *downloadable* when your service has been purchased along with the default WP Plugin installation instructions above.

You connect via MainWP Dashboard to the clients website using the provided **Admin Account Username** & the MainWP White Label Extension takes care of the rest of the branding on the MainWP Child Plugin.

---

## Changelog

= 1.0.0 =
* Initial release.

## Roadmap

* Add core Email notifications
* Add settings so it’s easier to setup White-labeling ( config )
* Add settings to Auto Hide the MainWP Child Plugin from the gate ( config )
* Add settings for Auto Enable MainWP Child Plugin Security ID & append to Email Notifications ( config ) 
* Add core Updater Script to keep the MainWP Child Auto Uploader core updated from witin WordPress Admin. ( ignoring settings config files )
* Add core Framework


 Feel free to submit requests and issues with the provided tags here:   
 https://github.com/kwcjr/MainWP-Child-Auto-Downloader/issues
