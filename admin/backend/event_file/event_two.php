<?php
include '../../../includes/connection.php';

$pdf = $_FILES['pdfFile'];
function generateRandomString($length = 8){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for($i = 0; $i < $length; $i++){
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$randomString = generateRandomString();
if(isset($_FILES['pdfFile'])){
    $file = $_FILES['pdfFile'];

    if($file['error'] === UPLOAD_ERR_OK){
        $uploadDir = '../../../assets/file/';
        $fileName = "BuenaFile". $randomString . ".pdf";
        $destination = $uploadDir . $fileName;

        if(move_uploaded_file($file['tmp_name'], $destination)){
            echo 'Image Uploaded and Copied Successfully';
        }else{
            echo 'Failed to Copy the Uploaded File';
        }
    }else{
        echo 'Error Uploading the image. Please Try Again';
    }
}

$pdfs = "assets/file/BuenaFile" . $randomString . ".pdf";

$sql = "UPDATE file SET event_two = '$pdfs'";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Logo Uploaded Successfully";
    header('Location: ' . $home . 'admin/event.php');
    
}
