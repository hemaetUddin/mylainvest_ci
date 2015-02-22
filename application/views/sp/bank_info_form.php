<?php
//require'../common/config.php';
//session_start();
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
				<h1>Oferta de Préstamo totalmente gratis y Honorarios</h1>
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
		<p class="hb-text">Bienvenido a Mayla Inversiones CC Página oficial.</p>
	</div>
<!-- header bottom -->

<div class="container clear">
	<div class="left-sidebar">
		<div class="loans-igm">
			<a href="../bonds.php"><img class="left_barimg"  src="<?php echo base_url('asset/sp/images/loans.gif')?>"></a>
		</div>
	</div> <!-- left div end -->
	<div class="right-side">
		<div class="">
			<!-- This div place for Forms Only -->


			                

			<div class="mainFormHeader">
						<div class="formTitle">
							<p class="bank-info-header-text">Formulario de Solicitud</p>
						</div>
						<div class="subFormHeader">
							<p class="bank-info-header-text">Calcular acerca de su préstamo</p>
						</div>
						<!-- <div class="bank-info-sub-header">
							<marquee> <p class="marquee-text">Fill in the application form</p></marquee>
						</div> -->
					<form class="bank-form" action="personalInfoForm.php" name="secondForm" id="secondForm" method="post">
						<table class="bank-info-table middleAlign">
							<tr>
								<td>
									<label>Requerir Monto del préstamo US $</label>
								</td>
								<td>:</td>
								<td>
									<select name="amountVal" id="amountVal" style="width: 300px;">
										<option value="">Seleccione la cantidad de préstamo</option>
										<?php ?>
											
											
											<?php foreach($rows as $r):?>
											<?php echo "<option value='$r->usDollar'>".$r->usDollar."</option>"; ?>											
											
										<?php endforeach ?>
											
											    

										
									</select>
								</td>
							</tr> 
							<tr>
								<td>
									<label>Monto del préstamo en palabras</label>
								</td>
								<td>:</td>
								<td>
									<select style="" name="loanAmountInWords" id="loanAmountInWords"></select>
								</td>
							</tr> 
							<tr>
								<td>
									<label>Quiero préstamo para el Año</label>
								</td>
								<td>:</td>
								<td>
									<select name="year" id="year" >
										  	<option value="">Seleccione el año de plazo</option>
									        <option value="1">1 Año</option>
											<option value="2">2 Años</option>
											<option value="3">3 Años</option>
											<option value="4">4 Años</option>
											<option value="5">5 Años</option>
											<option value="6">6 Años</option>
											<option value="7">7 Años</option>
											<option value="8">8 Años</option>
											<option value="9">9 Años</option>
											<option value="10">10 Años</option>
											<option value="11">11 Años</option>
											<option value="12">12 Años</option>
											<option value="13">13 Años</option>
											<option value="14">14 Años</option>
											<option value="15">15 Años</option>
											<option value="16">16 Años</option>
											<option value="17">17 Años</option>
											<option value="18">18 Años</option>
											<option value="19">19 Años</option>
											<option value="20">20 Años</option>
									      </select>
								</td>
							</tr>
							<tr>
								<td>
									<label>Calcular</label>
								</td>
								<td>:</td>
								<td>
									<input type="button" class="submit" onclick="calculateValue()" value="Calcular"/>
								</td>
							</tr>
							<tr>
								<td>
									<label>I Accept Número de Reembolso Mes de</label>
								</td>
								<td>:</td>
								<td>
									<input class="" name="month" id="month" type="text" placeholder="Número de mes de para Amortización" required>
								</td>
							</tr>
							<tr>
								<td>
									<label>I Accept Mensual de Pago Importe de US$</label>
								</td>
								<td>:</td>
								<td>
									<input class="" name="interest" id="interest" type="text" placeholder="Mensual del importe de reembolso" required>
								</td>
							</tr>
							<tr>
								<td>
									<label>Préstamo Uso Propósito  </label>
								</td>
								<td>:</td>
								<td>
									<input class="" name="loanPurpose" id="loanPurpose" type="text" maxlength="110" placeholder="Componer máximo 110 caracteres" required>
								</td>
							</tr> 
						</table>
							<div class="submit-btn">
							 	<!-- <div class="previous-btn clear"><input type="reset" class="submit" value="Reajustar" id="reset" /></div> -->
							 	<div class="next-btn clear"><input type="submit" class="submit" id="next" value="Siguiente" onclick="return formValidator()"/></div>
							</div>										
						 	
					</form>
				</div> <!-- Bank Information div end -->
				<div class="personalInformation"><!-- Personal Information div start -->


				</div><!-- Personal Information div end -->
				
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









