<?php
/**
 ** @Author: Guillermina Gonjon
 ** @Filename: User.class.php
 ** @descriptipn: This class creates a user, logout and authenticates the user
 **/
session_start();
class User{
    public $login = null;
    public $valid_user = false;
    public $login_counter;

    private $session_user;
    private $session_password;
    private $session_email;
    private $status = 'inactive';
    private $session_id; 
    private $user = array("user_id"=>0,"user_name"=>'',"user_password"=>null,"user_email"=>'');
    
    public function setNewUser($user=array())
    {
        $this->user['user_id'] = printf("%04d",$user['user_id']);
        $this->user['user_name'] = ucwords($user['user_name']);
        $this->user['user_password'] = substr(md5($user['user_password']),0,strlen(md5($user['user_password']))-20);
        $this->user['user_email'] = $user['user_email'];
        
    }
    
    public function getNewUser()
    {
        return $this->user;
    }
    
        
    public function setValidUser($db_user,$db_password, $post_user,$post_password)
    {
        if(($post_user == $db_user)&&($post_password == $db_password))
        {
           $this->valid_user = true; 
           $this->session_user = htmlentities($post_user);
           $this->session_password = $post_password;
           
           $this->session_id = session_id();
        }
        else
        {
            $this->valid_user = false;
        }

    }
    
    private function setSessionId()
    {
        $this->session_id = session_id;

    }

    
    public function getSessionUserEmail(){ $this->session_email = $this->user['user_email']; return $this->session_email; }
    public function getValidUser(){ return $this->valid_user;}
    public function getSessionUser(){ return $this->session_user;}
    public function getSessionPassword(){ return $this->session_password;}
    public function getSessionId(){ return $this->session_id;}

    public function logoutUser()
    {
        unset($this->session_user);
        unset($this->session_password);
        unset($this->value_user);
    }

}
/*
 * check class
 */
 $db_username = "metheone";
 $db_userpassword = "thithi";
 $post_username = "metheone";
 $post_userpassword = "thithi";
 $user_array = array("user_id"=>1,
                     "user_name"=>'maria Montesinos',
                     "user_password"=>"password",
                     "user_email"=>'ggonjon@gmail.com');
 
 $user = new User();
 $user->setValidUser($db_username,$db_userpassword, $post_username,$post_userpassword);
 $user->getValidUser();
 $user->getLoginCounter();
 $user->getLoginCounter();
 $user->getSessionId();
 $user->getSessionPassword();
 $user->getSessionUser();
 $user->getSessionUserEmail();

 $user->setNewUser($user_array);

  
 echo '<pre>';
 print_r($user);
 var_dump($user);
 echo '</pre>';
