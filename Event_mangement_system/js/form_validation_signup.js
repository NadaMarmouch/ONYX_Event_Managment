var form = document.getElementById('validate');
var full_name = document.getElementsByName('name')[0];
var email = document.getElementsByName('email')[0];
var password1 = document.getElementsByName('password1')[0];
var password2 = document.getElementsByName('password2')[0];

//############### PHP non-empty field indicator###########
var name_v = document.getElementsByName('name-v')[0];
var email_v = document.getElementsByName('email-v')[0];
var password_v = document.getElementsByName('password-v')[0] ;


//at submit


form.addEventListener('submit', function(event){

  var nameV = full_name.value.trim() ;
  var emailV = email.value.trim() ;
  var password1V = password1.value.trim() ;
  var password2V = password2.value.trim() ;

  checkEmpty(full_name,nameV,"You cannot leave the name field empty!",name_v,event) ;
  checkEmpty(email,emailV,"You cannot leave the email field empty!",email_v,event) ;
  checkEmpty(password1,password1V,"You cannot leave the password field empty!", password_v,event) ;
  checkEmpty(password2,password2V,"Re-type the password please!", password_v,event) ;});


  function checkEmpty(elem,elemValue,msg,flag,event){

      if (elemValue == "") {
        event.preventDefault() ;
        addRedOutline(elem);
        ShowErrorDiv(elem,msg);
        makeInvalid(flag) ;
      } else {
        // non-empty
        // is it a password type of input field or an other one?
        if (elem.type !== "password"){
          removeOutline(elem) ;
          hideErrorDiv(elem) ;
          makeValid(flag);
        } else { // def this is one of the password fields
          // This means that: Password
          if (elem.name == "password2"){ // For the second password (re-typed) ==> check for Equality

            if (checkEqual(password1.value, password2.value)){
              // => Equal
              // remove all the error aspects and set the hidden input field to be read ('valid') --> php in back-end will garb it's value
              removeOutline(elem) ;
              hideErrorDiv(elem) ;
              makeValid(flag);
            } else {
              // Not equal
              event.preventDefault() ;
              addRedOutline(elem);
              ShowErrorDiv(elem,"Please make sure that the passwords are matching!");
              makeInvalid(flag) ;
            }
        } else {
          // non-empty; one of the pass; it is the first password field
          removeOutline(elem) ;
          hideErrorDiv(elem) ;
          // makeValid(phpFlag);
        }

      }
    }


  }



//========= empty box function/////
function addRedOutline(elem){
  elem.classList.add('error-input')
}

function ShowErrorDiv(elem,msg){
  var div = elem.nextElementSibling ;
  div.firstElementChild.innerText = msg ;
}

function makeInvalid(elem){
  elem.value = "" ;
}

//========= non-empty box function/////
function removeOutline(elem){
  elem.classList.remove('error-input')
}

function hideErrorDiv(elem){
  var div = elem.nextElementSibling ;
  div.firstElementChild.innerText = "" ;
}

function makeValid(elem){
  elem.value = "valid" ;
}

// =================== Password validation =============

function checkEqual(val1,val2){
  return (val1 === val2) ;
}
