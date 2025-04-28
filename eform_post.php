<?php
// Database connection
require_once('db_connection.php'); // Assuming db_connection.php contains your database credentials

// Create uploads folder if not exists
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

$nextCid = getNextCid($conn);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    
    $cid = $_POST['cid'];
    $course_category = $_POST['course_category'];
    $course_name = $_POST['course_name'];
    $course_duration = $_POST['course_duration'];

    $cname = $_POST['cname'];
    $user_name = $_POST['user_name'];
    $feesd = $_POST['feesd'];
    $date = $_POST['date'];
    
    // Convert time format from '11-54-23 AM' to '11:54:23' (24-hour format)
    $time = date("H:i:s", strtotime($_POST['time'])); // Converts to 24-hour format
    
    $fno = $_POST['fno'];
    $RdoAlreadyAppeared4Exam = $_POST['RdoAlreadyAppeared4Exam'];
    $ddlSalutaionName = $_POST['ddlSalutaionName'];
    $txtAppName = $_POST['txtAppName'];
    $txtFatherName = $_POST['txtFatherName'];
    $txtMotherName = $_POST['txtMotherName'];
    $RdoGender = $_POST['RdoGender'];
    $dob = $_POST['dob'];
    $Category = $_POST['Category'];
    $occupation = $_POST['occupation'];
    $txtCorMobileCode = $_POST['txtCorMobileCode'];
    $txtCorMobileNo = $_POST['txtCorMobileNo'];
    $txtEmailId = $_POST['txtEmailId'];
    $TxtAddressLine1 = $_POST['TxtAddressLine1'];
    $TxtAddressLine2 = $_POST['TxtAddressLine2'];
    $TxtCity = $_POST['TxtCity'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $txtPinCode = $_POST['txtPinCode'];
    $educode = $_POST['educode'];
    $TxtYearOfPassing = $_POST['TxtYearOfPassing'];
    $DdlAccState = $_POST['DdlAccState'];
    $DdlAccCentre = $_POST['DdlAccCentre'];
    $DdlExamCycle = $_POST['DdlExamCycle'];
    $txtaadhar = $_POST['txtaadhar'];

    
    // Insert query
     $query = "INSERT INTO applicants (
        cid, cname, user_name, feesd, date, time, fno, RdoAlreadyAppeared4Exam, 
        ddlSalutaionName, txtAppName, txtFatherName, txtMotherName, RdoGender, 
        dob, Category, occupation, txtCorMobileCode, txtCorMobileNo, txtEmailId, 
        TxtAddressLine1, TxtAddressLine2, TxtCity, state, city, txtPinCode, educode, 
        TxtYearOfPassing, DdlAccState, DdlAccCentre, DdlExamCycle, txtaadhar,course_category,course_name,course_duration
    ) VALUES (
        '$nextCid', '$cname', '$user_name', '$feesd', '$date', '$time', '$fno', '$RdoAlreadyAppeared4Exam',
        '$ddlSalutaionName', '$txtAppName', '$txtFatherName', '$txtMotherName', '$RdoGender',
        '$dob', '$Category', '$occupation', '$txtCorMobileCode', '$txtCorMobileNo', '$txtEmailId',
        '$TxtAddressLine1', '$TxtAddressLine2', '$TxtCity', '$state', '$city', '$txtPinCode', '$educode',
        '$TxtYearOfPassing', '$DdlAccState', '$DdlAccCentre', '$DdlExamCycle', '$txtaadhar','$course_category','$course_name','$course_duration'
    )";

    // Execute the query
    if ($conn->query($query) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$fields = ['photo', 'signature', 'thumb'];
uploadFile('photo',$nextCid);
uploadFile('signature',$nextCid);
uploadFile('thumb',$nextCid);
// handleFileUploadAndUpdate($fields, $conn);

 
header("Location: printeform_open1.php?nextCid=" . $nextCid);
exit();
 
// $conn->close();

?>
