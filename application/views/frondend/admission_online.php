<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admission :: online</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url();?>frontend/css/style.css"/>
</head>
<body>
	<div class="page-content" style="background-image: url('<?php echo base_url();?>frontend/images/wizard-v4.jpg')">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<div style="width: 100%;display: flex;">
						<div style="width: 20%;">
							<img src="<?php echo base_url();?>frontend/images/logo.png" style="width: 30%;">
						</div>
						<div style="width: 60%;">
							<p style="font-size: 15px;"><b>SCHOOL NAME</b></p>
							<p style="font-size: 10px;">SCHOOL ADDRESS</p><br>
							<p>ADMISSION FORM 2023-24</p>
						</div>
						<div style="width: 20%;text-align: left;">
							<p style="font-size: 12px;">ADMISSION NO.:</p>
							<p style="font-size: 12px;">DATE:</p>
						</div>
					</div>
				</div>
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">General Info</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>General Information:</h3>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<select name="campus" id="campus">
											<option value="" selected>Campus</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="admission_class" id="admission_class">
											<option value="" selected>Admission Class</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first-name" name="first-name" required>
											<span class="label">First Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last-name" name="last-name" required>
											<span class="label">Last Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<select name="gender" id="gender">
											<option value="" selected>Gender</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="dob" name="dob" required>
											<span class="label">Date of Birth</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<select name="nationality" id="nationality">
											<option value="" selected>Nationality</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="religion" id="religion">
											<option value="" selected>Religion</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="community" id="community">
											<option value="" selected>Community</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="caste" name="caste" required>
											<span class="label">Caste</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<select name="mother_tongue" id="mother_tongue">
											<option value="" selected>Mother Tongue of pupil</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="blood_group" id="blood_group">
											<option value="" selected>Blood Group</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="handicap" id="handicap">
											<option value="" selected>Disability / Handicap</option>
										</select>
									</div>
									
									<div class="form-holder form-holder-2">
										<select name="medical_history" id="medical_history">
											<option value="" selected>Medical History / Current Medication</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="medical_history_detail" name="medical_history_detail" required>
											<span class="label">Medical History / Current Medication Detail</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="handicap_detail" name="handicap_detail" required>
											<span class="label">Disability / Handicap Detail</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-accounts-add"></i></i></span>
			            	<span class="step-text">Parent Info</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Parent Information:</h3>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<select name="living_with" id="living_with">
											<option value="" selected>Living With</option>
											<option value="Parent">Parent</option>
											<option value="Guardian">Guardian</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="father_name" name="father_name" required>
											<span class="label">Father's Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="father_initial" name="father_initial" required>
											<span class="label">Father's Initial</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="father_qualification" name="father_qualification" required>
											<span class="label">Father's Qualification</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="father_occupation" name="father_occupation" required>
											<span class="label">Father's Occupation</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="mother_name" name="mother_name" required>
											<span class="label">Mother's Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="mother_initial" name="mother_initial" required>
											<span class="label">Mother's Initial</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="mother_qualification" name="mother_qualification" required>
											<span class="label">Mother's Qualification</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="mother_occupation" name="mother_occupation" required>
											<span class="label">Mother's Occupation</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<h4>Student's residential address<span style="font-size: 10px;color: #ee5c37;"><input type="checkbox" name="some_address">SELECT IF BOTH ADDRESSES ARE THE SAME</span></h4>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="door_no" name="door_no" required>
											<span class="label">DOOR NO.</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="street_address" name="street_address" required>
											<span class="label">Street Address</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="locality" name="locality" required>
											<span class="label">Locality</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="city" name="city" required>
											<span class="label">City</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<select name="country" id="country">
											<option value="" selected>India</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="state" id="state">
											<option value="" selected>Tamilnadu</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="pincode" name="pincode" required>
											<span class="label">Pincode</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<h4>Parent's/Guardian's address</h4>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="parent_door_no" name="parent_door_no" required>
											<span class="label">DOOR NO.</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="parent_street_address" name="parent_street_address" required>
											<span class="label">Street Address</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="parent_locality" name="parent_locality" required>
											<span class="label">Locality</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="parent_city" name="parent_city" required>
											<span class="label">City</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<select name="parent_country" id="parent_country">
											<option value="" selected>India</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="parent_state" id="parent_state">
											<option value="" selected>Tamilnadu</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="parent_pincode" name="parent_pincode" required>
											<span class="label">Pincode</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="primary_nobile_no" name="primary_nobile_no" required>
											<span class="label">Primary Mobile No.</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="secondary_mobile_no" name="secondary_mobile_no" required>
											<span class="label">Secondary Mobile No</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="parent_email" name="parent_email" required>
											<span class="label">Email Address</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<select name="income" id="income">
											<option value="" selected>Yearly Income of Father&Mother(Total)</option>
											<option value="less_than_3">&#60;3L</option>
											<option value="3_6">3-6L</option>
											<option value="6-12">6-12L</option>
											<option value="greater_than_12">&#62;12L</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-cloud-upload"></i></span>
			            	<span class="step-text">Other Info</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Previous School's Details</h3>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_school_name" name="last_school_name" required>
											<span class="label">Last School Name</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<select name="last_attend_class" id="last_attend_class">
											<option value="" selected>Last Attend Class</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<select name="affiliated" id="affiliated">
											<option value="" selected>Previous school affiliated to</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="affiliated_detail" name="affiliated_detail" required>
											<span class="label">Previous school affiliated Detail</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="aadhar" name="aadhar" required>
											<span class="label">Aadhar Card Number </span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="emis_no" name="emis_no" required>
											<span class="label">EMIS Number (from the previous school)</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="awards" name="awards" required>
											<span class="label">Awards Received in Sports or Co-Curricular Activities</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="reference" name="reference" required>
											<span class="label">Reference</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-text">Payment</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Payment Information</h3>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="payer_first_name" name="payer_first_name" required>
											<span class="label">Payer First Name</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="payer_last_name" name="payer_last_name" required>
											<span class="label">Payer Last Name</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="payer_mobile_no" name="payer_mobile_no" required>
											<span class="label">Payer Mobile No.</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="payer_email" name="payer_email" required>
											<span class="label">Payer Email</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<table class="table" width="100%">
										<tr style="background-color: #52dce7;">
											<th style="width: 10%">S.No.</th>
											<th>Detail</th>
											<th style="width: 20%">Amount</th>
										</tr>
										<tr style="background-color: #faebd757;">
											<td style="text-align: center;">1</td>
											<td style="text-align: center;">Application Fee</td>
											<td style="text-align: center;">500.00</td>
										</tr>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url();?>frontend/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>frontend/js/jquery.steps.js"></script>
	<script src="<?php echo base_url();?>frontend/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>frontend/js/main.js"></script>
</body>
</html>