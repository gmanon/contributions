<?php
/**
 ** @Name: GManon Template
 ** 
 **/
 
 class GManonTemplate {
    public $page = null;
    public $var = array();
    
    public function loadTemplate($template)
    {
      $this->page = file_get_contents($template);
      
      return $this->page;
    }
    
    public function replaceVars($var=array(),$page)
    {
      $html_document = '';
      
      foreach($var as $key=>$value)
      {
        if($html_document == '')
        {
          $html_document = str_replace("<!--{ $key }-->",$value,$page);
        }
        else
        {
          $html_document = str_replace("<!--{ $key }-->",$value,$html_document);
        }
        
        
      }
      return $html_document;
    }
 
 }
