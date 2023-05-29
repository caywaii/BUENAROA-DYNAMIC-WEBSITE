<?php
include '../../includes/connection.php';

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

        if(move_uploaded_file($file['tmp_name'], $destination)){
            echo 'Image Uploaded and Copied Successfully';
        }else{
            echo 'Failed to Copy the Uploaded File';
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

