<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Layout Templating
 * 
 * @name        layout.php
 * @copyright   Copyright (c) 2012
 * @category    Library
 */
class CI_Layout
{
	var $CI;

	public function render($data = array(), $return = FALSE)
	{
		$CI =& get_instance();
		$CI->config->load('layout');
		$template = $CI->config->item('template_base');
		$CI->load->view($template, $data, $return);
	}
	
}	
?>