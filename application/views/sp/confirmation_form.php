<?php
	error_reporting(0);
	// require'../common/config.php';
		// if ($db->errno) {
		// 	printf("Unable to connect to the database : %s" , $db->errno);
		// 	exit();
		// }

session_start();

	foreach ($_POST as $key => $value) {
	 	$_SESSION['post'][$key] = $value;
		 } 
	extract($_SESSION['post']);
?>

<!DOCTYPE html>
	  <html>
	  <head>
	  	<title>Loan Application</title>
	  	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('asset/images/favicon.ico')?>">
	  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	  	<script src="<?php echo base_url('asset/sp/js/jquery.js')?>"></script>
	  	<!--<script src="js/confirmationInfo.js"></script>-->
	  	<script src="<?php echo base_url('asset/sp/js/beaverslider.js')?>"></script>         
	  	<script src="<?php echo base_url('asset/sp/js/beaverslider-effects.js')?>"></script>
	  	<script src="<?php echo base_url('asset/sp/js/jquery.dd.js')?>"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('asset/sp/css/sprite.css')?>">
	    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('asset/sp/css/dd.css')?>">
	    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('asset/sp/css/flags.css')?>">


	    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('asset/sp/css/loan.css')?>">
	  	<style type="text/css">
	  	</style>
	  	<!-- script for slider start -->
	  		<script>
	  		$(function(){
	  		  var slider = new BeaverSlider({
	  	        structure: {
	  	          container: {
	  	            id: "my-slider",
	  	            width:  1059,
	  	            height: 177,
	  	          }
	  	        },
	  	        content: {
	  	          images: [
	  	            "<?php echo base_url('asset/sp/images/1.jpg')?>",
	  	            "<?php echo base_url('asset/sp/images/2.jpg')?>",
	  	          ]
	  	        },
	  	        animation: {
	  	          effects: effectSets["slider: big set 2"],
	  	          interval: 1200
	  	        }
	  	      });   
	  		      // code end for slider

	  			$('#previous').click(function(){
	  			        parent.history.back();
	  			        return false;
	  			    });

	  			// code for loan in words Start
	  				 $("#amountVal").change(function(){
	  							var amountVal = $("#amountVal").val();
	  							// alert(amountVal);
	  							// exit();
	  							$.post("classes/parseAmountVal.php",
	  							{
	  							amountVal:amountVal
	  							},
	  						function(result){
	  						// alert(result); //subcategorySel
	  							$("#loanAmountInWords").html(result);		
	  							});	
	  			});

	  			// code for loan in words End

	  				  			//spouse details start
	  			        		$('#marriedIn,#traditional').click(function () {                    
	  			                       $('div .spouseDetails').show(10);
	  			                });
	  			                $('#marriedOut,#single').click(function () {
	  			                      $('div .spouseDetails').hide(10);
	  			                     
	  			                 });
	  			        		//spouse details end
	  		});
	  		</script>

	  		<script type="text/javascript">
	  			//Calculate values
	  			function calculateValue() {
	  				var amount = document.getElementById('amountVal');
	  				var year = document.getElementById('year');
	  				var interest = document.getElementById('interest');
	  				var month = document.getElementById('month');
	  				//alert (amount.value);
	  				month.value = parseInt(year.value)*12;
	  				interest.value = parseFloat((parseInt(amount.value)+((parseInt(amount.value)*9)/100)*parseInt(year.value))/(parseInt(year.value)*12));
	  			}
	  			//Calculate values end
	  		</script>
	  		<script type="text/javascript">
	  				$('document').ready(function(){
	  				var $marital_status = "<?php echo $_POST['mstatus']; ?>";
	  				//alert($marital_status);
	  				$("input[name=mstatus][value="+$marital_status+"]").attr('checked', true);

					//checked of mstatus married or single
						var isChecked = $('#marriedOut:checked, #single:checked').val()?true:false;
						//alert(isChecked);
						if(isChecked== true){
							$('div .spouseDetails').hide(10);
						};
	  			});

	  		</script>
	  		<script type="text/javascript">
				function blinker() {
				    $('.blink_me').fadeOut(100);
				    $('.blink_me').fadeIn(2000);
				}
				
				setInterval(blinker, 1000);
			</script>
	  		

	  </head>
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
	  			<!-- This div place for all Forms-->
	  				
	  					<div class="mainFormHeader">
	  								<div class="formTitle">
	  									<p class="bank-info-header-text">Formulario de Solicitud</p>
	  								</div>
	  								<div class="subFormHeader">
	  									<p class="bank-info-header-text">Calcular acerca de su préstamo</p>
	  								</div>
	  								<div class="bank-info-sub-header" style="border-bottom:1px solid black">
	  									<marquee> <p class="marquee-text">Confirme por favor su información dada y Editar si hay alguna información incorrecta.</p></marquee>
	  								</div>


	  							<form class="form" method="post" enctype="multipart/form-data" role="form" action="upload.php">
									
<!-- =======================================Calculator Table Start====================== -->
	  								<table class="bank-info-table middleAlign">
	  									<tr>
	  										<td>
	  											<label>Requerir Monto del préstamo US $</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<select name="amountVal" id="amountVal" style="width: 300px;">
	  												<option value="<?php echo $amountVal;?>"><?php echo $amountVal;?></option>
	  												<?php
	  													
	  													// $q = "SELECT id,usDollar FROM dollar ORDER BY id";

	  													// $results =$db->query($q);
	  													// while (list($id, $usDollar)=$results->fetch_row()){
	  													// 	echo "<option vlaue='$usDollar'>".$usDollar."</option>";
	  													// }
	  												?>

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
									<select style="" name="loanAmountInWords" id="loanAmountInWords">
                                    <option value="<?php echo $loanAmountInWords;?>"><?php echo $loanAmountInWords;?></option>

									</select>
								</td>
							   </tr> 
	  									<tr>
	  										<td>
	  											<label>Quiero préstamo para el Año</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<select name="year" id="year" >
	  												  	<option value="<?php echo $year.'Años';?>"><?php echo $year.' Año';?></option>
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
	  											<input class="" name="month" id="month" type="text" value="<?php echo $month; ?>">
	  										</td>
	  									</tr>
	  									<tr>
	  										<td>
	  											<label>I Accept Mensual de Pago Importe de US$</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="interest" id="interest" type="text" value="<?php echo $interest; ?>">
	  										</td>
	  									</tr>
	  									<tr>
	  										<td>
	  											<label>Préstamo Uso Propósito</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="loanPurpose" id="loanPurpose" type="text" maxlength="110" value="<?php echo $loanPurpose; ?>">
	  										</td>
	  									</tr> 
	  								</table>  <!-- Calculator Table End -->
	  								<!--<div class="subFormHeader">
	  									<p class="bank-info-header-text">Banco de Información Detalles</p>
	  								</div>	

									<table class="bank-info-table alignTable">
	  									<tr>
	  										<td>
	  											<label>Nombre De La Cuenta</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="accountName" id="accountName" type="text" placeholder="Nombre De La Cuenta" value="<?php echo $accountName; ?>">
	  										</td>
	  									</tr> 
	  									<tr>
	  										<td>
	  											<label>Número de cuenta</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="accountNo" id="accountNo" type="text" placeholder="Número de cuenta" value="<?php echo $accountNo; ?>">
	  										</td>
	  									</tr> 
	  									<tr>
	  										<td>
	  											<label>Banco Nombre</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="bankName" id="bankName" type="text" placeholder="Banco Nombre" value="<?php echo $bankName; ?>">
	  										</td>
	  									</tr> 
	  								</table>-->

	  								 <!-- Calculate and Bankinfo table pull code end -->
	  							<!-- </form> -->
<!-- =========================================================================== Personal Table Start -->

							
														 	<div class="subFormHeader">
														 		<p class="personal-info-header-text">Información Personal</p>
														 	</div>
														 	
														 	<table class="personal-info-table alignTable">
															 			<!--<tr>
															 				<td>
															 					<label>Título</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<select name="title1" id="title1">
															 						<option value="<?php echo $title1;?>"><?php echo $title1;?></option>
								                                                    <option value="Mr.">Sr.</option>
															 						<option value="Mrs.">Señora.</option>
															 						<option value="Other">Otros</option>
															 					</select>
															 				</td>
															 			</tr> -->
															 			<tr>
															 				<td>
															 					<label> Primero Nombre</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="firstName" id="firstName" type="text" value="<?php echo $firstName;?>">
															 				</td>
															 			</tr> 
															 			<tr>
															 				<td>
															 					<label>Segundo Nombre</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="middleName" id="middleName" type="text" value="<?php echo $middleName;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Apellidos</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="lastName" id="lastName" type="text" value="<?php echo $lastName;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Sexo</label>
															 				</td>
															 				<td>:</td>
															 				<td>
								                                                    <select name="gender" id="gender">
								                                                    <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
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
															 					<input class="" name="mothersName" id="mothersName" type="text" value="<?php echo $mothersName;?>">
															 				</td>
															 			</tr> 
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Nombre del Padre</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="fathersName" id="fathersName" type="text" value="<?php echo $fathersName;?>">
															 				</td>
															 			</tr> 
															 			<tr>
															 				<td>
															 					<label>Fecha de nacimiento</label>
															 				</td>
															 				<td>:</td>
															 				<td>
								                                                <input class="" name="dob" id="dob" type="text" value="<?php echo $dob;?>" >
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>DNI</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="nic" id="nic" type="text" value="<?php echo $nic;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Dirección Permanente</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="permanentAddress" id="permanentAddress" type="text" value="<?php echo $permanentAddress;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Código Postal</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="postalCode1" id="postalCode1" type="text" value="<?php echo $postalCode1;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Distrito</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="district" id="district" type="text" placeholder="Distrito" maxlength="60" value="<?php echo $district;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Provincia</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="province" id="province" type="text" placeholder="Provincia" maxlength="60" value="<?php echo $province;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Dirección actual</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="presentAddress" id="presentAddress" type="text" value="<?php echo $presentAddress;?>">
															 				</td>
															 			</tr>
															 			
															 			<tr>
															 				<td>
															 					<label>Código Postal</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="postalCode2" id="postalCode2" type="text" value="<?php echo $postalCode2;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Distrito</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="district1" id="district1" type="text" placeholder="Distrito" maxlength="60" value="<?php echo $district1;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Provincia</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="province1" id="province1" type="text" placeholder="Provincia" maxlength="60" value="<?php echo $province1;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Dirección del trabajo</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="workAddress" id="workAddress" type="text" value="<?php echo $workAddress;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Número de teléfono del trabajo</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="wpn" id="wpn" type="text" value="<?php echo $wpn;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Celular</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="cellno" id="cellno" type="text" value="<?php echo $cellno;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Correo Electrónico ID</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="emailid" id="emailid" type="email" value="<?php echo $emailid;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Skype/Viber ID</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="viberid" id="viberid" type="text" value="<?php echo $viberid;?>">
															 				</td>
															 			</tr>
															 			<!--<tr>
															 				<td>
															 					<label>Skype ID</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="skypeid" id="skypeid" type="text" placeholder="Skype address" value="<?php echo $skypeid;?>"/>
															 				</td>
															 			</tr>-->
															 		</table>
<!-- ================================================================================== Personal table End-->
<!-- ================================================================================== professin table Start-->
														<div class="subFormHeader">
														 		<p class="personal-info-header-text">Profesional-info-Tabla</p>
														 	</div>

														<table class="professional-info-table alignTable">
							 			<tr>
							 				<td>
							 					<label>Nombre del empleador</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employerName" id="employerName" type="text" placeholder="Nombre del empleador" value="<?php echo $employerName;?>" required>	
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label> Dirección's Empleador</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employersAddress" id="employersAddress" type="text" placeholder="Dirección's Empleador" value="<?php echo $employersAddress;?>" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Código Postal</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode3" id="postalCode3" type="text" placeholder="Código Postal" value="<?php echo $postalCode3;?>" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Ocupación</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="occupation" id="occupation" type="text" placeholder="Ocupación" value="<?php echo $occupation;?>" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Departamento</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="department" id="department" type="text" placeholder="Departamento" value="<?php echo $department;?>" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Mensuales Ingresos</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="monthlyIncome" id="monthlyIncome" type="text" placeholder="Mensuales Ingresos" value="<?php echo $monthlyIncome;?>" required>
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
							 					 					<input class="" name="propertyType" id="propertyType" type="text" placeholder="Tipo de Propiedad" value="<?php echo $propertyType;?>" required>	
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label>Situado de la Propiedad</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="situatedProperty" id="situatedProperty" type="text" placeholder="Situado de la Propiedad" value="<?php echo $situatedProperty;?>" required>
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label>Valor de la Propiedad</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="valueOfProperty" id="valueOfProperty" type="text" placeholder="Valor de la Propiedad" value="<?php echo $valueOfProperty;?>" required>
							 					 				</td>
							 					 			</tr>
							 					 		</table>		 		

<!-- ================================================================================== professin table End-->
<!-- ================================================================================== Family table Start-->
																
												 		<!--<div class="formTitle">
												 			<p class="family-info-header-text">Familiares Detalles Informations</p>
												 		</div>
													 	<div class="subFormHeader">
													 		<p class="family-info-header-text">Estado Civil</p>
													 	</div>
													 	 Table for Marital Status 
													 	<table name="marital_status alignTable">
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
													 	 Table for Marital Status End
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
													 	 					<select name="title2" id="title2" value="<?php echo $title2;?>">
							 					 					<option value="Mr.">Sr.</option>
							 										<option value="Mrs.">Señora.</option>
							 										<option value="Other">Otros</option>
							 					 				</select>
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label> Primero Nombre</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="firstName2" id="firstName2" type="text" placeholder="Primero Nombre" value="<?php echo $firstName2;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Segundo Nombre</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="middleName2" id="middleName2" type="text" placeholder="Segundo Nombre" value="<?php echo $middleName2;?>">
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label>Apellidos</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="lastName2" id="lastName2" type="text" placeholder="Apellidos" value="<?php echo $lastName2;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Dirección Física</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="physicalAddress1" id="physicalAddress1" type="text" placeholder="Dirección Física" value="<?php echo $physicalAddress1;?>">
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label>Código Postal</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="postalCode4" id="postalCode4" type="text" placeholder="Código Postal" value="<?php echo $postalCode4;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Teléfono (Casa)</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="phoneHome" id="phoneHome" type="text" placeholder="Teléfono (Casa)" value="<?php echo $phoneHome;?>">
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label>Teléfono (Trabajo)</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="phoneWork" id="phoneWork" type="text" placeholder="Teléfono (Trabajo)" value="<?php echo $phoneWork;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Celular</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="cellNumber2" id="cellNumber2" type="text" placeholder="Celular" value="<?php echo $cellNumber2;?>">
													 	 				</td>
													 	 			</tr>
													 	 		</table>
													 	 		</div>-->
													 	 		<div class="subFormHeader">
							 				 		<p class="">Esposo/Siguiente de kin detalles</p>
							 				 		</div>
							 				 		<table class="kin-details-table alignTable">
							 					 	<!--	<tr>
							 					 			<td>
							 					 				<label>Título</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<select name="title3" id="title3" value="<?php echo $title3;?>">
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
							 					 				<input class="" name="firstName3" id="firstName3" type="text" placeholder="Primero Nombre" value="<?php echo $firstName3;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Segundo Nombre</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="middleName3" id="middleName3" type="text" placeholder="Segundo Nombre" value="<?php echo $middleName3;?>">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Apellidos</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="lastName3" id="lastName3" type="text" placeholder="Apellidos" value="<?php echo $lastName3;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Relación</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="relationship" id="relationship" type="text" placeholder="Relación" value="<?php echo $relationship;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Dirección Física</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="physicalAddress2" id="physicalAddress2" type="text" placeholder="Dirección Física" value="<?php echo $physicalAddress2;?>">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Código Postal</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="postalCode5" id="postalCode5" type="text" placeholder="Código Postal" value="<?php echo $postalCode5;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Teléfono (Casa)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneHome2" id="phoneHome2" type="text" placeholder="Teléfono (Casa)" value="<?php echo $phoneHome2;?>">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Teléfono (Trabajo)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneWork2" id="phoneWork2" type="text" placeholder="Teléfono (Trabajo)" value="<?php echo $phoneWork2;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Celular</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="cellNumber3" id="cellNumber3" type="text" placeholder="Celular" value="<?php echo $cellNumber3;?>">
							 					 			</td>
							 					 		</tr>		
							 					 	</table>
													 	 		 <!-- //spouse details  -->

<!-- ================================================================================== Family table End-->
<?php 
															function captchaToken($length = 5, $result='') {

															    for($i = 0; $i < $length; $i++) {

															        $case = mt_rand(0, 1);
															        switch($case){

															            case 0:
															                $data = mt_rand(0, 9);
															                break;
															            case 1:
															                $alpha = range('a','z');
															                $item = mt_rand(0, 26);

															                $data = strtoupper($alpha[$item]);
															                break;
															        }

															        $result .= $data;
															    }

															    return $result;
															}
															
															$captchaNum = captchaToken(7);


														?>
													 		<div class="formTitle">
													 			<p class="family-info-header-text">Cargar documento Sección</p>
													 		</div>
													 		<div class="uploadSection">
													 		<script>
													 			// FormGet Online Form Builder JS Code
													 			// Creating and Adding Dynamic Form Elements.
													 			var i = 1; // Global Variable for Name
													 			var j = 1; // Global Variable for E-mail
													 			/*
													 			=================
													 			Creating Text Box for name field in the Form.
													 			=================
													 			*/
													 			function textBoxCreate(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm").appendChild(y);
													 			i++;
													 			}

													 			function textBoxCreate1(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm1").appendChild(y);
													 			i++;
													 			}

													 			function textBoxCreate2(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm2").appendChild(y);
													 			i++;
													 			}

													 			function textBoxCreate3(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm3").appendChild(y);
													 			i++;
													 			}
													 		</script>
													 		<b class="color">Todo el relleno obligatorio adjuntar archivos de otro modo no se considerará la aplicación.</b></br>
										                        1) Copian seis estados de cuenta bancarios meses del solicitante.&nbsp;<p id="myForm"></p>
													 			<button class="name" onclick="textBoxCreate()">Adjuntar Archivo</button><br/>

													 			2) Une copie de preuve du demandeur de l'impôt payé.  &nbsp;<p id="myForm1"></p>
													 			<button class="name" onclick="textBoxCreate1()">Adjuntar Archivo</button><br/>
													 			
                                                                3) Prueba del solicitante de copia Ocupación. &nbsp;<p id="myForm2"></p>
													 			<button class="name" onclick="textBoxCreate2()">Adjuntar Archivo</button> <br/>
													 			 4) Candidato  DNI/ ID / copia del pasaporte. &nbsp;<p id="myForm3"></p>
													 			<button class="name" onclick="textBoxCreate3()">Adjuntar Archivo</button>
													 			
													 			<p class="guarantee">He leído y comprendido la oferta de préstamos Mayla investments cc's. Por la presente acepto todos los términos y condiciones y voy a firmar la garantía de obtener el préstamo.</p></div>
													 		<table>
													 		<tr>
													 			<td style="text-align: right;">Código de Acceso</td>
													 			<td background="images/cap.png" width="100" height="15" style="color:black; font-size: 20px; text-align: center;"><span id="captchaVal" value="<?php echo $captchaNum;  ?>"><?php echo $captchaNum; ?></span></td>

													 			</tr>
																<tr>
																	<td>Proporcionar el Código de Acceso</td>
																	<td><input type="text" id="capUserVal" name="capUserVal" required></td>
																	<!-- <td background="images/cap.png" width="100" height="30" style="color:black; font-size: 20px;"></td> -->
																</tr>
															</table> <!-- Upload Section and captcha -->

											 				 	<div class="submit-btn"><div class="submit-btn">
									<div class="next-btn clear"><input type="submit" style="width: 160px !important;" name="btnUpload" id="btnUpload"   class="submit"  value="Confirmar y Enviar"></div>						 		
                      <div class="progress progress-striped active">
      <div class="progress-bar" style="width:0%"></div>
    </div>
															 	</div>	

														 	</form><!-- </form> -->
																 	

	  						</div> <!-- Bank Information div end -->
	  				<!-- Calculator Form End-->
	  			<!-- This div place for all Forms End-->

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
	<?php 
	session_destroy();
	?>

	  </body>
	  </html>

	  