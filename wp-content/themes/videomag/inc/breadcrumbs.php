<?php

/**
 * Breadcrumbs
 */
if (!function_exists('vm_breadcrumbs')) :

    function vm_breadcrumbs() {

        // show breadcrumbs on home page 1or 0
        $show_on_home = 0;
        // delimiter between crumbs
        $delimiter = '';
        // text to show for home link
        $home = 'Home';
        // show active post/page title in breadcrumbs 1 or 0
        $show_current = 1;
        // wrap bread crumbs in a container
        $before_crumbs = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><ol class="breadcrumb">';
        $after_crumbs = '</ol></div>';
        // wrap crumb items
        $before_item = '<li class="active">';
        $after_item = '</li>';
        // wrap current item
        $before_current_item = '<li class="active">';
        $after_current_item = '</li>';

        global $post;
        // site homepage url
        $home_link = get_site_url();
        // output breadcrumbs html
        $breadcrumbs_html = $before_crumbs;

        if (is_home() || is_front_page()) {

            if ($show_on_home == 1) {
                $breadcrumbs_html .= $before_current_item . $home . $after_current_item;
            } else {
                return NULL;
            }
        } else {

            $breadcrumbs_html .= $before_item . '<a href="' . $home_link . '">' . $home . '</a> ' . $delimiter . ' ' . $after_item;

            if (is_category() || is_tax()) {

                if (is_category()) {
                    $this_cat = get_category(get_query_var('cat'), false);

                    if ($this_cat->parent != 0) {
                        $breadcrumbs_html .= get_category_parents($this_cat->parent, TRUE, ' ' . $delimiter . ' ');
                    }
                }

                $breadcrumbs_html .= $before_current_item . 'Archive by category "' . single_cat_title('', false) . '"' . $after_current_item;
            } elseif (is_search()) {

                $breadcrumbs_html .= $before_current_item . 'Search results for "' . get_search_query() . '"' . $after_current_item;
            } elseif (is_day()) {

                $breadcrumbs_html .= $before_item . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ' . $after_item;
                $breadcrumbs_html .= $before_item . '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ' . $after_item;
                $breadcrumbs_html .= $before_current_item . get_the_time('d') . $after_current_item;
            } elseif (is_month()) {

                $breadcrumbs_html .= $before_item . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ' . $after_item;
                $breadcrumbs_html .= $before_current_item . get_the_time('F') . $after_current_item;
            } elseif (is_year()) {

                $breadcrumbs_html .= $before_current_item . get_the_time('Y') . $after_current_item;
            } elseif (is_single() && !is_attachment()) {

                if (get_post_type() != 'post') {

                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;
                    $breadcrumbs_html .= $before_item . '<a href="' . $home_link . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $after_item;
                    if ($show_current == 1) {
                        $breadcrumbs_html .= ' ' . $delimiter . ' ' . $before_current_item . get_the_title() . $after_current_item;
                    }
                } else {

                    $cat = get_the_category();
                    $cat = $cat[0];
                    $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');

                    if ($show_current == 0) {
                        $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                    }

                    $breadcrumbs_html .= $before_item . $cats . $after_item;
                    if ($show_current == 1) {
                        $breadcrumbs_html .= $before_current_item . get_the_title() . $after_current_item;
                    }
                }
            } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {

                $post_type = get_post_type_object(get_post_type());
                $breadcrumbs_html .= $before_current_item . $post_type->labels->singular_name . $after_current_item;
            } elseif (is_attachment()) {

                $parent = get_post($post->post_parent);
                $cat = get_the_category($parent->ID);
                $cat = $cat[0];
                $breadcrumbs_html .= get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                $breadcrumbs_html .= $before_item . '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>' . $after_item;

                if ($show_current == 1) {
                    echo ' ' . $delimiter . ' ' . $before_current_item . get_the_title() . $after_current_item;
                }
            } elseif (is_page() && !$post->post_parent) {

                if ($show_current == 1) {
                    $breadcrumbs_html .= $before_current_item . get_the_title() . $after_current_item;
                }
            } elseif (is_page() && $post->post_parent) {

                $parent_id = $post->post_parent;
                $breadcrumbs = array();

                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = $before_item . '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>' . $after_item;
                    $parent_id = $page->post_parent;
                }

                $breadcrumbs = array_reverse($breadcrumbs);

                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    $breadcrumbs_html .= $breadcrumbs[$i];

                    if ($i != count($breadcrumbs) - 1) {
                        $breadcrumbs_html .= ' ' . $delimiter . ' ';
                    }
                }

                if ($show_current == 1) {
                    $breadcrumbs_html .= ' ' . $delimiter . ' ' . $before_current_item . get_the_title() . $after_current_item;
                }
            } elseif (is_tag()) {

                $breadcrumbs_html .= $before_current_item . 'Posts tagged "' . single_tag_title('', false) . '"' . $after_current_item;
            } elseif (is_author()) {

                global $author;
                $userdata = get_userdata($author);
                $breadcrumbs_html .= $before_current_item . 'By ' . $userdata->display_name . $after_current_item;
            } elseif (is_404()) {

                $breadcrumbs_html .= $before_current_item . 'Error 404' . $after_current_item;
            }

            if (get_query_var('paged')) {

                if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                    $breadcrumbs_html .= $before_item . ' (';
                }

                $breadcrumbs_html .= __('Page', THEME_TEXT_DOMAIN) . ' ' . get_query_var('paged');

                if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                    $breadcrumbs_html .= ')' . $after_item;
                }
            }

            $breadcrumbs_html .= $after_crumbs;
        }

        echo $breadcrumbs_html;
    }

    
    
// end vm_breadcrumbs()

endif;