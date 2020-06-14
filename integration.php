<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTEGRATION</title>
    <link rel="stylesheet" href="/calculator/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="top">
        <img class="img1" src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Math_2.png" alt="maths">
        <a href="/calculator/index1.php"><button class="butn">HOME</button></a>
        <div class="drp">
        <a href="#"><button class="butn">BASIC OPERATIONS</button></a>
        <div class="list">
            <a href="/calculator/basic/add.php">BASIC CALCULATOR</a>
            <a href="/calculator/basic/mod.php">MODULO</a>
            <a href="/calculator/basic/pow.php">POWER</a>
            <a href="/calculator/basic/root.php">ROOT</a>
            <a href="/calculator/basic/abs.php">ABSOLUTE VALUE</a>
            <a href="/calculator/basic/log e.php">LOG BASE e</a>
            <a href="/calculator/basic/log 10.php">LOG BASE 10</a>
            <a href="/calculator/basic/log x.php">LOG BASE x</a>
            <a href="/calculator/basic/max.php">MINIMUN OF GIVEN</a>
            <a href="/calculator/basic/min.php">MAXIMUM OF GIVEN</a>
            <a href="/calculator/basic/AREA.php">AREA</a>
        </div>
        </div>
        <a href="/calculator/trig.php"><button class="butn">TRIGONOMETRY</button></a>
        <a href="/calculator/matrix.php"><button class="butn">MATRIX</button></a>
        <a href="/calculator/integration.php"><button class="act">INTEGRATION</button></a>
        <a href="/calculator/diffrentiation.php"><button class="butn" style="margin-right: 1vw;">DIFFRENTIATION</button></a>
        <button id="myBtn" style="background-color: black; border-width: 0px; color:aliceblue;"><i class="fa fa-sign-out" style="color:aliceblue; background-color: black; font-size:4vw"></i></button>    </div>
    <div id="myModal" class="modal">



        <div class="modal-content">
            <span class="close">&times;</span>
            Log Out ?
            <br>
            <br>
            <div>
                <a href="/calculator/logout.php" title=""><button class="butnn" id="yes">Yes</button></a><button class="butnn" id="no" onclick="no()">No</button>
            </div>
        </div>
    </div>
    <script>
        // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("no");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
function no() {
  modal.style.display = "none";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>

    <div class="headinbas">
        FORMULAS OF INTEGRATION
    </div>
    <br>
    <br>

    <div class="cntinbas">

        ∫a dx = ax + C <br><br>
        ∫cf(x) dx	c∫f(x) dx <br><br>
        ∫x<sup>n</sup> dx = x<sup>n+1</sup>/n+1  + C <br><br>
        ∫(f + g) dx = ∫f dx + ∫g dx <br><br>
        ∫(f - g) dx = ∫f dx - ∫g dx <br><br>
        ∫x dx = x<sup>2</sup>/2 + C <br><br>
        ∫(1/x) dx = ln|x| + C <br><br> 
        ∫e<sup>x</sup>dx = e<sup>x</sup> + C <br><br>
        ∫a<sup>x</sup> dx = a<sup>x</sup> /ln(a) + C <br><br>
        ∫ln(x) dx = x ln(x) − x + C <br><br>
        ∫cos(x) dx = sin(x) + C <br><br>
        ∫sin(x) dx = -cos(x) + C <br><br>
        ∫sec<sup>2</sup>(x) dx = tan(x) + C <br><br>
        ∫cosec<sup>2</sup>(x) dx = -cot(x) + C <br><br>
        ∫tan(x) dx = ln|sec(x)| + C <br><br>
        ∫sec(x) dx = ln|sec(x)+tan(x)| + C <br><br>
        ∫cosec(x) dx = -ln|cosec(x)+cot(x)| + C <br><br>
        ∫cot(x) dx = ln|cosec(x)| + C <br><br>
        ∫sec(x)tan(x) dx = sec(x) + C <br><br>
        ∫cosec(x)cot(x) dx = -cosec(x) + C <br><br>
        ∫1/(a<sup>2</sup>+x<sup>2</sup>) dx = (1/a)tan<sup>-1</sup>(x/a) + C <br><br>
        ∫1/(a<sup>2</sup>-x<sup>2</sup>) dx = (1/2a)ln((a+x)/(a-x)) + C <br><br>
        ∫1/(x<sup>2</sup>-a<sup>2</sup>) dx = (1/2a)ln((x-a)/(x+a)) + C <br><br>
        ∫1/√(x<sup>2</sup>±a<sup>2</sup>) dx = ln(x+√((x<sup>2</sup>±a<sup>2</sup>))) + C <br><br>
        ∫1/√(a<sup>2</sup>-x<sup>2</sup>) dx = sin<sup>-1</sup>(x/a) + C <br><br>
        ∫u(x)v(x) dx = u(x)*[∫v(x) dx] - ∫{[d/dx(u(x))]*∫v(x) dx} dx +C <br><br>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="bottom">
        <br>
        Thank You For Visiting My Page.
        <br>
        <br>
        <br>
        Contact Devloper Via <a href="mailto:dhruvilrathod2001@gmail.com">E-mail</a>.<br>
        <br>
    </div>
</body>
</html>
