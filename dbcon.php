<?php

$server='localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
    ?>
    <script>
    alert("Welcome to Covid-19 Live website");
    </script>
    <?php
} else{
    ?>
    <script>
    alert("No connection");
    </script>
    <?php
}

?>