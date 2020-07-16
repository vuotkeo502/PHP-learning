<?php
require_once 'conn.php';
if(isset($_COOKIE['fullname'])){
    echo "Welcome " . $_COOKIE["fullname"];
}
?>
