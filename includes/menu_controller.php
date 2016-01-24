<?php
/*///////////////////////////////////////////////////////////////////////////////////////////////
// @Project Name: Contributions
// @File Name: includes /Index
// @Author: Guillermina Gonjon
// @Email: ggonjon@gmail.com
//
//    Copyright (C) 2016  Guillermina Manon-Gonjon (Alias GManon)
//
///////////////////////////////////////////////////////////////////////////////////////////////*/
Class BuildMenu{
  public $query = array();
  public $label = '';
  public $link = '';
  
  /**
   * @buildQuery: function 
   * @returns: object
   * @params: array of key value
   **/
   
  function buildQuery($query=array("key"=>"value")
  { 
  $query = array_unique($query);    // Remove duplicates
  
    $counter = 0;
    
    foreach($query as $key=>$value)
    {
        // Prevent injection of code in your url
        $key = sanitize($key);
        $value = sanitize($value);
        
      if($counter < 1)
        {
            $this->query = "$key=$value";
        }
        else
        {
            $this->query .= "&$key=$value";
        }
      
      $counter++;
    }
    
    return $this->query;
  }
  
  function buildLink($label,$query,$desc='',$menu_type,$root)
  {
    switch($menu_type){
        case 
    }
  }
}




class MenuController {
  
}
