<?php
include('db1.php');
$validatename="";
$validateemail="";
$validateusername="";
$validatepassword="";
$validateconfirmpassword="";
$validateradio="";
$validatedob="";
$errors = array();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $confirmpassword=$_REQUEST["confirmpassword"];
    $gender=$_REQUEST["gender"];
    $dob=$_REQUEST["dob"];

    $usernamelength= strlen($username);
    $passwordlength= strlen($password);

    if(empty($name))
    {
        $validatename= "You can not submit without name";
        
    }
    else
    {
        $validatename= "Your name is: ".$name;
    }

    if(!empty($email) && preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
    {
        $validateemail= "Your email is: ".$email;
    }
    else
    {
        $validateemail= "You have to enter a valid email";
        
    }

    if(empty($username)|| strlen($username)<5)

    {
        $validateusername="You must enter at least 5 character";

    }

    else
    {
        $validateusername = "your username is:" .$username;
    }

    if(empty($password) || $passwordlength < 8)
    {
        $validatepassword= "Password is required and  lenth 8";
        
    }

    else
    {
      $validatepassword= "your password is:" .$password;
    }

    if(empty($confirmpassword)==$password)
    {
        $validateconfirmpassword="Please Enter Your Confirm Password";
    }

    else
    {
        $validateconfirmpassword= "your confirm password is:" .$confirmpassword;
    }

    
    if(isset($_REQUEST["gender"]))
    {
        $validateradio=$_REQUEST["gender"];
    }

    else
    {
        $validateradio= "Please select at least one radio";

    }



    if(empty($dateofbirth))
    {
        $validatedob="Please Enter Your DateOfBirth";
    }

    else
    {
        $validatedob= "your dateOfBirth is:" .$dateofbirth;
    }
    
    if (!$errors) {
        $connection = new db1();
        $conobj=$connection->OpenCon();
    
        $InsertQuery=$connection->InsertUser($conobj, $name, $email, $username, $password, $confirmpassword, $gender, $dob);
        echo $InsertQuery;
        if(!empty($InsertQuery))
        {
            $error = "Insert new record!";
        }else 
        {
            $error = "User data is invalid";
        }
        $connection->CloseCon($conobj);
    }
    else 
    {
        $error = "validation not successfull";

        print_r($errors);
    }
}


?>