<?php
class db{
 
function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "mydb4";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    
    return $conn;
 }
 

 function InsertUser($conn, $name, $email,$username, $password, $confirmpassword,$gender, $dob)
 {
    echo $name;
    $result= $conn->query("INSERT INTO `user`(`name`, `email`, `username`, `password`, `confirmpassword`, `gender`, `dob`) VALUES ('$name','$email','$username','$password','$confirmpassword','$gender','$dob');");
    // echo $name, $username, $email, $password, $gender, $dob;
    //$result= $conn->query("INSERT INTO user (name,email,username,  password,confirmpassword, gender, dob) VALUES ('$name', '$email','$username','$password', '$confirmpassword' '$gender', '$dob')");
    
    if ($result === TRUE) 
    {
        echo "New record created successfully";
    } 
      else {
        echo $conn->error;
      }
      return $result;
 }



function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>
