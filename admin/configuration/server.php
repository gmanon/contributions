<?php
  function serverConfig($servervar=array("key"=>"value")
  {
    foreach($servervar as $key=>$value)
    {
        print '<b>'.$key.': </b>'.$value."<br/>\n";
    }
    
  }
  $serverarray = array(get_loaded_extensions,get_cfg_var,phpversion,php_uname);
  
  );
  
  serverConfig($serverarray);
  ?>
