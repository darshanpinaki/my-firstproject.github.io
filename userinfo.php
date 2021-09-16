<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {
    $user=$_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comments=$_POST['comments'];

    $insertquery="insert into first( user, email, mobile, comments) values('$user', '$email', '$mobile', '$comments')";

    $query=mysqli_query($con,$insertquery);

    if ($query) {
        ?>
        <script>
            alert("inserted sucessful");
        </script>
        <?php
     }else {
         ?>
         <script>
             alert(" not inserted sucessfully");
         </script>
         <?php
     }
    
}
header('location:index.php')

?>