<?php

class User
{
  var $firstName;
  var $lastName;
  var $userName;

  function fullName()
  {
    return $this->firstName . ' ' . $this->lastName;
  }
}

class Customer extends User
{
  var $city;
  var $country;

  function location()
  {
    return $this->city . ', ' . $this->country;
  }

  function fullName()
  {
    return $this->firstName . ' ' . $this->lastName . ' (customer)';
  }
}

// parent class tidak bisa mengakses property / method dari child-nya
$user1 = new User;
$user1->firstName = 'Sasuke';
$user1->lastName = 'Uchiha';
// $user1->city = 'Bekasi';
// $user1->country = 'Indonesia';

echo $user1->fullName() . "<br/>";
// echo $user1->location() . "<br/>";

$customer1 = new Customer;
$customer1->firstName = 'Naruto';
$customer1->lastName = 'Uzumaki';
$customer1->city = 'Bekasi';
$customer1->country = 'Indonesia';


echo $customer1->fullName() . "<br/>";
echo $customer1->location() . "<br/>";
