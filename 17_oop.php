<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
  OOP consists of classes that can hold "properties" and "methods".
   Objects can be created from classes.
*/
class User
{
  //Properties are attributes that belong to a class
  //public $name; public - can be accessed from anywhere
  //private - can only be accessed from inside the class
  //protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when an object is created
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  //Mehtod is a function that belongs to a class
  function set_name($name)
  {
    $this->name = $name;
  }
}

// instatiate a user object

// when there isn't constructor and function
/* $user1 = new User(); 
$user1->name = "Jane"; //gives a value */

// when there is a function but not constructor 
/* $user2 = new User(); 
$user2->set_name('Jin'); */

$user3 = new User('Jin', '1@hotmail.com', '123');
echo $user3->email;

//inheritence
class Employee extends User
{
  public $title;
  public function __construct($name, $email, $password, $title)
  {
    $this->name = $name;

    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '34', 'Manager');
echo $employee1->getTitle();
