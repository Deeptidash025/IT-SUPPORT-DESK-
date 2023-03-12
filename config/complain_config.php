<?php

$host = "localhost";
$username = "root";
$password ="";
$database_name ="complain";

$desc_con = mysqli_connect("$host","$username", "$password","$database_name");

if($desc_con){
    echo "sucess";
}



 ?>