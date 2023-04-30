<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);


$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();


authorize($note['user_id'] == $currentUserId);


$errors = [];

if(! Validator::string($_POST['body'], 1, 50)){
    $errors['body'] = "A body have less than 50 characters";
}

if(count($errors)){
    return view("notes/edit.view.php", [
        'heading' => 'Edit note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);


header('location: /notes');
die();