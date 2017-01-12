function formValidation(){
    var uname = document.registration.username;
    var umail = document.registration.usermail;
    var umobile = document.registration.usermobile;
    var upassword = document.registration.password;



        if(allLetter(uname)){
            if(alphanumeric(upassword)){
                if(ValidateNumber(umobile)){
                    if(ValidateEmail(umail)) {

                    }
                }
            }
        }



    return false;

}







function allLetter(fname){
    var letters = /^[A-Za-z]+$/;
    if(fname.value.match(letters)){
        return true;
    }else{
        alert('Fullname must have alphabet characters only');
        fname.focus();
        return false;
    }
}







function allLetter(uname){
    var letters = /^[A-Za-z]+$/;
    if(uname.value.match(letters)){
        return true;
    }else{
        alert('Username must have alphabet characters only');
        uname.focus();
        return false;
    }
}




function alphanumeric(upassword) {
    var letters = /^[0-9a-zA-Z]+$/;
    if(upassword.value.match(letters)) {
        return true;
    }else{
        alert('User password must have alphanumeric characters only');
        upassword.focus();
        return false;
    }
}








function ValidateEmail(umail){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(umail.value.match(mailformat)){
        return true;
    }else{
        alert("You have entered an invalid email address!");
        umail.focus();
        return false;
    }
}



function ValidateNumber(umobile){
    var isValid = /^[0-9]+$/;
    if(umobile.value.match(isValid)){
        return true;
    }else{
        alert("You have entered an invalid phone number !");
        umobile.focus();
        return false;

    }
}
