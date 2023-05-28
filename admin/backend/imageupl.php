<?php
include '../../includes/connection.php';

$logoPicture = $_FILES['image'];
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
if(isset($_FILES['image'])){
    $file = $_FILES['image'];

    if($file['error'] === UPLOAD_ERR_OK){
        $uploadDir = '../../assets/img/';
        $fileName = "Buenaroa". $randomString . ".png";

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

$logo = "assets/img/Buenaroa" . $randomString . ".png";

$sql = "UPDATE shopname SET image = '$logo'";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Logo Uploaded Successfully";
    header('Location: ' . $home . 'admin/welcoming.php');
    
}
?>

