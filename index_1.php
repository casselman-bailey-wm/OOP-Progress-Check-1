<?php

//final keyword prevents class from being overided by child file
final class player
{
public $username;
protected $password;
public $email;
public static $minPassLength = 5;


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

    public static function validatePassword($password)
    {
    if(strlen($password) >= self::$minPassLength )
    {
        return true;
    }
    else
    {
        return false;
    }

    }
}

abstract class Character
{

    public $hero;
    public $KDratio;

    public function describe()
    {
        return ' your K/D ratio with '. $this->hero. ' is ' .$this->KDratio;
    }

    abstract public function bestHero();



}

class Offense extends Character
{
    public function describe()
    {
        return parent::describe();
    }

    public function bestHero()
    {
        return "Your best hero in this class is ". $this->hero;
    }
}

class Defense extends Character
{
    public function describe()
    {
        return parent::describe();
    }

    public function bestHero()
    {
        return "Your best hero in this class is ". $this->hero;
    }
}


class Tank extends Character
{
    public function describe()
    {
        return parent::describe();
    }

    public function bestHero()
    {
        return "Your best hero in this class is ". $this->hero;
    }
}

class Support extends Character
{
    public function describe()
    {
        return parent::describe();
    }

    public function bestHero()
    {
        return "Your best hero in this class is ". $this->hero;
    }
}



//class staff extends player
//{
//protected function set_name($username, $newuser)
//{
//    if($username == 'EricCoolKid123')
//    {
//        $this->username = $newuser;
//    }
//}
//}
//?>