<?php
// require "../common/config.php";
session_start();
	 foreach ($_POST as $key => $value) {
	 $_SESSION['post'][$key] = $value;
   } 
?>

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
		<p class="hb-text">Bienvenido a Mayla Inversiones CC Página oficial. </p>
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
					Div for professional information
					===================================================================
					 -->

					 <div class="mainFormHeader">
					 		<div class="formTitle">
					 			<p class="bank-info-header-text">Formulario de Solicitud</p>
					 		</div>
						 	<div class="subFormHeader">
						 		<p class="professional-info-header-text">Profesión Detalles</p>
						 	</div>
						 	<div class="">
						 		<marquee> <p class="marquee-text">Rellene el formulario de solicitud</p></marquee>
						 	</div>
							 	<form class="profession-details-form" action="confirmationForm.php" name="professionDetailsform" id="professionDetailsform" method="post">
							 		<table class="professional-info-table alignTable">
							 			<tr>
							 				<td>
							 					<label>Nombre del empleador</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employerName" id="employerName" type="text" placeholder="Nombre del empleador" required>	
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label> Dirección's Empleador</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employersAddress" id="employersAddress" type="text" placeholder="Dirección's Empleador" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Código Postal</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode3" id="postalCode3" type="text" placeholder="Código Postal" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Ocupación</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="occupation" id="occupation" type="text" placeholder="Ocupación" >
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Departamento</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="department" id="department" type="text" placeholder="Departamento" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Mensuales Ingresos</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="monthlyIncome" id="monthlyIncome" type="text" placeholder="Mensuales Ingresos" required>
							 				</td>
							 			</tr>
							 		</table>
							 		<div class="subFormHeader">
							 				 		<p class="property-details-header-text">Solicitante Detalles de la propiedad</p>
							 				 	</div>
							 				 			<table class="property-details-table alignTable">
							 					 			<tr>
							 					 				<td>
							 					 					<label>Tipo de Propiedad</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="propertyType" id="propertyType" type="text" placeholder="Tipo de Propiedad" required>	
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label> Situado de la Propiedad</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="situatedProperty" id="situatedProperty" type="text" placeholder="Situado de la Propiedad" required>
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label>Valor de la Propiedad</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="valueOfProperty" id="valueOfProperty" type="text" placeholder="Valor de la Propiedad" required>
							 					 				</td>
							 					 			</tr>
							 					 		</table>
							 					 		<div class="subFormHeader">
							 				 		<p class="">Esposo/Siguiente de kin detalles</p>
							 				 		</div>
							 				 		<table class="kin-details-table alignTable">
							 					 		<!--<tr>
							 					 			<td>
							 					 				<label>Título</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<select name="title3" id="title3">
                                                                    <option value="">Seleccionar</option>
							 					 					<option value="Mr.">Sr.</option>
							 										<option value="Mrs.">Señora.</option>
							 										<option value="Other">Otros</option>
							 					 				</select>
							 					 			</td>
							 					 		</tr> -->
							 					 		<tr>
							 					 			<td>
							 					 				<label> Primero Nombre 	</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="firstName3" id="firstName3" type="text" placeholder="Primero Nombre">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Segundo Nombre</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="middleName3" id="middleName3" type="text" placeholder="Segundo Nombre">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Apellidos</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="lastName3" id="lastName3" type="text" placeholder="Apellidos">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Relación</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="relationship" id="relationship" type="text" placeholder="Relación">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Dirección Física</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="physicalAddress2" id="physicalAddress2" type="text" placeholder="Dirección Física">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Código Postal</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="postalCode5" id="postalCode5" type="text" placeholder="Código Postal">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Teléfono (Casa)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneHome2" id="phoneHome2" type="text" placeholder="Teléfono (Casa)">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Teléfono (Trabajo)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneWork2" id="phoneWork2" type="text" placeholder="Teléfono (Trabajo)">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Celular</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="cellNumber3" id="cellNumber3" type="text" placeholder="Celular">
							 					 			</td>
							 					 		</tr>		
							 					 	</table>
									 	<div class="submit-btn">
									 		<!-- <div class="previous-btn clear"><input type="reset" class="submit" value="Reajustar" id="reset"/></div> -->
									 		<div class="next-btn clear"><input type="submit" class="submit" id="next4" name="next4" value="Siguiente" onclick="return formValidator()"/></div>
									 	</div>										
								 	</form><!-- </form> -->
					 </div> <!-- professional Information div end -->
					 
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
	
	
