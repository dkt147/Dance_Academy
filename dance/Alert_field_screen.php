<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alert </title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="alert.css">
    <style>
        * {
          box-sizing: border-box;
        }
    </style>
        <script>
$(document).ready(function () {  
         $.ajax({  
             type: "POST",  
             url: 'http://dance.liftup.tech/API/verify.php',  
             data: ({email:"email"}), 
              
             
         });  
     });  
function signupfunction(){
    
    const request = new XMLHttpRequest();
    request.onreadystatechange  = function() {
        if( this.readyState  == 4 && this.status == 200) {
            window.location.href="create_account.php";
            
        }else{
            window.location.href="Alert_field_screen.php";
        }
    }

    request.open('GET', "http://localhost/dance/signup.php");
    request.send();
}
   
  
</script>

</head>
<body>
    <br><br>
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark"  >
        <div class="logo1" style="margin-left :65px;"><img src="logo4.png" alt="logo" height="50px ";></div>
    </nav>
    <p id="underline-gap"> CREATE YOUR ACCOUNT TO START YOUR FREE TRIAL</p>
    <br><br>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
            <label for="email" style="font-size: small;">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Email Address Is Required" name="email" required>
            </div><br>
            <div class="form-group">
            <label for="pwd" style="font-size: small;">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="password(6+characters)" name="pass" required>
            </div>
            
       
        <br>
        
        <p style="font-size:10px;margin-left: 16px;">By signing up I agree to Mixture of  Style's <a href="">Terms of Services</a>& Privacy Policy</p>
        <br>
        <button type="submit" onclick="signupfunction();" id="signup">SIGN UP</button><br><br><br>    
    </form>
    
    <? php
    session_start();
    if (isset($_POST['submit'])) { 
        $_session['email'] = $_POST['email'];
        $_session['pass'] = $_POST['pass'];
    } 
?> 
        <p style="margin-left:100px;font-size:small;color:lightgrey">Already have an account?<a href="login_screen.html" style="color:white;margin-left: 30px;">LOGIN</a></p>
    </div>
    <br>
    <br>
    <br>
    
    
  
    

</body>
</html>