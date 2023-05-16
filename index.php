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
                            <li class ="active"><a href="index.php" class ="fas">Home</a></li>
                       
                            <li class ="non-active"><a href="A2Q7FindPet.php" class ="fas">Find A Dog/Cat</a></li>
                            <li class ="non-active"><a href="A2Q2DogInfo.php" class ="fas">Dog Care</a></li>
                            <li class ="non-active"><a href="A2Q2CatInfo%20-%20Copy.php" class ="fas" >Cat Care</a></li>
                            <li class ="non-active"><a href="A2Q7GiveAway.php" class ="fas">Have a pet to give away</a></li>
                            <li class ="non-active"><a href="A2Q2Contact.php" class ="fas">Contact Us</a></li>
                         <?php if (!$isLoggedIn){echo"<li class = \"non-active\"><a href=\"CreateAccount.php\" class =\"fas\">Create Account</a></li>";}?>
                            <?php if ($isLoggedIn){echo"<li class = \"non-active\"><a href=\"logout.php\" class =\"fas\">Log out</a></li>";}?>
                    
                        </ul>
                    </div>
                   
                    <div class="content">
                        <?php include 'header.php';?>
                        <div class ="main"> 
                            <h2> Welcome!</h2><br>
                             <table>
                                <tr>
                                    <td>
                                         <fieldset><p>The McLaughlin Pet Adoption site is dedicated to finding pets new homes! <br><br> Find a Dog or Cat to adopt today! <br><br> Already have a pet? We'll be more than happy to provide you all the information you may need to take care of them. <br><br> Don't hesitate to contact us if you have any questions or concerns. </p></fieldset>
                                    </td>
                                 </tr>
                                   <tr>
                                    <td>
                                        <img src="img-requirements-to-adopt-a-pet.jpg" alt="Image" style="width:77%; float:left;">
                                    </td>
                                    </tr> 
                                    
                                   
                            </table>
                        
                        </div>
                        <?php include 'footer.php';?>
                    </div>
                </div>
            
           <script src ="Q7JS4.js"></script>
        </body>

    
</html>