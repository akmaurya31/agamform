<?php require_once('db_connection.php'); 
if (isset($_GET['nextCid'])) {
    $nextCid = $_GET['nextCid'];
    echo "Next CID is: " . htmlspecialchars($nextCid);
}
$rs=(object)fetchRecordById($nextCid);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0066)https://pddus.org/e_portal/Fran/printeform_open.php?fno=9013455483 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head><body bgcolor="#FFFFFF">direct_students <style>
 body{ text-transform:uppercase}
 td{
 text-transform:uppercase
 }
 </style>
 <style>
 td{
 font-family:Verdana, Arial, Helvetica, sans-serif;
 font-size:12px;
 }
 </style>

<table width="800px" border="0" cellspacing="1" cellpadding="1" align="center">
  <tbody><tr>
    <td><table width="100%" bordercolor="buttontext" border="0">
  
  <tbody valign="top">
    <tr>
      
      <td><div align="center"><img src="./printeform_open_files/logo.png" width="930" height="100"></div>
          
    </td></tr>
  </tbody>
</table>
</td>
  </tr>
  <tr>
    <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td align="center"><div style="font-size:14px; font-weight:bold"><strong>Examination Application Form:&nbsp;<span id="Lblhead">()</span></strong>
      </div>
           <form action="https://pddus.org/e_portal/Fran/PayUMoney_formadd_open.php" method="post" target="_blank">
        <input type="hidden" name="check_list[]" value="9013455483" style="height:30; width:30">
        <input name="user_name" type="hidden" value="direct_students">
        <input type="submit" name="submit" value="Pay Now" style="background-color:#FF0000; color:#FFFFFF; height:80px; width:400px; border:2px #000000 solid; font-size:44px">
     </form>        </td>
    </tr>
    <tr>
      <td align="right"><div id="UpdatePanel3">
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tbody><tr>
            <td width="85%"><table width="100%" border="0" cellspacing="2" cellpadding="2">
              <tbody><tr>
                <td colspan="3" bgcolor="#CCCCCC"><span class="style5">1. Registration Details / पंजीकरण के विवरण</span></td>
              </tr>
              
              <tr>
                <td colspan="2" valign="top">Registration Number - <strong><?php echo $rs->cid; ?></strong></td>
                </tr>
              <tr>
                <td width="4%" valign="top">1.1</td>
                <td width="58%" valign="top">Whether Applied Previously in&nbsp;<strong></strong>&nbsp;Examination&nbsp; /&nbsp; क्या आपने पहले<strong></strong>परीक्षा के लिए आवेदन किया है" - <?php echo $rs->RdoAlreadyAppeared4Exam; ?></td>
              </tr>
            </tbody></table></td>
            <td width="15%"><div align="center"><img src="<?php echo $rs->photo; ?>" height="85" width="81" style="border:2px #000000 solid"></div></td>
          </tr>
        </tbody></table>
        </div></td>
    </tr>
    <tr>
      <td align="center" valign="top"><table border="0" cellpadding="3" cellspacing="1">
        <tbody>
        </tbody>
      </table>
          <table id="TblFormDetail" border="0" cellpadding="3" cellspacing="1">
            <tbody>
              <tr bgcolor="#CCCCCC">
                <td colspan="3"><span class="style5">2.&nbsp;Applicant's Personal Details /आवेदक का व्यक्तिगत विवरण</span></td>
              </tr>
              <tr>
                <td width="4%">2.1</td>
                <td><span id="Label70">Applicant's Full Name / आवेदक का पूरा नाम&nbsp;</span></td>
                <td width="57%">
                <?php echo $rs->ddlSalutaionName; ?> - <?php echo $rs->txtAppName; ?>              
               
                  &nbsp;                  </td>
              </tr>
              <tr>
                <td width="4%">2.2</td>
                <td>Care Of / देखभाल&nbsp;</td>
                <td align="left"><table id="Rdoownertype">
                  <tbody>
                    <tr>
                      <td>
                                           </td>
                    </tr>
                  </tbody>
                </table></td>
              </tr>
              <tr id="trfather">
                <td width="4%">2.2.1</td>
                <td><span id="Label2">Father's Name / पिता का नाम&nbsp;</span></td>
                <td>
                 Mr. -  <?php echo $rs->txtFatherName; ?>           </td>
              </tr>
              <tr id="trmother">
                <td width="4%">2.2.2</td>
                <td><span id="Label3">Mother's Name / माता का नाम&nbsp;</span></td>
                <td>
                Mrs. - <?php echo $rs->txtMotherName; ?>               </td>
              </tr>
              <tr id="trgender">
                <td width="4%">2.3</td>
                <td><span id="Label4">Gender / लिंग</span></td>
                <td align="left"><div id="UpdatePanel10">
                  <table id="RdoGender">
                    <tbody>
                      <tr>
                        <td>
                        <?php echo $rs->RdoGender; ?>                             </td>
                      </tr>
                    </tbody>
                  </table>
                </div></td>
              </tr>
              <tr id="trdob">
                <td width="4%">2.4</td>
                <td><span id="Label6">Date of Birth / जन्म दिनांक&nbsp;&nbsp;(dd-Mon-yyyy)</span></td>
                <td>
                <?php echo $rs->dob; ?>               </td>
              </tr>
              <tr id="trcategory">
                <td width="4%">2.5</td>
                <td><span id="Label7">Category / वर्ग</span></td>
                <td>
                <?php echo $rs->Category; ?> 
                <!-- Category	occupation -->
                                </td>
              </tr>
              <tr id="troccupation">
                <td width="4%">2.6</td>
                <td><span id="Label5">Occupation / व्यवसाय&nbsp;</span></td>
                <td><div id="UpdatePanel2">
                <?php echo $rs->occupation; ?>                 
                 
                </div></td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3"><span class="style5">3.&nbsp;Contact Details / संपर्क विवरण</span></td>
              </tr>
              <tr>
                <td width="4%">3.1</td>
                <td><span id="Label16">Phone with STD Code / दूरभाष एस टी डी कोड सहित</span></td>
                <td>
                 -                 </td>
              </tr>
              <tr>
                <td width="4%">3.2</td>
                <td><span id="Label17">Mobile / मोबाइल&nbsp;</span></td>
                <td>
                +91 - <?php echo $rs->txtCorMobileNo; ?>               </td>
              </tr>
              <tr>
                <td width="4%">3.3</td>
                <td><span id="Label19">Email / ईमेल पता&nbsp;</span></td>
                <td>
                <?php echo $rs->txtEmailId; ?>              </td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3"><span class="style5">4.&nbsp;Address Details / पता विवरण</span></td>
              </tr>
              <tr>
                <td width="4%">4.1</td>
                <td><span id="Label32">Address Line1/पता पंक्ति 1</span></td>
                <td>
                <?php echo $rs->TxtAddressLine1; ?>             </td>
              </tr>
              <tr>
                <td width="4%">4.2</td>
                <td><span id="Label20">Address Line2/पता पंक्ति 2&nbsp;</span></td>
                <td> <?php echo $rs->TxtAddressLine2; ?> 
                                 </td>
              </tr>
              <tr>
                <td width="4%">4.3</td>
                <td><span id="Label22">Address Line3/पता पंक्ति 3</span></td>
                <td><?php echo $rs->TxtAddressLine2; ?> </td>
              </tr>
              <tr>
                <td width="4%">4.4</td>
                <td><span id="LblCity">City Name / शहर का नाम&nbsp;</span></td>
                <td><?php echo $rs->TxtCity; ?> </td>
              </tr>
              <tr>
                <td width="4%">4.5</td>
                <td><span id="Label10">State / राज्य&nbsp;</span></td>
                <td>
                <?php echo $rs->state; ?>               </td>
              </tr>
              <tr>
                <td width="4%">4.6</td>
                <td><span id="Label14">District / जिला&nbsp;</span></td>
                <td><div id="UpdatePanel9">
                <?php echo $rs->city; ?>                </div></td>
              </tr>
              <tr>
                <td width="4%">4.7</td>
                <td><span id="Label39">Pin Code / पिन कोड&nbsp;</span></td>
                <td>
                <?php echo $rs->txtPinCode; ?>                    </td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3"><span class="style5">5. Educational / Qualification Details / शैक्षिक / योग्यता का विवरण</span></td>
              </tr>
              <tr valign="top">
                <td width="4%">5.1</td>
                <td><span id="Label60">Highest Educational Qualification / उच्चतम शैक्षिक योग्यता<span class="style8">*</span></span></td>
                <td>
                <?php echo $rs->educode; ?>               </td>
              </tr>
              <tr valign="top">
                <td width="4%">5.2</td>
                <td><span id="Label65">Year of Passing / उत्तीर्ण वर्ष&nbsp;</span></td>
                <td><?php echo $rs->TxtYearOfPassing; ?>                </td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3" bgcolor="#CCCCCC"><span class="style5">6. Examination Details / परीक्षा विवरण&nbsp;&nbsp;</span></td>
              </tr>
              <tr id="TrAccState" class="gdrow1">
		<td align="left" style="width: 3%" valign="top">
                                6.1.1                            </td>
		<td align="left" style="width: 50%">
                                <span id="Lbstate" class="lblNormal">Select State of Accredited Institute  / मान्यता प्राप्त संस्थान के राज्य का चयन करें</span>                            </td>
		<td align="left" style="width: 50%" valign="top">
    <?php echo $rs->DdlAccState; ?>                  </td>
	</tr>
              <tr id="TrAccCentre" class="gdalternate1">
		<td align="left" style="width: 3%" valign="top">
                                6.1.2                            </td>
		<td align="left">
                                <span id="Label21" class="lblNormal">Select Centre Name of Accredited Institute / मान्यता प्राप्त संस्थान के केंद्र के नाम का चयन करें</span>                            </td>
		<td align="left" valign="top">
                                <div id="UpdatePanel1">
			
                    //		</div>                            </td>
	</tr>
              <tr class="gdrow1">
		<td align="left" style="width: 3%" valign="top">
                                6.2                            </td>
		<td align="left" valign="top" width="45%">
                                <span id="Label1" class="lblNormal">Applied for Examination / किस परीक्षा के लिए आवेदन किया</span>                            </td>
		<td align="left" valign="top">
                        <div id="UpdatePanel11">
		 <?php echo $rs->DdlExamCycle; ?>                       </div>                            </td>
	</tr><tr id="TrExamCentre1" class="gdalternate1">
		<td align="left" style="width: 3%" valign="top">
                                6.3                            </td>
		<td align="left" valign="top">
                                <span id="Label12" class="lblNormal">Examination Location 1 / परीक्षा केंद्र 1</span>                            </td>
		<td align="left" valign="top">
                                <div id="UpdatePanel4">
                    <?php echo $rs->DdlAccCentre; ?>		</div>                            </td>
	</tr>
              <tr bgcolor="#FF0000">
                <td colspan="3" bgcolor="#CCCCCC"><span class="style7">7. Identification Details / पहचान की सूचना&nbsp;&nbsp;</span></td>
              </tr>
              <tr id="Aadhaartr">
                <td align="left" valign="top">7.1</td>
                <td align="left" valign="top"><span id="Label49">Aadhar Card Number / आधार कार्ड संख्या</span></td>
                <td align="left" valign="top">
                <?php echo $rs->txtaadhar; ?>                </td>
              </tr>
              
                </tbody></table></td>
                </tr>
                <tr>
                <td colspan="3" align="left" valign="top"><p style="color:#000000; font-size:9px; margin:5px;">I, hereby declare that, I agree to abide by the rules and regulations of (Pandit Deen Dayal Upadhyay Yoga Sansthan) and also to the decision of the Examination authority, regarding my eligibility for filling the exam form of YOGA Courses. I declare that the particulars filled in the exam form are true to the best of my knowledge &amp; belief. I have noted that the Examination Authority has the right to withhold my examination application or result, in addition to any other action as may be deemed fit in the event of any of the statement(s) made by me in the exam form/above being found incorrect.</p>
                <p style="color:#000000; font-size:9px;  margin:5px;">मैं एतद्वारा घोषणा करता/करती हूँ कि मुझे योगा परीक्षा आवेदन हेतु मेरी योग्यता के संबंध में (पं0 दीन दयाल उपाध्याय योगा संस्थान) के नियम एवं विनियम तथा परीक्षा प्राधिकारी का निर्णय मान्य है। मैं घोषणा करता/करती हूँ कि परीक्षा फार्म में मेरे द्वारा भरी गई जानकारी मेरे ज्ञान और विश्वास के अनुसार सही है। मुझे सूचित है कि परीक्षा प्राधिकारी को मेरा परीक्षा आवेदन और परिणाम रोकने अथवा रद्द करने का अधिकार है। इसके अतिरिक्त मेरे द्वारा परीक्षा आवेदन फार्म में भरी जानकारी/उपरोक्त निर्दिष्ट कथन सही न पाए जाने पर मेरे ऊपर किसी भी प्रकार की कार्रवाई करने का अधिकार (पं0 दीन दयाल उपाध्याय योगा संस्थान) को होगा।</p></td>
                </tr><tr>
                <td align="left" valign="top"><div align="center"></div></td>
                <td align="left" valign="top"><div align="center"><span id="lblsign"><img src="<?php echo $rs->signature; ?>" alt="" width="82" height="77"><br>
                  Signature / हस्ताक्षर<br>
                </span></div></td>
                <td align="left" valign="top"><div align="center"><span id="lblsign"><img src="<?php echo $rs->thumb; ?>" alt="" width="81" height="76"><br>
                  Left Hand Thumb Impression / बांए हाथ के अंगूठे का निशान<br>
                </span></div></td>
              </tr>
            </tbody>
          </table></td>
    </tr>
  </tbody>
</table>
  
</body></html>