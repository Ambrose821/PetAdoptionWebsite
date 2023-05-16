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
            <title>Dog Care</title>
           <link rel ="stylesheet" href ="A2Q7CSS.css">
        </head>
    
        <body>
                <div class = "wrapper">
                    <div class ="navBar">
                        <h2>Menu</h2>
                        <ul>
                            <li class ="non-active"><a href="index.php" class ="fas">Home</a></li>
                            
                            <li class ="non-active"><a href="A2Q7FindPet.php" class ="fas">Find A Dog/Cat</a></li>
                            <li class ="active"><a href="A2Q2DogInfo.php" class ="fas">Dog Care</a></li>
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
                                 <fieldset>
   <h2>
    5 websites every dog owner should have saved!
  </h2>
    <ol>
        <li><a href ="https://www.aspca.org/pet-care/dog-care"> American Society for the Prevention of Cruelty to Animals</a></li>
        
        <li><a href ="https://www.akc.org/">American Kennel Club</a></li>
        
        <li><a href ="https://resources.bestfriends.org/"> Best Friends Animal Society</a></li>
        
        <li><a href ="https://www.chewy.com/">Chewy </a></li>
        
        <li><a href ="https://zdcs.link/bZ0xr?cd36=Standard&t=article&m=content_body&e=offer&i=text-link&el=BringFido%28Opens%20in%20a%20new%20tab%29&cd62=article&cd63=03JLxvajCO4zQuixiQCIty7&short_url=bZ0xr&u=https%3A%2F%2Fmashable.com%2Farticle%2Fbest-websites-for-dog-owners">BringFido</a></li>
        
    </ol>
    <p> Links courtesy of <a href="https://mashable.com/article/best-websites-for-dog-owners">Mashable</a></p>
    </fieldset>
  </div>
                         <?php include 'footer.php';?>
                        </div>
                        
                
                </div>
            <script src ="Q7JS4.js"></script>
        </body>

    
</html>