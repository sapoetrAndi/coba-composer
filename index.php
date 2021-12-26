<?php
require_once 'vendor/autoload.php';
// require_once '/vendor/fzaninotto/Faker/src/autoload.php';

$faker = Faker\Factory::create('id_ID');
// var_dump(($faker));
for($i=0; $i < 5; $i++){
    echo $faker->name;
    echo "<br>";
}
?>