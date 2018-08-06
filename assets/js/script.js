


function cheakName() {
    var nameValue=$('#uname').val();
    if(nameValue.length >3 && nameValue.length < 21){
        $('#nameError').text(' ');
        return true;
    }else {
        $('#nameError').text('Name Should be 4 to 20 character');
        return false;
    }
}

$('#uname').keyup(function () {
    cheakName();
});


function cheakEmailAddress() {
    var emailAddressValue=$('#email').val();
    var pattern =new RegExp(/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);
    if(pattern.test(emailAddressValue)){
        $('#emailError').text(' ');
        return true;


    }else {
        $('#emailError').text('Your email Address is invalid');
        return false;
    }
}


$('#email').keyup(function () {
    cheakEmailAddress() ;
});




function cheakNumber() {
    var numberValue=$('#tel').val();
    if(numberValue.length== 11){
        $('#phoneError').text(' ');
        return true;
    }else {
        $('#phoneError').text('Phone Number must be 11 character');
        return false;
    }
}

$('#tel').keyup(function () {
    cheakNumber();
});



function cheakPassword() {
    var passwordValue=$('#Userpassword').val();
    if(passwordValue.length==' '){
        $('#passwordError').text('Please insert your password');
        return false;

    }else if(passwordValue.length> 5) {
        $('#passwordError').text(' ');
        return true;
    }else {
        $('#passwordError').text('Password must be 6 character');
        return false;
    }
}

$('#Userpassword').keyup(function () {
    cheakPassword();
});

$('#cheakbox').click(function () {
    if(this.checked){
        // if($('#cheakbox').checked){                                   same
        $('#password').attr('type', 'text');
        return true;

    }else {
        $('#password').attr('type', 'password');
        return false;
    }
});

function cheakConfirmPassword(){
    var passwordValue=$('#Userpassword').val();
    var confirmPasswordValue=$('#confirmPassword').val();
    if(passwordValue==confirmPasswordValue){
        $('#confirmPasswordError').text('Password matched').css('color', 'green');
        return true;


    }else {
        $('#confirmPasswordError').text(" Password don't match").css('color', 'tomato');
        return false;
    }

}


$('#confirmPassword').keyup(function () {
    cheakConfirmPassword();
});

// function checkTerms() {
//     $('#terms').click(function () {
//         if(this.checked){
//             // if($('#cheakbox').checked){                                   same
//             $('#terms').text(' ');
//             return true;
//
//         }else {
//             $('#terms').text('Please select terms and condition');
//             return false;
//         }
//     });
//
// }
// $('#confirmPassword').keyup(function () {
//     cheakConfirmPassword();
// });




$('#myForm').submit(function () {
    if(cheakName()==true && cheakEmailAddress() ==true && cheakNumber()==true && cheakPassword()==true &&cheakConfirmPassword()==true && checkTerms==true){
        return true;
    } else {
        return false;
    }


});