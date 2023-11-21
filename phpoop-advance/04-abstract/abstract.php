<?php

abstract class Database
{
  abstract public function connection();

  public function disconnect()
  {
    // Implementation
  }
}

class Model extends Database
{
  public function connection()
  {
    // 
  }
}

// abstract class tidak dapat di instantiate (akan terjadi error)
// $db = new Database();

$model = new Model();
