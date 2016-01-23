<?php
/**
  ReduxFramework Sample Config File
  For full documentation, please visit: https://docs.reduxframework.com
 * */
if (!class_exists('Vm_Redux_Framework_Config')) {

    class Vm_Redux_Framework_Config {

        public $args = array();
        public $sections = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  ;)
            if (true == Redux_Helpers::isTheme(__FILE__)) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }
        }

        public function initSettings() {

            // Just for demo purposes. Not needed per say.
            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            // If Redux is running as a plugin, this will remove the demo notice and links
            //add_action( 'redux/loaded', array( $this, 'remove_demo' ) );
            // Function to test the compiler hook and demo CSS output.
            // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
            add_filter('redux/options/' . $this->args['opt_name'] . '/compiler', array($this, 'compiler_action'), 10, 3);
            // Change the arguments after they've been declared, but before the panel is created
            //add_filter('redux/options/'.$this->args['opt_name'].'/args', array( $this, 'change_arguments' ) );
            // Change the default value of a field after it's been set, but before it's been useds
            //add_filter('redux/options/'.$this->args['opt_name'].'/defaults', array( $this,'change_defaults' ) );
            // Dynamically add a section. Can be also used to modify sections/fields
            //add_filter('redux/options/' . $this->args['opt_name'] . '/sections', array($this, 'dynamic_section'));

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        /**

          This is a test function that will let you see when the compiler hook occurs.
          It only runs if a field	set with compiler=>true is changed.

         * */
        function compiler_action($options, $css, $changed_values) {
            global $wp_filesystem;

            $filename = THEME_CSS . '/redux.css';

            if (empty($wp_filesystem)) {
                require_once( ABSPATH . '/wp-admin/includes/file.php' );
                WP_Filesystem();
            }

            if ($wp_filesystem) {
                $wp_filesystem->put_contents(
                        $filename, $css, FS_CHMOD_FILE // predefined mode settings for WP files
                );
            }
        }

        /**

          Custom function for filtering the sections array. Good for child themes to override or add to the sections.
          Simply include this function in the child themes functions.php file.

          NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
          so you must use get_template_directory_uri() if you want to use any of the built in icons

         * */
        function dynamic_section($sections) {
            //$sections = array();
            $sections[] = array(
                'title' => __('Section via hook', THEME_TEXT_DOMAIN),
                'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }

        /**

          Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.

         * */
        function change_arguments($args) {
            //$args['dev_mode'] = true;

            return $args;
        }

        /**

          Filter hook for filtering the default value of any given field. Very useful in development mode.

         * */
        function change_defaults($defaults) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }

        // Remove the demo link and the notice of integrated demo from the redux-framework plugin
        function remove_demo() {

            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if (class_exists('ReduxFrameworkPlugin')) {
                remove_filter('plugin_row_meta', array(ReduxFrameworkPlugin::instance(), 'plugin_metalinks'), null, 2);

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
            }
        }

        public function setSections() {

            /**
              Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
             * */
            // Background Patterns Reader
            $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
            $sample_patterns_url = ReduxFramework::$_url . '../sample/patterns/';
            $sample_patterns = array();

            if (is_dir($sample_patterns_path)) :

                if ($sample_patterns_dir = opendir($sample_patterns_path)) :
                    $sample_patterns = array();

                    while (( $sample_patterns_file = readdir($sample_patterns_dir) ) !== false) {

                        if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                            $name = explode('.', $sample_patterns_file);
                            $name = str_replace('.' . end($name), '', $sample_patterns_file);
                            $sample_patterns[] = array('alt' => $name, 'img' => $sample_patterns_url . $sample_patterns_file);
                        }
                    }
                endif;
            endif;

            ob_start();

            $ct = wp_get_theme();
            $this->theme = $ct;
            $item_name = $this->theme->get('Name');
            $tags = $this->theme->Tags;
            $screenshot = $this->theme->get_screenshot();
            $class = $screenshot ? 'has-screenshot' : '';

            $customize_title = sprintf(__('Customize &#8220;%s&#8221;', THEME_TEXT_DOMAIN), $this->theme->display('Name'));
            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
                <?php if ($screenshot) : ?>
                    <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview'); ?>" />
                        </a>
                    <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview'); ?>" />
                <?php endif; ?>

                <h4><?php echo $this->theme->display('Name'); ?></h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(__('By %s', THEME_TEXT_DOMAIN), $this->theme->display('Author')); ?></li>
                        <li><?php printf(__('Version %s', THEME_TEXT_DOMAIN), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . __('Tags', THEME_TEXT_DOMAIN) . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo $this->theme->display('Description'); ?></p>
                    <?php
                    if ($this->theme->parent()) {
                        printf(' <p class="howto">' . __('This <a href="%1$s">child theme</a> requires its parent theme, %2$s.') . '</p>', __('http://codex.wordpress.org/Child_Themes', THEME_TEXT_DOMAIN), $this->theme->parent()->display('Name'));
                    }
                    ?>

                </div>
            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();

            $sampleHTML = '';
            if (file_exists(dirname(__FILE__) . '/info-html.html')) {
                /** @global WP_Filesystem_Direct $wp_filesystem  */
                global $wp_filesystem;
                if (empty($wp_filesystem)) {
                    require_once(ABSPATH . '/wp-admin/includes/file.php');
                    WP_Filesystem();
                }
                $sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__) . '/info-html.html');
            }

            // ACTUAL DECLARATION OF SECTIONS
            // Youtube
            $this->sections[] = array(
                'title' => __('Youtube Settings', THEME_TEXT_DOMAIN),
                'desc' => __('Adjust youtube settings.', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-youtube',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields' => array(
                    array(
                        'id' => 'vm-youtube-api-key',
                        'type' => 'text',
                        'title' => __('Youtube API Key', THEME_TEXT_DOMAIN, THEME_TEXT_DOMAIN),
                        'desc' => __('Create an <a href="https://console.developers.google.com">API key</a> and save here. You also need to enable Youtube API in your console panel.', THEME_TEXT_DOMAIN),
                    ),
                ),
            );


            $this->sections[] = array(
                'title' => __('Logo and Favicon', THEME_TEXT_DOMAIN),
                'desc' => __('Adjust website logo and favicon settings.', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-picture',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields' => array(
                    array(
                        'id' => 'vm-media-logo',
                        'type' => 'media',
                        'title' => __('Logo', THEME_TEXT_DOMAIN, THEME_TEXT_DOMAIN),
                        'desc' => __('Upload logo of your website here', THEME_TEXT_DOMAIN),
                    ),
                    array(
                        'id' => 'vm-media-favicon',
                        'type' => 'media',
                        'title' => __('Favicon', THEME_TEXT_DOMAIN, THEME_TEXT_DOMAIN),
                        'desc' => __('Upload favicon of your website here', THEME_TEXT_DOMAIN),
                    ),
                ),
            );

            $this->sections[] = array(
                'title' => __('Colors and Styles', THEME_TEXT_DOMAIN),
                'desc' => __('Adjust colors and styling options.', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-brush',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields' => array(
                    array(
                        'id' => 'vm-colors-background',
                        'type' => 'background',
                        'background-repeat' => false,
                        'background-attachment' => false,
                        'background-position' => false,
                        'background-image' => false,
                        'background-size' => false,
                        'title' => __('Color Scheme', THEME_TEXT_DOMAIN),
                        'desc' => __('Choose color for your theme.', THEME_TEXT_DOMAIN),
                        'default' => array(
                            'background-color' => '#d10909'
                        ),
                        'output' => array(
                            '.backcolor',
                            '.backcolorhover:hover',
                            '.widget[class*="tag_cloud"] .tagcloud a',
                            '.nav-tabs > li.active > a',
                            '.nav-tabs > li > a:hover',
                            '.nav-tabs > li.active > a:focus',
                            '.pagination > .active > a',
                            '.pagination > .active > span',
                            '.pagination > .active > a:hover',
                            '.pagination > .active > span:hover',
                            '.pagination > .active > a:focus',
                            '.pagination > .active > span:focus',
                            '.conentsection button',
                            '.conentsection html input[type="button"]',
                            '.conentsection input[type="reset"]',
                            '.conentsection input[type="submit"]',
                            '.blacksidebar button',
                            '.blacksidebar html input[type="button"]',
                            '.blacksidebar input[type="reset"]',
                            '.blacksidebar input[type="submit"]',
                            '.graysidebar button',
                            '.graysidebar html input[type="button"]',
                            '.graysidebar input[type="reset"]',
                            '.graysidebar input[type="submit"]',
                            '.widget[class*="calendar"] caption',
                            '.blacksidebar .widget_categories ul li:hover',
                            '.blacksidebar .widget_archives ul li:hover',
                            '.blacksidebar .widget_pages ul li:hover',
                            '.blacksidebar .widget_meta ul li:hover',
                            '.blacksidebar .widget_nav_menu ul li:hover',
                            '.blacksidebar .widget_recent_comments ul li:hover',
                            '.graysidebar .widget_categories ul li:hover',
                            '.graysidebar .widget_archives ul li:hover',
                            '.graysidebar .widget_pages ul li:hover',
                            '.graysidebar .widget_meta ul li:hover',
                            '.graysidebar .widget_nav_menu ul li:hover',
                            '.graysidebar .widget_recent_comments ul li:hover',
                            '.navigationstrip:before',
                        ),
                    ),
                    array(
                        'id' => 'vm-colors-headings',
                        'type' => 'color',
                        'output' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
                        'title' => __('Headings Color', THEME_TEXT_DOMAIN),
                        'desc' => __('Choose color for headings in your theme', THEME_TEXT_DOMAIN),
                    ),
                ),
            );

            $this->sections[] = array(
                'title' => __('Fonts', THEME_TEXT_DOMAIN),
                'desc' => __('Adjust colors and styling options.', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-font',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields' => array(
                    array(
                        'id' => 'vm-fonts-body',
                        'type' => 'typography',
                        'title' => __('Body Font', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Specify the body font properties.', THEME_TEXT_DOMAIN),
                        'google' => true,
                        'output' => array('body', 'p'),
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'font-family' => '',
                            'font-weight' => '',
                        ),
                    ),
                    array(
                        'id' => 'vm-fonts-h1',
                        'type' => 'typography',
                        'title' => __('H1 Font', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Specify the H1 font properties.', THEME_TEXT_DOMAIN),
                        'google' => true,
                        'output' => array('h1'),
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'font-family' => '',
                            'font-weight' => '',
                        ),
                    ),
                    array(
                        'id' => 'vm-fonts-h2',
                        'type' => 'typography',
                        'title' => __('H2 Font', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Specify the H2 font properties.', THEME_TEXT_DOMAIN),
                        'output' => array('h2'),
                        'google' => true,
                        'output' => array('h2'),
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'font-family' => '',
                            'font-weight' => '',
                        ),
                    ),
                    array(
                        'id' => 'vm-fonts-h3',
                        'type' => 'typography',
                        'title' => __('H3 Font', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Specify the H3 font properties.', THEME_TEXT_DOMAIN),
                        'google' => true,
                        'output' => array('h3'),
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'font-family' => '',
                            'font-weight' => '',
                        ),
                    ),
                    array(
                        'id' => 'vm-fonts-h4',
                        'type' => 'typography',
                        'title' => __('H4 Font', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Specify the H4 font properties.', THEME_TEXT_DOMAIN),
                        'google' => true,
                        'output' => array('h4'),
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'font-family' => '',
                            'font-weight' => '',
                        ),
                    ),
                    array(
                        'id' => 'vm-fonts-h5',
                        'type' => 'typography',
                        'title' => __('H5 Font', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Specify the H5 font properties.', THEME_TEXT_DOMAIN),
                        'google' => true,
                        'output' => array('h5'),
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'font-family' => '',
                            'font-weight' => '',
                        ),
                    ),
                    array(
                        'id' => 'vm-fonts-h6',
                        'type' => 'typography',
                        'title' => __('H6 Font', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Specify the H6 font properties.', THEME_TEXT_DOMAIN),
                        'google' => true,
                        'output' => array('h6'),
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'font-family' => '',
                            'font-weight' => '',
                        ),
                    ),
                ),
            );

            $this->sections[] = array(
                'title' => __('Background', THEME_TEXT_DOMAIN),
                'desc' => __('Adjust background properties.', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-picture',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields' => array(
                    array(
                        'id' => 'vm-background-body',
                        'type' => 'background',
                        'output' => array('body'),
                        'title' => __('Body Background', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Body background with image, color, etc.', THEME_TEXT_DOMAIN),
                    //'default'   => '#FFFFFF',
                    ),
                ),
            );

            $this->sections[] = array(
                'icon' => 'el-icon-website',
                'title' => __('Header Settings', THEME_TEXT_DOMAIN),
                'fields' => array(
                    array(
                        'id' => 'vm-header-social',
                        'type' => 'switch',
                        'title' => __('Social Icons', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Choose display of social icons in header.', THEME_TEXT_DOMAIN),
                        'default' => true,
                    ),
                    array(
                        'id' => 'vm-ads-header',
                        'type' => 'editor',
                        'title' => __('Advertisement', THEME_TEXT_DOMAIN),
                        'subtitle' => __('You can use the following shortcodes in text area: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', THEME_TEXT_DOMAIN),
                        'default' => "",
                    ),
                    array(
                        'id' => 'vm-header-tracking-code',
                        'type' => 'textarea',
                        'required' => array('layout', 'equals', '1'),
                        'title' => __('Tracking Code', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', THEME_TEXT_DOMAIN),
                        'validate' => 'js',
                        'desc' => 'Validate that it\'s javascript!',
                    ),
                    array(
                        'id' => 'vm-header-css',
                        'type' => 'ace_editor',
                        'title' => __('CSS Code', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Paste your CSS code here.', THEME_TEXT_DOMAIN),
                        'mode' => 'css',
                        'theme' => 'monokai',
                        'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default' => "#header{\nmargin: 0 auto;\n}"
                    ),
                    array(
                        'id' => 'vm-header-js',
                        'type' => 'ace_editor',
                        'title' => __('JS Code', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Paste your JS code here.', THEME_TEXT_DOMAIN),
                        'mode' => 'javascript',
                        'theme' => 'chrome',
                        'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default' => "jQuery(document).ready(function(){\n\n});"
                    ),
                )
            );

            $this->sections[] = array(
                'icon' => 'el-icon-website',
                'title' => __('Footer Settings', THEME_TEXT_DOMAIN),
                'fields' => array(
                    array(
                        'id' => 'vm-footer-social',
                        'type' => 'switch',
                        'title' => __('Social Icons', THEME_TEXT_DOMAIN),
                        'subtitle' => __('Choose display of social icons in footer.', THEME_TEXT_DOMAIN),
                        'default' => true,
                    ),
                    array(
                        'id' => 'vm-footer-text',
                        'type' => 'editor',
                        'title' => __('Footer Text', THEME_TEXT_DOMAIN),
                        'subtitle' => __('You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', THEME_TEXT_DOMAIN),
                        'default' => "&copy; [current-year] All rights reserved. [site-url]",
                    ),
                ),
            );

            $this->sections[] = array(
                'icon' => 'el-icon-indent-right',
                'title' => __('RTL', THEME_TEXT_DOMAIN),
                'fields' => array(
                    array(
                        'id' => 'vm-rtl-option',
                        'type' => 'switch',
                        'title' => __('RTL', THEME_TEXT_DOMAIN),
                        'subtitle' => __('RTL support.', THEME_TEXT_DOMAIN),
                        'default' => false,
                    ),
                ),
            );

            $this->sections[] = array(
                'icon' => 'el-icon-globe',
                'title' => __('Social Icons', THEME_TEXT_DOMAIN),
                'desc' => __('<p class="description">Manage social profiles.</p>', THEME_TEXT_DOMAIN),
                'fields' => array(
                    array(
                        'id' => 'opt-social-facebook',
                        'type' => 'text',
                        'title' => __('Facebook', THEME_TEXT_DOMAIN),
                    ),
                    array(
                        'id' => 'opt-social-youtube',
                        'type' => 'text',
                        'title' => __('Youtube', THEME_TEXT_DOMAIN),
                    ),
                    array(
                        'id' => 'opt-social-twitter',
                        'type' => 'text',
                        'title' => __('Twitter', THEME_TEXT_DOMAIN),
                    ),
                    array(
                        'id' => 'opt-social-vimeo',
                        'type' => 'text',
                        'title' => __('Vimeo', THEME_TEXT_DOMAIN),
                    ),
                    array(
                        'id' => 'opt-social-pinterest',
                        'type' => 'text',
                        'title' => __('Pinterest', THEME_TEXT_DOMAIN),
                    ),
                ),
            );

            $this->sections[] = array(
                'title' => __('Import / Export', THEME_TEXT_DOMAIN),
                'desc' => __('Import and Export your Redux Framework settings from file, text or URL.', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-refresh',
                'fields' => array(
                    array(
                        'id' => 'opt-import-export',
                        'type' => 'import_export',
                        'title' => 'Import Export',
                        'subtitle' => 'Save and restore your Redux options',
                        'full_width' => false,
                    ),
                ),
            );
            $this->sections[] = array(
                'title' => __('Paging & character', THEME_TEXT_DOMAIN),
                'desc' => __('Custom number paging (number recore inpage )', THEME_TEXT_DOMAIN),
                'icon' => 'el-icon-refresh',
                'fields' => array(
                    array(
                        'id' => 'opt-limit-home',
                        'type' => 'text',
                        'title' => __('Home 28|40', THEME_TEXT_DOMAIN),
                        'default' => '28|40',
                    ),
                    array(
                        'id' => 'opt-limit-custom-query',
                        'type' => 'text',
                        'title' => __('Contry & Actress 28|40', THEME_TEXT_DOMAIN),
                        'default' => '28|40',
                    ),
                    array(
                        'id' => 'opt-limit-search',
                        'type' => 'text',
                        'title' => __('Search 28|40', THEME_TEXT_DOMAIN),
                        'default' => '28|40',
                    ),
                    array(
                        'id' => 'opt-limit-category',
                        'type' => 'text',
                        'title' => __('Category 28|40', THEME_TEXT_DOMAIN),
                        'default' => '28|40',
                    ),
                    array(
                        'id' => 'opt-limit-tag',
                        'type' => 'text',
                        'title' => __('Tag 28|40', THEME_TEXT_DOMAIN),
                        'default' => '28|40',
                    ),
                    array(
                        'id' => 'opt-limit-related-video',
                        'type' => 'text',
                        'title' => __('Related video 28|40', THEME_TEXT_DOMAIN),
                        'default' => '28|40',
                    ),
                ),
            );
        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id' => 'redux-help-tab-1',
                'title' => __('Theme Information 1', THEME_TEXT_DOMAIN),
                'content' => __('<p>This is the tab content, HTML is allowed.</p>', THEME_TEXT_DOMAIN)
            );

            $this->args['help_tabs'][] = array(
                'id' => 'redux-help-tab-2',
                'title' => __('Theme Information 2', THEME_TEXT_DOMAIN),
                'content' => __('<p>This is the tab content, HTML is allowed.</p>', THEME_TEXT_DOMAIN)
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', THEME_TEXT_DOMAIN);
        }

        /**

          All the possible arguments for Redux.
          For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

         * */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name' => 'vm_options', // This is where your data is stored in the database and also becomes your global variable name.
                'display_name' => $theme->get('Name'), // Name that appears at the top of your panel
                'display_version' => $theme->get('Version'), // Version that appears at the top of your panel
                'menu_type' => 'submenu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu' => true, // Show the sections below the admin menu item or not
                'menu_title' => __('Theme Options', THEME_TEXT_DOMAIN),
                'page_title' => __('Video Magazine Theme Options', THEME_TEXT_DOMAIN),
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => 'AIzaSyB0TasYAAUqaBeffkFQXkajhwAfZiVaiQA', // Must be defined to add google fonts to the typography module
                'async_typography' => false, // Use a asynchronous font on the front end or font string
                'admin_bar' => true, // Show the panel pages on the admin bar
                'global_variable' => '', // Set a different name for your global variable other than the opt_name
                'dev_mode' => false, // Show the time the page took to load, etc
                'customizer' => true, // Enable basic customizer support
                //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
                // OPTIONAL -> Give you extra features
                'page_priority' => null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent' => 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions' => 'manage_options', // Permissions needed to access the options panel.
                'menu_icon' => '', // Specify a custom URL to an icon
                'last_tab' => '', // Force your panel to always open to a specific tab (by id)
                'page_icon' => 'icon-themes', // Icon displayed in the admin panel next to your menu_title
                'page_slug' => 'vm_options', // Page slug used to denote the panel
                'save_defaults' => true, // On load save the defaults to DB before user clicks save or not
                'default_show' => false, // If true, shows the default value next to each field that is not the default value.
                'default_mark' => '', // What to print by the field's title if the value shown is default. Suggested: *
                'show_import_export' => true, // Shows the Import/Export panel when not used as a field.
                // CAREFUL -> These options are for advanced use only
                'transient_time' => 60 * MINUTE_IN_SECONDS,
                'output' => true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag' => true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database' => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'system_info' => false, // REMOVE
                // HINTS
                'hints' => array(
                    'icon' => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color' => 'lightgray',
                    'icon_size' => 'normal',
                    'tip_style' => array(
                        'color' => 'light',
                        'shadow' => true,
                        'rounded' => false,
                        'style' => '',
                    ),
                    'tip_position' => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect' => array(
                        'show' => array(
                            'effect' => 'slide',
                            'duration' => '500',
                            'event' => 'mouseover',
                        ),
                        'hide' => array(
                            'effect' => 'slide',
                            'duration' => '500',
                            'event' => 'click mouseleave',
                        ),
                    ),
                )
            );

            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace('-', '_', $this->args['opt_name']);
                }
                $this->args['intro_text'] = sprintf(__('<p>Customize your theme.</p>', THEME_TEXT_DOMAIN));
            } else {
                $this->args['intro_text'] = __('<p>Customize your theme.</p>', THEME_TEXT_DOMAIN);
            }

            // Add content after the form.
            $this->args['footer_text'] = __('<p>Video Magazine By <a href="http://softcircles.com" target="_blank">SoftCircles</a></p>', THEME_TEXT_DOMAIN);
        }

    }

    global $reduxConfig;
    $reduxConfig = new Vm_Redux_Framework_Config();
}

/**
  Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')):

    function redux_my_custom_field($field, $value) {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }

endif;

/**
  Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')):

    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $value = 'just testing';

        /*
          do your validation

          if(something) {
          $value = $value;
          } elseif(something else) {
          $error = true;
          $value = $existing_value;
          $field['msg'] = 'your custom error message';
          }
         */

        $return['value'] = $value;
        if ($error == true) {
            $return['error'] = $field;
        }
        return $return;
    }


















endif;
