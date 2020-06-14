
<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC CALCULATOR</title>
    <link rel="stylesheet" href="/calculator/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <style>
        
    
        .link1{
            color: aliceblue;
            font-family: 'Nunito', sans-serif;
            text-align: center;
            font-size: 3vw;
        }
    
    .a1{
            margin-left: 2vw;
            font-size: 8vw;
            font-family: 'Pangolin', cursive;
            color: aliceblue;
            word-spacing: 2vw;
        }
        .a2{
            text-align: right;
            margin-right: 2vw;
            font-size: 4vw;
            font-family: 'Nunito', sans-serif;
            color: aliceblue;
        }



           .key1{
            background-color: rgb(63, 61, 61);
            color: aliceblue;
            width: 3vw;
            border-radius: 10px;
            border-width: 0px;
            margin-right: 1vw;
            font-size: 3vw;
            text-align: center;
            width: 6VW;
        }
        .key2{
            background-color: rgb(116, 116, 116);
            color: aliceblue;
            width: 3vw;
            border-radius: 10px;
            border-width: 0px;
            margin-right: 1vw;
            font-size: 3vw;
            text-align: center;
            width: 6VW;
        }
        .key3{
            background-color: orangered;
            color: aliceblue;
            width: 3vw;
            border-radius: 10px;
            border-width: 0px;
            margin-right: 1vw;
            font-size: 3vw;
            text-align: center;
            width: 6VW;
        }
        table{
            background-color: rgb(25, 26, 26);
            margin: 0px auto;
            
        }
    
    </style>
</head>
<body>
    <div class="top">
        <img class="img1" src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Math_2.png" alt="maths">
        <a href="/calculator/index1.php"><button class="butn">HOME</button></a>
        <div class="drp">
        <a href="#"><button class="act">BASIC OPERATIONS</button></a>
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
        BASIC MATHEMATICS CALCULATION:
    </div>
    <br>
    <br>
    <br>
    <FORM NAME="Calc" style="height: 150px;">
        <TABLE style="border-width: 2px; border-color: black; border-style: solid; text-align: justify; border-radius: 10px;">
        <TR>
        <TD>
        <INPUT onkeydown="fn(event)" NAME="Input" style="font-size: 2vw; border-radius: 10px; width: 100%;border-width: 0px; background-color: black; color: aliceblue; text-align: right;height: 5vw;" autocomplete="off">
        <INPUT  NAME="output" style="width: 0px; border-width: 0px; display: none">
        <br>
        <br>
        </TD>
        </TR>
        <TR>
        <TD>
        <INPUT class="key1" TYPE="button" NAME="one"   VALUE="  1  " OnClick="Calc.Input.value += '1'">
        <INPUT class="key1" TYPE="button" NAME="two"   VALUE="  2  " OnCLick="Calc.Input.value += '2'">
        <INPUT class="key1" TYPE="button" NAME="three" VALUE="  3  " OnClick="Calc.Input.value += '3'">
        <INPUT class="key3" TYPE="button" NAME="plus"  VALUE="  +  " OnClick="Calc.Input.value += ' + '">
        <br>
        <br>
        <INPUT class="key1" TYPE="button" NAME="four"  VALUE="  4  " OnClick="Calc.Input.value += '4'">
        <INPUT class="key1" TYPE="button" NAME="five"  VALUE="  5  " OnCLick="Calc.Input.value += '5'">
        <INPUT class="key1" TYPE="button" NAME="six"   VALUE="  6  " OnClick="Calc.Input.value += '6'">
        <INPUT class="key3" TYPE="button" NAME="minus" VALUE="  -  " OnClick="Calc.Input.value += ' - '">
        <br>
        <br>
        <INPUT class="key1" TYPE="button" NAME="seven" VALUE="  7  " OnClick="Calc.Input.value += '7'">
        <INPUT class="key1" TYPE="button" NAME="eight" VALUE="  8  " OnCLick="Calc.Input.value += '8'">
        <INPUT class="key1" TYPE="button" NAME="nine"  VALUE="  9  " OnClick="Calc.Input.value += '9'">
        <INPUT class="key3" TYPE="button" NAME="times" VALUE="  x  " OnClick="Calc.Input.value += ' * '">
        <br>
        <br>
        <INPUT class="key2" TYPE="reset" NAME="clear" VALUE="  c  " OnClick="clear()">
        <INPUT class="key2" TYPE="button" NAME="zero"  VALUE="  0  " OnClick="Calc.Input.value += '0'">
        <INPUT class="key2" TYPE="button" NAME="DoIt"  VALUE="  =  " onClick="answer1()" >
        <INPUT class="key3" TYPE="button" NAME="div"   VALUE="  /  " OnClick="Calc.Input.value += ' / '">
        <br>
        <script>
            function answer1(){
                var a=Calc.Input.value= eval(Calc.Input.value);
            }
            function fn(event){
                var key= event.which || event.keyCode;
                if(key==13){
                    answer1();
                }
                if(key==46){
                    clear();
                }
            }
            function clear(){
                var b=Calc.Input.value = '';
            }
        </script>
        </TD>
        </TR>
        </TABLE>
        </FORM>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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
