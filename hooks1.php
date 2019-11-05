<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['display-override'][] = array(

    'class'    => '',
    'function' => 'compress',
    'filename' => 'compress.php',
    'filepath' => 'hook'

);



//application/config/config.php/config['enable_hooks'] = true;
?>
