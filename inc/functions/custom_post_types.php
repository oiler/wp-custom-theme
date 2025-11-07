<?php

class ThemePostTypes {
    
	private $post_types = [
		'note' => [
			'label' => 'Notes',
			'public' => true,
			'supports' => ['title', 'editor', 'thumbnail'],
			'has_archive' => true,
			'menu_icon' => 'dashicons-admin-post',
			'menu_position' => 6
		],
		'hockey' => [
			'label' => 'Hockey',
			'public' => true,
			'supports' => ['title', 'editor', 'thumbnail'],
			'has_archive' => true,
			'menu_icon' => 'dashicons-admin-post',
			'menu_position' => 7
		]
	];

	private $taxonomies = [
		'notebook' => [
			'post_types' => ['note'],
			'hierarchical' => false,
			'public' => true,
			'label' => 'Notebooks'
		],
		'hockey_tags' => [
			'post_types' => ['hockey'],
			'hierarchical' => false,
			'public' => true,
			'label' => 'Hockey Tags'
		]
	];
    
    public function __construct() {
        add_action('init', [$this, 'register_post_types']);
        add_action('init', [$this, 'register_taxonomies']);
    }
    
    public function register_post_types() {
        foreach($this->post_types as $slug => $config) {
            $args = wp_parse_args($config, $this->get_cpt_defaults());
            register_post_type($slug, $args);
        }
    }
    
    public function register_taxonomies() {
        foreach($this->taxonomies as $slug => $config) {
            $post_types = $config['post_types'];
            unset($config['post_types']);
            $args = wp_parse_args($config, $this->get_taxonomy_defaults());
            register_taxonomy($slug, $post_types, $args);
        }
    }
    
    private function get_cpt_defaults() {
        return [
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor'],
            'capability_type' => 'post',
            'rewrite' => true
        ];
    }
    
    private function get_taxonomy_defaults() {
        return [
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => true
        ];
    }
}

new ThemePostTypes();