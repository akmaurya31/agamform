<?php
// Include your database connection file (adjust the path as needed)
include('db_connection.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect form data
    // print_r($_POST);
    
    $applied_previously = $_POST['applied_previously'];
    $full_name = $_POST['full_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $category = $_POST['category'];
    $occupation = $_POST['occupation'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address_line1 = $_POST['address_line1'];
    $address_line2 = $_POST['address_line2'];
    $city_name = $_POST['city_name'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $pin_code = $_POST['pin_code'];
    $highest_qualification = $_POST['highest_qualification'];
    $year_of_passing = $_POST['year_of_passing'];
    $exam_state = $_POST['exam_state'];
    $exam_district = $_POST['exam_district'];
    $applied_for_exam = $_POST['applied_for_exam'];
    $exam_location1 = $_POST['exam_location1'];
    $aadhar_card_number = $_POST['aadhar_card_number'];
    $photo_path = $_POST['photo_path'];
    $signature_path = $_POST['signature_path'];
    $thumb_impression_path = $_POST['thumb_impression_path'];
    $declaration_accepted = isset($_POST['declaration_accepted']) ? 1 : 0;
    
    // Prepare SQL query for inserting data into the database
    $sql = "INSERT INTO applicant_registration (
        applied_previously, full_name, father_name, mother_name, gender, 
        date_of_birth, category, occupation, mobile, email, 
        address_line1, address_line2, city_name, state, district, 
        pin_code, highest_qualification, year_of_passing, exam_state, 
        exam_district, applied_for_exam, exam_location1, aadhar_card_number, 
        photo_path, signature_path, thumb_impression_path, declaration_accepted, 
        created_at
    ) VALUES (
        '$applied_previously', '$full_name', '$father_name', '$mother_name', '$gender', 
        '$date_of_birth', '$category', '$occupation', '$mobile', '$email', 
        '$address_line1', '$address_line2', '$city_name', '$state', '$district', 
        '$pin_code', '$highest_qualification', '$year_of_passing', '$exam_state', 
        '$exam_district', '$applied_for_exam', '$exam_location1', '$aadhar_card_number', 
        '$photo_path', '$signature_path', '$thumb_impression_path', '$declaration_accepted', 
        NOW()
    )";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>