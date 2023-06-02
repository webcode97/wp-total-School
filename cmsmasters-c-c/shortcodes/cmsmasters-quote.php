<?php
/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version 	1.0.7
 * 
 * Content Composer Single Quote Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


if ($content == null || $content == "<br />\n") {
	$this->quotes_atts['quote_content'] = __('Enter quote text here', 'total-school');
} else {
	$this->quotes_atts['quote_content'] = $content;
}

$this->quotes_atts['quote_image'] = 	$image;
$this->quotes_atts['quote_name'] = 		$name;
$this->quotes_atts['quote_subtitle'] = 	$subtitle;
$this->quotes_atts['quote_link'] = 		$link;
$this->quotes_atts['quote_website'] = 	$website;
$this->quotes_atts['quote_color'] = 	$color;


$quote_out = '';


if ($this->quotes_atts['quote_mode'] == 'grid' && ($this->quotes_atts['quote_counter'] == $this->quotes_atts['column_count'])) {
	$quote_out .= '<span class="cl"></span></div><div class="cmsmasters_quotes_list">';
	
	$this->quotes_atts['quote_counter'] = 0;
}

$this->quotes_atts['quote_counter']++;


$quote_out .= '<div class="cmsmasters_quote' . 
	(($classes != '') ? ' ' . $classes : '') . 
'">' . "\n" . 

	cmsmasters_composer_ob_load_template('framework/post-type/quote/' . $this->quotes_atts['quote_mode'] . '.php', $this->quotes_atts) . 
	
'</div>' . "\n";


echo total_school_return_content($quote_out);

