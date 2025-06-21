<?php 
if(!session_id()) {
    session_start();
}
require '../app/init.php'; 
$obj = new App();