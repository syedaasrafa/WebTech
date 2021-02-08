<!DOCTYPE html>

<head>
    
    <title>Form</title>
</head>
<body>
    
    
    <form>
    <table>
        <h3><b>Registration</b></h3>
        <label for="name"> Name: </label>
        <input type="text" id="name" name="name"><hr/><br>

        <label for="email"> Email: </label>
        <input type="text" id="email" name="email"><hr/><br>

        <label for="user"> User Name: </label>
        <input type="text" id="user" name="user"><hr/><br>

        <label for="pwd"> Password: </label>
        <input type="password" id="pwd" name="pwd"><hr/><br>

        <label for="pwd"> Confirm Password: </label>
        <input type="password" id="pwd" name="pwd"><hr/><br>

        

        <h3>Gender</h3>

        
        <input type="radio" id="male" name="gender" value="male">
        <label for="male"> Male </label>

        
        <input type="radio" id="female" name="gender" value="female">
        <label for="female"> Female </label>

       
        <input type="radio" id="other" name="gender" value="other">
        <label for="other"> Other </label>

        

        <br>

        <h3>Date of Birth</h3>

        
        <input type="dd" id="birthday" name="birthday">
        <label for="birthday">/</label>
        
        
        
        <input type="mm" id="birthday" name="birthday">
        <label for="birthday">/</label>
        

       
        <input type="yyyy" id="birthday" name="birthday">
        <label for="birthday"> (dd/mm/yyyy) </label>
        

        

        
       <br><br>

       <input type="submit" value="Submit">
       <input type="reset" value="Reset">




    </table>
    </form>

</body>
</html>