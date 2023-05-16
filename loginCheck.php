<?php
if (!isset($_SESSION)) {
  session_start();
}
$filecreate  = fopen("userInfo.txt","a");
fclose($filecreate);
$isCorrectLogin = false;
$users = file("userInfo.txt");
foreach ($users as $user) {
  $credentials = explode(":", $user);
  if ($_POST['username'] == $credentials[0] && $_POST['pass'] == rtrim($credentials[1])) {
    // Login successful, set session variables and redirect to the protected page
    $_SESSION['username'] = $_POST['username'];
      $isCorrectLogin = true;
    header("Location: A2Q7GiveAway.php");
    exit();
  }
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
                            <li class ="non-active"><a href="CreateAccount.php" class ="fas">CreateAccount</a></li>
                    
                        </ul>
                    </div>
                   
                    <div class="content">
                        <?php include 'header.php';?>
                        <div class ="main"> 
                         <?php if(!$isCorrectLogin){echo "Invalid username or password.";echo "<p><a href =\"A2Q7GiveAway.php\">CLick her to try again</a><p>";}?>
                             
                        </div>
                        <?php include 'footer.php';?>
                    </div>
                </div>
            
           <script src ="Q7JS4.js"></script>
        </body>

    
</html>