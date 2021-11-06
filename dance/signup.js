$(document).ready(function () { 
    
 $("#signup").click(function(){
     var email= document.getElementById('email').value;
     
    $.ajax({  
        method: "POST",  
        url: "http://dance.liftup.tech/API/verify.php",  
        
        data: {email: email },
        crossDomain: true,            
        
    
 });
});
    
});  
