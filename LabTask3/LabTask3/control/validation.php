<?php
include('db.php');
$validatename="";
$validateemail="";
$validateusername="";
$validatepassword="";
$validateconfirmpassword="";
$validategender="";
$validatedob="";
$errors = array();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $username=$_REQUEST["username"];
    $email=$_REQUEST["email"];
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

    if(empty($username) || $usernamelength < 5)
    {
        $validateusername= "Username is required and minimum lenth 5";
        
    }
    else
    {
        $validateusername= "Your username is: ".$username;
    }

    if(empty($password) || $passwordlength < 6)
    {
        $validatepassword= "Password is required and minimum lenth 6";
        
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
        $validategender=$_REQUEST["gender"];
    }

    else
    {
        $validatergender= "Please select at least one radio";

    }

    if(empty($dateofbirth))
    {
        $validatedob="Please Enter Your DateOfBirth";
    }

    else
    {
        $validatedob= "your dateOfBirth is:" .$dob;
    }
    
    if (!$errors) {
        $connection = new db();
        $conobj=$connection->OpenCon();
    
        $InsertQuery=$connection->InsertUser($conobj, $name, $email,$username, $password, $confirmpassword,$gender, $dob);
        echo $InsertQuery;
        if(!empty($InsertQuery))
        {
            $error = "Insert User Succecfull!";
        }else 
        {
            $error = "User data is invalid";
        }
        $connection->CloseCon($conobj);
    }
    else 
    {
        $error = "Data validation not successfull";

        print_r($errors);
    }
}


?>
