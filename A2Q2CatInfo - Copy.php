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
            <title>Cat care</title>
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
                            <li class ="active"><a href="A2Q2CatInfo%20-%20Copy.php" class ="fas" >Cat Care</a></li>
                            <li class ="non-active"><a href="A2Q7GiveAway.php" class ="fas">Have a pet to give away</a></li>
                            <li class ="non-active"><a href="A2Q2Contact.php" class ="fas">Contact Us</a></li>
                            <?php if (!$isLoggedIn){echo"<li class = \"non-active\"><a href=\"CreateAccount.php\" class =\"fas\">Create Account</a></li>";}?>
                            <?php if ($isLoggedIn){echo"<li class = \"non-active\"><a href=\"logout.php\" class =\"fas\">Log out</a></li>";}?>
                        </ul>
                    </div>
                    <div class="content">
                        <?php include 'header.php';?>
                        <div class ="main"> 
    <fieldset>
   <h2>
    5 websites every cat owner should have saved!
  </h2>
    <ol>
        <li><a href ="https://www.aspca.org/pet-care/cat-care">ASPCA</a></li>
        
        <li><a href ="https://petkeen.com/category/cats/">Petkeen</a></li>
        
        <li><a href ="https://resources.bestfriends.org/pet-health/cats-health"> Best Friends Animal Society</a></li>
        
        <li><a href ="https://www.petmd.com/cat/centers/care">PetMD</a></li>
        
        <li><a href ="https://littlebigcat.com/">Little Big Cat</a></li>
        
    </ol>
    <p> Links courtesy of <a href="https://mashable.com/article/best-websites-cat-owners">Mashable</a></p>
    </fieldset>
  </div>
                       <?php include 'footer.php';?>
                        </div>
                        
                    </div>
               <script src ="Q7JS4.js"></script>
        </body>

    
</html>