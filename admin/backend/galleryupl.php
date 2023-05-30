<?php
include '../../includes/connection.php';

$requiredWidth = 2048;
$requiredHeight = 1365;

$identify = $_POST['gallery'];
$gallery = $_FILES['image'];
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
        $fileName = "BuenGallery". $randomString . ".png";

        $destination = $uploadDir . $fileName;

        $fileTmp = $file['tmp_name'];
        $imageSize = getimagesize($fileTmp);
        $imageWidth = $imageSize[0];
        $imageHeight = $imageSize[1];

        if($imageWidth == $requiredWidth && $imageHeight == $requiredHeight){
            if(move_uploaded_file($file['tmp_name'], $destination)){
                echo 'Image Uploaded and Copied Successfully';
            }else{
                echo 'Failed to Copy the Uploaded File';
            }
        }else{
            $_SESSION['status'] = 'Required Size: 2048 x 1365';
            header('Location: ' . $home . 'admin/welcoming.php');
            return;
        }
        
    }else{
        echo 'Error Uploading the image. Please Try Again';
    }
}

$fileDesignated = "assets/img/BuenGallery" . $randomString . ".png";

if($identify == "Event Styling"){
    $sql = "INSERT INTO gallery (imagePath, imageIdentifier) VALUES ('$fileDesignated', 'Event-Styling');";
    $result = $conn->query($sql);


}else if($identify == "Catering & Food"){
    $sql = "INSERT INTO gallery (imagePath, imageIdentifier) VALUES ('$fileDesignated', 'Catering-Food');";
    $result = $conn->query($sql);

}else if($identify == "Lights and Sound"){
    $sql = "INSERT INTO gallery (imagePath, imageIdentifier) VALUES ('$fileDesignated', 'Lights-Sound');";
    $result = $conn->query($sql);

}

if($result){
    $_SESSION['status'] = 'Gallery Updated Successfully';
    header('Location: ' . $home . 'admin/welcoming.php');
    
}
?>

