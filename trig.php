<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIGONOMETRY</title>
    <link rel="stylesheet" href="/calculator/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <script src="/calculator/inpscript.js"></script>
     <style>
        img{
            width: 40vw;
        }
        .im{
            width: 55vw;
        }
    </style>
    
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
        <a href="/calculator/trig.php"><button class="act">TRIGONOMETRY</button></a>
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
        FORMULAS OF TRIGONOMETRY
    </div>
    <br>
    <br>
    <br>
    <div class="cntinbas">
        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a384801cf528aaf3cd6cbf1728a4434d12b555ed">
        <br>
        <br>
        <br>
        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f8b2a61033a85cf52334e18c339684a8e0737e9a" alt="">
        <br>
        <br>
        <br>
        <img class="im" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/26695eaa43e49600f496aa9f09faf70755e6a035" alt="">
        <br>
        <br>
        <br>
        <img class="im" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/5002e2b8611901edd865b97573ef959826292241" alt="">
        <br>
        <br>
        <br>
        <img class="im" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c2b0fad5e45d6027da193f6ae9392d9a0d95277d" alt="">
        <br>
        <br>
        <br>
        <img class="im" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/087f418e780f9d7adac7c4c9f90e241f60838b86" alt="">
        <br>
        <br>
        <br>
        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/90e1e648d37897b7cf601fc95a51d3ae90615737" alt="">
        <br>
        <br>
        <br>
        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b0484ed6255ac72bda9bc78d14a12c622ecccd94" alt="">
        <br>
        <br>
        <br>
        <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/676d3de0aa5f6fa889e8513727b41966a57e944f" alt="">
        <br>
        <br>
        <br>
        <div>
            Angle Conversion
            <br>
            <br>
                <div style="font-size: 2vw;">
                Press Enter To Have An Answer
                <br>
                </div>
                <br>
            Enter Degree: <input autocomplete="off" class="inp" id="in1" onkeydown="fn(event)">    Or   Enter Radian: <input autocomplete="off" class="inp" id="in2" onkeydown="fn1(event)">
            <br>
            </div>
            
            <br>
            <div>
                Trigonometry Functions And Their Inverse Calculation
                <br>
                <br>
                sin(<input autocomplete="off" class="inpd" id="in3" onkeydown="fn2(event)" placeholder="Deg">or<input class="inpd" id="in4" onkeydown="fn3(event)" placeholder="Rad">)=<input autocomplete="off" class="inpd" id="op1">
                <br>
                sin<sup>-1</sup>(<input autocomplete="off" class="inpd" id="in5" onkeydown="fn4(event)">)= <input class="inpd" id="op2" placeholder="Deg"> or <input class="inpd" id="op3" autocomplete="off" placeholder="Rad">
                <br><br>
                cos(<input autocomplete="off" class="inpd" id="in6" onkeydown="fn5(event)" placeholder="Deg">or<input class="inpd" id="in7" onkeydown="fn6(event)" placeholder="Rad">)=<input autocomplete="off" class="inpd" id="op4">
                <br>
                cos<sup>-1</sup>(<input autocomplete="off" class="inpd" id="in8" onkeydown="fn7(event)">)= <input class="inpd" id="op5" placeholder="Deg"> or <input class="inpd" id="op6" autocomplete="off" placeholder="Rad">
                <br><br>
                tan(<input autocomplete="off" class="inpd" id="in9" onkeydown="fn8(event)" placeholder="Deg">or<input class="inpd" id="in10" onkeydown="fn9(event)" placeholder="Rad">)=<input autocomplete="off" class="inpd" id="op7">
                <br>
                tan<sup>-1</sup>(<input autocomplete="off" class="inpd" id="in11" onkeydown="fn10(event)">)= <input class="inpd" id="op8" placeholder="Deg"> or <input class="inpd" id="op9" autocomplete="off" placeholder="Rad">
                <br><br>
                cosec(<input autocomplete="off" class="inpd" id="in12" onkeydown="fn11(event)" placeholder="Deg">or<input class="inpd" id="in13" onkeydown="fn12(event)" placeholder="Rad">)=<input autocomplete="off" class="inpd" id="op10">
                <br>
                cosec<sup>-1</sup>(<input autocomplete="off" class="inpd" id="in14" onkeydown="fn13(event)">)= <input class="inpd" id="op11" placeholder="Deg"> or <input class="inpd" id="op12" autocomplete="off" placeholder="Rad">
                <br><br>
                sec(<input class="inpd" autocomplete="off" id="in15" onkeydown="fn14(event)" placeholder="Deg">or<input class="inpd" id="in16" onkeydown="fn15(event)" placeholder="Rad">)=<input autocomplete="off" class="inpd" id="op13">
                <br>
                sec<sup>-1</sup>(<input autocomplete="off" class="inpd" id="in17" onkeydown="fn16(event)">)= <input class="inpd" id="op14" placeholder="Deg"> or <input class="inpd" id="op15" autocomplete="off" placeholder="Rad">
                <br><br>
                cot(<input class="inpd" autocomplete="off" id="in18" onkeydown="fn17(event)" placeholder="Deg">or<input class="inpd" id="in19" onkeydown="fn18(event)" placeholder="Rad">)=<input autocomplete="off" class="inpd" id="op16">
                <br>
                cot<sup>-1</sup>(<input autocomplete="off" class="inpd" id="in20" onkeydown="fn19(event)">)= <input class="inpd" id="op17" placeholder="Deg"> or <input class="inpd" id="op18" autocomplete="off" placeholder="Rad">
            </div>
            
            
            
            
            
            
            
            
            <script>
                function con1(){
                    var pi= Number(Math.PI);
                    var x=Number(document.getElementById("in1").value);
                    var z=x*pi/180;
                    z=document.getElementById("in2").value=z;
                }
                function con2(){
                    var pi=Number(Math.PI);        
                    var y=Number(document.getElementById("in2").value);
                    z= y*180/pi;
                    z= document.getElementById("in1").value=z;
                }
                function fn(event){
                    var key= event.which || event.keyCode;
                    if(key==13){
                        con1();
                    }
                    if(key==46){
                        clear1();
                    }
                }
                function fn1(event){
                    var key= event.which || event.keyCode;
                    if(key==13){
                        con2();
                    }
                    if(key==46){
                        clear2();
                    }
                }






            function clear1(){
                document.getElementById("in1").value="";
            }
            function clear2(){
                document.getElementById("in2").value="";
            }
            function clear3(){
                document.getElementById("in3").value="";
            }
            function clear4(){
                document.getElementById("in4").value="";
            }
            function clear5(){
                document.getElementById("in5").value="";
            }function clear6(){
                document.getElementById("in6").value="";
            }
            function clear7(){
                document.getElementById("in7").value="";
            }
            function clear8(){
                document.getElementById("in8").value="";
            }
            function clear9(){
                document.getElementById("in9").value="";
            }
            function clear10(){
                document.getElementById("in10").value="";
            }
            function clear11(){
                document.getElementById("in11").value="";
            }
            function clear12(){
                document.getElementById("in12").value="";
            }
            function clear13(){
                document.getElementById("in13").value="";
            }
            function clear14(){
                document.getElementById("in14").value="";
            }
            function clear15(){
                document.getElementById("in15").value="";
            }
            function clear16(){
                document.getElementById("in16").value="";
            }
            function clear17(){
                document.getElementById("in17").value="";
            }
            function clear18(){
                document.getElementById("in18").value="";
            }
            function clear19(){
                document.getElementById("in19").value="";
            }
            function clear20(){
                document.getElementById("in20").value="";
            }







            function sin1(){
                var pi = Math.PI;
                var x= Number(document.getElementById("in3").value);
                if(x<0 || x>90){
                    alert("Please Enter Between 0 to 90");
                } 
                else{
                var y= Math.sin(x*pi/180);
                y= document.getElementById("op1").value=y;
                }
            }
            function sin2(){
                var x=Number(document.getElementById("in4").value);
                if(x<0 || x>1.57079){
                    alert("Please Enter Between 0 to 1.5707");
                }
                else{
                var y= Math.sin(x);
                y= document.getElementById("op1").value=y;
            }}
            
            function fn2(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        sin1();
                    }
                    if(key==46){
                        clear3();
                    }
            }
            function fn3(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        sin2();
                    }
                    if(key==46){
                        clear4();
                    }
            }
            function sini(){
                var pi= Math.PI;
                var x=Number(document.getElementById("in5").value);
                var y=Math.asin(x);
                var z=y*180/pi;
                z= document.getElementById("op2").value=z;
                y= document.getElementById("op3").value=y;
            }
            function fn4(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        sini();
                    }
                    if(key==46){
                        clear5();
                    }
            }
            







            function cos1(){
                var pi = Math.PI;
                var x= Number(document.getElementById("in6").value);
                if(x<0 || x>90){
                    alert("Please Enter Between 0 to 90");
                }
                else{
                var y= Math.cos(x*pi/180);
                y= document.getElementById("op4").value=y;
            }}
            function cos2(){
                var x=Number(document.getElementById("in7").value);
                if(x<0 || x>1.57079){
                    alert("Please Enter Between 0 to 1.5707");
                }
                else{
                var y= Math.cos(x);
                y= document.getElementById("op4").value=y;
            }}
            
            function fn5(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        cos1();
                    }
                    if(key==46){
                        clear6();
                    }
            }
            function fn6(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        cos2();
                    }
                    if(key==46){
                        clear7();
                    }
            }
            function cosi(){
                var pi= Math.PI;
                var x=Number(document.getElementById("in8").value);
                var y=Math.acos(x);
                var z=y*180/pi;
                y= document.getElementById("op5").value=y;
                z= document.getElementById("op6").value=z;
            }
            function fn7(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        cosi();
                    }
                    if(key==46){
                        clear8();
                    }
            }
            






            function tan1(){
                var pi = Math.PI;
                var x= Number(document.getElementById("in9").value);
                if(x<0 || x>90){
                    alert("Please Enter Between 0 to 90");
                }
                else{
                var y= Math.tan(x*pi/180);
                y= document.getElementById("op7").value=y;
            }}
            function tan2(){
                var x=Number(document.getElementById("in10").value);
                if(x<0 || x>1.57079){
                    alert("Please Enter Between 0 to 1.5707");
                }
                else{
                var y= Math.tan(x);
                y= document.getElementById("op7").value=y;
            }}
            
            function fn8(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        tan1();
                    }
                    if(key==46){
                        clear9();
                    }
            }
            function fn9(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        tan2();
                    }
                    if(key==46){
                        clear10();
                    }
            }
            function tani(){
                var pi= Math.PI;
                var x=Number(document.getElementById("in11").value);
                var y=Math.atan(x);
                var z=y*180/pi;
                y= document.getElementById("op8").value=y;
                z= document.getElementById("op9").value=z;
            }
            function fn10(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        tani();
                    }
                    if(key==46){
                        clear11();
                    }
            }
            






            function cosec1(){
                var pi = Math.PI;
                var x= Number(document.getElementById("in12").value);
                if(x<0 || x>90){
                    alert("Please Enter Between 0 to 90");
                }
                else{
                var y= 1/Math.sin(x*pi/180);
                y= document.getElementById("op10").value=y;
            }}
            function cosec2(){
                var x=Number(document.getElementById("in13").value);
                if(x<0 || x>1.57079){
                    alert("Please Enter Between 0 to 1.5707");
                }
                else{
                var y=1/Math.sin(x);
                y= document.getElementById("op10").value=y;
            }}
            
            function fn11(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        cosec1();
                    }
                    if(key==46){
                        clear12();
                    }
            }
            function fn12(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        cosec2();
                    }
                    if(key==46){
                        clear13();
                    }
            }
            function coseci(){
                var pi= Math.PI;
                var x=Number(document.getElementById("in14").value);
                var y=Math.asin(1/x);
                var z=y*180/pi;
                y= document.getElementById("op11").value=y;
                z= document.getElementById("op12").value=z;
            }
            function fn13(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        coseci();
                    }
                    if(key==46){
                        clear14();
                    }
            }
            






            function sec1(){
                var pi = Math.PI;
                var x= Number(document.getElementById("in15").value);
                if(x<0 || x>90){
                    alert("Please Enter Between 0 to 90");
                }
                else{
                var y= 1/Math.cos(x*pi/180);
                y= document.getElementById("op13").value=y;
            }}
            function sec2(){
                var x=Number(document.getElementById("in16").value);
                if(x<0 || x>1.57079){
                    alert("Please Enter Between 0 to 1.5707");
                }
                else{ 
                var y= 1/Math.cos(x);
                y= document.getElementById("op13").value=y;
            }}
            
            function fn14(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        sec1();
                    }
                    if(key==46){
                        clear15();
                    }
            }
            function fn15(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        sec2();
                    }
                    if(key==46){
                        clear16();
                    }
            }
            function seci(){
                var pi= Math.PI;
                var x=Number(document.getElementById("in17").value);
                var y=Math.acos(1/x);
                var z=y*180/pi;
                y= document.getElementById("op14").value=y;
                z= document.getElementById("op15").value=z;
            }
            function fn16(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        seci();
                    }
                    if(key==46){
                        clear17();
                    }
            }
            






            function cot1(){
                var pi = Math.PI;
                var x= Number(document.getElementById("in18").value);
                if(x<0 || x>90){
                    alert("Please Enter Between 0 to 90");
                }
                else{
                var y= 1/Math.tan(x*pi/180);
                y= document.getElementById("op16").value=y;
            }}
            function cot2(){
                var x=Number(document.getElementById("in19").value);
                if(x<0 || x>1.57079){
                    alert("Please Enter Between 0 to 1.5707");
                }
                else{
                var y= 1/Math.tan(x);
                y= document.getElementById("op16").value=y;
            }}
            
            function fn17(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        cot1();
                    }
                    if(key==46){
                        clear18();
                    }
            }
            function fn18(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        cot2();
                    }
                    if(key==46){
                        clear19();
                    }
            }
            function coti(){
                var pi= Math.PI;
                var x=Number(document.getElementById("in20").value);
                var y=Math.atan(1/x);
                var z=y*180/pi;
                y= document.getElementById("op17").value=y;
                z= document.getElementById("op18").value=z;
            }
            function fn19(event){
                var key= event.which || event.keyCode;
                    if(key==13){
                        coti();
                    }
                    if(key==46){
                        clear20();
                    }
            }
            




            </script>
        </div>
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
        Contect Me Via <a href="mailto:dhruvilrathod2001@gmail.com">E-mail</a>.<br>
        <br>
    </div>
</body>
</html>
