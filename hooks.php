<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function compress(){
	$CI = & get_instance();
	$buffer = $CI->output->get_output();

	$search = array(
     '/\n/',
     '/\>[^\s]+/s',
     '/[^\s]+\<s',
     '/[\s]+\<s'
	);
	$replac = array(
        ' ',
        '>',
        '<',
        '\\l'
	);
	$buffer = preg_replace($search, $replac, $buffer);
	$CI->output->set_output($buffer);
	$CI->output->display(); 

}



?>