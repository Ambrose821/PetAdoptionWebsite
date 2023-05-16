<?php
if(isset($_POST['submit'])){
    $animal = $_POST['animal'];
    $breed = $_POST['breed'];
    $animalAge = $_POST['animalAge'];
    $animalGender = $_POST['animalGender'];
    $dogs3 = isset($_POST['Dogs3']) ? 'Dogs' : '';
    $cats3 = isset($_POST['Cats3']) ? 'Cats' : '';
    $smallChildren = isset($_POST['SmallChildren']) ? 'Small Children' : '';
    $comment = $_POST['comment'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $ownerEmail = $_POST['OwnerEmail'];
    session_start();
    $username =$_SESSION['username'];
    
    $data = "$username:$animal:$breed:$animalAge:$animalGender:$dogs3:$cats3:$smallChildren:$comment:$firstName:$lastName:$ownerEmail\n";
    
    $filecreate  = fopen("pets.txt","a");
    fclose($filecreate);
    
    $file = 'pets.txt';
    file_put_contents($file, $data, FILE_APPEND);
    
   
}


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
                            <h2>Your Pet has been added to the DataBase! Go enter the same criteria in Find a pet to see your listing</h2><br>
                             
                        
                        </div>
                        <?php include 'footer.php';?>
                    </div>
                </div>
            
           <script src ="Q7JS4.js"></script>
        </body>

    
</html>
?>



