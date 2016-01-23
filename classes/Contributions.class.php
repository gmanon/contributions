<?php
/**
 ** @file_name: Contributions.class.php
 ** @author: Guillermina Gonjon
 ** @description: ''
 **/
 
 class Contributions{
  private $transation_id = 0;
  public $balance = 0;
  private $individual_contribution;
  public $contributions;
  
  static function setBalance()
  {
    
  }
  
  public function addToBalance($)
  {
    $this->contributions = $this->contributions + $this->individual_contribution;
    return $this->contributions;
  }
  

 }
 
 class Contribution extends Contributions {
     protected $id = '';
    private $contributer;
    private $contribution
    
    private function setContribution($contribution,$contributer,$id)
    {
      $this->id = $id;
      $this->contributer = htmlentities(ucwords($contributer));
      $this->contribution = fprint("$2f.0%s",$contribution);
      
      $this->contribution = array($this->id,$this->contributer,$this->contribution);
      
    }
    
    public function getContribution()
    {
      return $this->contribution;
    }
    
    public function addPayment($contributions,$contribution)
    {
      Parent::addToBalance();
      
    }
    
 }
 
 /** Test Contributions class
  ** $contributions = new Contributions();
  ** $contributions->addContributions();
  ** vardump($contributions);
 **/
 
 
