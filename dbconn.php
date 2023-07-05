<?php

$port = 3307;
$server = "localhost";
$username = "root";
$password = " ";
$dbname = "phpsampledb01";    

$conn=new mysqli( $server, $username, $password , $dbname, $port);

if($conn){
    ?>
    <script>
        alert ('connection Successfull..')
    </script>
    <?php
}else{
    ?>
    <script>
        alert ('connection failed..')
    </script>
    <?php
}


?>