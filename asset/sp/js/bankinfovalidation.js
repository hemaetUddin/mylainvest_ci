
function formValidator(){
   // Make quick references to our fields
   var amountVal = document.getElementById('amountVal');
   var year = document.getElementById('year');
   var month = document.getElementById('month');
   var interest = document.getElementById('interest');
   var loanPurpose = document.getElementById('loanPurpose');
   var accountName = document.getElementById('accountName');
   var accountNo = document.getElementById('accountNo');
   var bankName = document.getElementById('bankName');
   
   
   // Check each input in the order that it appears in the form!
   if(madeSelection(amountVal, "Por favor seleccione la cantidad del préstamo")){
      if(madeSelection( year, "Por favor, seleccione el año")){
         if(isNumeric(month, "Por favor, haga clic en Calcular")){
         
            if(isNumeric(interest, "Por favor, haga clic en Calcular")){
               
               if(notEmpty(loanPurpose, "Introduzca su propósito useing préstamo")){
                   if(space(loanPurpose, "Introduzca un mínimo de 3 caracteres")){
                  if(notEmpty(accountName, "Introduzca su nombre de cuenta")){
                      if(space(accountName, "Introduzca un mínimo de 3 caracteres")){
                     if(notEmpty(accountNo, "Por favor, introduzca su cuenta no")){
                         if(space(accountNo, "Introduzca un mínimo de 3 caracteres")){
                       
                        if(notEmpty(bankName, "Por favor, ingrese su nombre de Banco")){
                            if(space(bankName, "Introduzca un mínimo de 3 caracteres")){
                     return true;
                  }
               }
             }
          }
       }
   }

    }

    }}}}}
  
   
   return false;
   
    }

    function notEmpty(elem, helperMsg){
   if(elem.value.length == 0){
      alert(helperMsg);
      elem.focus(); // set the focus to this input
      return false;
   }
   return true;
    }

    function isNumeric(elem, helperMsg){
   var numericExpression = /^[+0-9.]+$/;
   if(elem.value.match(numericExpression)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
    }

    function isAlphabet(elem, helperMsg){
   var alphaExp = /^[a-zA-Z ]*$/;
   if(elem.value.match(alphaExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
    }

function isAlphanumeric(elem, helperMsg){
   var alphaExp = /^[0-9a-zA-Z]+$/;
   if(elem.value.match(alphaExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
}

function lengthRestriction(elem, min, max){
   var uInput = elem.value;
   if(uInput.length >= min && uInput.length <= max){
      return true;
   }else{
      alert("Please enter between " +min+ " and " +max+ " characters");
      elem.focus();
      return false;
   }
}

function madeSelection(elem, helperMsg){
   if(elem.value == ""){
      alert(helperMsg);
      elem.focus();
      return false;
   }else{
      return true;
   }
}

function emailValidator(elem, helperMsg){
   var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
   if(elem.value.match(emailExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
}
function space(elem, helperMsg){

    
    var pattern =/^[_'-.0-9A-Za-z!,@#$%][_'-.0-9A-Za-z!,@#$% ]+[_'-.0-9A-Za-z!,@#$%\s]$/;
    if(elem.value.match(pattern)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
}


