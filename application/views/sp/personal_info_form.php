<?php
session_start();
// require'../common/config.php';
	
		foreach ($_POST as $key => $value) {
 		$_SESSION['post'][$key] = $value;
 }
	
	?>

<!DOCTYPE html>
<html>

<body>
<!-- header start -->
	<div class="header">
		<div class="row">
			<div class="language slate">
				<select name="countries" id="countries" style="width:250px;" onChange="if(this.selectedIndex!=0)self.location=this.options[this.selectedIndex].value">
                    <option value="">Seleccione un Idioma</option>
                    <option value='../index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gb" data-title="English">English</option>
                    <option value='../franch/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fr" data-title="Français">Français</option>
                    <option value='../espain/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag es" data-title="Español">Español</option>
                    <option value='../deutsch/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag de" data-title="Deutsch">Deutsch</option>
                    <option value='../portuguese/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pt" data-title="Português">Português</option>
                </select>
			</div>
			<div class="header_text">
				<h1 class="blink_me" style="color:#CC0; background-color:#000078">Oferta de Préstamo totalmente gratis y Honorarios</h1>
			</div>
			<div class="mayla-logo" style="width: 263px; left: 543px; top: -80px;">
				<img class="logo-img" src="<?php echo base_url('asset/sp/images/logo.png')?>" alt="logo"> 
			</div>
		</div> <!-- Header row -->
	</div> <!-- header div -->
<!-- header end -->
<!--horiozntal menu start-->
	<div class="hr-menu">
		<div class="menus">
			<a href="../espain/index.php">Casa | </a>
			<a href="../espain/career.php">Carreras | </a>
			<a href="../espain/contact.php">Contáctenos | </a>
			<a href="../espain/faq.php">Faq's</a>
		</div>
	</div>
<!--horiozntal menu end-->

<!--Vertical menu start-->
	<div class="vr-menu">
		<ul>
			<li class="li"><a class="vr_link" href="../espain/profile.php">Perfil</a></li>
			<li class="li"><a class="vr_link" href="../espain/structure.php">Empresa Structure</a></li>
			<li class="li"><a class="vr_link" href="../espain/service.php">Nuestro servicio</a></li>
			<li class="li"><a class="vr_link" href="../espain/job_descriptions.php">Tarbajo Descripciones</a></li>
			<li class="li"><a class="vr_link" href="../espain/payment_system.php">Cantidad y Reembolso</a></li>
			<li class="li"><a class="vr_link" href="#">Solicitud de Préstamo</a></li>
		</ul>
	</div>
<!--Vertical menu End-->
<!-- slider div start -->
	 <div id="my-slider" class="mayla-slide clear">
	 		 <!-- <img src="images/m1.jpg">	 -->
	 </div>
<!-- slider div end -->	
	<div class="header-bottom clear">
		<p class="hb-text">BIENVENIDO A MAYLA INVESTMENTS CC WEB OFICIAL.</p>
	</div>
<!-- header bottom -->

<div class="container clear">
	<div class="left-sidebar">
		<div class="loans-igm">
			<img src="<?php echo base_url('asset/sp/images/loans.gif')?>">
		</div>
	</div> <!-- left div end -->
	<div class="right-side">
		<div class="loanCalulator">
			<!-- This div place for Forms Only -->
					<div class="firstFormDiv">

					<!-- 
					===================================================================
					Div for personal information
					===================================================================
					 -->

					 <div class="mainFormHeader">
					 		<div class="formTitle">
					 			<p class="bank-info-header-text">Formulario de Solicitud</p>
					 		</div>
						 	<div class="subFormHeader">
						 		<p class="personal-info-header-text">Información Personal</p>
						 	</div>
						 	<div class="bank-info-sub-header">
						 		<marquee> <p class="marquee-text">Rellene el formulario de solicitud</p></marquee>
						 	</div>
							 	<form class="personal-form" action="professionDetailsForm.php" name="personal-form" id="personal-form" method="post">
							 		<table class="personal-info-table alignTable">
							 			<!--<tr>
							 				<td>
							 					<label>Título</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<select name="title1" id="title1">
							 						<option value="">Seleccionar</option>
                                                    <option value="Mr.">Sr.</option>
							 						<option value="Mrs.">Señora.</option>
							 						<option value="Other">Otros</option>
							 					</select>
							 				</td>
							 			</tr>--> 
							 			<tr>
							 				<td>
							 					<label> Primero Nombre</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="firstName" id="firstName" type="text" placeholder="Primero Nombre" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Segundo Nombre</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="middleName" id="middleName" type="text" placeholder="Segundo Nombre" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Apellidos</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="lastName" id="lastName" type="text" placeholder="Apellidos" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Sexo</label>
							 				</td>
							 				<td>:</td>
							 				<td>
                                                    <select name="gender" id="gender">
                                                    <option value="">Seleccionar</option>
							 						<option value="Male">Hombre</option>
							 						<option value="Female">Mujer</option>
							 						<option value="Other">Autre</option>
							 					</select>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Nombre de la madre</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="mothersName" id="mothersName" type="text" placeholder="Nombre de la madre" required>
							 				</td>
							 			</tr> 
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Nombre del Padre</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="fathersName" id="fathersName" type="text" placeholder="Nombre del Padre" >
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Fecha de nacimiento</label>
							 				</td>
							 				<td>:</td>
							 				<td>
                                                <input class="" name="dob" id="dob" type="text" placeholder="mm-dd-year" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>DNI</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="nic" id="nic" type="text" placeholder="Número DNI" required>
							 				</td>
							 			</tr>
							 			<!-- =========================================================
							 				Space for Nationality
							 			========================================================= -->	

							 			<!--<tr>
							 				<td>
							 					<label>Nacionalidad</label>
							 				</td>
							 				<td>:</td>
							 				<td>
								 				<select name="nationality" id="nationality">
									 				<option value="">Seleccionar</option>
                                                    <option value="Afghanistan">Afghanistan</option>
									 				<option value="Albania">Albania</option>
									 				<option value="Algeria">Algeria</option>
									 				<option value="Andorra">Andorra</option>
									 				<option value="Angola">Angola</option>
									 				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									 				<option value="Argentina">Argentina</option>
									 				<option value="Armenia">Armenia</option>
									 				<option value="Aruba">Aruba</option>
									 				<option value="Australia">Australia</option>
									 				<option value="Austria">Austria</option>
									 				<option value="Azerbaijan">Azerbaijan</option>
									 				<option value="Bahamas">Bahamas</option>
									 				<option value="Bahrain">Bahrain</option>
									 				<option value="Bangladesh">Bangladesh</option>
									 				<option value="Barbados">Barbados</option>
									 				<option value="Belarus">Belarus</option>
									 				<option value="Belgium">Belgium</option>
									 				<option value="Belize">Belize</option>
									 				<option value="Benin">Benin</option>
									 				<option value="Bhutan">Bhutan</option>
									 				<option value="Bolivia">Bolivia</option>
									 				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									 				<option value="Botswana">Botswana</option>
									 				<option value="Brazil">Brazil</option>
									 				<option value="Brunei">Brunei</option>
									 				<option value="Bulgaria">Bulgaria</option>
									 				<option value="Burkina Faso">Burkina Faso</option>
									 				<option value="Burma">Burma</option>
									 				<option value="Burundi">Burundi</option>
									 				<option value="Cambodia">Cambodia</option>
									 				<option value="Cameroon">Cameroon</option>
									 				<option value="Canada">Canada</option>
									 				<option value="Cape Verde">Cape Verde</option>
									 				<option value="Central African Republic">Central African Republic</option>
									 				<option value="Chad">Chad</option>
									 				<option value="Chile">Chile</option>
									 				<option value="China">China</option>
									 				<option value="Colombia">Colombia</option>
									 				<option value="Comoros">Comoros</option>
									 				<option value="Congo, Democratic">Congo, Democratic</option>
									 				<option value="Congo, Republic">Congo, Republic</option>
									 				<option value="Costa Rica">Costa Rica</option>
									 				<option value="Cote d'Ivoire">Cote d'Ivoire</option>
									 				<option value="Croatia">Croatia</option>
									 				<option value="Cuba">Cuba</option>
									 				<option value="Curacao">Curacao</option>
									 				<option value="Cyprus">Cyprus</option>
									 				<option value="Czech Republic">Czech Republic</option>
									 				<option value="Denmark">Denmark</option>
									 				<option value="Djibouti">Djibouti</option>
									 				<option value="Dominica">Dominica</option>
									 				<option value="Dominican Republic">Dominican Republic</option>
									 				<option value="East Timor">East Timor</option>
									 				<option value="Ecuador">Ecuador</option>
									 				<option value="Egypt">Egypt</option>
									 				<option value="El Salvador">El Salvador</option>
									 				<option value="Equatorial Guinea">Equatorial Guinea</option>
									 				<option value="Eritrea">Eritrea</option>
									 				<option value="Estonia">Estonia</option>
									 				<option value="Ethiopia">Ethiopia</option>
									 				<option value="Fiji">Fiji</option>
									 				<option value="Finland">Finland</option>
									 				<option value="France">France</option>
									 				<option value="Gabon">Gabon</option>
									 				<option value="Gambia, The">Gambia, The</option>
									 				<option value="Georgia">Georgia</option>
									 				<option value="Germany">Germany</option>
									 				<option value="Ghana">Ghana</option>
									 				<option value="Greece">Greece</option>
									 				<option value="Grenada">Grenada</option>
									 				<option value="Guatemala">Guatemala</option>
									 				<option value="Guinea">Guinea</option>
									 				<option value="Guinea-Bissau">Guinea-Bissau</option>
									 				<option value="Guyana">Guyana</option>
									 				<option value="Haiti">Haiti</option>
									 				<option value="Holy See">Holy See</option>
									 				<option value="Honduras">Honduras</option>
									 				<option value="Hong Kong">Hong Kong</option>
									 				<option value="Hungary">Hungary</option>
									 				<option value="Iceland">Iceland</option>
									 				<option value="India">India</option>
									 				<option value="Indonesia">Indonesia</option>
									 				<option value="Iran">Iran</option>
									 				<option value="Iraq">Iraq</option>
									 				<option value="Ireland">Ireland</option>
									 				<option value="Israel">Israel</option>
									 				<option value="Italy">Italy</option>
									 				<option value="Jamaica">Jamaica</option>
									 				<option value="Japan">Japan</option>
									 				<option value="Jordan">Jordan</option>
									 				<option value="Kazakhstan">Kazakhstan</option>
									 				<option value="Kenya">Kenya</option>
									 				<option value="Kiribati">Kiribati</option>
									 				<option value="Korea, North">Korea, North</option>
									 				<option value="Korea, South">Korea, South</option>
									 				<option value="Kosovo">Kosovo</option>
									 				<option value="Kuwait">Kuwait</option>
									 				<option value="Kyrgyzstan">Kyrgyzstan</option>
									 				<option value="Laos">Laos</option>
									 				<option value="Latvia">Latvia</option>
									 				<option value="Lebanon">Lebanon</option>
									 				<option value="Lesotho">Lesotho</option>
									 				<option value="Liberia">Liberia</option>
									 				<option value="Libya">Libya</option>
									 				<option value="Liechtenstein">Liechtenstein</option>
									 				<option value="Lithuania">Lithuania</option>
									 				<option value="Luxembourg">Luxembourg</option>
									 				<option value="Macau">Macau</option>
									 				<option value="Macedonia">Macedonia</option>
									 				<option value="Madagascar">Madagascar</option>
									 				<option value="Malawi">Malawi</option>
									 				<option value="Malaysia">Malaysia</option>
									 				<option value="Maldives">Maldives</option>
									 				<option value="Mali">Mali</option>
									 				<option value="Malta">Malta</option>
									 				<option value="Marshall Islands">Marshall Islands</option>
									 				<option value="Mauritania">Mauritania</option>
									 				<option value="Mauritius">Mauritius</option>
									 				<option value="Mexico">Mexico</option>
									 				<option value="Micronesia">Micronesia</option>
									 				<option value="Moldova">Moldova</option>
									 				<option value="Monaco">Monaco</option>
									 				<option value="Mongolia">Mongolia</option>
									 				<option value="Montenegro">Montenegro</option>
									 				<option value="Morocco">Morocco</option>
									 				<option value="Mozambique">Mozambique</option>
									 				<option value="Namibia">Namibia</option>
									 				<option value="Nauru">Nauru</option>
									 				<option value="Nepal">Nepal</option>
									 				<option value="Netherlands">Netherlands</option>
									 				<option value="Netherlands Antilles">Netherlands Antilles</option>
									 				<option value="New Zealand">New Zealand</option>
									 				<option value="Nicaragua">Nicaragua</option>
									 				<option value="Niger">Niger</option>
									 				<option value="Nigeria">Nigeria</option>
									 				<option value="North Korea">North Korea</option>
									 				<option value="Norway">Norway</option>
									 				<option value="Oman">Oman</option>
									 				<option value="Pakistan">Pakistan</option>
									 				<option value="Palau">Palau</option>
									 				<option value="Palestinian Territories">Palestinian Territories</option>
									 				<option value="Panama">Panama</option>
									 				<option value="Papua New Guinea">Papua New Guinea</option>
									 				<option value="Paraguay">Paraguay</option>
									 				<option value="Peru">Peru</option>
									 				<option value="Philippines">Philippines</option>
									 				<option value="Poland">Poland</option>
									 				<option value="Portugal">Portugal</option>
									 				<option value="Qatar">Qatar</option>
									 				<option value="Romania">Romania</option>
									 				<option value="Russia">Russia</option>
									 				<option value="Rwanda">Rwanda</option>
									 				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									 				<option value="Saint Lucia">Saint Lucia</option>
									 				<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									 				<option value="Samoa">Samoa</option>
									 				<option value="San Marino">San Marino</option>
									 				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									 				<option value="Saudi Arabia">Saudi Arabia</option>
									 				<option value="Senegal">Senegal</option>
									 				<option value="Serbia">Serbia</option>
									 				<option value="Seychelles">Seychelles</option>
									 				<option value="Sierra Leone">Sierra Leone</option>
									 				<option value="Singapore">Singapore</option>
									 				<option value="Sint Maarten">Sint Maarten</option>
									 				<option value="Slovakia">Slovakia</option>
									 				<option value="Slovenia">Slovenia</option>
									 				<option value="Solomon Islands">Solomon Islands</option>
									 				<option value="Somalia">Somalia</option>
									 				<option value="South Africa">South Africa</option>
									 				<option value="South Korea">South Korea</option>
									 				<option value="South Sudan">South Sudan</option>
									 				<option value="Spain">Spain</option>
									 				<option value="Sri Lanka">Sri Lanka</option>
									 				<option value="Sudan">Sudan</option>
									 				<option value="Suriname">Suriname</option>
									 				<option value="Swaziland">Swaziland</option>
									 				<option value="Sweden">Sweden</option>
									 				<option value="Switzerland">Switzerland</option>
									 				<option value="Syria">Syria</option>
									 				<option value="Taiwan">Taiwan</option>
									 				<option value="Tajikistan">Tajikistan</option>
									 				<option value="Tanzania">Tanzania</option>
									 				<option value="Thailand">Thailand</option>
									 				<option value="Timor-Leste">Timor-Leste</option>
									 				<option value="Togo">Togo</option>
									 				<option value="Tonga">Tonga</option>
									 				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									 				<option value="Tunisia">Tunisia</option>
									 				<option value="Turkey">Turkey</option>
									 				<option value="Turkmenistan">Turkmenistan</option>
									 				<option value="Tuvalu">Tuvalu</option>
									 				<option value="Uganda">Uganda</option>
									 				<option value="Ukraine">Ukraine</option>
									 				<option value="United Arab Emirates">United Arab Emirates</option>
									 				<option value="United Kingdom">United Kingdom</option>
									 				<option value="Uruguay">Uruguay</option>
									 				<option value="Uzbekistan">Uzbekistan</option>
									 				<option value="Vanuatu">Vanuatu</option>
									 				<option value="Venezuela">Venezuela</option>
									 				<option value="Vietnam">Vietnam</option>
									 				<option value="Yemen">Yemen</option>
									 				<option value="Zambia">Zambia</option>
									 				<option value="Zimbabwe">Zimbabwe</option>
								 				</select>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Por Nacionalidad</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<select name="citizen" type="text" id="citizen" required>
			 										<option value="">Seleccionar</option>
													<option value="By Birth">Nacido</option>
													<option value="By Naturalization">Naturalización</option>
			 									</select>
							 				</td>
							 			</tr>-->

							 			<!-- =========================================================
							 				Space for Nationality end
							 			========================================================= -->
							 			<tr>
							 				<td>
							 					<label>Dirección Permanente</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="permanentAddress" id="permanentAddress" type="text" placeholder="Dirección Permanente" required>
							 				</td>
							 			</tr>
							 			
							 			<tr>
							 				<td>
							 					<label>Código Postal</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode1" id="postalCode1" type="text" placeholder="Código Postal" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Distrito</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="district" id="district" type="text" placeholder="Distrito" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Provincia</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="province" id="province" type="text" placeholder="Provincia" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Dirección actual</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="presentAddress" id="presentAddress" type="text" placeholder="Dirección actual" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Código Postal</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode2" id="postalCode2" type="text" placeholder="Código Postal" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Distrito</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="district1" id="district1" type="text" placeholder="Distrito" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Provincia</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="province1" id="province1" type="text" placeholder="Provincia" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Dirección del trabajo</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="workAddress" id="workAddress" type="text" placeholder="Dirección del trabajo" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Número de teléfono del trabajo</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="wpn" id="wpn" type="text" placeholder="Número de teléfono del trabajo" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Celular</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="cellno" id="cellno" type="text" placeholder="Celular" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Correo Electrónico ID</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="emailid" id="emailid" type="email" placeholder="Correo Electrónico dirección" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Skype/Viber ID</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="viberid" id="viberid" type="text" placeholder="Viber dirección"/>
							 				</td>
							 			</tr>
							 			<!--<tr>
							 				<td>
							 					<label>Skype ID</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="skypeid" id="skypeid" type="text" placeholder="Skype address"/>
							 				</td>
							 			</tr>-->
							 		</table>
									 	<div class="submit-btn">
									 		<!-- <div class="previous-btn clear"><input type="reset" class="submit" value="Reajustar" id="reset"/></div> -->
					 						<div class="next-btn clear"><input type="submit" class="submit" id="next1" value="Siguiente" onclick="return formValidator()"/></div>
									 	</div>										
								 	</form><!-- </form> -->
					 </div> <!-- Personal Information div end -->
					 
					</div>



				<!-- ==============================================================
				Div for Bank information
				==============================================================
				 --> 
			<!-- This div place for Forms Only End-->
		</div>
	</div>	
	</div> <!-- this is container div -->

		

	
	<div class="mayla-footer clear">
		<div class="footer-text">
			Derechos De Autor © 2009 Mayla Investments CC Todos los derechos reservados.<br/>
Desarrollado por: Mayla Investments CC
		</div>
	</div>
	<script>
	function createByJson() {
	      var jsonData = [                          
	                              {description:'Choos your payment gateway', value:'', text:'Payment Gateway'},                         
	                              {image:'images/msdropdown/icons/Amex-56.png', description:'My life. My card...', value:'amex', text:'Amex'},
	                              {image:'images/msdropdown/icons/Discover-56.png', description:'It pays to Discover...', value:'Discover', text:'Discover'},
	                              {image:'images/msdropdown/icons/Mastercard-56.png', title:'For everything else...', description:'For everything else...', value:'Mastercard', text:'Mastercard'},
	                              {image:'images/msdropdown/icons/Cash-56.png', description:'Sorry not available...', value:'cash', text:'Cash on devlivery', disabled:true},
	                              {image:'images/msdropdown/icons/Visa-56.png', description:'All you need...', value:'Visa', text:'Visa'},
	                              {image:'images/msdropdown/icons/Paypal-56.png', description:'Pay and get paid...', value:'Paypal', text:'Paypal'}
	                              ];
	      $("#byjson").msDropDown({byJson:{data:jsonData, name:'payments2'}}).data("dd");
	}
	$(document).ready(function(e) {           
	      //no use
	      try {
	            var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
	                                                                        var val = data.value;
	                                                                        if(val!="")
	                                                                              window.location = val;
	                                                                  }}}).data("dd");

	            var pagename = document.location.pathname.toString();
	            pagename = pagename.split("/");
	            pages.setIndexByValue(pagename[pagename.length-1]);
	            $("#ver").html(msBeautify.version.msDropdown);
	      } catch(e) {
	            //console.log(e); 
	      }
	      
	      $("#ver").html(msBeautify.version.msDropdown);
	            
	      //convert
	      $("#countries").msDropdown({roundedBorder:false});
	      createByJson();
	      $("#tech").data("dd");
	});
	function showValue(h) {
	      console.log(h.name, h.value);
	}
	$("#tech").change(function() {
	      console.log("by jquery: ", this.value);
	})
	//
	</script>

</body>
</html>	