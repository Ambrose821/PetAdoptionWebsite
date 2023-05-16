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
    
    
});