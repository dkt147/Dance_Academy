<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="signup.css">

    


</head>
<body>
    <br>
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark" style="color: blue;" >
        <div class="logo1" style="margin-left :65px;margin-top:20px;"><img src="logo4.png" alt="logo" height="50px"></div>
    </nav>
    <br><br><br>
    <p id="underline-gap"> CREATE YOUR ACCOUNT TO START YOUR FREE TRIAL</p>
    <br><br>
    <div class="container">
        <form action="" method="post" >
            <div class="form-group">
            <label for="email" style="font-size: small;">Email Address</label>
            <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" />
            <p id="errEmail" class="errormessage">Invalid Email</p>
            </div><br>
            <div class="form-group">
            <label for="pwd" style="font-size: small;">Password</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password(6 + characters)" name="pass" />
            <p id="errPass" class="errormessage">Invalid Password</p>
            </div>
            
       
        <br>
        
        <p style="font-size:11px;margin-left: 14px;">By signing up I agree to Mixture of  Style's <a href=""> Terms of Services</a> & Privacy Policy</p>
        <br>
        <button type="button" onclick="signupfunction();" id="signup" >SIGN UP</button><br><br><br>    
    </form> 
        <p style="margin-left:100px;font-size:small;color:lightgrey">Already have an account?<a href="login_screen.html" style="color:white;margin-left: 30px;">LOGIN</a></p>
    </div>
    <br>
    <br>
    <br>
    <script>
    
$(document).ready(function () { 
    
 
             
          
     });  
     

function validateInputs() {
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var flag = true;
    if((email == '' || !email.includes('@'))  && pass == '') {
        document.getElementById("errEmail").style.display = "block";
        document.getElementById("errPass").style.display = "block";
        return  false;
    } 
    else if(email == '' || !email.includes('@')) {
        document.getElementById("errEmail").style.display = "block";
        document.getElementById("errPass").style.display = "none";
        return  false;
    }
    else if(pass == ''){
        document.getElementById("errPass").style.display = "block";
        document.getElementById("errEmail").style.display = "none";
        return  false;
    }
    return true;
}

function signupfunction(){

    if(validateInputs()) {
        var email = document.getElementById("email").value;
        var data = '{"email":"'+email+'"}';
        $.ajax({
            method: "POST",
            url: "http://dance.liftup.tech/API/verify.php",
            data:  data,
            dataType: 'application/json', 
            error: function(jqXHR, textStatus, errorThrown) {
                
                if(jqXHR.status == 200) {
                    sessionStorage.setItem("email", document.getElementById("email").value);
                    sessionStorage.setItem("pass", document.getElementById("pass").value);
                    window.location.href="create_account.php";
                }
                else{
                    alert("Email already exists. Please try with other email id");
                }
            }
        });
        
    }

}
   
  
</script>

</body>
</html>