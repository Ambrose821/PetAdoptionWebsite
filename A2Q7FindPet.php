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
    <fieldset class = "f2">
    <form action = "process_findPet.php" method="post">
             <h2> Find your perfect pet!</h2>
        <p>We look forward to helping you find you a new pet<br> Please fill out the information below so that we can best assist you.</p>
        <label>Are you looking for a Cat or Dog?</label><br>
         <select name ="animal" id ="animal" required>
    <option value="">Select an Option</option>
    <option value="Dog">Dog</option>
    <option value="Cat">Cat</option>
    </select><br><br>
        
          <label>What is your Pet's Breed?</label><br>
        <select name = "breed" id ="breed" required>
    <option value="">Select an Option</option>
    <option value="Husky">Husky</option>
    <option value="German Sheperd">German Sheperd</option>
    <option value="Lab">Lab</option>
    <option value="Poodle">Poodle</option>
    <option value="Lab">Lab</option>
    <option value="BullDog">BullDog</option>
    <option value="Golden Retriver">Golden Retriver</option>
    <option value="Mixed Dog Breed">Mixed Dog Breed</option>
    <option value="Siamese">Siamese</option>
    <option value="Burmese">Burmese</option>
    <option value="Persian">Persian</option>
    <option value="Birman">Birman</option>
    <option value="Sphynx">Sphynx</option>
    <option value="Mixed Cat Breed">Mixed Cat Breed</option>
    <option value="Doesn't Matter">Doesn't Matter</option>
    </select><br><br>
        <label>Your Pet's Age</label><br>
        <select name = "animalAge" id ="animalAge" required>
    <option value="">Select an Option</option>
    <option value="Less than 1 year">Less than 1 year</option>
    <option value="1-3 years">1-3 years</option>
    <option value="4-7 years">4-7 years</option>
    <option value="8+ years">8+ years</option>
   <option value="Doesn't Matter">Doesn't Matter</option>
    </select><br><br>
    <label>Your Pet's Gender</label><br>
        <select name ="animalGender" id ="animalGender" required>
    <option value="">Select an Option</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Doesn't Matter">Doesn't Matter</option>
   
   
    </select><br><br>
            
        <p>***Note to marker**** Because, it wasnt specified, i have it set so that the check boxes must match even if left empty </p>
        <label>Select those that your pet needs to be friendly</label><br>
			<label>
			<input type="checkbox" id="Dogs3" name = "Dogs3">
			Dogs
			</label>
            <label>
			<input type="checkbox" id="Cats3" name ="Cats3">
			Cats
			</label>
            <label>
			<input type="checkbox" id="SmallChildren" name ="SmallChildren">
			Small Children
			</label><br><br>
        
      
   <input type="submit" name="submit" id="submit" value="Submit" />
        <input type ="reset" value="Reset">
            </form>
    </fieldset>
                            
                         
                        </div>
                        <?php include 'footer.php';?>
                    </div>
                </div>
            
           <script src ="GiveAway.js.js"></script>
        </body>

    
</html>