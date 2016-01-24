<?php
class configDb extends PDO{
/** Using PDO API
 ** Author: Unknown
 **
 **/
    private $engine; 
    private $host; 
    private $database; 
    private $user; 
    private $pass; 
    
    public function __construct(){ 
        $this->engine = 'mysql';    // PDO works for multiple database engines.  It's a copy of PEAR DB
        $this->host = 'localhost';  // Change the host if applicable.  Most db 
                                    // hosts are localhost, but it could be an external host 
        $this->database = 'contributions';       // Your database, in many cases, you create a database for application
        $this->user = 'root';       // Your database user.  This user should be permited to read, write on your database. 
        $this->pass = '';           // The password for your database user.
        
        // Finally, this is your connection object string
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host; 
        // 
        parent::__construct( $dns, $this->user, $this->pass ); 
    } 
}

/** 
 ** $config_db = new configDb();
 ** $connection = $config_db;
 ** close connection unset($config_db);
 **/
