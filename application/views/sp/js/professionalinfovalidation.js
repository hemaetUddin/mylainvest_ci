function formValidator(){

   var employerName = document.getElementById('employerName');
   var employersAddress = document.getElementById('employersAddress');
   var postalCode3 = document.getElementById('postalCode3');
   var occupation = document.getElementById('occupation');
   var department = document.getElementById('department');
   var monthlyIncome = document.getElementById('monthlyIncome');
   var propertyType = document.getElementById('propertyType');
   var situatedProperty = document.getElementById('situatedProperty');
   var valueOfProperty = document.getElementById('valueOfProperty');
   

   
   
   // Check each input in the order that it appears in the form!
   if(notEmpty(employerName, "Por favor, introduzca su nombre employe")){
    if(isAlphabet(employerName, "Alphabet sólo para el nombre")){
   if(space(employerName, "Introduzca un mínimo de 3 caracteres")){
    if(notEmpty(employersAddress, "Introduzca su dirección de employe")){
    if(space(employersAddress, "Introduzca un mínimo de 3 caracteres")){
     if(notEmpty(postalCode3, "Introduzca su código postal")){
     if(space(postalCode3, "Introduzca un mínimo de 3 caracteres")){
     if(isNumeric(postalCode3, "Sólo números para el código postal")){
     if(lengthRestriction(postalCode3, 4, 6)){
        //if(notEmpty(occupation, "Introduzca su ocupación")){
        //if(space(occupation, "Introduzca un mínimo de 3 caracteres")){
          if(notEmpty(department, "Introduzca su departamento")){
          if(space(department, "Introduzca un mínimo de 3 caracteres")){
            if(notEmpty(monthlyIncome, "Introduzca su ingreso mensual")){
            if(space(monthlyIncome, "Introduzca un mínimo de 3 caracteres")){
              if(notEmpty(propertyType, "Introduzca su tipo de propiedad")){
              if(space(propertyType, "Introduzca un mínimo de 3 caracteres")){
                if(notEmpty(situatedProperty, "Por favor ingrese en su propiedad situado")){
                if(space(situatedProperty, "Introduzca un mínimo de 3 caracteres")){
                  if(notEmpty(valueOfProperty, "Por favor, introduzca el valor de su propiedad")){
                  if(space(valueOfProperty, "Introduzca un mínimo de 3 caracteres")){
               
                        	 	 
                     return true;
                  }
               }
             }
          }
       }
   }

    }

    }
   
   }
   }}}}}}}}}}//}}
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
