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
    
    
     window.validateForm = function () {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
      function validateUsername(username) {
 
          const regex = /^[a-zA-Z0-9]+$/;
        return regex.test(username);
      }

    function validatePassword(password) {
       
        const regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
            return regex.test(password);
        }
    
    window.checkUserInfo = function(){
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('pass');

    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();

    if (!validateUsername(username)) {
    alert('Invalid username! Please enter a valid username.');
        return false;
        
    }

    if (!validatePassword(password)) {
            alert('Invalid password! Password must be at least 4 characters long and contain at least one letter and one digit.');
        return false;
     }
        return true;
    }

});