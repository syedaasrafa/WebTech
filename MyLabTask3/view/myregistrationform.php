<?php
include('../control/confirm.php');
?>

<!DOCTYPE html>
<html>
<head>
<title> Registration Page </title>
</head>
<body>

<h1>My Registration Form</h1>

<form  action="" method="post">
<table>

<tr>
    <td><label for="name">Name: </label></td>
  <td>  <input type="text" name="name" placeholder="Enter your Name" ></td>
    
   <td> <?php echo $validatename;?> </td>

    </tr>
    

<tr>
  <td>  <label for="email">Email: </label> </td>
  <td>  <input type="text" name="email" placeholder="Enter your Email" > </td>
    
   <td> <?php echo $validateemail;?></td>

    </tr>
    

<tr>
  <td>  <label for="username">Username: </label></td>
   <td> <input type="text" name="username" placeholder="Enter your username" ></td>
    
    <td><?php echo $validateusername;?> </td>

    </tr>
    

   
<tr>
   <td><label for="password">Password: </label></td>
    <td><input type="password" name="password" placeholder="Enter your Password" ></td>
    
   <td><?php echo $validatepassword;?> </td>
</tr>
    
    
    
<tr>
    <td><label for="confirmpassword">Confirm Password: </label> </td>
   <td> <input type="password" name="confirmpassword" placeholder="Confirm your Password" > </td>
    
   <td> <?php echo $validateconfirmpassword;?> </td>

 </tr>   
    

    <tr>

    <td><label for="gender">Gender: </label></td>
    <td>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    </td>
    
   <td> <?php echo $validateradio;?> </td>

    </tr>
    
  <tr>
   <td> <label for="dob">Date of birth: </label></td>
    <td><input type="date" name="dob"></td>
    
   <td> <?php echo $validatedob;?> </td>
    </tr>
    
    
    </table>
    <input name="submit" type="submit" value="Submit">
    <input type="reset" value="Reset">
</form> 



</body>
</html>