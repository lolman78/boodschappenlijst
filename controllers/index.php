<?php
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database'], 'root', 'root');

$posts = $db->query("select * from groceries")->fetchAll();
// dd($posts);

$groceries = [
            ["product" => "Brood", "amount" => 3, "price" => 1.00], ["product" => "Brocoli", "amount" => 4, "price" => 0.99],
            ["product" => "Krentebollen", "amount" => 5, "price" => 1.20], ["product" => "Noten", "amount" => 2, "price" => 2.99],
            ["product" => "Aardappels", "amount" => 5, "price" => 1.99]
        ];

function product($carry, $item) { 
    $carry += $item["price"] * $item["amount"]; 
    return $carry;
}

$totaalPrijs = array_reduce($groceries, "product", 0);

// dd(require "/views/index.view.php");
require "views/index.view.php";
?>