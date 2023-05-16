<?php
session_start();
$isLoggedIn = false;



if (isset($_SESSION['username'])) {
   $isLoggedIn = true;
 
} else {
    $isLoggedIn = false;
 
}

?>
<!Doctype html>
<html lang = "en">
        <head>
            <meta charset="utf-8">
            <title>Home</title>
           <link rel ="stylesheet" href ="A2Q7CSS.css">               
        </head>
    
        <body>
                <div class = "wrapper">
                    <div class ="navBar">
                        <h2>Menu</h2>
                        <ul>
                            <li class ="non-active"><a href="index.php" class ="fas">Home</a></li>
                            
                            <li class ="non-active"><a href="A2Q7FindPet.php" class ="fas">Find A Dog/Cat</a></li>
                            <li class ="non-active"><a href="A2Q2DogInfo.php" class ="fas">Dog Care</a></li>
                            <li class ="non-active"><a href="A2Q2CatInfo%20-%20Copy.php" class ="fas" >Cat Care</a></li>
                            <li class ="non-active"><a href="A2Q7GiveAway.php" class ="fas">Have a pet to give away</a></li>
                            <li class ="non-active"><a href="A2Q2Contact.php" class ="fas">Contact Us</a></li>
                             <?php if (!$isLoggedIn){echo"<li class = \"active\"><a href=\"CreateAccount.php\" class =\"fas\">CreateAccount</a></li>";}?>
                         
                        </ul>
                    </div>
                   
                    <div class="content">
                        <?php include 'header.php';?>
                        <div class ="main"> 
                            <h2> Welcome!</h2><br>
                            <form action ="process_signup.php" method="post" onsubmit="return checkUserInfo();">
                                <fieldset>
                                    <legend>Sign-Up</legend>
                                    <h4> Welcome to McLaughlin Pet adoption! We just need to gather a little bit info from you before you can begin</h4>
                                    <label>Choose a Username</label>
                                    <input type ="text" name = "username" id= "username"><br><br>
                                    <label>Choose Password</label>
                                     <input type ="text" name = "pass" id= "pass"><br><br>
                                    <input type="submit" name="submit" id="submit" value="Submit" />
                                    <input type ="reset" value = "Reset">
                                </fieldset>
                            
                            </form>
                        
                        </div>
                        <?php include 'footer.php';?>
                    </div>
                </div>
            
           <script src ="CreateAccountJavaScript.js"></script>
        </body>

    
</html>