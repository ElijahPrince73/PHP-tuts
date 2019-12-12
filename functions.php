<?php

function dd($value) {
  die(var_dump($value));
};

function ageCheck($age) {
  if($age < 21) {
    echo 'Not old enough';
  }
}