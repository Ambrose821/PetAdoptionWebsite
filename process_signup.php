<?php

     
    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    $accountFile = "userInfo.txt";

    if (!file_exists($accountFile)) {
    
    touch($accountFile);
    }

    
    $manageFile = fopen($accountFile, 'r');
 
    $userExists = false;
    
    
    while(($line = fgets($manageFile)) !== false){
        
        $userInfo = explode(':', $line);
        if ($userInfo[0] == $username){
            $userExists = true;
        }
    }
    fclose($manageFile);

    if(!$userExists){
        $line = "$username:$password\n";
        $manageFile = fopen($accountFile,'a');
        fwrite($manageFile, $line);
        fclose($manageFile);
        
    }
    else {
        echo '<script>';
            echo 'var confirmButton = confirm("Username Taken, try again.");';
            echo'if (confirmButton) { window.location.href = "CreateAccount.php"; }';
            echo'if(!confirmButton) {window.location.href = "index.php"}';
        echo '</script>';
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
                            <li class ="non-active"><a href="A2Q7home.php" class ="fas">Home</a></li>
                            <li class ="non-active"><a href="pets.php" class ="fas">Browse Available Pets</a></li>
                            <li class ="non-active"><a href="A2Q7FindPet.php" class ="fas">Find A Dog/Cat</a></li>
                            <li class ="non-active"><a href="A2Q2DogInfo.php" class ="fas">Dog Care</a></li>
                            <li class ="non-active"><a href="A2Q2CatInfo%20-%20Copy.php" class ="fas" >Cat Care</a></li>
                            <li class ="non-active"><a href="A2Q7GiveAway.php" class ="fas">Have a pet to give away</a></li>
                            <li class ="non-active"><a href="A2Q2Contact.php" class ="fas">Contact Us</a></li>
                            <li class ="active"><a href="CreateAccount.php" class ="fas">Create Account</a></li>
                        </ul>
                    </div>
                   
                    <div class="content">
                        <?php include 'header.php';?>
                        <div class ="main"> 
                            <?php
                                if(!$userExists){
                                    echo"<h2>Account Created</h2>";
                                }
                            ?>
                    
                            
                        
                        </div>
                        <?php include 'footer.php';?>
                    </div>
                </div>
            
           <script src ="CreateAccountJavaScript"></script>
        </body>

    
</html>