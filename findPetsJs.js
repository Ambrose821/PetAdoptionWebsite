document.addEventListener("DOMContentLoaded", function () {
    
         
function getCurrentDate(){
const date = new Date();

let day = date.getDate();
let month = date.getMonth() + 1;
let year = date.getFullYear();

let currentDate = `${day}-${month}-${year}`;
    
const time = new Date();
    let hour =time.getHours();
    let minute =time.getMinutes();
    let second = time.getSeconds();
    let currentTime = `${hour}:${minute}:${second}`;
    
    let dateAndTime = "Date:" + currentDate + "<br>Time: "+currentTime;
    return dateAndTime;
        
    }
   
    
    
    setInterval(function() {
    document.getElementById("time").innerHTML= getCurrentDate();
    }, 1000);
    
    
    
    window.Validate = function() {    
       var error = false;
        var animal = document.getElementById("animal");
        var breed = document.getElementById("breed");
       var animalAge = document.getElementById("animalAge");
       var animalGender = document.getElementById("animalGender");
      
       
         
        if (animal.value == ""||breed.value =="" || animalAge.value =="" ||animalGender.value =="" ) {   
            error = true;
            
          
       if(document.getElementById("Dogs3").checked === false && document.getElementById("Cats3").checked === false && document.getElementById("SmallChildren").checked === false){
           error= true;
            if (!pattern.test(OwnerEmail.value)) {
                 alert("Please do not leave fields empty.Please enter a valid email address.");
                 return false;
             }
           else{
           alert("Please do notleave fields empty.");
            return false;
           }
           
       }
      
       
       
       
        return true;
    }

});