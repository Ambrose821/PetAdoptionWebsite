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
            <title>Give Away</title>
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
                            <li class ="active"><a href="A2Q7GiveAway.php" class ="fas">Have a pet to give away</a></li>
                            <li class ="non-active"><a href="A2Q2Contact.php" class ="fas">Contact Us</a></li>
                            <?php if (!$isLoggedIn){echo"<li class = \"non-active\"><a href=\"CreateAccount.php\" class =\"fas\">Create Account</a></li>";}?>
                            <?php if ($isLoggedIn){echo"<li class = \"non-active\"><a href=\"logout.php\" class =\"fas\">Log out</a></li>";}?>
                        </ul>
                    </div>
                    <div class="content">
                          <?php include 'header.php';?>
                        <div class ="main"> 
                            <?php
                            if($isLoggedIn){
                                include 'giveAwayForm.php';
                      
                            }
                            else{
                                include 'loginForm.php';
                            }
                            ?>
                        </div>
                         <?php include 'footer.php';?>
                    </div>
                </div>
            <script src =GiveAway.js.js></script>
        </body>

    
</html>