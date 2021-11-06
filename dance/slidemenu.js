$(document).ready(function() {
  
    $( ".nextBtn" ).click(function(e) {
      goRight();
    });
    $( ".backBtn" ).click(function(e) {
      goLeft();
    });
    
    
    function goRight(){ // inner stuff slides left
      var initalLeftMargin = $( ".innerLiner" ).css('margin-left').replace("px", "")*1;
      var newLeftMargin = (initalLeftMargin - 202); // extra 2 for border
      $( ".innerLiner" ).animate({marginLeft: newLeftMargin}, 500);
    }
    function goLeft(){ // inner stuff slides right
      var initalLeftMargin = $( ".innerLiner" ).css('margin-left').replace("px", "")*1;
      var newLeftMargin = (initalLeftMargin + 202); // extra 2 for border
      $( ".innerLiner" ).animate({marginLeft: newLeftMargin}, 500);
    }

    function sample(){
        alert('hello');
    }

    function slide(direction){
        alert(direction);
        var container = document.getElementById('container');
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
    
    });