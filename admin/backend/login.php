<?php 
include '../../includes/connection.php';
if($_POST['submit']){

    $username = $_POST['username'];
    $password = $_POST['password'];

    //SQL Statement: Selecting all users
    $sql = "SELECT * FROM user WHERE uName='$username' AND uPass='$password'";
    $result = $conn->query($sql);

  
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $_SESSION['auth_id'] = $row['id'];
            header('Location: ' . $home . 'admin/welcoming.php');
        }
    }else{
        $_SESSION['status'] = 'Invalid Username or Password';
        header('Location: ' . $home . 'admin/index.php');
        return;
    }
}
?>