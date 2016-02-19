<?php
/**
 ** @Author: Guillermina Gonjon
 ** @Application_name: Contributions
 ** @version: 0.1  // -Alpha
 ** @email: ggonjon@gmail.com
 ** @file_name: index.php // Main interface
 ** @license: GPL
**/

require_once './initializer.inc.php';
$main_files = array(
                    CONFIG_DIRECTORY=>'configDb.class.php',
                    //STYLE_DIRECTORY=>'style.css',
                    
                    );
require_once('./templates/GManonTemplate.class.php');

$style = file_get_contents('./templates/style/style.css');

$vars = array(
		'PAGE_TITLE'=>'This is my title',
		'STYLE'=>$style,
		'TOP_MENU'=>'HOME | CONTACT | WE | WHATYOULIKE',
		'USER_MENU'=>'ME | YO | WHATIAMALLOWED',
		'PAGE_SEARCH'=>'Search Form goes here',
		'MAIN_MENU'=>'Catalog | SeeThis | Continue here',
		'CONTENT_PAGE'=>'The lines come here.  This is the actual content.',
		'FOOTER'=>'Get this at the foot of the page'
);

$gmtemplate = new GManonTemplate();

echo $gmtemplate->replaceVars($vars, "./templates/template.inc.php");

foreach($main_files as $directory=>$file)
{
    check_file($directory,$file);
}
?>
