<?php
    class Content{
    
    public $content_id = 0;
    public $formatted_id;
    protected $content_title = '';
    protected $content_body = '';
    protected $content_author = '';
    protected $content_date = null;
    
        function setID()
        {
            $content_id = $this->content_id+1;
            
            $this->content_id = (int) $content_id;
            
            return $this->content_id;
        }
        
        function formatID($id)
        {
            $this->formatted_id = printf('%06d-', $id);
            
            return $this->formatted_id;
            
        }
        
        function setAuthor($firstn,$lname='')
        {
            $firstn = str_replace("_"," ",$firstn);
            $lname = str_replace("_"," ",$lname);
            
            $this->content_author = htmlentities(ucwords("$firstn $lname"));
        }
        
        function getAuthor()
        { 
          return $this->content_author;
        }
        
        function getDate()
        {
            $this->content_date = date("M d, Y");
            
            return $this->content_date;
        }
        
        function setTitle($title)
        {
            $title = str_replace("_"," ",$title);
            $this->content_title = htmlentities(ucwords("$title"));
        }
        
        function getTitle()
        {
            return $this->content_title;
        }
        
        function setContent($content_body)
        {
            
            $this->content_body = htmlentities("$content_body");
        }
        
        function getContent()
        {
            return $this->content_body;
        }
        
    }
    
    /* Test Id */
   
   $content = new Content();
   $content->setID();
  $content->setID();
   $content->setID();
   $content->setID();
   $content->setID();
   $content->setID().'<br/>';
   $content->setAuthor('Guillermina','Gonjon').'<br/>';
   $content->setTitle("this is my title").'<br/>';
   $content->setContent("This is an example of what this page can do.  This is my content for this page.");
   echo $content->getAuthor().'<br/>';
   echo $content->getDate().'<br/>';
   echo $content->getTitle().'<br/>';
   echo $content->getContent().'<br/>';
   $theid = $content->content_id;
   echo $content->formatID($theid).'<br/>';
   var_dump($content);
    //echo $content->formatted_id.'<br/>';
    
  $output = shell_exec('cal 2016 | grep 2016').'<br/>';
   //echo "<pre>$output</pre>";
   //echo "<br>".phpversion().'<br/>';

