<?php

require 'functions.php';

//Arrays
$names = ['Elijah', 'John', 'Jerry'];

$animals = ['Cat', 'Dag', 'Doog'];

// Asign a new value to the array
$animals[] = 'lizard';


// This is a object
$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'Web Developer'
];

// Assign a new key value pair to object
$person['name'] = 'Elijah';
unset($person['age']);

// Gets one value from the array
echo $person['age'];

// The turm die is like a return statement in JS it stops everything from running after the function executes

// die(var_dump($person));


class Task {
  public $description;
  public $completed = false;

  public function __construct($description) {
    $this -> description = $description;
  }

  public function isComplete() {
    return $this -> completed;
  }

  public function complete() {
    return $this -> completed = true;
  }
};

$tasks = [
  new Task('Go to the store'),
  new Task('Play fetch'),
  new Task('Clean room')
];

$tasks[0] -> complete();

require 'index.view.php';