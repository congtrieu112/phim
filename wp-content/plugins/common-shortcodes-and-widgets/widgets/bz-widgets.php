<?php

add_action('widgets_init', 'bz_load_widgets');

function bz_load_widgets() {
    
    register_widget('BZ_Map');
}

// Creating the BZ_Map widget 
class BZ_Map extends WP_Widget {

    function __construct() {
        parent::__construct(
                'bz_map',
                __('Map (BZ)', BZ_CSW_TEXT_DOMAIN),
                array('description' => __('This widget displays a map.', BZ_CSW_TEXT_DOMAIN),
                )
        );
    }

    public function widget($args, $instance) {

        extract($args);

        $bz_map_title = $instance['bz_map_title'];
        $bz_map_latitude = $instance['bz_map_latitude'];
        $bz_map_longitude = $instance['bz_map_longitude'];
        $bz_map_zoom = $instance['bz_map_zoom'];



        echo $before_widget;

        if (!empty($bz_map_latitude) && !empty($bz_map_longitude)) :
            ?>
            <div class="sections">
                <h2 class="heading"><?php echo $bz_map_title; ?></h2>
                <div class="clearfix"></div>
                <div class="contactus">
                    <!-- Map Section Started -->
                    <div class="mapsec">
                        <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=<?php echo $bz_map_latitude; ?>,<?php echo $bz_map_longitude; ?>&amp;spn=0.08026,0.209255&amp;t=m&amp;z=<?php echo $bz_map_zoom; ?>&amp;output=embed"></iframe>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Map Section End -->
                </div>
                <!-- Video Box End -->
            </div>
            <!-- Contents Section End -->
            <div class="clearfix"></div>

            <?php
        endif;
        echo $after_widget;
    }

    public function form($instance) {

        if ($instance) {
            $bz_map_title = esc_attr($instance['bz_map_title']);
            $bz_map_latitude = esc_attr($instance['bz_map_latitude']);
            $bz_map_longitude = esc_attr($instance['bz_map_longitude']);
            $bz_map_zoom = esc_attr($instance['bz_map_zoom']);
        } else {
            $bz_map_title = NULL;
            $bz_map_latitude = 51.496027;
            $bz_map_longitude = -0.125141;
            $bz_map_zoom = 13;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('bz_map_title'); ?>"><?php _e('Title', BZ_CSW_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('bz_map_title'); ?>" 
                   name="<?php echo $this->get_field_name('bz_map_title'); ?>" 
                   class="widefat" value="<?php echo $bz_map_title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('bz_map_latitude'); ?>"><?php _e('Latitude', BZ_CSW_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('bz_map_latitude'); ?>" 
                   name="<?php echo $this->get_field_name('bz_map_latitude'); ?>" 
                   class="widefat" value="<?php echo $bz_map_latitude; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('bz_map_longitude'); ?>"><?php _e('Longitude', BZ_CSW_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('bz_map_longitude'); ?>" 
                   name="<?php echo $this->get_field_name('bz_map_longitude'); ?>" 
                   class="widefat" value="<?php echo $bz_map_longitude; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('bz_map_zoom'); ?>"><?php _e('Zoom', BZ_CSW_TEXT_DOMAIN); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('bz_map_zoom'); ?>" 
                   name="<?php echo $this->get_field_name('bz_map_zoom'); ?>" 
                   class="widefat" value="<?php echo $bz_map_zoom; ?>" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['bz_map_title'] = strip_tags($new_instance['bz_map_title']);
        $instance['bz_map_latitude'] = strip_tags($new_instance['bz_map_latitude']);
        $instance['bz_map_longitude'] = strip_tags($new_instance['bz_map_longitude']);
        $instance['bz_map_zoom'] = strip_tags($new_instance['bz_map_zoom']);
        return $instance;
    }

}
// end of BZ_Map