<?php
// Define database connection variables
// define( 'DB_NAME', 'wp_stu' );
// define( 'DB_USER', 'wp_qfsli' );
// define( 'DB_PASSWORD', '?C7g4n_VE!p$P?A0' );
// define( 'DB_HOST', 'localhost' );


define( 'DB_NAME', 'stu_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root@123' );
define( 'DB_HOST', 'localhost' );

// Create the connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connected successfully!";
}

function getNextCid($conn) {
    // Query to get the latest `cid` from applicants
    $query = "SELECT `cid` FROM `applicants` ORDER BY `cid` DESC LIMIT 1";
    
    // Execute the query
    $result = $conn->query($query);

    // Check if we have a result
    if ($result->num_rows > 0) {
        // Fetch the latest cid
        $row = $result->fetch_assoc();
        $latestCid = (int) $row['cid'];

        // Increment by 1
        $nextCid = $latestCid + 1;
        if ($nextCid < 901340000) {
            // Add the prefix 901340000
            $nextCid = 901340000 + $nextCid;
        }

        // Return the next cid
        return $nextCid;
    } else {
        // If no result found, return a default cid (for the first record)
        return 9013400000 + 1; // or any other logic you want to use
    }
}

function uploadFile($field,$nextCid) {
    global $conn;
    // File details for the first file (index 0)
    $i = 0;
    $fileTmp = $_FILES[$field]['tmp_name'][$i];
    $fileName = $_FILES[$field]['name'][$i];
    $fileSize = $_FILES[$field]['size'][$i];
    $fileType = $_FILES[$field]['type'][$i];

    // Generating new file name
    $newFileName = 'uploads/' . $field . '_' . time() . '_' . basename($fileName);

    // Moving the file to the upload directory
    if (move_uploaded_file($fileTmp, $newFileName)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }

    // Make sure $nextCid is properly defined, else use a default value
    // Ensure that $conn is your database connection
    //$nextCid = 1; // Replace with the actual value of nextCid as needed
    // $nextCid = getNextCid($conn); 

    // Update query to set the field to the new file path (not empty string)
    $sql = "UPDATE `applicants` SET `$field` = '$newFileName' WHERE `cid` = $nextCid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}



// Function to handle file upload and return the new file name
function uploadFile222($field) {
    echo "<pre>";
    print_r($_FILES);

    if (isset($_FILES[$field]) && is_array($_FILES[$field]['name'])) {
        // Initialize an array to hold the uploaded file paths for each field
        $allFile = [];
        
        // Loop through each uploaded file for the given field
        for ($i = 0; $i < count($_FILES[$field]['name']); $i++) {
            // Get the current file's data
            $fileTmp = $_FILES[$field]['tmp_name'][$i];
            $fileName = $_FILES[$field]['name'][$i];
            $fileSize = $_FILES[$field]['size'][$i];
            $fileType = $_FILES[$field]['type'][$i];
            
            // Check file size (50 KB max)
            // if ($fileSize > 151200) {
            //     die("Error: File size must be less than 50 KB for $field.");
            // }
            
            // Allowed file types (JPG, JPEG, PNG, GIF)
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
            if (!in_array($fileType, $allowedTypes)) {
                die("Error: Only JPG, JPEG, PNG, GIF allowed for $field.");
            }
            
            // Create a new file name with a timestamp to prevent overwriting
            $newFileName = 'uploads/' . $field . '_' . time() . '_' . basename($fileName);
            
            // Move the file from temp to the destination folder
            if (move_uploaded_file($fileTmp, $newFileName)) {
                echo "$field file $i uploaded successfully!<br>";
            } else {
                echo "Failed to upload $field file $i.<br>";
            }
            
            // Add the new file path to the array
            $allFile[$field] = $newFileName;
        }
        
        // Return the array of uploaded files for the field
        return $allFile;
    } else {
        echo "No files uploaded or error uploading the $field.<br>";
        return null;
    }
}


function handleFileUploadAndUpdate($fields, $conn) {
    // Loop through each field and upload the files
    $uploadedFiles = [];
    foreach ($fields as $field) {
        $uploadedFiles[$field] = uploadFile($field);  // Upload the files for each field
    }
    
    // Get the next CID (assuming it's generated via a separate logic or query)
    $nextCid = getNextCid($conn);  // Implement getNextCid to get the latest CID
    
    // Construct the SQL query to update the database
    $sql = "UPDATE `applicants` SET 
        `photo` = '{$uploadedFiles['photo']}', 
        `signature` = '{$uploadedFiles['signature']}', 
        `thumb` = '{$uploadedFiles['thumb']}' 
    WHERE `cid` = $nextCid";
    
    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully with nextCid $nextCid!<br>";
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }
}

function fetchRecordById($id) {
    global $conn;

    // $id = intval($id); // Secure kar diya id ko integer me

    $sql = "SELECT * FROM `applicants` WHERE cid = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}

?>
