<fieldset class = "f2">
    <form action ="process_giveAway.php" method="post" onsubmit="return validateEmail() ">
             <h2> Find your pet a new home!</h2>
        <p>We look forward to helping you find your pet a new place to live<br> Please fill out the information below so that we can best assist you.</p>
        <label>Is your pet a cat or a dog?</label><br>
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
    <option value="Mixed Cat Breed<">Mixed Cat Breed</option>
    </select><br><br>
        <label>Your Pet's Age</label><br>
        <select name = "animalAge" id ="animalAge" required>
    <option value="">Select an Option</option>
    <option value="Less than 1 year">Less than 1 year</option>
    <option value="1-3 years">1-3 years</option>
    <option value="4-7 years">4-7 years</option>
    <option value="8+ years">8+ years</option>
    </select><br><br>
    <label>Your Pet's Gender</label><br>
        <select name ="animalGender" id ="animalGender" required>
    <option value="">Select an Option</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
   
    </select><br><br>
        
        <label>Does your pet play well with others?(Select those that your pet is friendly with)</label><br>
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
        
        
         <label> Tell us about your pet:</label><br>
        <input type="text" id="comment" name ="comment" required><br><br>
        <label for ="firstName"> Owner's First Name: </label>
		<input type = "text" id = "firstName" name ="firstName" required><br><br>
        <label for = "firstName"> Owner's Last Name: </label>
		<input type ="text" id = "lastName" name ="lastName"  required><br><br>
        <label for = "OwnerEmail"> Email: </label>
		<input type ="text" id = "OwnerEmail" name = "OwnerEmail"><br><br>
   <input type="submit" name="submit" id="submit" value="Submit" />
        <input type ="reset" value="Reset">
            </form>
    </fieldset>
<script src ="GiveAway.js.js"></script>