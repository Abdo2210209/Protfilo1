<?php
 try{
    $Connection = mysqli_connect('localhost','root','','online Shopping System');
    } catch(Exception $e){
        echo "Database Error: " . $e->getMessage();
    }







 
// $server = "localhost";
// $user = "root";
// $pass = "";
// $database = "online Shopping System";


// $Connection = mysqli_connect($server, $user, $pass, $database);

// if (!$Connection) {
//     die("<script>alert('Connection Failed.')</script>");
// }
// else{ 
//     echo "connected";
//   }
?>