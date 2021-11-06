function slidemeu(direction, eleId){
    var container = document.getElementById(eleId);
    scrollCompleted = 0;
    var slideVar = setInterval(function(){
        if(direction == 'left'){
            container.scrollLeft -= 10;
        } else {
            container.scrollLeft += 10;
        }
        scrollCompleted += 10;
        if(scrollCompleted >= 100){
            window.clearInterval(slideVar);
        }
    }, 50);
}

function verticalImageSlides(value) {

    if(value == 0) {
        document.getElementById("verticalImage0").style.outline = "1px solid grey";
        document.getElementById("verticalImage1").style.outline = "none";
        document.getElementById("verticalImage2").style.outline = "none";
        document.getElementById("verticalImage0").style.borderRadius = "20px";
    }
    else if(value == 1) {
        document.getElementById("verticalImage1").style.outline = "1px solid grey";
        document.getElementById("verticalImage0").style.outline = "none";
        document.getElementById("verticalImage2").style.outline = "none";
        document.getElementById("verticalImage1").style.borderRadius = "20px";
    }
    else {
        document.getElementById("verticalImage2").style.outline = "1px solid grey";
        document.getElementById("verticalImage0").style.outline = "none";
        document.getElementById("verticalImage1").style.outline = "none";
        document.getElementById("verticalImage2").style.borderRadius = "20px";
    }

     
}

function menuselected(ele){
    
    if(ele.style.backgroundColor =="blue")
    {
        ele.style.backgroundColor = "black";
        ele.style.borderColor  = "white";
    } else {
        ele.style.borderColor = "blue";
        ele.style.backgroundColor  = "blue";
    }
}
function slidemeu1 (direction){
    var container = document.getElementById('container1');
    scrollCompleted = 0;
    var slideVar = setInterval(function(){
        if(direction == 'left'){
            container.scrollLeft -= 10;
        } else {
            container.scrollLeft += 10;
        }
        scrollCompleted += 10;
        if(scrollCompleted >= 100){
            window.clearInterval(slideVar);
        }
    }, 50);
}

function cardHoverFun(index, color){
    var elements = document.getElementsByClassName('card-header');
    elements[index].style.backgroundColor = color;
    

    var elements = document.getElementsByClassName('pricingbtn');
    elements[index].style.backgroundColor = color;
    
}