
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="create.css">
    <script>

        
        function changecolor(element,tickid,memberid){
            var elem = document.getElementsByClassName("memberTick");
            for(var i = 0; i < elem.length; i++) {
                document.getElementById("memberDiv"+i).style.color="white";
                elem[i].style.display ="none";
            }



            var x = document.getElementById(tickid);
            if (element.style.color=='white'){
                
                element.style.color='#1D70EA';
                x.style.display = "inline";
                var memid=memberid;
                sessionStorage.setItem("membership",memberid);
                
            }else{
                
                element.style.color='white';
                x.style.display = "none";
            }
                
        }
        function colorchanger(ele,tickid,memberid){
            
            var elements = document.getElementsByClassName("goalTicks");
            for(var i = 0; i < elements.length; i++) {
                document.getElementById("goalDiv"+i).style.color="grey";
                elements[i].style.display ="none";
                sessionStorage.setItem("goal",memberid);
                
            }

            var x = document.getElementById(tickid);
            if(ele.style.color=='white'){
                ele.style.color="grey";
                x.style.display ="none";

            }else{
                ele.style.color="white";
                x.style.display = "inline";

            }

        }

        function validateMemberShip(){
            var elements = document.getElementsByClassName("memberTick");
            for(var i = 0; i < elements.length; i++) {
                if(elements[i].style.display == 'inline')
                    return true;
            }
            return false;
        }

        function validateGoals(){
            var elements = document.getElementsByClassName("goalTicks");
            for(var i = 0; i < elements.length; i++) {
                if(elements[i].style.display == 'inline')
                    return true;
            }
            return false;
        }
     
        function submitCreateAccount(){
            
            if(!validateMemberShip()) {
                alert("Please Select Experience With Dancing!");
                return;
            }

            if(!validateGoals()) {
                alert("Please Select Goal You Want To Work On!");
                return;
            }

            sessionStorage.setItem("signup", "true");
            window.location.href="front.html#pricing";
            
        }
       
    </script>
    

</head>
<body>
   <br>
     <nav  class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:0px;"  >
        <div class="logo1" style="margin-left :65px;margin-top:0px;"><img src="logo4.png" alt="logo" height="50px"></div>
    </nav>
    <h1 id="underline-gap" style="font-family:'Montserrat';"> CREATE YOUR ACCOUNT</h1>
    <br><br><br>
    <div class="container">
        <p class="para" >What's Your Experience With Dancing?</p>
        <div class="para1" style="width:16cm">
            <p onclick="changecolor(this,'beginnerTick',23)" id="memberDiv0" style="color:white"><b>Beginner</b><img class="memberTick" id="beginnerTick" style="display: none; margin-left: 30px;" src="tick.png" width="18px"></p>

             <p style="color:grey">I've Taken Some Classes And Understand Basic Dance Terminology.</p>
        </div>
        <br>
        <div class="para1" style="width:16cm">
            <p  onclick="changecolor(this,'intermediateTick',24)" id="memberDiv1"    style="color:white"><b>Intermediate</b> <img class="memberTick" id="intermediateTick" style="display: none; margin-left: 30px;" src="tick.png" width="18px"></p>
             <p style="color:grey">I Have Been Dancing Regularly And Am Ready To Dive In.</p>
        </div><br>
        <div class="para1" style="width:16cm">
            <p  onclick="changecolor(this, 'advacnedTick',25)" id="memberDiv2"   style="color:white"><b>Advanced</b><img class="memberTick" id="advacnedTick" style="display: none; margin-left: 30px;" src="tick.png" width="18px"></p>
             <p style="color:grey">I Have Lot Of Experience In The Dance Style I Want To Explore.</p>
        </div>
        <br>
        <br>
        
        <p class="para">What Is Your First Goal You Want To Work On?</p>
        <div id="para2" >
            <br>
            <p onclick="colorchanger(this, 'p1',18)" id="goalDiv0">Learn How To Coreograph <img class="goalTicks"  id="p1" style="display: none; margin-left: 40px;" src="tick.png" width="18px"></p><br>
            <p onclick="colorchanger(this, 'p2',19)" id="goalDiv1">Dance In Public Confidently <img  id="p2" class="goalTicks"  style="display: none; margin-left: 40px;" src="tick.png" width="18px"></p><br>
            <p onclick="colorchanger(this, 'p3',20)" id="goalDiv2">Learn Basic Dance Foundations <img  id="p3" class="goalTicks"  style="display: none; margin-left: 40px;" src="tick.png" width="18px"></p><br>          
            <p onclick="colorchanger(this, 'p4',21)" id="goalDiv3">Learn How To Free Style <img  id="p4" class="goalTicks"  style="display: none; margin-left: 40px;" src="tick.png" width="18px"></p><br>
            <p onclick="colorchanger(this, 'p5',22)" id="goalDiv4">Stay Healthy With Fun Dance Classes <img  id="p5" class="goalTicks"  style="display: none; margin-left: 40px;" src="tick.png" width="18px"></p><br>
            
        </div>
        <br><br><br>
        

        <button  id="next" onclick="submitCreateAccount();" >Next</button><br><br><br><br>
        <p style="text-align: center;font-size:12px;color:lightgrey;">Already have an account?<a href=""style="margin-left: 30px;color:white;">LOGIN</a></p>
        <br>
        <br> <br> <br> <br> 
     
</div>


</body>
</html>