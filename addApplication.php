<?php
/*
Template Name: Add Application
*/
get_header();
// Step 1: connect to databse
$connectdb = mysqli_connect ("localhost", "root", "usbw", "dfc-db");
// Step 2: Check if connected to database
if(mysqli_connect_errno()) {
	echo mysqli_connect_errno();
	exit();
}

?>

	<style>
		td, tr {
			text-align: left;
			
			vertical-align: middle;
			border-collapse:collapse;
			border: 0px;
			padding:0px;
		}
		table {
			width: 100%;
			margin-left: 5px;
			text-align: left;
			border-collapse:collapse;
			border: 0px;
		}
		h1{
			margin-top: 1px;
			margin-left: 10px:
		}
		input[type=text] {
			padding: 1px;
			border: solid 1px #696969;
			transition: box-shadow 1s, border 1s;
		}
		input[type=date] {
			padding: 1px;
			border: solid 1px #696969;
			transition: box-shadow 1s, border 1s;
		}
		input[type=submit] {
			align="center";
		}
		label {
			float:right;
			text-align:left;
		}
		div.site-content{
		background-color:#ffffff;
		width:940px;
		width: 940px;
		margin: auto; 
		margin-bottom: 10px; 
		margin-top: 10px; 
		border:2px solid #cccccc;
		}
	.auto-style1 {
		text-align: center;
	}
	.auto-style2 {
		text-align: right;
	}
	</style>

	
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  
	<script>
		function resetForm() {
			document.getElementById("form1").reset();
		}

	</script>
	 <script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		  });
	</script>
	<!--<div id="primary"site-content class="content-area">-->
		<div id="content" class="site-content" role="main" >
				
			<h1>Create New Application</h1>
			<form id="form1" action="" method="post" >
		<table align="center" cellpadding="0" cellspacing="0" class="" style="width: 880px; margin-left: 25px;">
			<tr>
				<td></td>
				<td class="auto-style1">
				<h2>ADULT 1</h2>
					</td>
				<td></td>
				<td class="auto-style1">
				<h2>ADULT 2</h2>
					</td>
				<td></td>
				<td>DATE:</td>
				<td><input type="text" id="datepicker"></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input name="firstName1" type="text"/></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="firstName2" type="text"/></td>
				<td></td>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input name="lastName1" type="text"/></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="lastName2" type="text"/></td>
				<td></td>
				<td colspan="2" class="auto-style1"><strong>PRIORITY</strong></td>
			</tr>
			<tr>
				<td>Date of Birth:</td>
				<td><input name="birthDate1" type="date"/ placeholder="DDMMYY"></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="birthDate2" type="date"/ placeholder="DDMMYY"></td>
				<td></td>
				<td colspan="2" class="auto-style1">1<input type="radio" name="matchedPriority" value="1"></td>
			</tr>
			<tr>
				<td>Main Contact:</td>
				<td><input name="mainContact1" type="text" placeholder="Email/Number"></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="mainContact2" type="text" placeholder="Email/Number"></td>
				<td></td>
				<td colspan="2" class="auto-style1">2<input type="radio" name="matchedPriority" value="2"></td>
			</tr>
			<tr>
				<td>Cell Contact:</td>
				<td><input name="cellPhone1" type="text" placeholder="123 456 7890"></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="cellPhone2" type="text" placeholder="123 456 7890"></td>
				<td></td>
				<td colspan="2" class="auto-style1">3<input type="radio" name="matchedPriority" value="3"></td>
			</tr>
			<tr>
				<td>Work Contact:</td>
				<td><input name="workPhone1" type="text" placeholder="123 456 7890"></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="workPhone2" type="text" placeholder="123 456 7890"></td>
				<td></td>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Email 1:</td>
				<td><input name="emailP1" type="text" placeholder="someone@example.com"></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="emailP2" type="text" placeholder="someone@example.com"></td>
				<td></td>
				<td colspan="2" class="auto-style1"><strong>UNIT REQUEST</strong></td>
			</tr>
			<tr>
				<td>Email 2:</td>
				<td><input name="emailS1" type="text" placeholder="someone@example.com"></td>
				<td style="width: 10px; height: 42px;"></td>
				<td><input name="emailS2" type="text" placeholder="someone@example.com"></td>
				<td></td>
				<td>UNIT SIZE</td>
				<td><select name="RequestUnitSize">
					<option value="">Unit Size</option>
					<option value="1B">1B</option>
					<option value="2B">2B</option>
					<option value="3B">3B</option>
					<option value="4B">4B</option>
					<option value="2TH">2TH</option>
					<option value="3TH">3TH</option>
				</select></td>
			</tr>
	</table>
			
	<table align="center" cellpadding="0" cellspacing="0" class="" style="width: 880px; margin-left: 25px;">
		<tr>
			<td></td>
			<td class="auto-style1">INDIVIDUAL</td>
			<td></td>
			<td class="auto-style1">INDIVIDUAL</td>
			<td class="auto-style1">&nbsp;</td>
			<td class="auto-style1">INDIVIDUAL</td>
			<td class="auto-style1">&nbsp;</td>
			<td class="auto-style1">INDIVIDUAL</td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input name="firstName3" type="text"/></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="firstName4" type="text"/></td>
			<td>&nbsp;</td>
			<td><input name="firstName5" type="text"/></td>
			<td>&nbsp;</td>
			<td><input name="firstName6" type="text"/></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input name="lastName3" type="text"/></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="lastName4" type="text"/></td>
			<td>&nbsp;</td>
			<td><input name="lastName5" type="text"/></td>
			<td>&nbsp;</td>
			<td><input name="lastName6" type="text"/></td>
		</tr>
		<tr>
			<td>Date of Birth:</td>
			<td><input name="birthDate3" type="date"/ placeholder="DDMMYY"></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="birthDate4" type="date"/ placeholder="DDMMYY"></td>
			<td>&nbsp;</td>
			<td><input name="birthDate5" type="date"/ placeholder="DDMMYY"></td>
			<td>&nbsp;</td>
			<td><input name="birthDate6" type="date"/ placeholder="DDMMYY"></td>
		</tr>
		<tr>
			<td>Main Contact:</td>
			<td><input name="mainContact3" type="text" placeholder="Email/Number"></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="mainContact4" type="text" placeholder="Email/Number"></td>
			<td>&nbsp;</td>
			<td><input name="mainContact5" type="text" placeholder="Email/Number"></td>
			<td>&nbsp;</td>
			<td><input name="mainContact6" type="text" placeholder="Email/Number"></td>
		</tr>
		<tr>
			<td>Cell Contact:</td>
			<td><input name="cellPhone3" type="text" placeholder="123 456 7890"></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="cellPhone4" type="text" placeholder="123 456 7890"></td>
			<td>&nbsp;</td>
			<td><input name="cellPhone5" type="text" placeholder="123 456 7890"></td>
			<td>&nbsp;</td>
			<td><input name="cellPhone6" type="text" placeholder="123 456 7890"></td>
		</tr>
		<tr>
			<td>Work Contact:</td>
			<td><input name="workPhone3" type="text" placeholder="123 456 7890"></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="workPhone4" type="text" placeholder="123 456 7890"></td>
			<td>&nbsp;</td>
			<td><input name="workPhone5" type="text" placeholder="123 456 7890"></td>
			<td>&nbsp;</td>
			<td><input name="workPhone6" type="text" placeholder="123 456 7890"></td>
		</tr>
		<tr>
			<td>Email 1:</td>
			<td><input name="emailP3" type="text" placeholder="someone@example.com"></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="emailP4" type="text" placeholder="someone@example.com"></td>
			<td>&nbsp;</td>
			<td><input name="emailP5" type="text" placeholder="someone@example.com"></td>
			<td>&nbsp;</td>
			<td><input name="emailP6" type="text" placeholder="someone@example.com"></td>
		</tr>
		<tr>
			<td>Email 2:</td>
			<td><input name="emailS3" type="text" placeholder="someone@example.com"></td>
			<td style="width: 10px; height: 42px;"></td>
			<td><input name="emailS4" type="text" placeholder="someone@example.com"></td>
			<td>&nbsp;</td>
			<td><input name="emailS5" type="text" placeholder="someone@example.com"></td>
			<td>&nbsp;</td>
			<td><input name="emailS6" type="text" placeholder="someone@example.com"></td>
		</tr>
	</table>

	<table align="center" cellpadding="0" cellspacing="0" class="" style="width: 920px; margin-left: 25px;">
		<tr>
			<td colspan="2" class="auto-style1"><strong>CURRENT ADDRESS</strong></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input name="mailingAddress" type="text" class="mailingAddress"/></td>
		</tr>
		<tr>
			<td>Postal Code/ZIP Code:</td>
			<td><input name="mailingPostalCode" type="text" class="mailingPostalCode"/></td>
		</tr>
		<tr>
			<td>City/Town:</td>
			<td><input name="mailingCity" type="text" class="mailingCity"/></td>
			<td style="width: 10px; height: 42px;" class="auto-style2"></td>
			<td colspan="7">&nbsp;</td>
		</tr>
		<tr>
			<td>Province/State:</td>
			<td><input name="mailingProvince" type="text" class="mailingProvince"/></td>
			<td style="width: 10px; height: 42px;" class="auto-style2"></td>
			<td colspan="7"><strong>NOTE:</strong></td>
		</tr>
		<tr>
			<td>Landlord Name:</td>
			<td><input name="landlordName" type="text" class="landlordName"/></td>
			<td style="width: 10px; height: 42px;" class="auto-style2"></td>
			<td colspan="7" rowspan="2"><textarea name="specialRequests" class="specialRequests" style="border: solid 1px #696969;"></textarea></td>
		</tr>
		<tr>
			<td>Landlord Contact:</td>
			<td><input name="landlordContact" type="text" class="landlordContact" placeholder="123 456 7890"/></td>
			<td style="width: 10px; height: 42px;" class="auto-style2"></td>
		</tr>
		
		<tr>
		<td></td>
			<td colspan="10" class="auto-style1"><input name='send' type="submit" value="Submit" /> <input type="reset" value="Clear" onclick="resetForm()"/></td>
		<td></td>
		</tr>
	</table>
		</form>
			
			<div id="message"></div>
			<br/>
	</div><!-- #primary -->
	
<?php
	/**********************************************************/
	/**********************************************************/
	$applicationDate = $_POST['applicationDate'];
	$specialRequests = $_POST['specialRequests'];
	$landlordContact = $_POST['landlordContact']; 
	$landlordName = $_POST['landlordName'];  
	$mailingPostalCode = $_POST['mailingPostalCode'];
	$mailingAddress = $_POST['mailingAddress'];
	$mailingProvince = $_POST['mailingProvince'];
	$mailingCity = $_POST['mailingCity'];
	$emailS6 = $_POST['emailS6'];
	$emailS5 = $_POST['emailS5'];
	$emailS4 = $_POST['emailS4'];
	$emailS3 = $_POST['emailS3'];
	$emailS2 = $_POST['emailS2'];
	$emailS1 = $_POST['emailS1'];
	$emailP1 = $_POST['emailP1'];
	$emailP2 = $_POST['emailP2'];
	$emailP3 = $_POST['emailP3'];
	$emailP4 = $_POST['emailP4'];
	$emailP5 = $_POST['emailP5'];
	$emailP6 = $_POST['emailP6'];
	$workPhone1 = $_POST['workPhone1'];
	$workPhone2 = $_POST['workPhone2'];
	$workPhone3 = $_POST['workPhone3'];
	$workPhone4 = $_POST['workPhone4'];
	$workPhone5 = $_POST['workPhone5'];
	$workPhone6 = $_POST['workPhone6'];
	$cellPhone1 = $_POST['cellPhone1'];
	$cellPhone2 = $_POST['cellPhone2'];
	$cellPhone3 = $_POST['cellPhone3'];
	$cellPhone4 = $_POST['cellPhone4'];
	$cellPhone5 = $_POST['cellPhone5'];
	$cellPhone6 = $_POST['cellPhone6'];
	$mainContact1 = $_POST['mainContact1'];
	$mainContact2 = $_POST['mainContact2'];
	$mainContact3 = $_POST['mainContact3'];
	$mainContact4 = $_POST['mainContact4'];
	$mainContact5 = $_POST['mainContact5'];
	$mainContact6 = $_POST['mainContact6'];
	$birthDate1 = $_POST['birthDate1'];
	$birthDate2 = $_POST['birthDate2'];
	$birthDate3 = $_POST['birthDate3'];
	$birthDate4 = $_POST['birthDate4'];
	$birthDate5 = $_POST['birthDate5'];
	$birthDate6 = $_POST['birthDate6'];
	$lastName1 = $_POST['lastName1'];
	$lastName2 = $_POST['lastName2'];
	$lastName3 = $_POST['lastName3'];
	$lastName4 = $_POST['lastName4'];
	$lastName5 = $_POST['lastName5'];
	$lastName6 = $_POST['lastName6'];
	$firstName1 = $_POST['firstName1'];
	$firstName2 = $_POST['firstName2'];
	$firstName3 = $_POST['firstName3'];
	$firstName4 = $_POST['firstName4'];
	$firstName5 = $_POST['firstName5'];
	$firstName6 = $_POST['firstName6'];	
	$RequestUnitSize = $_POST['RequestUnitSize'];
	$priority = $_POST['matchedPriority'];
	
	/*if(!empty($matchedPriority)) {

		$N = count($_POST['matchedPriority']);
		$myString = "";
		for($i=0; $i < $N; $i++)
		{
			if($myString == ""){
				$myString = $matchedPriority[$i];
			}
			else{
				$myString = $myString.','.$matchedPriority[$i];
			}
			
		}
		$matchedPriority = $myString;
	}*/
	
	/*if(isset($_POST['applicationFee']) && $_POST['applicationFee'] == 'done') {
		$applicationFee = '1';
	}
	else{
		$applicationFee = '0';
	}    	
	*/
	/* Application */
	if (isset($_POST['send'])) {

		
		
		$sql = "INSERT INTO application (application_date,  preference, priority, special_requests,landlord_name,landlord_phone) 
							VALUES ('$applicationDate','$RequestUnitSize','$priority','$specialRequests','$landlordName','$landlordContact');";
		
		$query = mysqli_query($connectdb, $sql);
		if (!$query) {
			die('Invalid query: insert application ' . mysqli_errno($connectdb));
		}
		else
		{
			$idApp = mysqli_insert_id($connectdb);
			/* Individual 1 */
			if (isset($_POST['firstName1']) && $firstName1 != "") {
				
					echo $idApp;
					$sql2 = "INSERT INTO 
					individual
					(first_name,last_name,is_applicant,idAPPLICATION_INDIVIDUAL, home_phone, work_phone, cell_phone, email1, email2, date_of_birth, mailing_address, mailing_postal_code,mailing_prov,mailing_city) 
			VALUES('$firstName1','$lastName1',1,'$idApp','$mainContact1','$workPhone1','$cellPhone1','$emailP1','$emailS1','$birthDate1','$mailingAddress','$mailingPostalCode','$mailingProvince','$mailingCity') ";
					$query = mysqli_query($connectdb, $sql2);
						if (!$query){
							die('Invalid query: insert individual ' . mysqli_errno($connectdb));
						}
						else{
							
						}
			}
			
			/* Individual 2 */
			if (isset($_POST['firstName2']) && $firstName2 != "") {
				
					echo $idApp;
					$sql2 = "INSERT INTO 
					individual
					(first_name,last_name,is_applicant,idAPPLICATION_INDIVIDUAL, home_phone, work_phone, cell_phone, email1, email2, date_of_birth, mailing_address, mailing_postal_code,mailing_prov,mailing_city) 
			VALUES('$firstName2','$lastName2',1,'$idApp','$mainContact2','$workPhone2','$cellPhone2','$emailP2','$emailS2','$birthDate2','$mailingAddress','$mailingPostalCode','$mailingProvince','$mailingCity')";
					$query = mysqli_query($connectdb, $sql2);
						if (!$query){
							die('Invalid query: insert individual ' . mysqli_errno($connectdb));
						}

			}
			
			
			/* Individual 3 */
			if (isset($_POST['firstName3']) && $firstName3 != "") {
				
					echo $idApp;
					$sql2 = "INSERT INTO 
					individual
					(first_name,last_name,is_applicant,idAPPLICATION_INDIVIDUAL, home_phone, work_phone, cell_phone, email1, email2, date_of_birth, mailing_address, mailing_postal_code,mailing_prov,mailing_city) 
			VALUES('$firstName3','$lastName3',1,'$idApp','$mainContact3','$workPhone3','$cellPhone3','$emailP3','$emailS3','$birthDate3','$mailingAddress','$mailingPostalCode','$mailingProvince','$mailingCity') ";
					$query = mysqli_query($connectdb, $sql2);
						if (!$query){
							die('Invalid query: insert individual ' . mysqli_errno($connectdb));
						}

			}
			
			/* Individual 4 */
			if (isset($_POST['firstName4']) && $firstName4 != "") {
				
					echo $idApp;
					$sql2 = "INSERT INTO 
					individual
					(first_name,last_name,is_applicant,idAPPLICATION_INDIVIDUAL, home_phone, work_phone, cell_phone, email1, email2, date_of_birth, mailing_address, mailing_postal_code,mailing_prov,mailing_city) 
			VALUES('$firstName4','$lastName4',1,'$idApp','$mainContact4','$workPhone4','$cellPhone4','$emailP4','$emailS4','$birthDate4','$mailingAddress','$mailingPostalCode','$mailingProvince','$mailingCity') ";
					$query = mysqli_query($connectdb, $sql2);
						if (!$query){
							die('Invalid query: insert individual ' . mysqli_errno($connectdb));
						}

			}
			
			/* Individual 5 */
			if (isset($_POST['firstName5']) && $firstName5 != "") {
				
					echo $idApp;
					$sql2 = "INSERT INTO 
					individual
					(first_name,last_name,is_applicant,idAPPLICATION_INDIVIDUAL, home_phone, work_phone, cell_phone, email1, email2, date_of_birth, mailing_address, mailing_postal_code,mailing_prov,mailing_city) 
			VALUES('$firstName5','$lastName5',1,'$idApp','$mainContact5','$workPhone5','$cellPhone5','$emailP5','$emailS5','$birthDate5','$mailingAddress','$mailingPostalCode','$mailingProvince','$mailingCity') ";
					$query = mysqli_query($connectdb, $sql2);
						if (!$query){
							die('Invalid query: insert individual ' . mysqli_errno($connectdb));
						}

			}
			
			/* Individual 6 */
			if (isset($_POST['firstName6']) && $firstName6 != "") {
				
					echo $idApp;
					$sql2 = "INSERT INTO 
					individual
					(first_name,last_name,is_applicant,idAPPLICATION_INDIVIDUAL, home_phone, work_phone, cell_phone, email1, email2, date_of_birth, mailing_address, mailing_postal_code,mailing_prov,mailing_city) 
			VALUES('$firstName6','$lastName6',1,'$idApp','$mainContact6','$workPhone6','$cellPhone6','$emailP6','$emailS6','$birthDate6','$mailingAddress','$mailingPostalCode','$mailingProvince','$mailingCity') ";
					$query = mysqli_query($connectdb, $sql2);
						if (!$query){
							die('Invalid query: insert individual ' . mysqli_errno($connectdb));
						}

			}
			echo "<script>var r = confirm('You have successfully added a new application! Go Back to Aplications'); if (r == true) { document.location.href = 'http://localhost:8080/wordpress/applicants-list/' ;}else { document.location.href = 'http://localhost:8080/wordpress/applicants-list/' ;}</script>";

		}
		
		
	}
	

	
	
?>	
<?php
	$connectdb->close();
	//get_sidebar();
	get_footer();
?>