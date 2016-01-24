<?php
/*///////////////////////////////////////////////////////////////////////////////////////////////
// Project Name: Contributions
// File Name: admin/Index
// Author: Guillermina Gonjon
// Developer Email: ggonjon@gmail.com
//
//    Copyright (C) 2016  Guillermina Manon-Gonjon (Alias GManon)
//
///////////////////////////////////////////////////////////////////////////////////////////////*/
session_start();
ob_start();
header("Cache-control: private"); //IE 6 Fix
require_once('../initializer.inc.php');

$title = 'contribution';
$error = array();
$logout = 0;
$logo = "images/myLogo.jpg";

define('TITLE', $title);

check_file(CONFIG_DIRECTORY,'configDB.inc.php');
check_file(STYLE_DIRECTORY,"style.css");
check_file(TEMPLATES_DIRECTORY,"template.inc.php");
check_file(CLASSES_DIRECTORY,"Menu.class.php");
check_file(LIBRARY_DIRECTORY,"fckeditor/fckeditor.php");  // FCKEDITOR is required

if(($_SESSION['action'] == "valid_user") 
|| ($_GET['action'] == "valid_user"))
{
    echo '<blockquote>';
    if($_GET['action'] == 'logout'){
        session_destroy();
        unset($_SESSION['action']);
        form();

    } else {
        //  Pass variables to session
    
        //  Show menu
        check_file(INCLUDES_DIRECTORY."menu_controller.php");
        check_file(INCLUDES_DIRECTORY."action_controller.php");
    
    }
     echo '</blockquote>';  
}else{
    // Logout:default
    if((!isset($_POST['login']))&&($_SESSION['action'] != "valid_user"))
     {
        form();
    }else{
        if((isset($_POST['login']))&& ($_SESSION['action'] != "valid_user")){
        //  Check valid_user
            $myPassword = md5($_POST['password']);
            $result = mysql_query("SELECT username,password FROM administration 
                                                WHERE username='".$_POST['username']."'and 
                                                password='".$myPassword."';") 
                                                or die( $error[] = mysql_error());
                        $num = mysql_num_rows($result);
            if($num < 1){
                check_file('includes/failed.inc.php');
                
            }elseif($num == 1){
                $_SESSION['action'] = "valid_user";
                if($_POST['username']){ $_SESSION['username'] = 
                $_POST['username'];}else{$_SESSION['username'] = 
                $_SESSION['username']; }
               echo '<blockquote>';
                  check_file(INCLUDES_DIRECTORY."menu_controller.php");
                  check_file(INCLUDES_DIRECTORY."action_controller.php");
              echo '</blockquote>';
            }
        }
    }

}

?>
