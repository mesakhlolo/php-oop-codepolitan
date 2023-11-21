<?php 

require __DIR__ . '/vendor/autoload.php';

Use Faker\Factory;

$faker = Factory::create();

echo $faker->name . "<br/>";
echo $faker->address . "<br/>";