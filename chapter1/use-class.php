<?php

class Student
{
  var $firstName;
  var $lastName;
  var $country = 'None';

  function sayHello()
  {
    return 'Hallo, Mamak!';
  }

  function fullName()
  {
    return $this->firstName . ' ' . $this->lastName;
  }
}

$student1 = new Student;

$student1->firstName = 'Naruto';
$student1->lastName = 'Uzumaki';

echo $student1->firstName . "<br/>";
echo $student1->lastName . "<br/>";

echo $student1->sayHello() . "<br/>";
echo $student1->fullName() . "<br/>";

$class_methods = get_class_methods('Student');
echo "Methods milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "<pre/>";
