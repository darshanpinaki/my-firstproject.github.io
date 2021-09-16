<?php

$server="localhost";
$user="root";
$password="";
$db="darshanproject";


$con=mysqli_connect($server,$user,$password,$db);

if ($con) {
   ?>
   <script>
       alert("connection sucessful");
   </script>
   <?php
}else {
    ?>
    <script>
        alert("connection not sucessful");
    </script>
    <?php
}

?>