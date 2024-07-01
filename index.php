<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO GURU CARE</title>
    <link rel="stylesheet" type="text/css" href="doc.css">
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0091837376.js" crossorigin="anonymous"></script>
</head>
<body>
  
<?php
include "header.php";

?>
<section id="home">
    <h1 class="text-center">WELCOME TO<span class="ch"> GURU CARE </span>
    <p  id="typing-text"></p></h1>
    <p>Stay Safe , Stay Healthy</P>
   




</section>









  
 

  
  






 
 

<script>
        
var textArray = ["HOSPITAL","24/7 EMERGENCY SERVICE" ];


var typingElement = document.getElementById("typing-text");


var index = 0;


function typeInTypeOut() {
    var currentText = textArray[index];
    var i = 0;
    var typingInterval = setInterval(function() {
        typingElement.textContent += currentText.charAt(i);
        i++;
        if (i > currentText.length) {
            clearInterval(typingInterval);
            setTimeout(function() {
                typeOut();
            }, 1000);
        }
    }, 100);

    function typeOut() {
        var j = currentText.length;
        var typingOutInterval = setInterval(function() {
            typingElement.textContent = typingElement.textContent.slice(0, j - 1);
            j--;
            if (j <= 0) {
                clearInterval(typingOutInterval);
                index = (index + 1) % textArray.length;
                setTimeout(function() {
                    typeInTypeOut();
                }, 500);
            }
        }, 100);
    }
}

typeInTypeOut();



         var guru =document.getElementById("my")

      </script>
      

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>
</body>
</html>