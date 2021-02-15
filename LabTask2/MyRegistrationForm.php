<html>
<head>
<title> Registration Page </title>
</head>
<body>

<?php

$validatename="";
$validateemail="";
$validateusername="";
$validatepassword="";
$validateconfirmpassword="";
$validategender="";
$validatedob="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $confirmpassword=$_REQUEST["confirmpassword"];
    $gender=$_REQUEST["gender"];
    $dateofbirth=$_REQUEST["dob"];

    
    $usernamelength=strlen($username);
    $passwordlength=strlen($password);

    if(empty($name))
    {
        $validatename="Please enter name";
    }

    else
    {
        $validatename= "your name is:" .$name;
    }

    
     
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    
    {
        $validateemail="You must enter your required email";
    }

    else
    {
        $validateemail= "your email is:" .$email;
    }

    
    if(empty($username)|| (strlen($username)<5) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$username))
    
    {
        $validateusername="You must enter at least 5 character";
        
    }

    else
    {
        $validateusername = "your username is:" .$username;
    }

    
    if(empty($password)|| (strlen($password)<8) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$password))
    
    {
        $validatepassword="Password must contain length at least 8";
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


}

?>

<h1> Registration </h1>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<table>
  <tr>

       <td>Name: </td>
       <td><input type="text" name="name"></td>
       <td> <?php echo $validatename; ?> </td>
       
       

  </tr>    

   <tr>

       <td>Email: </td>
       <td><input type="text" name="email" ></td> 
      <td> <?php echo $validateemail; ?></td>
       
        
       
  </tr>   

   <tr>

       <td>User Name: </td>
       <td><input type="text" name="username"></td> 
       <td> <?php echo $validateusername; ?> </td> 
       
       
  </tr>    

  <tr>

<td>Password: </td>
<td><input type="password" name="password"></td> 
<td>   <?php echo $validatepassword; ?> </td>
   

</tr>  

<tr>

<td>Confirm Password: </td>
<td><input type="password" name="confirmpassword"></td>
<td> <?php echo $validateconfirmpassword; ?></td>
  

</tr>  

<tr>

<td>Gender: </td>
<td>

<input type="radio" id="male" name="gender" value="male"> Male

<input type="radio" id="female" name="gender" value="female"> Female 

<input type="radio" id="other" name="gender" value="other"> Other 


</td>

<td><?php echo $validategender; ?></td>
</tr> 

<tr>

<td>Date Of Birth: </td>
<td><input type="date" name="dob"></td> 
<td><?php echo $validatedob; ?></td>



</tr>




  </table>
  <input type="Submit" value="Submit">
  <input type="reset" value="Reset"> 

  </form>
  </body>
</html>