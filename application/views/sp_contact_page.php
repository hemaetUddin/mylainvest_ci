<header>
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/contacts.css')?>">
  <script type="text/javascript" src="<?php echo base_url('asset/js/jquery_v1_11_1.js')?>"></script>
  <!-- Modal link end -->
  <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>">
  <script src="<?php echo base_url('asset/js/AC_RunActiveContent.js')?>" type="text/javascript"></script>
  <script type="text/javascript">
  function blinker() {
      $('.blink_me').fadeOut(100);
      $('.blink_me').fadeIn(2000);
  }

  setInterval(blinker, 1000);
  </script>
  <script src="<?php echo base_url('asset/js/jquery.js')?>"></script>
  <script src="<?php echo base_url('asset/js/beaverslider.js')?>"></script>         <!-- link to a framework -->
  <script src="<?php echo base_url('asset/js/beaverslider-effects.js')?>"></script> <!-- link to a set of effects -->
  <script type="text/javascript">
    $(function(){
    
        var slider = new BeaverSlider({
          structure: {
            container: {
              id: "my-slider",
              width: 1263,
              height: 173,
            }
          },
         content: {
            images: [
              "<?php echo base_url('asset/images/2.jpg')?>",
              "<?php echo base_url('asset/images/2.jpg')?>",
        
            ]
          },
          animation: {
            effects: effectSets["slider: big set 2"],
            interval: 1000
          }
        });   
    });
    
    </script>

  <script type="text/javascript">
  <!--
  function MM_preloadImages() { //v3.0
    var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
      var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
      if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
  }
  function MM_swapImgRestore() { //v3.0
    var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
  }
  function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
      d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
  }

  function MM_swapImage() { //v3.0
    var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
     if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
  }
  //-->
  </script>
</header>
<body onload="MM_preloadImages('<?php echo base_url('asset/images/loans.gif')?>','<?php echo base_url('asset/images/bonds.gif')?>','<?php echo base_url('asset/images/web_mail.gif')?>')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20%" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="15" colspan="5" align="center"></td>
            </tr>
            <tr>
              <td height="22" align="center"><a href="../contact.php"><img src="<?php echo base_url('asset/images/ensmall.gif')?>" width="40" height="18" /></a></td>
              <td align="center"><a href="../franch/contact.php"><img src="<?php echo base_url('asset/images/frsmall.gif')?>" width="40" height="20" /></a></td>
              <td align="center"><img src="<?php echo base_url('asset/images/essmall.gif')?>" width="40" height="20" /></td>
              <td align="center"><a href="../deutsch/contact.php"><img src="<?php echo base_url('asset/images/desmall.gif')?>" width="40" height="18" /></a></td>
              <td align="center"><a href="../portuguese/contact.php"><img src="<?php echo base_url('asset/images/ptsmall.gif')?>" width="40" height="20"  border="0"/></a></td>
            </tr>
            <tr>
              <td width="20%" align="center" class="content deactivated"><a href="../contact.php">English</a></td>
              <td width="20%" align="center" class="content deactivated"><span id="result_box4"><span title="French" closure_hashcode_fz3hiv="61"><a href="../franch/contact.php">Fran&ccedil;ais</a></span></span></td>
              <td width="20%" align="center" class="content active"><span id="result_box3"><span title="Spanish" closure_hashcode_fz3hiv="45">Espa&ntilde;ol</span></span></td>
              <td width="20%" align="center" class="content deactivated"><span id="result_box"><span title="Deutsch" closure_hashcode_fz3hiv="33"><a href="../deutsch/contact.php">Deutsch</a></span></span></td>
              <td width="20%" align="center" class="content deactivated"><span id="result_box2"><span title="portuguese" closure_hashcode_fz3hiv="39"><a href="../portuguese/contact.php">Portugu&ecirc;s</a></span></span></td>
              
            </tr>
            <tr>
              <td height="15" colspan="5" align="center"></td>
            </tr>
            <tr>
              <td colspan="5"><img src="<?php echo base_url('asset/images/top_left.gif')?>" width="270" height="15" /></td>
            </tr>
        </table></td>
<!-- MIDDLE HEADER START-->
        <td width="90%" align="right">
        <table>

        <tr>
        <td class="blink_me" style="color:#CC0" bgcolor="">
            <div style="margin-left: 50px; height:40px; width: 900px; text-align:center; background-color:#000078; font-size:22px; font-family:'Comic Sans MS', cursive">OFRECIMIENTO DE PR�STAMO DE CARGA Y CUOTAS TOTALMENTE GRATIS</div>
        </td>
        </tr>
     <tr></tr>
          <tr></tr>
            <tr></tr>
              <tr></tr><tr></tr> <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>
        </table>
        </td>       
         <!-- MIDDLE HEADER END-->
        <td width="80%" align="right"><img src="../images/cname.gif" width="323" height="63" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="198" bgcolor="#000078"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="243"><table width="100" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="23"><img src="<?php echo base_url('asset/images/block.jpg')?>" width="23" height="198" /></td>
              <td width="4"><img src="<?php echo base_url('asset/images/nav_left.gif')?>" width="4" height="198" /></td>
              <td width="215" style="background-color:#C91414;"><table width="215" border="0" cellspacing="0" cellpadding="0">
			  		<tr>
						<td>
							 <div id="menu">
                  <ul>
                     <li><?php echo anchor('sp_profile/index/sp_profile_page', 'Perfil'); ?></li>
                     <li><?php echo anchor('sp_structure/index/sp_structure_page', 'Empresa Structure'); ?></li>
                     <li><?php echo anchor('sp_service/index/sp_service_page', 'Nuestro servicio'); ?></li>
                     <li><?php echo anchor('sp_job_descriptions/index/sp_job_descriptions', 'Tarbajo Descripciones'); ?></li>
                     <li><?php echo anchor('sp_payment/index/sp_payment_system', 'Cantidad y Reembolso'); ?></li>
                     <li><?php echo anchor('sp_bankinfoform/index/(sp/bank_info_form)', 'Solicitud de Pr�stamo'); ?></li>    
                  </ul>
               </div>
						</td>
					</tr>                  
              </table>
              
            </tr>
        </table></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="25"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center">&nbsp;</td>
                  <td><a href="index.php" class="class1">Casa</a><span class="foot">|</span> <span class="class1"><a href="career.php" class="class1">Carreras</a></span> <span class="foot">|</span> <span class="h2">Cont�ctenos</span> <span class="foot">|</span> <span class="content2"><a href="faq.php" class="class1">Faq `s</a></span></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="173"class="Hot" background="<?php echo base_url('asset/images/1.jpg')?>"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="173" background="<?php echo base_url('asset/images/2.jpg')?>">
				  <div id="my-slider"></div>
                  
				  </td>
                </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
  <tr>
    <td width="69%" height="23" align="center" bgcolor="#990000" class="h1">BIENVENIDO A MAYLA INVESTMENTS CC WEB OFICIAL.</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25"><img src="<?php echo base_url('asset/images/white.gif')?>" width="23" height="1" /></td>
        <td width="205" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td><a href="loans.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('loans','','<?php echo base_url('asset/images/loans.gif')?>',1)"><img src="<?php echo base_url('asset/images/loans1.gif')?>" name="loans" width="205" height="146" border="0" id="loans" /></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td><a href="bonds.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('bonds','','<?php echo base_url('asset/images/bonds.gif')?>',1)"><img src="<?php echo base_url('asset/images/bonds1.gif')?>" name="bonds" width="205" height="146" border="0" id="bonds" /></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          
        </table></td>
        <td width="1174" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-top:10px; padding-left:5px; padding-right:5px; padding-bottom:10px;">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-bottom:5px; padding-left:5px; padding-right:5px; padding-top:5px; border:5px solid #00017D; margin-top:10px; margin-bottom:10px;">
              <tr>
                <td bgcolor="#FFFFFF" style="padding-left:5px; padding-right:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><h1>Cont�ctenos</h1></td>
                    </tr>
                  </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td colspan="2"><p><span class="h1">Switzerland</span> <br />
                                      <span class="content">direcci�n f�sica<br />
                                         las Mayla Investments AG<br />
                                        01 piso <br />
                                        Loewenstrasse 89<br />
                                        8001 Zurich <br />
                                        Suiza <br />
                                        <br />
                                        Direcci�n Postal <br />
                                        las Mayla Investments AG <br />
                                        PO Box <br />
                                        4411 Zurich <br />
                                        Suiza</span><br />
                                <br />
                              </p></td>
                            </tr>
                                                        <tr>
                              <td width="15%"><span class="content">E-mail:</span></td>
                              <td width="85%"><span class="content"><a class="easy-modal-open" id="1stmail" href="#modal1">info@maylainvest.com</a></span></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><span class="content"><a class="easy-modal-open" id="2ndmail" href="#modal2">sales@maylainvest.com</a></span></td>
                            </tr>
                             <tr>
                              <td>&nbsp;</td>
                             <td><span class="content"><a class="easy-modal-open" id="3rdmail" href="#modal3">admin@maylainvest.com</a></span></td>
                            </tr>
                        </table></td>
                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td colspan="2"><p><span class="h1">Sud�frica</span><br />
                                      <span class="content">direcci�n f�sica <br />
                                        Mayla Investments CC en<br />
                                        68 Princess Street <br />
                                        de mayo justo<br />
                                        Johannesburgo<br />
                                       Sud�frica</span></p>
                                  <p class="content">Direcci�n Postal<br />
                                    Mayla Investments CC en<br />
                                   PO Box 30626 <br />
                                    de mayo justo <br />
                                    2092 <br />
                                    Johannesburgo <br />
                                    Sud�frica<br />
                                    <br />
                                </p></td>
                            </tr>
                            <tr>
                              <td width="8%">&nbsp;</td>
                              <td width="92%">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="84%" valign="top"><p align="justify" class="content"><span class="h1">Los clientes existentes:<br />
                            </span>Usted puede averiguar el estado de su cuenta de La Mayla Investments CC en, incluyendo todos los cr�ditos, d�bitos, y su saldo actual, a trav�s de nuestro Servicio de Atenci�n al Cliente<br />
                            <br />
                          E-mail:<span class="content"><a class="easy-modal-open" id="1stmail" href="#modal1">info@maylainvest.com</a></span></p>
                            <p class="content"><span class="h1">Nuevos Clientes:</span><br />
                              No est� seguro de con qui�n hablar? �Necesitas ayuda? Por favor E-mail a nuestro Servicio al Cliente<br />
                              <br />
                              E-mail:<span class="content"><a class="easy-modal-open" id="1stmail" href="#modal1">info@maylainvest.com</a></span></p></td>
                        <td width="16%" align="right"><img src="../images/contact.jpg" width="190" height="190" /></td>
                      </tr>
                  </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="44" align="center" background="<?php echo base_url('asset/images/foot.gif')?>" class="content2"><span class="foot">Derechos De Autor � 2009 Mayla Investments CC Todos los derechos reservados.<br />
    Desarrollado por:</span> <a target="_blank" class="class2">Mayla Investments CC</a></td>
  </tr>
</table>
<div class="easy-modal" id="modal1">
		<div class="easy-modal-inner">

		<div class="container">
<button class="close" valign="right" data-dismiss="modal" type="button" title="Close">X</button>
			<div class="mayla_cform">
					<h1 class="contacts">P�ngase en Contacto Con Nosotros</h1>

				<form class="cform" id="info_form">
				<table>
					<tr>
						<td class="mayla-td">Enviar a</td>
						<td><input class="input_field" id="info" type="text" name="email"></td>
					</tr>
					<tr>
						<td class="mayla-td">Nombre De Usuario</td>
						<td><input class="input_field" type="text" id="username" name="username" placeholder="Nombre De Usuario" required></td>
					</tr>
					<tr>
						<td class="mayla-td">Usuario Email</td>
						<td><input class="input_field" type="text" id="useremail" name="useremail" placeholder="Usuario Email" required></td>
					</tr>
					<tr>
						<td class="mayla-td">N�mero De Tel�fono Del Usuario</td>
						<td><input class="input_field" type="text" id="userphone" name="useremail" placeholder="N�mero De Tel�fono Del Usuario"></td>
					</tr>
					<tr>
						<td class="mayla-td">Sujeto</td>
						<td><input class="input_field" type="text" id="usersubject" name="useremail" placeholder="Sujeto" required></td>
					</tr>
					<tr>
						<td class="mayla-td">Mensaje</td>
						<td><textarea class="msgbox" id="usermessage" placeholder="Escriba Su Mensaje Aqu�"></textarea></td>
					</tr>
					<tr>
						<td class="mayla-td"></td>
						<td>
						<input class="cform_btn" type="button" id="info_btn" name="cform_btn" value="Enviar" />
						</td>
					</tr>
				</table>	
				</form>
			</div>
		</div>
	</div> <!-- easy modal inner -->
	</div> <!-- easy modal 1 end -->

		<div class="easy-modal" id="modal2">
		<div class="easy-modal-inner">

		<div class="container">
<button class="close" valign="right" data-dismiss="modal" type="button" title="Close">X</button>
			<div class="mayla_cform">
					<h1 class="contacts">P�ngase en Contacto Con Nosotros</h1>

				<form class="cform" id="sales_form">
				<table>
					<tr>
						<td class="mayla-td">Envoyer �</td>
						<td><input class="input_field" id="sales" type="text" name="email"></td>
					</tr>
					<tr>
						<td class="mayla-td">Nom D'utilisateur</td>
						<td><input class="input_field" type="text" id="username2" name="username" placeholder="Nom D'utilisateur"></td>
					</tr>
					<tr>
						<td class="mayla-td">E-mail</td>
						<td><input class="input_field" type="text" id="useremail2" name="useremail" placeholder="E-mail"></td>
					</tr>
					<tr>
						<td class="mayla-td">N�mero De Tel�fono Del Usuario</td>
						<td><input class="input_field" type="text" id="userphone2" name="useremail" placeholder="N�mero De Tel�fono Del Usuario"></td>
					</tr>
					<tr>
						<td class="mayla-td">Sujeto</td>
						<td><input class="input_field" type="text" id="usersubject2" name="useremail" placeholder="Sujeto"></td>
					</tr>
					<tr>
						<td class="mayla-td">Mensaje</td>
						<td><textarea class="msgbox" id="usermessage2" placeholder="Escriba Su Mensaje Aqu�"></textarea></td>
					</tr>
					<tr>
						<td class="mayla-td"></td>
						<td>
						<input class="cform_btn" type="button" id="sales_btn" name="cform_btn" value="Enviar" />
						</td>
					</tr>
				</table>	
				</form>
			</div>
		</div>
	</div> <!-- easy modal inner -->
	</div> <!-- easy modal 1 end -->
<div class="easy-modal" id="modal3">
		<div class="easy-modal-inner">

		<div class="container">
<button class="close" valign="right" data-dismiss="modal" type="button" title="Close">X</button>
			<div class="mayla_cform">
					<h1 class="contacts">P�ngase en Contacto Con Nosotros</h1>

				<form class="cform" id="buyer_form">
				<table>
					<tr>
						<td class="mayla-td">Envoyer �</td>
						<td><input class="input_field" id="buyer" type="text" name="email"></td>
					</tr>
					<tr>
						<td class="mayla-td">Nom D'utilisateur</td>
						<td><input class="input_field" type="text" id="username3" name="username" placeholder="Nom D'utilisateur"></td>
					</tr>
					<tr>
						<td class="mayla-td">E-mail</td>
						<td><input class="input_field" type="text" id="useremail3" name="useremail" placeholder="E-mail"></td>
					</tr>
					<tr>
						<td class="mayla-td">N�mero De Tel�fono Del Usuario</td>
						<td><input class="input_field" type="text" id="userphone3" name="useremail" placeholder="N�mero De Tel�fono Del Usuario"></td>
					</tr>
					<tr>
						<td class="mayla-td">Sujeto</td>
						<td><input class="input_field" type="text" id="usersubject3" name="useremail" placeholder="Sujeto"></td>
					</tr>
					<tr>
						<td class="mayla-td">Mensaje</td>
						<td><textarea class="msgbox" id="usermessage3" placeholder="Escriba Su Mensaje Aqu�"></textarea></td>
					</tr>
					<tr>
						<td class="mayla-td"></td>
						<td>
						<input class="cform_btn" type="button" id="buyer_btn" name="cform_btn" value="Enviar" />
						</td>
					</tr>
				</table>	
				</form>
			</div>
		</div>
	</div> <!-- easy modal inner -->
	</div> <!-- easy modal 1 end -->
		<script type="text/javascript" src="<?php echo base_url('asset/js/jquery.easyModal.js')?>"></script>
		<script type="text/javascript">
		$(function() {

		$('.easy-modal').easyModal({
			top: 20,
			bottom:100,
			overlay: 0.9
		});

		$('.easy-modal-open').click(function(e) {
			$('#info').val('info@maylainvest.com');
			$('#sales').val('sales@maylainvest.com');
       $('#buyer').val('admin@maylainvest.com');
			var target = $(this).attr('href');
			$(target).trigger('openModal');
			e.preventDefault();
		});

		$('.easy-modal-close').click(function(e) {
		$('.easy-modal').trigger('closeModal');
		});

		$('.easy-modal-animated').easyModal({
			top: 200,
			overlay: 0.2,
			transitionIn: 'animated bounceInLeft',
			transitionOut: 'animated bounceOutRight',
			closeButtonClass: '.animated-close'
		});	//modal closeModal

		$('#info_btn, #sales_btn, #buyer_btn').click(function(event){
			if($(event.target).attr('id')=='info_btn'){
        
		  var mailto=$('#info').val();
	      var username=$('#username').val();
	      var useremail=$('#useremail').val();
	      var userphone=$('#userphone').val();
	      var usersubject=$('#usersubject').val();
	      var usermessage=$('#usermessage').val();
	      var submitval=$('.cform_btn').val();

	      $.post('classes/infomailvalues.php',{
	      	mailto:mailto,
	      	username:username,
	      	useremail:useremail,
	      	userphone:userphone,
	      	usersubject:usersubject,
	      	usermessage:usermessage,
	      	submitval:submitval
	      },
	      function(result){
	      	alert(result);
	      	//$("#info_form").trigger("reset");
	       	
	      })
      
// alert(mailto + username + userphone + useremail + usersubject + usermessage);
    }

else if($(event.target).attr('id')=='sales_btn'){
        
	  var mailto=$('#sales').val();
      var username=$('#username2').val();
      var useremail=$('#useremail2').val();
      var userphone=$('#userphone2').val();
      var usersubject=$('#usersubject2').val();
      var usermessage=$('#usermessage2').val();
      var submitval=$('.cform_btn').val();

      $.post('classes/salesmailvalues.php',{
	      	mailto:mailto,
	      	username:username,
	      	useremail:useremail,
	      	userphone:userphone,
	      	usersubject:usersubject,
	      	usermessage:usermessage,
	      	submitval:submitval
	      },
	      function(result){
	      	alert(result);
	      	//$("#sales_form").trigger("reset");
	      	
	      })
      //alert(mailto + username + userphone + useremail + usersubject + usermessage);
      
    } 
		
else if($(event.target).attr('id')=='buyer_btn'){
        
	  var mailto=$('#buyer').val();
      var username=$('#username3').val();
      var useremail=$('#useremail3').val();
      var userphone=$('#userphone3').val();
      var usersubject=$('#usersubject3').val();
      var usermessage=$('#usermessage3').val();
      var submitval=$('.cform_btn').val();

      $.post('classes/buyermailvalues.php',{
	      	mailto:mailto,
	      	username:username,
	      	useremail:useremail,
	      	userphone:userphone,
	      	usersubject:usersubject,
	      	usermessage:usermessage,
	      	submitval:submitval
	      },
	      function(result){
	      	alert(result);
	      	//$("#sales_form").trigger("reset");
	      	
	      })
      //alert(mailto + username + userphone + useremail + usersubject + usermessage);
      
    } 
		})
	});

		</script>
</body>
</html>
