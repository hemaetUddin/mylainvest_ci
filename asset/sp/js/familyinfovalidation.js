function formValidator(){


   var title3 = document.getElementById('title3');
   var firstName3 = document.getElementById('firstName3');
   var middleName3 = document.getElementById('middleName3');
   var lastName3 = document.getElementById('lastName3');
   var relationship = document.getElementById('relationship');
   var physicalAddress2 = document.getElementById('physicalAddress2');
   var postalCode5 = document.getElementById('postalCode5');
   var phoneHome2 = document.getElementById('phoneHome2');
   var phoneWork2 = document.getElementById('phoneWork2');
   var cellNumber3 = document.getElementById('cellNumber3');


   
   
   // Check each input in the order that it appears in the form!


           if(madeSelection(title3, "Por favor elige Kin")){
            
              if(notEmpty(firstName3, "Por favor ingrese su nombre de los familiares")){
                if(isAlphabet(firstName3, "Alphabet sólo para el nombre")){
              if(space(firstName3, "Introduzca un mínimo de 3 caracteres")){
                if(notEmpty(middleName3, "Por favor ingrese su nombre de los familiares")){
                  if(isAlphabet(middleName3, "Alphabet sólo para el nombre")){
                if(space(middleName3, "Introduzca un mínimo de 3 caracteres")){
                  if(notEmpty(lastName3, "Por favor ingrese los familiares apellido")){
                    if(isAlphabet(lastName3, "Alphabet sólo para el nombre")){
                  if(space(lastName3, "Introduzca un mínimo de 3 caracteres")){
                    if(notEmpty(relationship, "Introduzca su relación")){
                    if(space(relationship, "Introduzca un mínimo de 3 caracteres")){
                      if(notEmpty(physicalAddress2, "Introduzca su dirección física")){
                      if(space(physicalAddress2, "Introduzca un mínimo de 3 caracteres")){
                    
                    if(notEmpty(postalCode5, "Introduzca su código postal")){
                    if(space(postalCode5, "Introduzca un mínimo de 3 caracteres")){
                    if(isNumeric(postalCode5, "Sólo números para el código postal")){
                    if(lengthRestriction(postalCode5, 4, 6)){
                    
                        // if(notEmpty(phoneHome2, "Por favor, introduzca su número de teléfono de su casa")){
                        // if(space(phoneHome2, "Introduzca un mínimo de 3 caracteres")){
                        // if(isNumeric(phoneHome2, "Los números sólo para el número de teléfono")){
                        // if(lengthRestriction(phoneHome2, 5, 15)){
                        
                         
                        //     if(notEmpty(phoneWork2, "Por favor, introduzca su número de teléfono del trabajo")){
                        //     if(space(phoneWork2, "Introduzca un mínimo de 3 caracteres")){
                        //     if(isNumeric(phoneWork2, "Los números sólo para el número de teléfono")){
                        //     if(lengthRestriction(phoneWork2, 5, 15)){
                            
                                if(notEmpty(cellNumber3, "Por favor, introduzca su número de celular")){
                                if(space(cellNumber3, "Introduzca un mínimo de 3 caracteres")){
                                if(isNumeric(cellNumber3, "Los números sólo para el número de células")){
                                if(lengthRestriction(cellNumber3, 5, 15)){
                                

                        	 	     
                        	 	 
                     return true;
                  }
               }
             }
          }
       }
   }

    }

    }
   
   }}}}}}}}}}}}}}//}}}}}}}}
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


