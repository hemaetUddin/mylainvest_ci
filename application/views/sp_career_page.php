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
              "<?php echo base_url('asset/images/1.jpg')?>",
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
<body onload="MM_preloadImages('<?php echo base_url('asset/images/loans.gif')?>','<?php echo base_url('asset/images/bonds.gif')?>')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20%" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="15" colspan="5" align="center"></td>
            </tr>
            <tr>
              <td height="22" align="center"><a href="../career.php"><img src="<?php echo base_url('asset/images/ensmall.gif')?>" width="40" height="18" /></a></td>
              <td align="center"><a href="../franch/career.php"><img src="<?php echo base_url('asset/images/frsmall.gif')?>" width="40" height="20" /></a></td>
              <td align="center"><img src="<?php echo base_url('asset/images/essmall.gif')?>" width="40" height="20" /></td>
              <td align="center"><a href="../deutsch/career.php"><img src="<?php echo base_url('asset/images/desmall.gif')?>" width="40" height="18" /></a></td>
              <td align="center"><a href="../portuguese/career.php"><img src="<?php echo base_url('asset/images/ptsmall.gif')?>" width="40" height="20"  border="0"/></a></td>
            </tr>
            <tr>
              <td width="20%" align="center" class="content deactivated"><a href="../career.php">English</a></td>
              <td width="20%" align="center" class="content deactivated"><span id="result_box4"><span title="French" closure_hashcode_fz3hiv="61"><a href="../franch/career.php">Fran&ccedil;ais</a></span></span></td>
              <td width="20%" align="center" class="content active"><span id="result_box3"><span title="Spanish" closure_hashcode_fz3hiv="45">Espa&ntilde;ol</span></span></td>
<td width="20%" align="center" class="content deactivated"><span id="result_box"><span title="Deutsch" closure_hashcode_fz3hiv="33"><a href="../deutsch/career.php">Deutsch</a></span></span></td>
              <td width="20%" align="center" class="content deactivated"><span id="result_box2"><span title="portuguese" closure_hashcode_fz3hiv="39"><a href="../portuguese/career.php">Portugu&ecirc;s</a></span></span></td>
              
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
            <div style="margin-left: 50px; height:40px; width: 900px; text-align:center; background-color:#000078; font-size:22px; font-family:'Comic Sans MS', cursive">OFRECIMIENTO DE PRÉSTAMO DE CARGA Y CUOTAS TOTALMENTE GRATIS</div>
        </td>
        </tr>
     <tr></tr>
          <tr></tr>
            <tr></tr>
              <tr></tr><tr></tr> <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>  <tr></tr>
        </table>
        </td>       
         <!-- MIDDLE HEADER END-->
        <td width="80%" align="right"><img src="<?php echo base_url('asset/images/cname.gif')?>" width="323" height="63" /></td>
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
         <li><?php echo anchor('sp_bankinfoform/index/(sp/bank_info_form)', 'Solicitud de Préstamo'); ?></li>    
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
                  <td><a href="index.php" class="class1">Casa</a><span class="foot">|</span> <span class="h2">Carreras</span> <span class="foot">|</span> <span class="content2"><a href="contact.php" class="class1">Contáctenos</a></span> <span class="foot">|</span> <span class="content2"><a href="faq.php" class="class1">Faq's</a></span></td>
</tr>
              </table></td>
            </tr>
            <tr>
              <td height="173"class="Hot" background="<?php echo base_url('asset/images/1.jpg')?>"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="173" background="<?php echo base_url('asset/images/1.jpg')?>">
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
                      <td><h1>Carreras</h1></td>
                    </tr>
                  </table>
                    <p class="h3"> ¿Quiénes somos?</p>
                  <p align="justify" class="content">En Mayla Investments CC nuestro personal es nuestro mayor activo. Operamos con integridad y reconocer el valor de nuestros clientes y las personas que trabajan para nosotros. Atraemos a la gente de la más alta calidad y estamos a la altura a un nivel de confiabilidad e integridad.</p>
                  <p align="justify" class="content">Nuestros reclutadores asegurar que las vacantes se llenan con los individuos más motivados y con talento, mientras que el desarrollo del personal se asegura de que nuestra fuerza de trabajo sigue siendo motivado y capacitado.</p>
                  <p class="h3">Patrón de la opción</p>
                  <p align="justify" class="content">Mayla Investments CC es una empresa joven, vibrante, con personas de ideas afines. El ambiente de trabajo es desafiante, estimulante y gratificante, y ofrece a los individuos una oportunidad para crecer, ser creativo y divertirse en el lugar de trabajo.</p>
                  <p class="h3">Entrenamiento</p>
                  <p align="justify" class="content">Ponemos gran énfasis de la capacitación de nuestro personal con el fin de desarrollar sus habilidades individuales. El entrenamiento llevado a cabo agrega valor a la persona, así como el crecimiento de la Compañía. Tenemos nuestra propia casa-academia de entrenamiento y el producto y las intervenciones de desarrollo personal se produjo sobre un total de 14.700 días de entrenamiento. El departamento de formación tiene una biblioteca establecida con los libros, revistas, vídeos y DVD.<br />
                            <br />
                    </p>
                  <table width="100%" border="0" cellspacing="0" cellpadding="3" style="border: 2px solid #669900;">
                      <tr>
                        <td colspan="2"><span class="h3">¿Estás preparado para el reto?</span><br /></td>
                        <td width="190" rowspan="2" align="right"><img src="<?php echo base_url('asset/images/parner.jpg')?>" width="210" height="204" /></td>
                      </tr>
                      <tr>
                        <td width="942" colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                            <tr>
                              <td width="20"><img src="<?php echo base_url('asset/images/arrow.gif'); ?>" width="16" height="16" /></td>
                              <td><span class="content">¿Es usted: Dinámico</span></td>
                            </tr>
                            <tr>
                              <td><img src="<?php echo base_url('asset/images/arrow.gif'); ?>" width="16" height="16" /></td>
                              <td><span class="content">vibrante</span></td>
                            </tr>
                            <tr>
                              <td><img src="<?php echo base_url('asset/images/arrow.gif'); ?>" width="16" height="16" /></td>
                              <td><span class="content">entusiasta</span></td>
                            </tr>
                            <tr>
                              <td><img src="<?php echo base_url('asset/images/arrow.gif'); ?>" width="16" height="16" /></td>
                              <td><span class="content">Dedicada y trabajadora? </span></td>
                            </tr>
                            <tr>
                              <td><img src="<?php echo base_url('asset/images/arrow.gif'); ?>" width="16" height="16" /></td>
                              <td><span class="content">Entonces somos la empresa para la U.</span></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  <p><span class="h3"> Vacantes <br />
                    2x  Consultores De Ventas<br />
                   Enviar CV a core electrónico : </span><a class="easy-modal-open" id="1stmail" href="#modal1"> admin@maylainvest.com</a><span class="h1"><br />
                      <br />
                    </span></p></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="44" align="center" background="../images/foot.gif" class="content2"><span class="foot">Derechos De Autor © 2009 Mayla Investments CC Todos los derechos reservados.<br />
    Desarrollado por:</span> <a target="_blank" class="class2">Mayla Investments CC</a></td>
  </tr>
</table>
<!--  Modal start -->
<div class="easy-modal" id="modal1">
		<div class="easy-modal-inner">

		<div class="container">
<button class="close" valign="right" data-dismiss="modal" type="button" title="Close">X</button>
			<div class="mayla_cform">
					<h1 class="contacts">Contacte Con Nosotros</h1>

				<form class="cform" id="info_form">
				<table>
					<tr>
						<td class="mayla-td">Enviar a</td>
						<td><input class="input_field" id="admin" type="text" name="email"></td>
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
						<td class="mayla-td">Número De Teléfono Del Usuario</td>
						<td><input class="input_field" type="text" id="userphone" name="useremail" placeholder="Número De Teléfono Del Usuario"></td>
					</tr>
					<tr>
						<td class="mayla-td">Sujeto</td>
						<td><input class="input_field" type="text" id="usersubject" name="useremail" placeholder="Sujeto" required></td>
					</tr>
					<tr>
						<td class="mayla-td">Mensaje</td>
						<td><textarea class="msgbox" id="usermessage" placeholder="Escriba Su Mensaje Aquí"></textarea></td>
					</tr>
					<tr>
						<td class="mayla-td"></td>
						<td>
						<input class="cform_btn" type="button" id="info_btn" name="cform_btn" value="Envoyer" />
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
			$('#admin').val('admin@maylainvest.com');
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

		$('#info_btn').click(function(event){
			if($(event.target).attr('id')=='info_btn'){
        
		  var mailto=$('#admin').val();
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
		})
	});

		</script>
<!--  Modal end -->
</body>
</html>