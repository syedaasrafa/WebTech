<!DOCTYPE html>
<html>
<head>
    
    <title>Registration</title>
</head>
<body>   
<h1>Registration</h1>
    <form>
    <table>
        <tr>
        <td>Name:</td>
       <td> <input type="text" name="name"> </td>
        </tr>
         
         <tr>
        <td> Email: </td>
        <td><input type="text" name="email"></td>
        </tr>

        <tr>
        <td> User Name: </td>
        <td><input type="text" name="user"></td>
        </tr>
         
         <tr>
        <td>Password:</td>
        <td><input type="password" name="pwd"></td>
        </tr>
        
        <tr>
        <td> Confirm Password: </td>
        <td><input type="password" name="pwd"></td>
        </tr>

        

        <tr>

        <td>Gender: </td>
        <td>

         <input type="radio" id="male" name="gender" value="male"> Male

        <input type="radio" id="female" name="gender" value="female"> Female 

        <input type="radio" id="other" name="gender" value="other"> Other 

        </td>

        </tr>

        
        <tr>
        <td>Date of Birth: </td>
        <td><input type="date" name="dob"></td> 
        </tr>

        

        
       </table>

       <input type="submit" value="Submit">
       <input type="reset" value="Reset">




    
    </form>

</body>
</html>