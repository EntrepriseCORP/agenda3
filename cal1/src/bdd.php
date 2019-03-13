<?php


//fonction debug
function dd(...$vars) {
    foreach($vars as $var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}


  //fonction connection a la bbd
function get_pdo (): PDO {
    return new PDO('mysql:host=localhost;dbname=calendrier', 'root', '', []);
}


  //fonction pour empecher les injections SQL
  // prend une chaine de caracteres et la retourne encodée
function hentities(string $value):string {
  return htmlentities($value);
}
