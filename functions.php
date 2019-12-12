<?php

function dd($value) {
  die(var_dump($value));
};

function connectToDB() {
    try {
      return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'password');
    } catch(PDOException $e) {
      die('Could not connect');
    }
}

function fetchAllTasks($pdo) {
  $statement = $pdo -> prepare('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO:: FETCH_CLASS, 'Task');
}