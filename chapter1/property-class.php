<?php

class Student
{
  var $name;
  var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Naruto';
$student2->name = 'Sasuke';

echo $student1->name . "<br/>";
echo $student2->name . "<br/>";

$class_vars = get_class_vars('Student');
echo "Property milik Student: ";
echo "<pre>";
print_r($class_vars);
echo "<pre/>";