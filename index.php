<?php require "bootstrap.php";

use GuzzleHttp\Client;

$items = Item::all();
$http = new Client();

# запрос к внешнему сервису
# передаем все данные таблицы
$response = $http->request("POST", "https://webhook.site/35243e27-6ae4-4690-9400-ba79bc515ae3", [
    "body" => $items->toJson(),
]);

dd($response->getStatusCode());