<?php
class player
{
public $username;
protected $password ;
public $email;

    function __construct($username)
    {
        $this->username = $username;
    }

    function get_username()
    {
        return $this->username;
    }

   function set_username($newuser)
    {
       $this->username = $newuser;
    }
}
class staff extends player
{
protected function set_name($username, $newuser)
{
    if($username == 'EricCoolKid123')
    {
        $this->username = $newuser;
    }
}
}
?>