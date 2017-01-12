function formValidation(){
    var fname = document.registration.fullName;
    var uname = document.registration.username;
    var uadd = document.registration.address;
    var ucountry = document.registration.country;
    var uemail = document.registration.email;
    var usex = document.registration.sex;


    if(allLetter(fname)){
        if(allLetter(uname)){
            if(alphanumeric(uadd)){
                if(countryselect(ucountry)){
                    if(ValidateEmail(uemail)){
                        if(validsex(usex)){
                        }
                    }
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




function alphanumeric(uadd) {
    var letters = /^[0-9a-zA-Z]+$/;
    if(uadd.value.match(letters)) {
        return true;
    }else{
        alert('User address must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
}



function countryselect(ucountry){
    if(ucountry.value == "Default"){
        alert('Select your country from the list');
        ucountry.focus();
        return false;
    }else{
        return true;
    }
}




function ValidateEmail(uemail){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(uemail.value.match(mailformat)){
        return true;
    }else{
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}



function validsex(usex){
    x=0;

    if(usex.checked){
        x++;
    }

    if(x==0){
        alert('Select Male/Female');
        usex.focus();
        return false;
    }else{
        alert('Form Succesfully Submitted');
        window.location.reload()
        return true;
    }
}