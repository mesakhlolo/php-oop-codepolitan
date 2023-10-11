<?php

class User
{
  public $firstName;
  public $lastName;
  public $userName;

  protected $regID = 1001;
  private $level = 'User';

  public function fullName()
  {
    return $this->firstName . ' ' . $this->lastName;
  }

  protected function sayProtect()
  {
    return 'Hallo, Protected';
  }

  private function sayPrivate()
  {
    return 'Hallo, Private';
  }

  public function sayMe()
  {
    return $this->sayPrivate();
  }
}

class Customer extends User
{
  public function sayParent()
  {
    return $this->sayProtect();
  }
}

$user1 = new User;
$user1->firstName = 'User';
$user1->lastName = 'Class';


// visibilitas public = bisa digunakan di mana saja
// visibilitas protected = hanya bisa digunakan di class dan sub class
// visibilitas private = hanya bisa digunakan di dalam Class-nya itu sendiri

// echo $user1->regID . "<br/>";
// echo $user1->level . "<br/>";

echo $user1->fullName() . "<br/>";
echo $user1->sayMe() . "<br/>";
// echo $user1->sayPrivate() . "<br/>";

// echo $user1->sayProtect() . "<br/>";
// echo $user1->sayPrivate() . "<br/>";

$customer1 = new Customer;
$customer1->firstName = 'Naruto';
$customer1->lastName = 'Uzumaki';

echo $customer1->fullName() . "<br/>";
echo $customer1->sayParent() . "<br/>";
