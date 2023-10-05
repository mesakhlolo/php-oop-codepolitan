<?php

class Student
{
  var $name;
  var $country = 'None';

  function sayHello()
  {
    return 'Hallo, Mamak!';
  }
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Naruto';
$student2->name = 'Sasuke';

echo $student1->name . "<br/>";
echo $student2->name . "<br/>";

echo $student1->sayHello() . "<br/>";
echo $student2->sayHello() . "<br/>";

$class_methods = get_class_methods('Student');
echo "Methods milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "<pre/>";