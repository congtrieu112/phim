=== Common Shortcodes &amp; Widgets ===
Contributors: bilal.malik
Tags: flickr, photos, shortcode, flickr photos, map, google, maps widget, google maps widget
Requires at least: 3.0.1
Tested up to: 3.9.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides shortcodes and widgets to add very common site features like map, flickr photos and many more.

== Description ==

This plugin provides shortcodes and widgets that are very common to install in websites. 
Plugin provides you great power of customization of widgets and shortcodes. 

** Flickr Shortcode **
This shortcode displays photos from your flickr profile. All you need is to find your 
flickr userid by going to [idgetter](http://idgettr.com/). You will find userid in a format like 
120832144@N07. Note that this plugin is under development and we'll be adding more features.

Sample Usage:

`[bz_flickrphotos max_photos='12' flickr_userid='120832144@N07' photo_size='s' before_photos='<div class="flickrgallery"><ul>' after_photos='</ul></div>' before_photo='<li>' after_photo='</li>' show_link='true' photo_class='img-responsive hovereffect']`

Params:

* max_photos - number of maximum photos to display
* flickr_userid - your flickr userid
* photo_size - photo size you want to display from flickr
* before_photos - wrap all photos in a wrapper like `<div class="flickrgallery">`
* after_photos - close wrapper like `<div class="clearfix"></div></div>`
* before_photo - add an html element before photo like `<li>`
* after_photo - add an html element after photo like `</li>`
* photo_class - add a class to `<img>` tags
* show_link - show flickr photos link
* link_class - add a class to `<a>` tag

** Map Widget **
Drag Map widget to your sidebar and place information accordingly.

== Installation ==

This section describes how to install the plugin and get it working.

1. Download plugin, extract it and upload to wordpress plugin directory. Or install it from your wp-admin.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use shortcode where you want to display flickr photos.

== Frequently Asked Questions ==

= What photo sizes are available for Flickr Shortcode? =
* s	small square 75x75
* q	large square 150x150
* t	thumbnail, 100 on longest side
* m	small, 240 on longest side
* n	small, 320 on longest side
* `-`	medium, 500 on longest side
* z	medium 640, 640 on longest side
* c	medium 800, 800 on longest side†
* b	large, 1024 on longest side*
* o	original image, either a jpg, gif or png, depending on source format

Read more on [Flickr](https://www.flickr.com/services/api/misc.urls.html)

= Can I use shortcodes in widget? =

Yes, just place the shortcode where you want.


== Changelog ==

= 0.1 =
* Plugin Created

