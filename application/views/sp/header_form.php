<!DOCTYPE html>
<html>
<head>
	<title>Loan Application:Form</title><?php 
	// session_start();
?>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('asset/images/favicon.ico')?>">
	<script src="<?php echo base_url('asset/sp/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('asset/sp/js/bankinfovalidation.js')?>"></script>
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
						alert(amountVal);
						// exit();
						$.post("<?php echo base_url('asset/sp/classes/parseAmountVal.php')?>",
						{
						amountVal:amountVal
						},
					function(result){
					// alert(result); //subcategorySel
						$("#loanAmountInWords").html(result);		
						});	
		});

		// code for loan in words End
		

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

<script>
// function newDoc() {
//     window.location.assign("http://localhost/office/06122014/loan_application_R_final/personalInfoForm.php");
// }
// </script>

</head>