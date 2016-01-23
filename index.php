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

foreach($main_files as $directory=>$file)
{
    check_file($directory=>$file);
}
?>
