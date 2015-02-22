<?php
// require'../common/config.php';
//session_start();
?>
<?php
	session_start();
	if(isset($_POST['employerName'])) {
		if($_POST['employerName']	=="" || $_POST['employersAddress'] =="" || $_POST['postalCode3']	=="" ||  $_POST['department'] ==""  || $_POST['monthlyIncome'] ==""  || $_POST['propertyType'] ==""  || $_POST['situatedProperty'] ==""  || $_POST['valueOfProperty'] ==""){
			echo 'Please provide required field';
			//header('location: firstPage.php');
		}

		foreach ($_POST as $key => $value) {
 		$_SESSION['post'][$key] = $value;
 }
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

					<!-- ==========================================================
					 Hidden Values Start
					==========================================================
					 -->

					 

					 <!-- ==========================================================
					  Hidden Values Start
					 ==========================================================
					  -->

					<!-- 
					===================================================================
					Family Details information
					===================================================================
					 -->

					 <div class="mainFormHeader">
					 		<div class="formTitle">
					 			<p class="family-info-header-text">Familiares Detalles Informations</p>
					 		</div>
						 	<div class="subFormHeader">
						 		<p class="family-info-header-text">Estado Civil</p>
						 	</div>
						 	<!-- <div class="">
						 		<marquee> <p class="marquee-text">Fill in the application form</p></marquee>
						 	</div> -->
                                                        
                                                        
                                                        
							 	<form class="family-details-form" action="confirmationForm.php" name="familyDetailsform" id="familyDetailsform" method="post">
								 	
								 	<!-- Table for Marital Status -->
								 	
								 	<table name="marital_status">
								 		<tr>
							 				<td colspan="3" style="padding-left:100px;">
								 				<input id="marriedIn" type="radio" name="mstatus" value="MarriedIn">  
									 		    <span>Casado en</span>
									 		    <input id="traditional" type="radio" name="mstatus" value="Traditional">  
									 		    <span>Tradicional</span>
									 		    <input id="marriedOut" type="radio" name="mstatus" value="MarriedOut">  
									 		    <span>Casado salida</span>
									 		    <input id="single" type="radio" name="mstatus" value="Single">  
									 		    <span>Solo</span>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td colspan="3">
							 					<span style="font-size:15px;">Si está casado en régimen de gananciales,Le confirmo que , al firmar este formulario de solicitud, Tengo mi cónyuges consentimiento para entrar en un contrato de crédito.</span>
							 				</td>
							 			</tr>	
								 	</table>
								 	<!-- Table for Marital Status End-->


								 	<div class="spouseDetails">	
								 	<div class="subFormHeader">
								 		<p class="family-info-header-text">Esposo Detalles</p>
								 	</div>

							 		<table class="spouse-details-table alignTable">
							 			<tr>
							 				<td>
							 					<label>Título</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<select name="title2" id="title2">
                                                                    <option value="">Seleccionar</option>
							 					 					<option value="Mr.">Sr.</option>
							 										<option value="Mrs.">Señora.</option>
							 										<option value="Other">Otros</option>
							 					 				</select>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Primero Nombre</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="firstName2" id="firstName2" type="text" placeholder="Primero Nombre">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Segundo Nombre</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="middleName2" id="middleName2" type="text" placeholder="Segundo Nombre">
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Apellidos</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="lastName2" id="lastName2" type="text" placeholder="Apellidos">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Dirección Física</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="physicalAddress1" id="physicalAddress1" type="text" placeholder="Dirección Física">
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Código Postal</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode4" id="postalCode4" type="text" placeholder="Código Postal">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Teléfono (Casa)</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="phoneHome" id="phoneHome" type="text" placeholder="Teléfono (Casa)">
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Teléfono (Trabajo)</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="phoneWork" id="phoneWork" type="text" placeholder="Teléfono (Trabajo)">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Celular</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="cellNumber2" id="cellNumber2" type="text" placeholder="Celular">
							 				</td>
							 			</tr>
							 		</table>
							 		</div>
							 		<div class="subFormHeader">
							 				 		<p class="">Siguiente de kin detalles</p>
							 				 		<p style="font-size:14px; color:#000;">(Que no resida en el domicilio del solicitante)</p>
							 				 	</div>
							 				 		<table class="kin-details-table alignTable">
							 					 		<tr>
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
							 					 		</tr> 
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
									 		<div class="next-btn clear"><input type="submit" class="submit" value="Siguiente" id="next2" name="next2" onclick="return formValidator()"/></div>
									 	</div>										
								 	</form><!-- </form> -->
					 </div> <!-- family Information div end -->
					 
					</div>



				<!-- ==============================================================
				Div for Family information
				==============================================================
				 --> 
				  <?php
				 	
				 ?>

			<!-- This div place for Forms Only End-->
		</div>
	</div>	
	</div> <!-- this is container div -->




	<div class="mayla-footer clear">
		<div class="footer-text">
			Copyright © 2009 Mayla Investments C C All rights reserved.<br/>
				Powered By : Mayla Investments CC
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
	
	
