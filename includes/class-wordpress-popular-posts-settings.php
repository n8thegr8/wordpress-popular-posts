<?php

/**
 * Set / get plugin default options.
 *
 * @link       http://cabrerahector.com
 * @since      4.0.0
 *
 * @package    WordPressPopularPosts
 * @subpackage WordPressPopularPosts/includes
 */

/**
 * Set / get plugin default options.
 *
 * @package    WordPressPopularPosts
 * @subpackage WordPressPopularPosts/includes
 * @author     Hector Cabrera <me@cabrerahector.com>
 */

class WPP_Settings {

    /**
     * Plugin uploads directory.
     *
     * @since   3.0.4
     * @var     array
     */
    static public $defaults = array(
        'widget_options' => array(
            'title' => '',
            'limit' => 10,
            'range' => 'daily',
            'freshness' => false,
            'order_by' => 'views',
            'post_type' => 'post,page',
            'pid' => '',
            'author' => '',
            'cat' => '',
            'taxonomy' => 'category',
            'term_id' => '',
            'shorten_title' => array(
                'active' => false,
                'length' => 25,
                'words'	=> false
            ),
            'post-excerpt' => array(
                'active' => false,
                'length' => 55,
                'keep_format' => false,
                'words' => false
            ),
            'thumbnail' => array(
                'active' => false,
                'build' => 'manual',
                'width' => 75,
                'height' => 75,
                'crop' => true
            ),
            'rating' => false,
            'stats_tag' => array(
                'comment_count' => false,
                'views' => true,
                'author' => false,
                'date' => array(
                    'active' => false,
                    'format' => 'F j, Y'
                ),
                'category' => false,
                'taxonomy' => false
            ),
            'markup' => array(
                'custom_html' => false,
                'title-start' => '<h2>',
                'title-end' => '</h2>',
                'wpp-start' => '<ul class="wpp-list">',
                'wpp-end' => '</ul>',
                'post-html' => '<li>{thumb} {title} <span class="wpp-meta post-stats">{stats}</span></li>'
                
            )
        ),
        'admin_options' => array(
            'stats' => array(
                'order_by' => 'views',
                'limit' => 10,
                'post_type' => 'post,page',
                'freshness' => false
            ),
            'tools' => array(
                'ajax' => false,
                'css' => true,
                'link' => array(
                    'target' => '_self'
                ),
                'thumbnail' => array(
                    'source' => 'featured',
                    'field' => '',
                    'resize' => false,
                    'default' => '',
                    'responsive' => false
                ),
                'log' => array(
                    'level' => 1,
                    'limit' => 0,
                    'expires_after' => 180
                ),
                'cache' => array(
                    'active' => false,
                    'interval' => array(
                        'time' => 'hour',
                        'value' => 1
                    )
                ),
                'sampling' => array(
                    'active' => false,
                    'rate' => 100
                )
            )
        )
    );

} // End WPP_Settings class
