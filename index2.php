
<!-- saved from url=(0046)https://pddus.org/e_portal/Fran/eform_open.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">
 
.style5 {color: #FFFFFF}
.style7 {color: #FFFFFF; font-weight: bold; }
.style8 {color: #FF0000}
input{
width:246px;
}
select{
width:246px;}
 
</style>

	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		
<link href="eformfol/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="eformfol/style.css">

<script src="eformfol/bootstrap.min.js"></script>
<script src="eformfol/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
@import url("font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
</style>
</head><body><section class="login-block">
    <div class="container">
    <center><img src="./eformfol/logo.png" width="100%" height="130px"></center>
	

        <form enctype="multipart/form-data" name="form1" id="form1" method="post" action="eform_post.php">
        
         <input type="hidden" name="cid" value="">
         <input type="hidden" name="cname" value="">
         <input type="hidden" name="user_name" value="direct_students">
         <input type="hidden" name="feesd" value="">
         <input type="hidden" name="date" value="2025-04-26">
    
    <input type="hidden" name="time" value="11-54-23 AM">
     <input type="hidden" name="fno" value="243792750">
    
	

<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#FF6600" style="background-color:#FFFF66">
  <tbody>
  <tr>

    <td><table width="100%" bordercolor="buttontext" border="0">

  

  <tbody valign="top">

   

  </tbody>

</table>

</td>

  </tr>
    <tr>  
      <td align="center"><h3><strong>Admission Com. Examination Application Form:&nbsp;<span id="Lblhead"></span></strong></h3></td>
    </tr>
    <tr>
      <td align="right"><span id="lblmandatory0"><span class="style8">*</span>&nbsp;अनिवार्य फिल्डस (Mandatory fields)</span></td>
    </tr>
    <tr>
      <td align="center"><div id="UpdatePanel3"></div>
    
      Course Category&nbsp;<span class="style8">*</span> : 
 
<select id="category" name="course_category" required=""></select>
Courses&nbsp;<span class="style8">*</span> :
<select id="course_name" name="course_name" required="" ></select>
Duration&nbsp;<span class="style8">*</span> :
<input type="text" id="duration" name="course_duration" required="" readonly />


    </td>

<!-- jQuery include -->


      
    </tr>
    <tr><td>---</td></tr>
    <tr>
      <td align="center" valign="top"><table border="0" cellpadding="3" cellspacing="1">
        <tbody>
          <tr>
            <td colspan="3" bgcolor="#0000FF"><span class="style5">1. Registration Details / पंजीकरण के विवरण</span></td>
          </tr>
          <tr>
            <td width="4%" valign="top">1.1</td>
            <td width="75%" valign="top">Whether Applied Previously in&nbsp;<strong></strong>&nbsp;Examination&nbsp; /&nbsp; क्या आपने पहले<strong></strong>परीक्षा के लिए आवेदन किया है"&nbsp;<span class="style8">*</span></td>
            <td width="21%" align="left"><table id="RdoAlreadyAppeared4Exam">
              <tbody>
                <tr>
                  <td><input type="radio" name="RdoAlreadyAppeared4Exam" value="NO" checked="checked" required="" style="width:10px">
                          No / नहीं</td>
                  <td><input type="radio" name="RdoAlreadyAppeared4Exam" value="NO" checked="checked" required="" style="width:10px">
                          <label for="RdoAlreadyAppeared4Exam_0">Yes / हाँ </label><label for="RdoAlreadyAppeared4Exam_1"></label></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table>
          <table id="TblFormDetail" border="0" cellpadding="3" cellspacing="1">
            <tbody>
              <tr bgcolor="#0000FF">
                <td colspan="3"><span class="style5">2.&nbsp;Applicant's Personal Details /आवेदक का व्यक्तिगत विवरण</span></td>
              </tr>
              <tr>
                <td width="4%">2.1</td>
                <td><span id="Label70">Applicant's Full Name / आवेदक का पूरा नाम&nbsp;*</span></td>
                <td width="57%"><select name="ddlSalutaionName" required="" style="width:110px;">
                  &nbsp;			                   <option value="">Select</option>
                                     <option value="Mr.">Mr./श्री</option>
                  &nbsp;			
                  <option value="Ms.">Ms./सुश्री</option>
                  &nbsp; 		
                </select>
                  &nbsp;
                  <input name="txtAppName" type="text" maxlength="60" id="txtAppName" value="" required="" placeholder="Applicants Full Name">
                  <br>
                  <em>( Full name as per High School certificate )</em></td>
              </tr>
                            <tr id="trfather">
                <td width="4%">2.2.1</td>
                <td><span id="Label2">Father's Name / पिता का नाम&nbsp;<span class="style8">*</span></span></td>
                <td><select name="sf" disabled="disabled" required="" style="width:110px;">
                  &nbsp;			
                  <option selected="selected" value="Mr.">Mr./श्री</option>
                  &nbsp; 		
                </select>
                  &nbsp;
                  <input name="txtFatherName" type="text" maxlength="60" value="" required="" placeholder="Fathers Name">
                  <br>
                  <em>( Full Name As High School  Certificate )</em></td>
              </tr>
              <tr id="trmother">
                <td width="4%">2.2.2</td>
                <td><span id="Label3">Mother's Name / माता का नाम&nbsp;<span class="style8">*</span></span></td>
                <td><select name="sm" disabled="disabled" required="" style="width:110px;">
                  &nbsp;			
                  <option selected="selected" value="Mrs.">Mrs./श्रीमती</option>
                  &nbsp; 		
                </select>
                  &nbsp;
                  <input name="txtMotherName" type="text" maxlength="60" value="" required="" placeholder="Mothers Name">
                  <br>
                  <em>( Full Name As Per High School  Certificate )</em></td>
              </tr>
              <tr id="trgender">
                <td width="4%">2.3</td>
                <td><span id="Label4">Gender / लिंग<span class="style8">*</span></span></td>
                <td align="left"><div id="UpdatePanel10">
                  <table id="RdoGender">
                    <tbody>
                      <tr>
                        <td><input id="RdoGender_0" type="radio" name="RdoGender" value="Male" tabindex="10" style="width:10px" required="">
                           <label for="RdoGender_0"> Male / पुरुष</label></td>
                        <td><input id="RdoGender_1" type="radio" style="width:10px" name="RdoGender" value="Female" tabindex="10" required="">
                            <label for="RdoGender_1">Female / महिला</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div></td>
              </tr>
              <tr id="trdob">
                <td width="4%">2.4</td>
                <td><span id="Label6">Date of Birth / जन्म दिनांक&nbsp;<span class="style8">*</span>&nbsp;(dd-Mon-yyyy)</span></td>
                <td>
             

                <input name="dob" type="date" maxlength="11" placeholder="DD-MM-YYYY" required="" value="">
                  &nbsp;
                  &nbsp;<br>
                  <em>( As per high school certificate in 'dd-mm-yyyy' format. i.e. '01-11-1990' )</em></td>
              </tr>
              <tr id="trcategory">
                <td width="4%">2.5</td>
                <td><span id="Label7">Category / वर्ग<span class="style8">*</span></span></td>
                <td><select name="Category" id="Category" required="">
                  
                                     <option value="">Select Category</option>
                                      			
                 
                  &nbsp;			
                  <option value="General">General/सामान्य</option>
                  &nbsp;			
                  <option value="Scheduled Caste">Scheduled Caste/अनुसूचित जाति</option>
                  &nbsp;			
                  <option value="Scheduled Tribe">Scheduled Tribe/अनुसूचित जनजाति</option>
                  &nbsp;			
                  <option value="Other Backward Class">Other Backward Class/अन्य पिछड़ा वर्ग</option>
                  &nbsp; 		
                </select></td>
              </tr>
              <tr id="troccupation">
                <td width="4%">2.6</td>
                <td><span id="Label5">Occupation / व्यवसाय&nbsp;<span class="style8">*</span></span></td>
                <td><div id="UpdatePanel2">
                  <select name="occupation" required="">
                    &nbsp;				
                                        <option value="">Select Occupation</option>
                                      
                    
                    &nbsp;				
                    <option value="Government Employee">Government Employee/सरकारी कर्मचारी</option>
                    &nbsp;				
                    <option value="Government Undertaking">Government Undertaking/सरकार के उपक्रम</option>
                    &nbsp;				
                    <option value="Self Employed">Self Employed/स्व कार्यरत</option>
                    &nbsp;				
                    <option value="Others">Others/अन्य</option>
                    &nbsp; 			
                  </select>
                </div></td>
              </tr>
              <tr bgcolor="#0000FF">
                <td colspan="3"><span class="style5">3.&nbsp;Contact Details / संपर्क विवरण</span></td>
              </tr>
                            <tr>
                <td width="4%">3.1</td>
                <td><span id="Label17">Mobile / मोबाइल&nbsp;<span class="style8">*</span></span></td>
                <td><input name="txtCorMobileCode" type="text" value="+91" required="" style="width:30px;" placeholder="+91">
                  &nbsp;
                  <input name="txtCorMobileNo" type="text" maxlength="10" value="" required="" placeholder="9XXXXXXXXX" style="width:326px;"></td>
              <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"><template shadowrootmode="closed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-lastpass-icon="true" style="position: absolute; cursor: pointer; height: 17.2px; max-height: 17.2px; width: 22px; max-width: 22px; top: 5.20001px; left: -349.163px; z-index: auto; color: rgb(186, 192, 202);"><rect x="0.680176" y="0.763062" width="22.6392" height="22.4737" rx="4" fill="currentColor"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7935 7.9516C19.7935 7.64414 20.0427 7.3949 20.3502 7.3949C20.6576 7.3949 20.9069 7.64414 20.9069 7.9516V16.0487C20.9069 16.3562 20.6576 16.6054 20.3502 16.6054C20.0427 16.6054 19.7935 16.3562 19.7935 16.0487V7.9516Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.76288 13.6577C5.68525 13.6577 6.43298 12.9154 6.43298 11.9998C6.43298 11.0842 5.68525 10.3419 4.76288 10.3419C3.8405 10.3419 3.09277 11.0842 3.09277 11.9998C3.09277 12.9154 3.8405 13.6577 4.76288 13.6577Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.3298 13.6577C11.2521 13.6577 11.9999 12.9154 11.9999 11.9998C11.9999 11.0842 11.2521 10.3419 10.3298 10.3419C9.4074 10.3419 8.65967 11.0842 8.65967 11.9998C8.65967 12.9154 9.4074 13.6577 10.3298 13.6577Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8964 13.6577C16.8188 13.6577 17.5665 12.9154 17.5665 11.9998C17.5665 11.0842 16.8188 10.3419 15.8964 10.3419C14.974 10.3419 14.2263 11.0842 14.2263 11.9998C14.2263 12.9154 14.974 13.6577 15.8964 13.6577Z" fill="white"></path></svg></template></div></tr>
              <tr>
                <td width="4%">3.2</td>
                <td><span id="Label19">Email / ईमेल पता&nbsp;<span class="style8">*</span></span></td>
                <td><input name="txtEmailId" type="text" maxlength="150" value="" required="" placeholder="abc@email.com" style="width:368px;">
                    <br>
                    <em>(e.g.abc@yahoo.com)</em></td>
              </tr>
              <tr bgcolor="#0000FF">
                <td colspan="3"><span class="style5">4.&nbsp;Address Details / पता विवरण</span></td>
              </tr>
              <tr>
                <td width="4%">4.1</td>
                <td><span id="Label32">Address Line1/पता पंक्ति 1&nbsp;<strong><span class="style8">*</span></strong></span></td>
                <td><input name="TxtAddressLine1" type="text" maxlength="30" value="" required="" placeholder="Address - 1" style="width:368px;"></td>
              </tr>
              <tr>
                <td width="4%">4.2</td>
                <td><span id="Label20">Address Line2/पता पंक्ति 2&nbsp;<strong><span class="style8">*</span></strong></span></td>
                <td><input name="TxtAddressLine2" type="text" maxlength="30" value="" placeholder="----------" style="width:368px;"></td>
              </tr>
                            <tr>
                <td width="4%">4.3</td>
                <td><span id="LblCity">City Name / शहर का नाम&nbsp;<strong><span class="style8">*</span></strong></span></td>
                <td><input name="TxtCity" type="text" maxlength="50" value="" required="" placeholder="City Name" style="width:368px;"></td>
              </tr>
              <tr>
                <td width="4%">4.4</td>
                <td><span id="Label10">State / राज्य&nbsp;<span class="style8">*</span></span></td>
                <td>
                  
<select name="state" id="state" onchange="setStates('state')" required="" style="width:368px;">
  <option value="">Select State</option>
  <option value="DELHI">DELHI</option>
  <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
  <option value="ASSAM">ASSAM</option>
  <option value="BIHAR">BIHAR</option>
  <option value="CHHATTISGARH">CHHATTISGARH</option>
  <option value="GOA">GOA</option>
  <option value="GUJARAT">GUJARAT</option>
  <option value="HARYANA">HARYANA</option>
  <option value="HIMANCHAL PRADESH">HIMANCHAL PRADESH</option>
  <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
  <option value="JHARKHAND">JHARKHAND</option>
  <option value="KARNATKA">KARNATKA</option>
  <option value="KERALA">KERALA</option>
  <option value="MADHYA  PRADESH">MADHYA  PRADESH</option>
  <option value="MAHARASHTRA">MAHARASHTRA</option>
  <option value="MANIPUR">MANIPUR</option>
  <option value="MEGHALAYA">MEGHALAYA</option>
  <option value="MIZORAM">MIZORAM</option>
  <option value="NAGALAND">NAGALAND</option>
  <option value="ORISSA">ORISSA</option>
  <option value="PANJAB">PANJAB</option>
  <option value="RAJSTHAN">RAJSTHAN</option>
  <option value="SIKKIM">SIKKIM</option>
  <option value="TAMILNADU">TAMILNADU</option>
  <option value="TRIPURA">TRIPURA</option>
  <option value="UTTARAKHAND">UTTARAKHAND</option>
  <option value="WEST BANGAL">WEST BANGAL</option>
  <option value="Uttar Pradesh">UTTAR PRADESH</option>
 </select></td>
              </tr>
              <tr>
                <td width="4%">4.5</td>
                <td><span id="Label14">District / जिला&nbsp;<span class="style8">*</span></span></td>
                <td><div id="UpdatePanel9">
                  
      <select name="city" id="dis" onchange="setCities();" required="" style="width:368px;"></select>
                     </div></td>
              </tr>
              <tr>
                <td width="4%">4.6</td>
                <td><span id="Label39">Pin Code / पिन कोड&nbsp;<span class="style8">*</span></span></td>
                <td><input name="txtPinCode" type="text" maxlength="6" value="" required="" placeholder="224XXX" style="width:368px;"></td>
              </tr>
              <tr bgcolor="#0000FF">
                <td colspan="3"><span class="style5">5. Educational / Qualification Details / शैक्षिक / योग्यता का विवरण</span></td>
              </tr>
              <tr valign="top">
                <td width="4%">5.1</td>
                <td><span id="Label60">Highest Educational Qualification / उच्चतम शैक्षिक योग्यता<span class="style8">*</span></span></td>
                <td><select name="educode" required="" style="width:368px;">
                
                                   <option value="">Select Qualification</option>
                                     &nbsp;			
                  <option value="Others">Others</option>
                  &nbsp;			
                  <option value="M.A./M.Sc./M.Com.">M.A./M.Sc./M.Com.</option>
                  &nbsp;			
                  <option value="B.A./B.Sc./B.Com.">B.A./B.Sc./B.Com.</option>
                  &nbsp;			
                  <option value="12th Pass">12th Pass</option>
                  &nbsp;			
                  <option value="10th Pass">10th Pass</option>
                  &nbsp; 		
                </select></td>
              </tr>
              <tr valign="top">
                <td width="4%">5.2</td>
                <td><span id="Label65">Year of Passing / उत्तीर्ण वर्ष&nbsp;<span class="style8">*</span></span></td>
                <td><input name="TxtYearOfPassing" type="text" maxlength="4" value="" required="" placeholder="Year of Passing" style="width:368px;"></td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3" bgcolor="#0000FF"><span class="style5">6. Examination Details / परीक्षा विवरण&nbsp;&nbsp;</span></td>
              </tr>
              <tr id="TrAccState" class="gdrow1">
		<td align="left" style="width: 3%" valign="top">
                                6.1.1                            </td>
		<td align="left" style="width: 50%">
                                <span id="Lbstate" class="lblNormal">Select State  /  राज्य का चयन करें<font color="RED">*</font></span>                            </td>
		<td align="left" style="width: 50%" valign="top">
                                <select name="DdlAccState" id="DdlAccState" onchange="setStatesAcc()" required="" style="width:368px;">
                                
                                                   <option value="">Select State</option>
                                      
			
  <option value="DELHI">DELHI</option>
  <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
  <option value="ASSAM">ASSAM</option>
  <option value="BIHAR">BIHAR</option>
  <option value="CHHATTISGARH">CHHATTISGARH</option>
  <option value="GOA">GOA</option>
  <option value="GUJARAT">GUJARAT</option>
  <option value="HARYANA">HARYANA</option>
  <option value="HIMANCHAL PRADESH">HIMANCHAL PRADESH</option>
  <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
  <option value="JHARKHAND">JHARKHAND</option>
  <option value="KARNATKA">KARNATKA</option>
  <option value="KERALA">KERALA</option>
  <option value="MADHYA  PRADESH">MADHYA  PRADESH</option>
  <option value="MAHARASHTRA">MAHARASHTRA</option>
  <option value="MANIPUR">MANIPUR</option>
  <option value="MEGHALAYA">MEGHALAYA</option>
  <option value="MIZORAM">MIZORAM</option>
  <option value="NAGALAND">NAGALAND</option>
  <option value="ORISSA">ORISSA</option>
  <option value="PANJAB">PANJAB</option>
  <option value="RAJSTHAN">RAJSTHAN</option>
  <option value="SIKKIM">SIKKIM</option>
  <option value="TAMILNADU">TAMILNADU</option>
  <option value="TRIPURA">TRIPURA</option>
  <option value="UTTARAKHAND">UTTARAKHAND</option>
  <option value="WEST BANGAL">WEST BANGAL</option>
  <option value="Uttar Pradesh">UTTAR PRADESH</option>
		</select>                            </td>
	</tr>
              <tr id="TrAccCentre" class="gdalternate1">
		<td align="left" style="width: 3%" valign="top">
                                6.1.2                            </td>
		<td align="left">Select District / जिला&nbsp;<span class="style8">*</span></td>
<td align="left" valign="top">
                                <div id="UpdatePanel1">
			
                                        <select name="DdlAccCentre" id="DdlAccCentre" onchange="findCenters()" tabindex="31" class="ddlNormal" style="width:368px;" required="">
                                        
                                                           <option value="">Select District</option>
                   				
                			
 
 			</select>
		</div>                            </td>
	</tr>
              <tr class="gdrow1">
		<td align="left" style="width: 3%" valign="top">
                                6.2                            </td>
		<td align="left" valign="top" width="45%">
                                <span id="Label1" class="lblNormal">Applied for Examination / किस परीक्षा के लिए आवेदन किया<font color="RED">*</font></span>                            </td>
		<td align="left" valign="top">
                        <div id="UpdatePanel11">
			
                          <select name="DdlExamCycle" class="ddlNormal" style="width:368px;" required="">
                          
                          <option value="May-2025">May-2025</option>                                      
                   
				
				
                          </select>
                        </div>                            </td>
	</tr><tr id="TrExamCentre1" class="gdalternate1">
		<td align="left" style="width: 3%" valign="top">
                                6.3                            </td>
		<td align="left" valign="top">
                                <span id="Label12" class="lblNormal">Examination Location 1 / परीक्षा केंद्र 1<font color="RED">*</font></span>                            </td>
		<td align="left" valign="top">
                                <div id="UpdatePanel4">
                                                                  <select name="DdlExamCentre1" id="DdlExamCentre1" style="width:368px;" required="">
                                  
                                 
            

                  &nbsp;			
                   
				
                
                			
 
 			</select>
		</div>                            </td>
	</tr>
              <tr bgcolor="#FF0000">
                <td colspan="3" bgcolor="#0000FF"><span class="style7">7. Identification Details / पहचान की सूचना&nbsp;&nbsp;</span></td>
              </tr>
              <tr id="Aadhaartr">
                <td align="left" valign="top">7.1</td>
                <td align="left" valign="top"><span id="Label49">Aadhar Card Number / आधार कार्ड संख्या</span></td>
                <td align="left" valign="top"><input name="txtaadhar" type="text" maxlength="12" value="" style="width:368px;" required="" placeholder="Aadhar Card Number"><div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"><template shadowrootmode="closed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-lastpass-icon="true" style="position: absolute; cursor: pointer; height: 17.2px; max-height: 17.2px; width: 22px; max-width: 22px; top: 2px; left: 339px; z-index: auto; color: rgb(186, 192, 202);"><rect x="0.680176" y="0.763062" width="22.6392" height="22.4737" rx="4" fill="currentColor"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7935 7.9516C19.7935 7.64414 20.0427 7.3949 20.3502 7.3949C20.6576 7.3949 20.9069 7.64414 20.9069 7.9516V16.0487C20.9069 16.3562 20.6576 16.6054 20.3502 16.6054C20.0427 16.6054 19.7935 16.3562 19.7935 16.0487V7.9516Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.76288 13.6577C5.68525 13.6577 6.43298 12.9154 6.43298 11.9998C6.43298 11.0842 5.68525 10.3419 4.76288 10.3419C3.8405 10.3419 3.09277 11.0842 3.09277 11.9998C3.09277 12.9154 3.8405 13.6577 4.76288 13.6577Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.3298 13.6577C11.2521 13.6577 11.9999 12.9154 11.9999 11.9998C11.9999 11.0842 11.2521 10.3419 10.3298 10.3419C9.4074 10.3419 8.65967 11.0842 8.65967 11.9998C8.65967 12.9154 9.4074 13.6577 10.3298 13.6577Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8964 13.6577C16.8188 13.6577 17.5665 12.9154 17.5665 11.9998C17.5665 11.0842 16.8188 10.3419 15.8964 10.3419C14.974 10.3419 14.2263 11.0842 14.2263 11.9998C14.2263 12.9154 14.974 13.6577 15.8964 13.6577Z" fill="white"></path></svg></template></div></td>
              </tr>
              <tr>
                <td align="left" valign="top">7.2</td>
                <td align="left" valign="top"><span id="lblphoto">Upload Photo / फोटो अपलोड&nbsp;<span class="style8">*</span></span></td>
                <td align="left" valign="top"><input type="file" id="file" name="photo[]" multiple="multiple" accept="image/*" required="">
                  &nbsp;
                  <br>
                  (JPG,JPEG,GIF,PNG image with size upto 50 KB)</td>
              </tr>
              <tr>
                <td align="left" valign="top">7.3</td>
                <td align="left" valign="top"><span id="lblsign">Upload Signature / हस्ताक्षर अपलोड&nbsp;<span class="style8">*</span></span></td>
                <td align="left" valign="top"><input type="file" id="file" name="signature[]" multiple="multiple" accept="image/*" required="">
                  &nbsp;
                  <br>
                  (JPG,JPEG,GIF,PNG image with size upto 50 KB)</td>
              </tr>
              <tr>
                <td align="left" valign="top">7.4</td>
                <td align="left" valign="top"><span id="lblThumb">Upload Left Hand Thumb Impression / बांए हाथ के अंगूठे का निशान अपलोड<span class="style8">*</span></span></td>
                <td align="left" valign="top"><input type="file" id="file" name="thumb[]" multiple="multiple" accept="image/*" required="">
                  &nbsp;
                  <br>
                  (JPG,JPEG,GIF,PNG image with size upto 50 KB)</td>
              </tr>
                            <tr>
               
                <td align="left" valign="top" colspan="4">                             </td>
              </tr>
              <tr bgcolor="#E2E2E2">
                <td colspan="3" class="style7" id="tddeclarartion"><div style="color:#000000; font-size:9px; margin-left:10px; margin-top:5px;">
                  Declaration / घोषणा </div>
                  <input type="checkbox" name="checkbox" id="checkbox" required="" style="width:40px; height:10px; float:left">
                <p style="color:#000000; font-size:9px; margin:5px; text-align:justify">I hereby declare that, I agree to abide by the rules and regulations of (Pandit Deen Dayal Upadhyay Yoga Sansthan) and also to the decision of the Examination authority, regarding my eligibility for filling the exam form of Yoga Courses. I declare that the particulars filled in the exam form are true to the best of my knowledge &amp; belief. I have noted that the Examination Authority has the right to withhold my examination application or result, in addition to any other action as may be deemed fit in the event of any of the statement(s) made by me in the exam form/above being found incorrect.</p>
               </td>
              </tr>
              
              <tr>
                <td id="tddeclarartion" colspan="3"><div align="center">
                  <input type="submit" name="Register" value="Register">
                  <input type="reset" name="button2" id="button2" value="Cancel">
                </div></td>
              </tr>
            </tbody>
        </table></td>
    </tr>
  </tbody>
</table>


</form>
</div>

</section>

 

<script type="text/javascript">

// dis lists
var states = new Array();
states['DELHI'] = new Array('CENTRAL DELHI','EAST DELHI','NEW DELHI','NORTH DELHI','NORTH  EAST DELHI','NORTH WEST DELHI','SOUTH DELHI','SOUTH WEST DELHI','WEST DELHI');
states['ANDHRA PRADESH'] = new Array('ADILABAD','ANANTPUR','CHITTOOR','EAST GODAVARI','GUNTUR','HYDERABAD','KADAPA','KRIMNAGAR','KHAMMAM','KRISHNA','KURNOOL','MAHBUBNAGAR','MEDAK(SANGAREDDI)','NALGONDA','NELLORE','NIZAMABAD','PRAKASAM','VISHAKHAPATNAM','RANGAREDDI','SRIKAKULAM','VIZIANAGARAM','WARANGAL','WEST GODAVARI');
states['ARUNACHAL PRADESH'] = new Array('ANJAW','CHANGALANG','EAST KAMENG','EAST SING','LOHIT','LONGDING','LOWER SUBANSIRI','PAPUM PARE','TAWANG','TIRAP','LOWER DIBANG VALLEY','UPPER SIANG','UPPER SUBANSIRI','WEST KAMENG','WEST SIANG','UPPER DIBANG VALLEY','KURUNG KUMEY');
states['ASSAM'] = new Array('BARPETA','BONGAIGAON','CACHAR','DARRANG','DHEMAJI','DHUBRI','DIBRUGRH','GOALPARA','GOLAGHAT','HAILAKANDI','JORHAT','KARBI ANGLONG','KARIMGANJ','KOKRAJHAR','LAKHIMPUR','MARIGAON','NAGAON','DIMA HASAO','SIBSAGAR','SONITPUR','TINSUKIA','KAMRUP','KAMRUP METROPOLITAN','BAKSA','UDALGURI','CHIRANG');
states['BIHAR'] = new Array('Araria','Arwal','Aurangabad','Banka','Begusarai','Bhagalpur','Bhojpur','Buxar','Darbhanga','EastChamparan','Gaya','Gopalganj','Jamui','Jehanabad','Kaimur','Katihar','Khagaria','Kishanganj','Lakhisarai','Madhepura','Madhubani','Munger','Muzaffarpur','Nalanda','Nawada','Patna','Purnia','Rohtas','Saharsa','Samastipur','Saran','Sheikhpura','Sheohar','Sitamarhi','Siwan','Supaul','Vaishali','WestChamparan');
states['CHHATTISGARH'] = new Array('BASTAR','DURG','RAIPUR','BILASPUR','SARGUJA');
states['CHHATTISGARH'] = new Array('BASTAR','DURG','RAIPUR','BILASPUR','SARGUJA');
states['GOA'] = new Array('NORTH GOA','SOUTH GOA');
states['GUJARAT'] = new Array('AHMEDABAD','AMRELI','ANAND','BANSKANTHA','BHARUCH','BHAVAN NAGAR','DAHOD','THE DANGS','GANDHI NAGAR','JAM NAGAR','JUNAGARH','KUTCH','KHEDA','MEHSANA','NARMADA','NAVSARI','PATAN','PANCHMAHAL','PORBANDER','RAJ KOT','SABARKANTHA','SURENDRA NAGAR','SURAT','TAPI','VADODRA','VALSAD');
states['HARYANA'] = new Array('AMBALA','BHIWANI','FARIDABAD','FATEHABAD','GURGAON','HISAR','JHAJAR','JIND','KAITHAL','KARNAL','KURUNKSHETRA','MAHENDRAGARH','MEWAT','PALWAL','PANCHKULA','PANIPAT','REWARI','ROHTAK','SIRSA','SONIPAT','YAMUNA NAGAR');
states['HIMANCHAL PRADESH'] = new Array('BILASPUR','CHAMBA','HAMIRPUR','KANGRA','KINNAUR','KULLU','LAHAUL AND SPITI','MANDI','SHIMLA','SIRMAUR','SOLAN','UNA');
states['JAMMU AND KASHMIR'] = new Array('JAMMU','KASHMIR','LADAKH');
states['JHARKHAND'] = new Array('RANCHI','LOHARDAGA','GULMA','SIMDEGA','PALAMU','LATEHAR','GARHWA','WEST SINGHBHUM','SARAIKELA KHARSAWAN','EAST SINGHBHUM','DUMKA','JAMTARA','SAHEBGANJ','PAKUR','GODDA','ARIBAGH','CHATRA','KODERMA','GIRIDIH','DHANBAD','BOKARO','DEOGHARH','KHUNTI','RAMGARH');
states['KARNATKA'] = new Array('BANGLORE URBAN','BANGLORE RULAR','BANGALA KOT','BELGAUM','BELLRY','BIDAR','BIJAPUR','CHAMARAJA NAGAR','CHIKBALLAPUR','CHIKMAGPUR','CHITIRADURGA','COORG','DAVANAGARE','DHARWAD','GULBARGA','GADAG','HASSAN','HAVERI','KOLAR','KOPPAL','MANDYA','DAKSHINA KANNADA','RAICHUR','RAMANAGRAM','SHIMOGA','UDUPI','UTTARA KANNADA');
states['KERALA'] = new Array('CLICKABLE','ALAPPUZHA','ERNAKULAM','IDUKKI','KANNUR','KASARGOD','KOLLAM','KOTTAYAM','KOZHIKODE','MALAPPURAM','PALKKAD','PATHANAMTHITTA','THIRUVANNATHPURAM','THRISSURE','WAYANAD');
states['MADHYA  PRADESH'] = new Array('ALIRAJPUR','AGAR MALWA','BALAGHAT','BHIND','CHHATARPUR','DATIA','DINDORI','HARDA','JABALPUR','KHANDAWA','MANDSAURE','NEEMUCH','RAJGARH','SAGAR','SEONI','SHAJAPUR','SIDHI','UMRIA','ANUPPUR','BARWNI','BHOPAL','CHHINDAURA','DEWAS','GUNA','HOSANGABAD','JHABUA','KHARGONE','MORENA','PANNA','RATLAM','SATNA','SINGRAULI','SHEOPUR','TIKAMGARH','VIDISHA','ASHOK NAGAR','BETUL','BURHANPUR','DAMOH','DHAR','GWALIOR','INDAUR','KATNI','MANDLA','NARSINGHPUR','RAISEN','REWA','SEHORE','SHAHDOL','SHIVPURI','UJJAIN');
states['MAHARASHTRA'] = new Array('AHMEDNAGAR','AKOLA','AMRAVATI','AURANGABAD','BEED','BHANDARA','BULDHANA','CHANDRAPUR','DHULE','GADCHIROLI','GONDIA','HINGOLI','JALGAON','JALNA','KOLHAPUR','LATUR','MUMBAI CITY','MUMBAI SUBURBAN','NANDED','NANDURBAR','NAGPUR','NASHIK','OSMANABAD','PALGHAR','PARBHANI','PUNE','RAIGAD','RATNAGIRI','SANGLI','SATARA','SINDHUDURG','SOLAPUR','THANE','WARDHA','WASHIM','YAVATMAL');
states['MANIPUR'] = new Array('BISHNUPUR','CHURACHANDPUR','CHANDEL','IMPHAL EAST','SENAPATI','TAMENGLONG','THOUBAL','UKHRUL','IMPHAL WEST');
states['MEGHALAYA'] = new Array('EAST GARO HILLS','EAST KHASI  HILLS','JAINTIA HILLS','RI-BHOI','SOUTH HILLS','WEST GARO HILLS','WEST KHASI HILLS');
states['MIZORAM'] = new Array('AIZAWL','CHAMPHAI','KOLASIB','LAWNGTLAI','LUNGLEI','MAMIT','SAIHA','SERCHHP');
states['NAGALAND'] = new Array('DIMAPUR','KIPHIRE','KOHIMA','LONGLENG','MOM','PEREN','PHEK','TUENSANG','WOKHA','ZUNHEBOTO');
states['ORISSA'] = new Array('ANGUL','BOUDH','BHADRAK','BOLANGIR','BARGARH','BALESWAR','CUTTACK','DEBAGARH','DHENKANAL','GANJAM','GAJAPATI','JHARSUGUDA','JAIPUR','JAGATSINGHPUR','KHORDHA','KENDUJHAR','KALAHALNDI','KANDHANMAL','KORAPUT','KENDRAPARA','MALKANGIRI','MAYUREBHANJ','NABARANGPUR','NUAPADA','NAYAGARH','PURI','RAYAGADA','SAMBALPUR','SUBAMAPUR','SUNDARGARH');
states['PANJAB'] = new Array('AMRITSAR','BARNALA','BATHINDA','FARIDKOT','FATEHGARH SAHIB','FAZILKA','FEROZPUR','GURDASPUR','HOSHIARPUR','JALANDHAR','KAPURTHALA');
states['RAJSTHAN'] = new Array('AJMER','ALWAR','BANSWARA','BARAN','BARMER','BHARATPUR','BHILWAR','BIKANER','BUNDI','CHITTORGARH','CHURU','DAUSA','DHOLPUR','DUNGARPUR','HANUMANGARH','JAIPUR','JAISALMER','JALOR','JHALAWAR','JALOR','JHUNJHUNU','JODHPUR','KOTA','NAGAUR','PALI','PRATAPGARH','RAJSAMAND','SAWAI MADHOPUR','SIKAR','SIROHI','SRI GANGA NAGAR','TONK','UDAIPUR');
states['SIKKIM'] = new Array('EAST SIKKIM','NORTH SIKKIM','SOUTH SIKKIM','WEST SIKKIM');
states['TAMILNADU'] = new Array('Kanchipuram','Tiruvallur','Cuddalore','Villupuram','Vellore','Tiruvannamalai','Salem','Namakkal','Dharmapuri','Erode','Coimbatore','The Nilgiris','Thanjavur','Nagapattinam','Tiruvarur','Tiruchirappalli','Karur','Perambalur','Pudukkottai','Madurai','Theni','Dindigul','Ramanathapuram','Virudhunagar','Sivagangai','Tirunelveli','Thoothukkudi','Kanniyakumari','Krishnagiri','Ariyalur','Tiruppur','Chennai urban');
states['TRIPURA'] = new Array('DHALAI','NORTH TRIPURA','SOUTH TRIPURA','WEST TRIPURA');
states['UTTARAKHAND'] = new Array('ALMORA','BAGESHWAR','CHAMOLI','CHAMPAWATI','DEHRADUN','HARIDWAR','NAINITAL','PAURI GARHWAL','PITHAURAGARH','RUDRA PRAYAG','TEHRI GARHWAL','UDHAM SINGH  NAGAR','UTTARKASHI');
states['WEST BANGAL'] = new Array('BANKURA','BARDHAMAN','BIRBHUM','COOCH BEHAR','DARJEELING','EAST MIDNAORE','HOOGHLY','HOWRA','JALPAIGURI','KOLKATA','MALDA','MURSHIDABAD','NADIA','NORTH 24 PARGANAS','NORTH DINAJPUR','PURULIA','SOUTH 24 PARGANAS','SOUTH DINAJPUR','WEST MIDNAPORE');
states['Uttar Pradesh'] = new Array('Agra','Firozabad','Mainpuri','Mathura','Aligarh','Etah','Mahamaya Nagar','Kanshiram Nagar','Allahabad','Fatehpur','Kaushambi','Pratapgarh','Azamgarh','Ballia','Mau','Badaun','Bareilly','Pilibhit','Shahjahanpur','Basti','Sant Kabir Nagar','Siddharthnagar','Banda','Chitrakoot','Hamirpur','Mahoba','Bahraich','Balarampur','Gonda','Shravasti','Ambedkar Nagar','Barabanki','Faizabad','Sultanpur','Chhatrapati Shahuji Maharaj Nagar','Devaria','Gorakhpur','Kushinagar','Maharajganj','Jalaun','Jhansi','Lalitpur','Auraiya','Etawah','Farrukhabad','Kannauj','Kanpur Dehat','Kanpur Nagar','Hardoi','Lakhimpur Kheri','Lucknow','Raebareli','Sitapur','Unnao','Bagpat','Bulandshahr','Gautam Buddha Nagar','Ghaziabad','Meerut','Mirzapur','Sant Ravidas Nagar','Sonbhadra','Bijnor','Jyotiba Phule Nagar','Moradabad','Rampur','Muzaffarnagar','Saharanpur','Chandauli','Ghazipur','Jaunpur','Varanasi');

// City lists
var cities = new Array();

cities['BIHAR'] = new Array();
cities['BIHAR']['BIHAR'] = new Array('ARARIA','ARWAL','AURANGABAD','BANKA','BEGUSARAI','BHABHUA','BHAGALPUR','BHOJPUR','BUXAR','DARBHANGA','EAST CHAMPARAN','GAYAGOPAL GANJ','JAMUI','JEHANABAD','KATIHAR','KHAGARIA','KISHAN GANJ','LAKHISARAI','MADHEPURA','MADHUBANI','MONGHYR','MUZAFFARPUR','NALANDA','NAWADA','PATNA','PURNEA','ROHTAS','SAHARSA','SAMASTIPUR','SARAN','SHEIKHPURA','SHEOHAR','SITAMARHI','SIWAN','SUPAUL','VAISHALI','WEST CHAMPARAN');

cities['CHHATTISGARH'] = new Array();
cities['CHHATTISGARH']['BASTAR'] = new Array('BIJAPUR','SUKMA(NEW)','DANTEWADA','BASTAR','KONDAGAON','NARAYANPUR','KANKER');
cities['CHHATTISGARH']['DURG']       = new Array('KAWARDHA','RAJNANDGAON','BLOD(NEW)','DURG','BEMETARA(NEW)');
cities['CHHATTISGARH']['RAIPUR']         = new Array('DHAMTARI','GARIYABAND(NEW)','RAIPUR','BALODA BAZAR(NEW)','MASAMUND');
cities['CHHATTISGARH']['BILASPUR']       = new Array('BILASPUR','MUNGELI(NEW)','KORBA','JANJGIR-CHAMPA','RAIGARH');
cities['CHHATTISGARH']['SARGUJA']         = new Array('KORIA','SURAJPUR','SARGUJA(AMBIKAPUR)','BALRAMPUR(NEW)','JASHPUR');


cities['JAMMU AND KASHMIR'] = new Array();
cities['JAMMU AND KASHMIR']['JAMMU'] = new Array('KATHUA DISTRICT','JAMMU','SAMBA','UDHAMPUR','REASI','RAJOURI','POONCH','DODA','RAMBAN','KISHTWAR');
cities['JAMMU AND KASHMIR']['KASHMIR']       = new Array('ANANTNAG','KULGAM','PULWAMA','SHOPIAN','BUDGAM','SRINAGAR','GANDERGAR','BANDIPORA','BARAMULLA','KUPWARA');
cities['JAMMU AND KASHMIR']['LADAKH']       = new Array('KARGIL','LEH');

function setStates() {
 cntrySel = document.getElementById('state');
 stateList = states[cntrySel.value];
 changeSelect('dis', stateList, stateList);
 setCities();
}

function setStatesAcc() {
 cntrySel = document.getElementById('DdlAccState');
 stateList = states[cntrySel.value];
 changeSelect('DdlAccCentre', stateList, stateList);
//  setCitiesAcc();
 findCenters('DdlExamCentre1')
}


 

function setCitiesAcc111() {
  cntrySel = document.getElementById('DdlAccState');
  stateSel = document.getElementById('DdlAccCentre');
  cityList = cities[cntrySel.value][stateSel.value];
  console.log(cntrySel,stateSel,"dddd");
  changeSelectAcc('DdlExamCentre1', cityList, cityList);
}

function setCities() {
  cntrySel = document.getElementById('state');
  stateSel = document.getElementById('dis');
  cityList = cities[cntrySel.value][stateSel.value];
  changeSelect('city', cityList, cityList);
}

function changeSelectAcc(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}

function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}

 
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  setStates();
});


function findCenters(fieldID) {
  fetch('centers.json')
    .then(response => response.json())
    .then(data => {
      const selectField = document.getElementById(fieldID);
      selectField.options.length = 0; // Pehle saare options clear kar do
      
      data.forEach(center => {
        const option = new Option(center.text, center.value); // name dikhega, id value hogi
        selectField.add(option);
      });
    })
    .catch(error => console.error('Error loading JSON:', error));
}

function FileValid(){
  let valid = true;
  $('input[type="file"]').each(function() {
    let file = this.files[0];
    if (file) {
      // Check size (50 KB = 51200 bytes)
      if (file.size > 51200) {
        alert('Each file must be under 50 KB!');
        valid = false;
        return false;
      }
      // Check type
      if (!['image/jpeg', 'image/jpg', 'image/png', 'image/gif'].includes(file.type)) {
        alert('Only JPG, JPEG, PNG, GIF images are allowed!');
        valid = false;
        return false;
      }
    }
  });
}

 
$(document).ready(function() {
    let courseData = [];

    // JSON Load
    $.getJSON('course.json', function(data) {
        courseData = data;

        // Fill Category dropdown
        $('#category').append(`<option value="">Select Category</option>`);
        $.each(data, function(index, item) {
            $('#category').append(`<option value="${item.category}">${item.category}</option>`);
        });
    });

    // On Category Change
    $('#category').change(function() {
        const selectedCategory = $(this).val();
        $('#course_name').empty();
        $('#duration').val('');

        if (selectedCategory) {
            const selectedData = courseData.find(cat => cat.category === selectedCategory);

            if (selectedData) {
                $('#course_name').append(`<option value="">Select Course</option>`);
                $.each(selectedData.courses, function(index, course) {
                    $('#course_name').append(`<option value="${course.short_name}" data-duration="${course.duration}">${course.course_name}</option>`);
                });
            }
        }
    });

    // On Course Change
    $('#course_name').change(function() {
        const selectedDuration = $(this).find('option:selected').data('duration') || '';
        $('#duration').val(selectedDuration);
    });

});
</script>

</body></html>