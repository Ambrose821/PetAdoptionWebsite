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
    
    
    
    
        window.validateDogs = function(){
     
     
     if (document.getElementById("GermanSheperd").checked){
         return true;
     }
      else if (document.getElementById("BlackLab").checked){
         return true;
     }
     else if (document.getElementById("GoldenRetriever").checked){
         return true;
     }
      else if (document.getElementById("Husky").checked){
         return true;
     }
          else if (document.getElementById("BullDog").checked){
         return true;
     }
          else if (document.getElementById("Poodle").checked){
         return true;
     }
          else if (document.getElementById("Doesn'tmatter").checked){
         return true;
     }
        
         
     else{
         alert("Please Do not leave fields blank");
         return false;
     }
     if (document.getElementById("Dogs").checked){
         return true;
     }
          else if (document.getElementById("Cats").checked){
         return true;
     }
          else if (document.getElementById("SC").checked){
         return true;
     }
     else{
         alert("Please Do not leave fields blank");
         return false;
     }
 }
    
    
    
    
    
 document.getElementById("submit2").addEventListener("click", validateCats);
    function validateCats(){
     
     
     if (document.getElementById("Siamese").checked){
         return  true;
     }
      else if (document.getElementById("Burmese").checked){
         return  true;
     }
     else if (document.getElementById("Persian").checked){
         return  true;
     }
      else if (document.getElementById("Birman").checked){
         return true;
     }
          else if (document.getElementById("Sphynx").checked){
         return true;
     }
         
          else if (document.getElementById("Doesn'tmatter2").checked){
         return true;
     }
        
     else{
         alert("Please Do not leave fields blank");
         return false;
     }
         if (document.getElementById("Dogs2").checked){
         return true;
     }
          else if (document.getElementById("Cats2").checked){
         return true;
     }
          else if (document.getElementById("SC2").checked){
         return true;
     }
     else{
         alert("Please Do not leave fields blank");
         return false;
     }
 }
  
     

});