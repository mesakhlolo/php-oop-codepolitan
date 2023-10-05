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
}

$customer1 = new Customer;
$customer1->firstName = 'Naruto';
$customer1->lastName = 'Uzumaki';

echo $customer1->fullName();