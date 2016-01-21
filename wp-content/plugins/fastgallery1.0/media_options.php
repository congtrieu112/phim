<?php
/*
File: inc/assets.php
Description: MEDIA OPTIONS
Plugin: FAST GALLERY
Author: Ad-theme.com
*/
add_action('print_media_templates', function(){
  // define your backbone template;
  // the "tmpl-" prefix is required,
  // and your input field should have a data-setting attribute
  // matching the shortcode name
  ?>
  <script type="text/html" id="tmpl-fast_gallery_type">
    <label class="fg-field">
      <span><?php _e('Type Gallery','fastgallery'); ?></span>
      <select data-setting="fg_type">
        <option value="prettyphoto"><?php _e('Prettyphoto','fastgallery'); ?></option>
        <option value="photobox"><?php _e('Photobox','fastgallery'); ?></option>        
        <option value="magnific-popup"><?php _e('Magnific Popup','fastgallery'); ?></option>        
      </select>
    </label>
    <label class="fg-field">
      <span><?php _e('Masonry / Grid','fastgallery'); ?></span>
      <select data-setting="size">
	    <option value="fg-normal"><?php _e('Grid','fastgallery'); ?></option>  
        <option value="fg-masonry"><?php _e('Masonry','fastgallery'); ?></option>              
      </select>
    </label>
    <label class="fg-field">
      <span><?php _e('Responsive / Fluid','fastgallery'); ?></span>
      <select data-setting="fg_responsive">
        <option value="fg_responsive"><?php _e('Responsive','fastgallery'); ?></option>
        <option value="fg_fluid"><?php _e('Fluid','fastgallery'); ?></option>        
      </select>
    </label>
    <label class="fg-field">
      <span><?php _e('Style','fastgallery'); ?></span>
      <select data-setting="fg_style">
        <option value="fg_style1"><?php _e('Style 1','fastgallery'); ?></option>
        <option value="fg_style2"><?php _e('Style 2','fastgallery'); ?></option>        
        <option value="fg_style3"><?php _e('Style 3','fastgallery'); ?></option>
        <option value="fg_style4"><?php _e('Style 4','fastgallery'); ?></option>
        <option value="fg_style5"><?php _e('Style 5','fastgallery'); ?></option>
        <option value="fg_style6"><?php _e('Style 6','fastgallery'); ?></option>
        <option value="fg_style7"><?php _e('Style 7','fastgallery'); ?></option>
        <option value="fg_style8"><?php _e('Style 8','fastgallery'); ?></option>
        <option value="fg_style9"><?php _e('Style 9','fastgallery'); ?></option>
        <option value="fg_style10"><?php _e('Style 10','fastgallery'); ?></option>								
      </select>
    </label>	
	<h3><?php _e('Custom Color','fastgallery'); ?></h3>
    <p><?php _e('Leave empty for default value','fastgallery'); ?></p>
	<label class="fg-field">
		<span><?php _e('Main Color (ex #EEEEEE)','fastgallery'); ?></span>	
		<input data-setting="fg_main_color" type="text" id="fg_main_color" > 
    </label>
	<label class="fg-field">
		<span><?php _e('Main Color Opacity (0.1 to 1)','fastgallery'); ?></span>	
		<input data-setting="fg_main_color_opacity" type="text" id="fg_main_color_opacity" > 
    </label>
	<label class="fg-field">
		<span><?php _e('Secondary Color (ex #EEEEEE)','fastgallery'); ?></span>	
		<input data-setting="fg_secondary_color" type="text" id="fg_secondary_color" > 
    </label>		
  </script>
  <script>
    jQuery(document).ready(function(){
      // add your shortcode attribute and its default value to the
      // gallery settings list; $.extend should work as well...
      _.extend(wp.media.gallery.defaults, {
        fg_type: 'prettyphoto',
		size: 'fg-normal',
		fg_reponsive: 'fg_responsive',
		fg_style: 'fg_style1',
		fg_main_color: '',
		fg_main_color_opacity: '',
		fg_secondary_color: ''
      });
      // merge default gallery settings template with yours
      wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
        template: function(view){
          return wp.media.template('gallery-settings')(view)
               + wp.media.template('fast_gallery_type')(view);
        }
      });
    });
  </script>  
  <?php
});