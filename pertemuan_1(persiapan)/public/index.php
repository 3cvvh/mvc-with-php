<?php 
require_once "..\app\init.php";
use app\core\controller as controller;
$contoh = new controller();
$contoh->set('asep');
echo '<br>';
echo 'nama nya adalah ' . $contoh->tampil();