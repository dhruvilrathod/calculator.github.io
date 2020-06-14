<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="/calculator/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <style>
               .link1{
            color: aliceblue;
            font-family: 'Nunito', sans-serif;
            font-size: 3vw;
            
        }    
        #inpubtn:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="top1">
        Create A New Account
    </div>
    <div class="cntinbas">
        <form id="signup" action="newsignup.php" method="post">
        Name: <input name="name" type="text" style="width: 30vw;" class="inp" id="in1" onkeydown="fn1(event)" placeholder="First-name Surname" required="" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Your Name.')" autocomplete="off"/>
        <br>
        <br>
        Email: <input name="email" pattern=".+@foo.com"  type="email" style="width: 30vw;" class="inp" id="in2" onkeydown="fn2(event)" placeholder="abc@xyz.com" required="" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Email Address.')" autocomplete="off"/>
        <br><br>
        Password: <input name="password" style="width: 20vw;" type="password" class="inp" id="in3" onkeydown="fn3(event)" required="" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Password.')">

        <br>
        
        <br>
        Confirm Password: <input style="width: 20vw;" type="password" class="inp" id="in4" onkeydown="fn(event)" required="" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Confirm Password.')">
        
        <br>
        <br>
        <input id="inpubtn" onclick="sub1()" style="width: 25vw;" name="submit1" value="Create Account" class="ansbtn" readonly>
        <br>
        </form>
        Already Hava An Account? <a class="link1" href="/calculator/login.php">Log In</a>
        <script>




            function fn(event){
                var key = event.which || event.keyCode;
                if(key==13){
                    ps();
                }
                if(key == 46){
                    clear4();
                }
            }

            function sub1(){
                var x= document.getElementById("in3").value;
                var y= document.getElementById("in4").value;
                if(ps()){
                    document.getElementById("signup").submit();
                }
            }

            function ps(){
                var em = '^([a-zA-Z0-9_.-]+)@([a-zA-Z0-9_.-]+)\\.([a-zA-Z]{2,5})$';
                var x= document.getElementById("in3").value;
                var y= document.getElementById("in4").value;
                var z= document.getElementById("in2").value;
                var w= document.getElementById("in1").value;
                if(x==='' || y==='' || z==='' || w===''){
                    alert("Please Fill All Details.");
                    return false;
                }
                else if(!(z).match(em)){
                    alert("Please Enter Valid Email address.");
                }
                else if(x.length<6){
                    alert("Password must be at least 6 characters long.");
                    return false;
                }
                else if(x!==y){
                    alert("Password Didn't Match.");
                    return false;
                    
                }
                else{
                    return true;
                }
            }





            function clear1(){
                document.getElementById("in1").value="";
            }function clear2(){
                document.getElementById("in2").value="";
            }function clear3(){
                document.getElementById("in3").value="";
            }function clear4(){
                document.getElementById("in4").value="";
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
