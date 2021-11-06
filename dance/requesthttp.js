
    const request = new XMLHttpRequest();

    request.open('GET', "http://localhost/dance/signup.php");
    request.send();
    alert(request.status);
    if (request.status == 200 ){
        
    window.location.href = "create_account";
    }