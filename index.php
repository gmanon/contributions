<?php
/**
 ** @Author: Guillermina Gonjon
 ** @Application_name: Contributions
 ** @version: 0.1  // -Alpha
 ** @email: ggonjon@gmail.com
 ** @file_name: index.php // Main interface
 ** @license: GPL
**/

require_once '../initializer.inc.php';
$main_files = array(
                    CONFIG_DIRECTORY=>'configDB.class.php',
                    STYLE_DIRECTORY=>'style.css',
                    TEMPLATES_DIRECTORY=>'GManonTemplate.class.php',
                    TEMPLATES_DIRECTORY=>'template.inc.php'
                    );
foreach($main_files as $directory=>$file)
{
    check_file($directory=>$file);
}
?>
