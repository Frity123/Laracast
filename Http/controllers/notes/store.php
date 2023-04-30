<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if(! Validator::string($_POST['body'], 1, 50)){
    $errors['body'] = "A body have less than 50 characters";
}

if(!empty($errors)){
    return view("notes/create.view.php", [
        'heading' => 'Create note',
        'errors' => $errors
    ]);
}


if(empty($errors)) {
    $db->query('INSERT INTO notes(body, user_id, description) VALUES(:body, :user_id, :description)', [
        'body' => $_POST['body'],
        'user_id' => 1,
        'description' => 'test description',
    ]);

    header('location:/notes');
    die();
}
