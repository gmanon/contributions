<?php
// All this function does is to call a file and return not found if the file does not exist.
// Public static

function check_file($requested_name, $file_location = '')
 {
     if ($file_location != '')
     {
         switch(PHP_OS){
          case'WIN':
           $separator = '\';
          break;
          default:
          $separator = '/';
          break;
         }
     }
     else
     {
         $separator = '';
     }
      
     $requested_name = $file_location . $separator . $requested_name;
     
     if(file_exists($requested_name))
     {
         include_once($requested_name);
     }
     else
     {
        echo "file " . $requested_name . " was not found.";
     }
     
}

// Defining directory paths

define('ROOT_DIRECTORY',$_SERVER['SERVER_ROOT']);
define('APPLICATION_ROOT',_DIRECTORY_);
define('IMAGE_DIRECTORY',APPLICATION_ROOT.'/images/');
define('CONFIG_DIRECTORY',APPLICATION_ROOT.'/config/');
define('LIBRARY_DIRECTORY',APPLICATION_ROOT.'/library/');
define('CLASSES_DIRECTORY',APPLICATION_ROOT.'/classes/');
define('TEMPLATES_DIRECTORY',APPLICATION_ROOT.'/templates/');
define('FORMS_DIRECTORY',APPLICATION_ROOT.'/forms/');
define('APP_DIRECTORY',APPLICATION_ROOT.'/app/');
