function formValidator(){

   var title1 = document.getElementById('title1');
   var firstName = document.getElementById('firstName');
   var middleName = document.getElementById('middleName');
   var lastName = document.getElementById('lastName');
   var gender = document.getElementById('gender');
   var mothersName = document.getElementById('mothersName');
   var fathersName = document.getElementById('fathersName');
   var dob = document.getElementById('dob');
   var nic = document.getElementById('nic');
   var nationality = document.getElementById('nationality');
   var citizen = document.getElementById('citizen');
   var permanentAddress = document.getElementById('permanentAddress');
   var postalCode1 = document.getElementById('postalCode1');
   var district = document.getElementById('district');
   var province = document.getElementById('province');
   var presentAddress = document.getElementById('presentAddress');
   var postalCode2 = document.getElementById('postalCode2');
   var workAddress = document.getElementById('workAddress');
   var wpn = document.getElementById('wpn');
   var cellno = document.getElementById('cellno');
   var emailid = document.getElementById('emailid');
  // var viberid = document.getElementById('viberid');

   
   
   // Check each input in the order that it appears in the form!
   if(madeSelection(title1, "Por favor, seleccione el título")){
      if(notEmpty(firstName, "Por favor ingrese primer nombre")){
        if(isAlphabet(firstName, "Alphabet sólo para el nombre")){
      if(space(firstName, "Introduzca un mínimo de 3 caracteres")){
     if(notEmpty(middleName, "Por favor, ingrese el segundo nombre")){
      if(isAlphabet(middleName, "Alphabet sólo para el nombre")){
     if(space(middleName, "Introduzca un mínimo de 3 caracteres")){
        if(notEmpty(lastName, "Por favor, ingrese el apellido")){
          if(isAlphabet(lastName, "Alphabet sólo para el nombre")){
        if(space(lastName, "Introduzca un mínimo de 3 caracteres")){
          if(madeSelection(gender, "Por favor selet género")){
          
            if(notEmpty(mothersName, "Por favor, ingrese su nombre de la madre")){
              if(isAlphabet(mothersName, "Alphabet sólo para el nombre")){
            if(space(mothersName, "Introduzca un mínimo de 3 caracteres")){
             // if(notEmpty(fathersName, "Por favor, ingrese su nombre de padre")){
                if(isAlphabet(fathersName, "Alphabet sólo para el nombre")){
              //if(space(fathersName, "Introduzca un mínimo de 3 caracteres")){
                if(notEmpty(dob, "Por favor seleccione su fecha de nacimiento")){
                
                if(validateDOB(dob, "Por favor seleccione su fecha de nacimiento")){
              
                if(notEmpty(nic, "Por favor, introduzca su número de identificación nacional")){
                if(isNumeric(nic, "Los números sólo para DNI")){
                if(space(nic, "Introduzca un mínimo de 3 caracteres")){
                if(lengthRestriction(nic, 6,15 )){
                if(madeSelection(nationality, "Por favor seleccione su país")){
                  
                  if(madeSelection(citizen, "Por favor, seleccione Por nacionalidad")){
                    
                    if(notEmpty(permanentAddress, "Introduzca su dirección permanente")){
                    if(space(permanentAddress, "Introduzca un mínimo de 3 caracteres")){
                      if(notEmpty(postalCode1, "Introduzca su código postal presente")){
                      if(isNumeric(postalCode1, "Introduzca su código postal Permanente")){
                        if(space(postalCode1, "Introduzca un mínimo de 3 caracteres")){
                      if(lengthRestriction(postalCode1, 4,6 )){
                      
                      if(notEmpty(district, "Por favor, ingrese su nombre de distrito")){
                      if(space(district, "Introduzca un mínimo de 3 caracteres")){

                      if(notEmpty(province, "Introduzca su nombre de la provincia")){
                      if(space(province, "Introduzca un mínimo de 3 caracteres")){


                      
                      
                        if(notEmpty(presentAddress, "Introduzca su dirección actual")){
                     
                        if(space(presentAddress, "Introduzca un mínimo de 3 caracteres")){
                            if(notEmpty(postalCode2, "Introduzca su código postal presente")){
                            if(isNumeric(postalCode2, "Introduzca su código postal Permanente")){
                            if(space(postalCode2, "Introduzca un mínimo de 3 caracteres")){
                            if(lengthRestriction(postalCode2, 4,6 )){
                             if(notEmpty(workAddress, "Introduzca su dirección de trabajo")){
                             if(space(workAddress, "Introduzca un mínimo de 3 caracteres")){
                                if(notEmpty(wpn, "Por favor, introduzca su número de teléfono del trabajo")){
                                if(isNumeric(wpn, "Los números sólo para el número de teléfono")){
                                if(space(wpn, "Introduzca un mínimo de 3 caracteres")){
                                if(lengthRestriction(wpn, 5, 15)){
                                  if(notEmpty(cellno, "Por favor, introduzca su número de celular personal")){
                                  if(isNumeric(cellno, "Los números sólo para el número de celular personal")){
                                  if(space(cellno, "Introduzca un mínimo de 3 caracteres")){
                                  if(lengthRestriction(cellno, 5, 15)){
                                     if(emailValidator(emailid, "Por favor, introduzca su ID de correo electrónico")){
                                     

                             
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
   
   }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}//}}
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
   var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{3,4}$/;
   if(elem.value.match(emailExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
}
function validateDOB(elem, helperMsg){

    
    var pattern =/^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/; 
    if(elem.value.match(pattern)){
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

    