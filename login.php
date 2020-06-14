<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
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
		

	
    </style>
</head>
<body>
    <div class="top1">
        Please Log In To Your Account
    </div>
    <div class="cntinbas">
    	
        <form method="post" action= "authentication.php">
        Email Id: <input name="user" type="email" style="width: 30vw;" class="inp" id="in1" onkeydown="fn1(event)" placeholder="acb@xyz.com" required="" oninvalid="this.setCustomValidity('Please Enter Email Address.')" oninput="setCustomValidity('')" autocomplete="off">
        <br>
        <br>
        Password: <input name="pass" style="width: 20vw;" type="password" class="inp" id="in2" onkeydown="fn(event)" required="" oninvalid="this.setCustomValidity('Please Enter Password.')" oninput="setCustomValidity('')">
        <br>
        <div style="font-size: 2vw;">
        <br>
        <?php 
    	if(isset($_SESSION["invalid_login"])){
        echo $_SESSION["invalid_login"];
    	} 
    	?>
    	</div>
    	<br>
        <button class="ansbtn">Log In</button>
        </form>
        <br>
        Don't Hava An Account? <a class="link1" href="/calculator/signup.php">Sign Up</a>
        <script>

            
            function clear1(){
                document.getElementById("in1").value="";
            }
            function clear2(){
                document.getElementById("in2").value="";
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
