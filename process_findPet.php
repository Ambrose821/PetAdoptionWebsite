<?php

session_start();
$isLoggedIn = false;



if (isset($_SESSION['username'])) {
   $isLoggedIn = true;
 
} else {
    $isLoggedIn = false;
 
}
if(isset($_POST['submit'])){
    $animal = $_POST['animal'];
    $breed = $_POST['breed'];
    $animalAge = $_POST['animalAge'];
    $animalGender = $_POST['animalGender'];
    $dogs3 = isset($_POST['Dogs3']) ? 'Dogs' : '';
    $cats3 = isset($_POST['Cats3']) ? 'Cats' : '';
    $smallChildren = isset($_POST['SmallChildren']) ? 'Small Children' : '';
   
    
    $data = "$animal:$breed:$animalAge:$animalGender:$dogs3:$cats3:$smallChildren\n";
  
    
        $searchArray = array(
        $animal,
        $breed,
        $animalAge,
        $animalGender,
        $dogs3,
        $cats3,
        $smallChildren,
        
        );

    
   
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
                       
                            <li class ="active"><a href="A2Q7FindPet.php" class ="fas">Find A Dog/Cat</a></li>
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
                            <h2> Matching Pets:</h2><br>
                             <ul>
                      
                                 <?php
                                      $filecreate  = fopen("pets.txt","a");
                                        fclose($filecreate);
                                            
                                            $file = fopen("pets.txt", "r");

                                 while (($line = fgets($file)) !== false) {
    
                                     $lineArray = explode(":", $line);
                                     
                                       
                                       if ($lineArray[1]== "Dog"){
                                           $imageSource = "Dogimages.png";
                                       }else{
                                           $imageSource = "360_F_144631274_b3FXX0IGiZtCurA8y7I2XgzygUSbbKf3.jpg";

                                       }
                                     if($searchArray[1]=="Doesn't Matter"){
                                         $searchArray[1]= $lineArray[2];
                                     }
                                     if($searchArray[2]=="Doesn't Matter"){
                                         $searchArray[2]= $lineArray[3];
                                     }
                                     if($searchArray[3]=="Doesn't Matter"){
                                         $searchArray[3]= $lineArray[4];
                                     }
                                    $flag = false;
                                     for($i =0; $i<6; $i++){
                                         if($searchArray[$i] != $lineArray[$i+1]){
                                            
                                             $flag = true;
                                            break;
                                         }
                                            }
                                         if(!$flag){
                                        echo"<li>";
                                        echo "<table>";
                                             echo "<tr>";
                                            echo"<td><img src =$imageSource alt =\"pet1\" width =\"175\"></td>";
                                            
                                             echo "<td><ul>";
                                               echo"<li class=\"borderless\">Animal:".$lineArray[1]."</li>";
                                               echo"<li class=\"borderless\">Breed:".$lineArray[2]."</li>";
                                                echo"<li class = \"borderless\">Age Group: ".$lineArray[3]."</li>";
                                                echo"<li class =\"borderless\">Gender:".$lineArray[4]."</li>";
                                                echo"<li class = \"borderless\">Friendly with: ".$lineArray[5].$lineArray[6].$lineArray[7]."</li>";
                                                echo"<li class = \"borderless\">About: ".$lineArray[8]."</li>";
                                                echo"<li class = \"borderless\">Owners Info: ".$lineArray[9]."<br>".$lineArray[10]."<br>".$lineArray[11]."</li>";
                                                
                                                echo"</ul></td>";
                                              
                                        echo"</tr>";
                                        echo"<tr>";
                                        echo "<td>";
                                           echo  "<button type =\"button\">Interested</button>";
                                           echo "</td>";
                                            echo"<td></td>";
                                           
                                        echo"</tr>";
                                        echo"</table>";
                                    
                                    echo"</li>";
                                    
                                             
                                         }
                                     else{
                                         echo"No matches :(";
                                     }
                
                                 
              
                                 }
        
                                 fclose($file);
    
                                    echo"<button type =\"button\"><a href =\"A2Q7FindPet.php\">Reset Form</a></button>";
                                 ?>
                                 
                            
                                </ul>
                        
                        </div>
                        <?php include 'footer.php';?>
                    </div>
                </div>
            
           <script src ="Q7JS4.js"></script>
        </body>

    
</html>

