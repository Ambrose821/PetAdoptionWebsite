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
            <title>Browse</title>
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
                          <?php if (!$isLoggedIn){echo"<li class = \"non-active\"><a href=\"CreateAccount.php\" class =\"fas\">Create Account</a></li>";}?>
                      <?php if ($isLoggedIn){echo"<li class = \"non-active\"><a href=\"logout.php\" class =\"fas\">Log out</a></li>";}?>
                        </ul>
                    </div>
                    <div class="content">
                          <?php include 'header.php';?>
                        <div class ="main"> 
                            <h2>Pets in your Area</h2><br><br>
                                <ul>
                                    <li>
                                        <table>
                                        <tr>
                                            <th>Pet 1</th>
                                            <th></th>
                                            
                                        </tr>
                                        <tr>
                                            <td><img src ="photo-1617895153857-82fe79adfcd4.jfif" alt ="pet1" width ="175"></td>
                                            
                                              <td><ul>
                                                <li class="borderless">Animal: Dog Breed: Husky</li>
                                                <li class = "borderless">Age Group: Less than 1 Year</li>
                                                <li class ="borderless">Gender: Male</li>
                                                <li class = "borderless">Friendly with: All</li>
                                                <li class = "borderless">About: Husky named Gerald</li>
                                                <li class = "borderless">Owners Info:********* (Visible if interested)</li>
                                                
                                                </ul></td>
                                              
                                        </tr>
                                        <tr>
                                            <td>
                                             <button type ="button">Interested</button>
                                            </td>
                                            <td></td>
                                           
                                        </tr>
                                        </table>
                                    
                                    </li>
                                    
                                    <li>
                                        <table>
                                        <tr>
                                            <th>Pet 2</th>
                                            <th></th>
                                            
                                        </tr>
                                        <tr>
                                            <td><img src ="close-up-applehead-siamese-cat_Witsawat.S_Shutterstock.jpg" alt ="pet2" width ="175"></td>
                                            
                                              <td><ul>
                                                <li class="borderless">Animal: Cat Breed: Siamese</li>
                                                <li class = "borderless">Age Group: 1-3 years</li>
                                                <li class ="borderless">Gender: Male</li>
                                                <li class = "borderless">Friendly with: All</li>
                                                <li class = "borderless">About: Cat Named Berny</li>
                                                <li class = "borderless">Owners Info:********* (Visible if interested)</li>
                                                
                                                </ul></td>
                                              
                                        </tr>
                                        <tr>
                                            <td>
                                             <button type ="button">Interested</button>
                                            </td>
                                            <td></td>
                                           
                                        </tr>
                                        </table>
                                    
                                    </li>
                                    
                                    <li>
                                        <table>
                                        <tr>
                                            <th>Pet 3</th>
                                            <th></th>
                                            
                                        </tr>
                                        <tr>
                                            <td><img src ="German-Shepherd-dog-Alsatian.webp" alt ="pet3" width ="175"></td>
                                            
                                              <td><ul>
                                                <li class="borderless">Animal: Dog Breed: German Sheperd</li>
                                                <li class = "borderless">Age Group: 4-7 years</li>
                                                <li class ="borderless">Gender: Female</li>
                                                <li class = "borderless">Friendly with: Cats only</li>
                                                <li class = "borderless">About: Dod named Sacha</li>
                                                <li class = "borderless">Owners Info:********* (Visible if interested)</li>
                                                
                                                </ul></td>
                                              
                                        </tr>
                                        <tr>
                                            <td>
                                             <button type ="button">Interested</button>
                                                
                                            </td>
                                           <td></td>
                                        </tr>
                                        </table>
                                    
                                    </li>
                                </ul>
                         
                        
                        </div>
                         <?php include 'footer.php';?>
                    </div>
                </div>
            <script src ="Q7JS4.js"></script>
        </body>

    
</html>