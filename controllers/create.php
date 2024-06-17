<?php

require 'Validator.php';
require 'database.php';

$config = require('config.php');
$db = new Database($config['database'], 'root', 'root');

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    // valideer de name veld
    if(! Validator::string($_POST['name'], 1, 1000)){
        $errors['name'] = 'this can field can be no more than 1,000 characters long';
    }

    // valideer de amount veld
    if(! Validator::integer($_POST['amount'], 1, 1000)){
        $errors['amount'] = 'this field only accepts whole numbers';
    }

    // valideer de price veld
    if(! Validator::decimal($_POST['price'], 1, 1000)){
        $errors['price'] = 'this field only accepts valid money prices like 21 or 21.00';
    }
    

    if(empty($errors)){
        $db->query('INSERT INTO groceries(name, number, price) VALUES(:name, :number, :price)', [
            'name' => $_POST['name'],
            'number' => $_POST['amount'],
            'price' => $_POST['price']
        ]);

        header('Location: /');
        exit();
    }
    
    
}

require "views/create.view.php";

?>