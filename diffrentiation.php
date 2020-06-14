
<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIFFERENTIATION</title>
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
        <a href="/calculator/integration.php"><button class="butn">INTEGRATION</button></a>
        <a href="/calculator/diffrentiation.php"><button class="act" style="margin-right: 1vw;">DIFFRENTIATION</button></a>
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
        FORMULAS OF DIFFRENTIATION
    </div>
    <br>
    <br>
    <div class="cntinbas">

        d/dx (x<sup>n</sup>) = nx<sup>n-1</sup><br><br>
        d/dx (a) = 0<br><br>
        d/dx (a*f(x)) = a*f′(x)<br><br>
        d/dx (f(x) ± g(x)) = f′(x) ± g′(x)<br><br>
        d/dx (f(x)*g(x)) = f(x)g′(x) + g(x)f′(x) <br><br>
        d/dx (f(x)/g(x)) = [g(x)f′(x)–f(x)g′(x)]/g(x)<sup>2</sup> <br><br>
        d/dx (sin x) = cos(x)<br><br>
        d/dx (cos x) = –sin(x)<br><br>
        d/dx (tan x) = sec<sup>2</sup>(x)<br><br>
        d/dx (cot x= − cosec<sup>2</sup>(x)<br><br>
        d/dx (sec x) = sec(x)tan(x)<br><br>
        d/dx (csc x) = −cosec(x)cot(x)<br><br>
        d/dx (sinh x) = cosh(x)<br><br>
        d/dx (cosh x) = sinh(x)<br><br>
        d/dx (tanh x) = sech<sup>2</sup>(x)<br><br>
        d/dx (coth x) = −cosech<sup>2</sup>(x)<br><br>
        d/dx (sech x) = −sech(x)tanh(x)<br><br>
        d/dx (csch x) = −cosech(x)coth(x)<br><br>
        d/dx(sin<sup>-1</sup>(x)) = 1/√(1–x<sup>2</sup>) <br><br>
        d/dx(cos<sup>-1</sup>(x)) = -1/√(1–x<sup>2</sup>) <br><br>
        d/dx(tan<sup>-1</sup>(x)) = 1/√(1+x<sup>2</sup>) <br><br>
        d/dx(cot<sup>-1</sup>(x)) = -1/√(1+x<sup>2</sup>) <br><br>
        d/dx(sec<sup>-1</sup>(x)) = 1/|x|√(x<sup>2</sup>-1) <br><br>
        d/dx(cosec<sup>-1</sup>(x)) = -1/|x|√(x<sup>2</sup>-1) <br><br>
        d/dx (a<sup>x</sup>) = a<sup>x</sup>ln(a)<br><br>
        d/dx (e<sup>x</sup>) = e<sup>x</sup><br><br>
        d/dx (log<sub>a</sub>x) = 1/(ln (a))*x<br><br>
        d/dx (ln x) = 1/x<br><br>
        dy/dx = (dy/du)*(du/dx) = (dy/dv)*(dv/du)*(du/dx)<br><br>





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
