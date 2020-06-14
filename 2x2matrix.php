<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATRIX</title>
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
        <a href="/calculator/matrix.php"><button class="act">MATRIX</button></a>
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
        2 X 2 MATRIX MULTIPLICATION
    </div>
    <br>
    <br>
    <div class="cntinbas">
        Enter Matrix 1 Elements:
        <br>
        <br>
        <input autocomplete="off" id="in1" class="inpd" onkeydown="fn1(event)">
        <input autocomplete="off" id="in2" class="inpd" onkeydown="fn2(event)">
        <br>
        <input autocomplete="off" id="in3" class="inpd" onkeydown="fn3(event)">
        <input autocomplete="off" id="in4" class="inpd" onkeydown="fn4(event)">
        <br>
        <br>
        Enter Matrix 2 Elements:
        <br>
        <br>
        <input autocomplete="off" id="in5" class="inpd" onkeydown="fn5(event)">
        <input autocomplete="off" id="in6" class="inpd" onkeydown="fn6(event)">
        <br>
        <input autocomplete="off" id="in7" class="inpd" onkeydown="fn7(event)">
        <input autocomplete="off" id="in8" class="inpd" onkeydown="fn(event)">
    <br>
    <br>
    <button class="ansbtn" onclick="mat()">Get Answer</button>
    <br>
    Answer:
    <br><br>
    <input class="inpd" id="op1">
    <input class="inpd" id="op2">
    <br>
    <input class="inpd" id="op3">
    <input class="inpd" id="op4">
    <script>
        function mat(){
            var a= Number(document.getElementById("in1").value);
            var b= Number(document.getElementById("in2").value);
            var c= Number(document.getElementById("in3").value);
            var d= Number(document.getElementById("in4").value);
            var e= Number(document.getElementById("in5").value);
            var f= Number(document.getElementById("in6").value);
            var g= Number(document.getElementById("in7").value);
            var h= Number(document.getElementById("in8").value);
            var x= a*e+b*g;
            var y= a*f+b*h;
            var z= c*e+d*g;
            var w= g*b+h*d; 
            x= document.getElementById("op1").value=x;
            y= document.getElementById("op2").value=y;
            z= document.getElementById("op3").value=z;
            w= document.getElementById("op4").value=w;
        }


                function fn(event){
                var key= event.which || event.keyCode;
                if(key==13){
                    mat();
                }
                if(key==46){
                    clear8();
                }
            }

            function clear1(){
                document.getElementById("in1").value="";
            }
            function clear2(){
                document.getElementById("in2").value="";
            }function clear3(){
                document.getElementById("in3").value="";
            }
            function clear4(){
                document.getElementById("in4").value="";
            }function clear5(){
                document.getElementById("in5").value="";
            }
            function clear6(){
                document.getElementById("in6").value="";
            }function clear7(){
                document.getElementById("in7").value="";
            }
            function clear8(){
                document.getElementById("in8").value="";
            }
















                    function fn1(event){
                var caller;
                var key;
                if(window.event){
                    caller = window.event.srcElement; //Get the event caller in IE.
                    key = window.event.keyCode; //Get the keycode in IE.
                }
                else{
                    caller = event.target; //Get the event caller in Firefox.
                    key = event.which; //Get the keycode in Firefox.
                }
                if (key == 13){
                    cTab = caller.tabIndex; //caller tabIndex.
                    maxTab = 0; //highest tabIndex (start at 0 to change)
                    minTab = cTab; //lowest tabIndex (this may change, but start at caller)
                    allById = document.getElementsByTagName("input"); //Get input elements.
                    allByIndex = []; //Storage for elements by index.
                    c = 0; //index of the caller in allByIndex (start at 0 to change)
                    i = 0; //generic indexer for allByIndex;
                for (id in allById){
                    allByIndex[i] = allById[id]; //Set allByIndex.
                    tab = allByIndex[i].tabIndex;
                    if (caller == allByIndex[i])
                        c = i; //Get the index of the caller.
                    if (tab > maxTab)
                        maxTab = tab; //Get the highest tabIndex on the page.
                    if (tab < minTab && tab >= 0)
                        minTab = tab; //Get the lowest positive tabIndex on the page.
                        i++;
                }
                //Loop through tab indexes from caller to highest.
                for (tab = cTab; tab <= maxTab; tab++){
                //Look for this tabIndex from the caller to the end of page.
                    for (i = c + 1; i < allByIndex.length; i++){
                        if (allByIndex[i].tabIndex == tab){
                            allByIndex[i].focus(); //Move to that element and stop.
                            return;
                        }
                    }
                //Look for the next tabIndex from the start of page to the caller.
                for (i = 0; i < c; i++){
                    if (allByIndex[i].tabIndex == tab + 1){
                        allByIndex[i].focus(); //Move to that element and stop.
                        return;
                    }
                }
                //Continue searching from the caller for the next tabIndex.
                }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }

                if(key==46){
                    clear1();
                }
}














function fn2(event){
                var caller;
                var key;
                if(window.event){
                    caller = window.event.srcElement; //Get the event caller in IE.
                    key = window.event.keyCode; //Get the keycode in IE.
                }
                else{
                    caller = event.target; //Get the event caller in Firefox.
                    key = event.which; //Get the keycode in Firefox.
                }
                if (key == 13){
                    cTab = caller.tabIndex; //caller tabIndex.
                    maxTab = 0; //highest tabIndex (start at 0 to change)
                    minTab = cTab; //lowest tabIndex (this may change, but start at caller)
                    allById = document.getElementsByTagName("input"); //Get input elements.
                    allByIndex = []; //Storage for elements by index.
                    c = 0; //index of the caller in allByIndex (start at 0 to change)
                    i = 0; //generic indexer for allByIndex;
                for (id in allById){
                    allByIndex[i] = allById[id]; //Set allByIndex.
                    tab = allByIndex[i].tabIndex;
                    if (caller == allByIndex[i])
                        c = i; //Get the index of the caller.
                    if (tab > maxTab)
                        maxTab = tab; //Get the highest tabIndex on the page.
                    if (tab < minTab && tab >= 0)
                        minTab = tab; //Get the lowest positive tabIndex on the page.
                        i++;
                }
                //Loop through tab indexes from caller to highest.
                for (tab = cTab; tab <= maxTab; tab++){
                //Look for this tabIndex from the caller to the end of page.
                    for (i = c + 1; i < allByIndex.length; i++){
                        if (allByIndex[i].tabIndex == tab){
                            allByIndex[i].focus(); //Move to that element and stop.
                            return;
                        }
                    }
                //Look for the next tabIndex from the start of page to the caller.
                for (i = 0; i < c; i++){
                    if (allByIndex[i].tabIndex == tab + 1){
                        allByIndex[i].focus(); //Move to that element and stop.
                        return;
                    }
                }
                //Continue searching from the caller for the next tabIndex.
                }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }

                if(key==46){
                    clear2();
                }
}





















function fn3(event){
                var caller;
                var key;
                if(window.event){
                    caller = window.event.srcElement; //Get the event caller in IE.
                    key = window.event.keyCode; //Get the keycode in IE.
                }
                else{
                    caller = event.target; //Get the event caller in Firefox.
                    key = event.which; //Get the keycode in Firefox.
                }
                if (key == 13){
                    cTab = caller.tabIndex; //caller tabIndex.
                    maxTab = 0; //highest tabIndex (start at 0 to change)
                    minTab = cTab; //lowest tabIndex (this may change, but start at caller)
                    allById = document.getElementsByTagName("input"); //Get input elements.
                    allByIndex = []; //Storage for elements by index.
                    c = 0; //index of the caller in allByIndex (start at 0 to change)
                    i = 0; //generic indexer for allByIndex;
                for (id in allById){
                    allByIndex[i] = allById[id]; //Set allByIndex.
                    tab = allByIndex[i].tabIndex;
                    if (caller == allByIndex[i])
                        c = i; //Get the index of the caller.
                    if (tab > maxTab)
                        maxTab = tab; //Get the highest tabIndex on the page.
                    if (tab < minTab && tab >= 0)
                        minTab = tab; //Get the lowest positive tabIndex on the page.
                        i++;
                }
                //Loop through tab indexes from caller to highest.
                for (tab = cTab; tab <= maxTab; tab++){
                //Look for this tabIndex from the caller to the end of page.
                    for (i = c + 1; i < allByIndex.length; i++){
                        if (allByIndex[i].tabIndex == tab){
                            allByIndex[i].focus(); //Move to that element and stop.
                            return;
                        }
                    }
                //Look for the next tabIndex from the start of page to the caller.
                for (i = 0; i < c; i++){
                    if (allByIndex[i].tabIndex == tab + 1){
                        allByIndex[i].focus(); //Move to that element and stop.
                        return;
                    }
                }
                //Continue searching from the caller for the next tabIndex.
                }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }

                if(key==46){
                    clear3();
                }
}


















function fn4(event){
                var caller;
                var key;
                if(window.event){
                    caller = window.event.srcElement; //Get the event caller in IE.
                    key = window.event.keyCode; //Get the keycode in IE.
                }
                else{
                    caller = event.target; //Get the event caller in Firefox.
                    key = event.which; //Get the keycode in Firefox.
                }
                if (key == 13){
                    cTab = caller.tabIndex; //caller tabIndex.
                    maxTab = 0; //highest tabIndex (start at 0 to change)
                    minTab = cTab; //lowest tabIndex (this may change, but start at caller)
                    allById = document.getElementsByTagName("input"); //Get input elements.
                    allByIndex = []; //Storage for elements by index.
                    c = 0; //index of the caller in allByIndex (start at 0 to change)
                    i = 0; //generic indexer for allByIndex;
                for (id in allById){
                    allByIndex[i] = allById[id]; //Set allByIndex.
                    tab = allByIndex[i].tabIndex;
                    if (caller == allByIndex[i])
                        c = i; //Get the index of the caller.
                    if (tab > maxTab)
                        maxTab = tab; //Get the highest tabIndex on the page.
                    if (tab < minTab && tab >= 0)
                        minTab = tab; //Get the lowest positive tabIndex on the page.
                        i++;
                }
                //Loop through tab indexes from caller to highest.
                for (tab = cTab; tab <= maxTab; tab++){
                //Look for this tabIndex from the caller to the end of page.
                    for (i = c + 1; i < allByIndex.length; i++){
                        if (allByIndex[i].tabIndex == tab){
                            allByIndex[i].focus(); //Move to that element and stop.
                            return;
                        }
                    }
                //Look for the next tabIndex from the start of page to the caller.
                for (i = 0; i < c; i++){
                    if (allByIndex[i].tabIndex == tab + 1){
                        allByIndex[i].focus(); //Move to that element and stop.
                        return;
                    }
                }
                //Continue searching from the caller for the next tabIndex.
                }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }

                if(key==46){
                    clear4();
                }
}




























function fn5(event){
                var caller;
                var key;
                if(window.event){
                    caller = window.event.srcElement; //Get the event caller in IE.
                    key = window.event.keyCode; //Get the keycode in IE.
                }
                else{
                    caller = event.target; //Get the event caller in Firefox.
                    key = event.which; //Get the keycode in Firefox.
                }
                if (key == 13){
                    cTab = caller.tabIndex; //caller tabIndex.
                    maxTab = 0; //highest tabIndex (start at 0 to change)
                    minTab = cTab; //lowest tabIndex (this may change, but start at caller)
                    allById = document.getElementsByTagName("input"); //Get input elements.
                    allByIndex = []; //Storage for elements by index.
                    c = 0; //index of the caller in allByIndex (start at 0 to change)
                    i = 0; //generic indexer for allByIndex;
                for (id in allById){
                    allByIndex[i] = allById[id]; //Set allByIndex.
                    tab = allByIndex[i].tabIndex;
                    if (caller == allByIndex[i])
                        c = i; //Get the index of the caller.
                    if (tab > maxTab)
                        maxTab = tab; //Get the highest tabIndex on the page.
                    if (tab < minTab && tab >= 0)
                        minTab = tab; //Get the lowest positive tabIndex on the page.
                        i++;
                }
                //Loop through tab indexes from caller to highest.
                for (tab = cTab; tab <= maxTab; tab++){
                //Look for this tabIndex from the caller to the end of page.
                    for (i = c + 1; i < allByIndex.length; i++){
                        if (allByIndex[i].tabIndex == tab){
                            allByIndex[i].focus(); //Move to that element and stop.
                            return;
                        }
                    }
                //Look for the next tabIndex from the start of page to the caller.
                for (i = 0; i < c; i++){
                    if (allByIndex[i].tabIndex == tab + 1){
                        allByIndex[i].focus(); //Move to that element and stop.
                        return;
                    }
                }
                //Continue searching from the caller for the next tabIndex.
                }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }

                if(key==46){
                    clear5();
                }
}




















function fn6(event){
                var caller;
                var key;
                if(window.event){
                    caller = window.event.srcElement; //Get the event caller in IE.
                    key = window.event.keyCode; //Get the keycode in IE.
                }
                else{
                    caller = event.target; //Get the event caller in Firefox.
                    key = event.which; //Get the keycode in Firefox.
                }
                if (key == 13){
                    cTab = caller.tabIndex; //caller tabIndex.
                    maxTab = 0; //highest tabIndex (start at 0 to change)
                    minTab = cTab; //lowest tabIndex (this may change, but start at caller)
                    allById = document.getElementsByTagName("input"); //Get input elements.
                    allByIndex = []; //Storage for elements by index.
                    c = 0; //index of the caller in allByIndex (start at 0 to change)
                    i = 0; //generic indexer for allByIndex;
                for (id in allById){
                    allByIndex[i] = allById[id]; //Set allByIndex.
                    tab = allByIndex[i].tabIndex;
                    if (caller == allByIndex[i])
                        c = i; //Get the index of the caller.
                    if (tab > maxTab)
                        maxTab = tab; //Get the highest tabIndex on the page.
                    if (tab < minTab && tab >= 0)
                        minTab = tab; //Get the lowest positive tabIndex on the page.
                        i++;
                }
                //Loop through tab indexes from caller to highest.
                for (tab = cTab; tab <= maxTab; tab++){
                //Look for this tabIndex from the caller to the end of page.
                    for (i = c + 1; i < allByIndex.length; i++){
                        if (allByIndex[i].tabIndex == tab){
                            allByIndex[i].focus(); //Move to that element and stop.
                            return;
                        }
                    }
                //Look for the next tabIndex from the start of page to the caller.
                for (i = 0; i < c; i++){
                    if (allByIndex[i].tabIndex == tab + 1){
                        allByIndex[i].focus(); //Move to that element and stop.
                        return;
                    }
                }
                //Continue searching from the caller for the next tabIndex.
                }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }

                if(key==46){
                    clear6();
                }
}















function fn7(event){
                var caller;
                var key;
                if(window.event){
                    caller = window.event.srcElement; //Get the event caller in IE.
                    key = window.event.keyCode; //Get the keycode in IE.
                }
                else{
                    caller = event.target; //Get the event caller in Firefox.
                    key = event.which; //Get the keycode in Firefox.
                }
                if (key == 13){
                    cTab = caller.tabIndex; //caller tabIndex.
                    maxTab = 0; //highest tabIndex (start at 0 to change)
                    minTab = cTab; //lowest tabIndex (this may change, but start at caller)
                    allById = document.getElementsByTagName("input"); //Get input elements.
                    allByIndex = []; //Storage for elements by index.
                    c = 0; //index of the caller in allByIndex (start at 0 to change)
                    i = 0; //generic indexer for allByIndex;
                for (id in allById){
                    allByIndex[i] = allById[id]; //Set allByIndex.
                    tab = allByIndex[i].tabIndex;
                    if (caller == allByIndex[i])
                        c = i; //Get the index of the caller.
                    if (tab > maxTab)
                        maxTab = tab; //Get the highest tabIndex on the page.
                    if (tab < minTab && tab >= 0)
                        minTab = tab; //Get the lowest positive tabIndex on the page.
                        i++;
                }
                //Loop through tab indexes from caller to highest.
                for (tab = cTab; tab <= maxTab; tab++){
                //Look for this tabIndex from the caller to the end of page.
                    for (i = c + 1; i < allByIndex.length; i++){
                        if (allByIndex[i].tabIndex == tab){
                            allByIndex[i].focus(); //Move to that element and stop.
                            return;
                        }
                    }
                //Look for the next tabIndex from the start of page to the caller.
                for (i = 0; i < c; i++){
                    if (allByIndex[i].tabIndex == tab + 1){
                        allByIndex[i].focus(); //Move to that element and stop.
                        return;
                    }
                }
                //Continue searching from the caller for the next tabIndex.
                }

        //The caller was the last element with the highest tabIndex,
        //so find the first element with the lowest tabIndex.
        for (i = 0; i < allByIndex.length; i++)
        {
            if (allByIndex[i].tabIndex == minTab)
            {
                allByIndex[i].focus(); //Move to that element and stop.
                return;
            }
        }
    }

                if(key==46){
                    clear7();
                }
}




















    </script>
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
