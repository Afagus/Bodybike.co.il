<?php
namespace it_hive\core\Blocks\selectPosts;
use \it_hive\THEME;

class Block extends \it_hive\core\Blocks\DataBlock {

	const defaults = array(
		'post_type' => array(),
		'taxonomy' => array(),
		'query' => array(),
		'myChildren' => false
	);

	const exclude = parent::exclude + self::defaults;

	protected static $adminScripts = array(
		'select-post' => 'main.js'
	);

	protected static $adminStyles = [
		'select-post' => 'main.css'
	];

	public function __construct($params)
	{
		$this->params = array_merge(self::defaults, $params);
		parent::__construct($this->params);
	}

	public function render()
	{
		$post_type = $this->params['post_type'] ? $this->params['post_type'] : array('post');
		$taxonomy = $this->params['taxonomy'];
		if ($taxonomy) {
			//TODO: тут чтото через жопу
			$args = array(
				'post_type' => $post_type,
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'DESC',
				'post_status' => 'publish',
				'tax_query' => array(
					array(
						'taxonomy' => $taxonomy[0],
						'field' => 'term_id',
						'terms' => $taxonomy[1]
					)
				)
			);
		} else {
			$args = array(
				'post_type' => $post_type,
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'DESC',
				'post_status' => 'publish' 
			);
			$args = array_merge($args, $this->params['query']);
			if ($this->params['myChildren']) {
				if ($_GET['taxonomy']) {
					$tax_query = $args['tax_query'] ? $args['tax_query'] : [];
					$tax_query[] = [
						'taxonomy' => $_GET['taxonomy'],
						'field' => 'term_id',
						'terms' => $this->params['sourceObject']
					];
					$args['tax_query'] = $tax_query;
				}
			}
		}
		if($this->skin == 'ajax'){
			$args['posts_per_page'] = 10;
			$post = $this->get() ? get_post($this->get()) : null;
			$this->params['title'] = $post ? $post->post_title : '';
			$this->params['data-query'] = htmlspecialchars(json_encode($args));
		}
		else{
			$wp_posts = \it_hive\core\source\WPQueries::wpQuery($args);
			$options = array();
			if ($wp_posts) {
				$options[0] = '<option value="">' . __( 'Please select a Post', THEME::$textdomain ) . '</option>';
				foreach ($wp_posts as $p) {
					$selected = '';
					if ($this->get() == $p->ID) {
						$selected = 'selected="selected"';
					}
					$options[] = '<option value="' . $p->ID . '" ' . $selected . '>' . $p->post_title . '</option>';
				}
			}
			$this->params['options'] = implode('',$options );
			$this->params['label'] = $this->params['label'] ? '<h4>' . $this->params['label'] . '</h4>' : '';
		}

		$html = parent::render();
		return $html;
	}
	public function getHeading() {
		$title = '';
		$post = get_post($this->get());
		if($post){
			$title = $post->post_title;
		}
		return $title;
	}
}