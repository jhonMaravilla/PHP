document.getElementById("insertProduct2").onsubmit = function () {
    var prodInfo = document.getElementById('prodInfo').value;
    var prodMade = document.getElementById('prodMade').value;
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?1234567890]+/;
    
    if (format.test(prodInfo.toString())) {
        alert('Special characters and numbers are not allowed');
        document.getElementById('prodInfo').value = '';
        document.getElementById('prodInfo').focus();
        return false;
    } 
    else if(format.test(prodMade.toString())){
        alert('Special characters and numbers are not allowed');
        document.getElementById('prodMade').value = '';
        document.getElementById('prodMade').focus;
        return false;
    }
        else {
        return true;
    }
}
