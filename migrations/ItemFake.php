<?php require "../bootstrap.php";

use Faker\Factory;

$faker = Factory::create();

# сгенерировать n записей в таблице
for ($i = 1; $i <= 10; $i++) {

    Item::create([
        "card_id" => $faker->numberBetween(1, 100),
        "date_1" => $faker->date(),
        "date_2" => $faker->date(),
        "time_1" => $faker->time(),
        "time_2" => $faker->time(),
    ]);
}