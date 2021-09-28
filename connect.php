<?php
    
    $dbServername = "localhost"; 
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "testdb"; 

    $conn = mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName);


    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO individuals (id, username, email) VALUES('1111','a','b',);";
    mysqli_query ($conn, $sql);
  //  if (isset ($_POST['submit'])) {
       // $stmt = mysqli_connect ($sql) or die (mysqli_error ()); 
     //   if ($stmt) {
        //    echo "yaah its done!!!";
       // }else {
     //       echo "not submitted";
   //     }
   // }

    header ("Location: ../index.html?data=kugrnd");
  
?>

