document.getElementById('register').onsubmit = function(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;
    
    if(username == ""){
        alert("Username must be filled out! ");
        document.getElementById('username').focus();
        return false;    
    }
    else if(password.length <= 7){
        alert("Password must be atleast 8 characters long");
        document.getElementById('password').focus();
        return false;    
    }
    else if (password2 !== password){
         alert("Password doesnt match! ");
         document.getElementById('password2').focus();
         return false;
    }
    else {
        return true;
    }
    
}