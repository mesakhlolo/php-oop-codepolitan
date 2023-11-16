<?php

class Student
{ 
  public static $grades = ["SD", "SMP", "SMA"];
  private static $totalStudents = 0;

  public static function motto()
  {
    return "Learning is a long life process";
  }

  public static function count()
  {
    return self::$totalStudents;
  }

  public static function addStudent()
  {
    return self::$totalStudents++;
  }
}

echo Student::$grades[2] . "</br>";
echo Student::motto() . "</br>";

// echo Student::$totalStudents; // tidak bisa diakses karena private (static juga dapat diberikan visibilitas / encapsulation)

echo Student::count() . "</br>";
Student::addStudent();
echo Student::count() . "</br>";