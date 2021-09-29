
<?php 
include "database_conn.php";

if(isset($_POST['uname']) &&  isset($_POST['passwrd'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $passwrd = validate ($_POST['passwrd']);

    if(empty($uname)){
        header("location:index.php?error=user name is required");
        exit();
    }else if(empty($passwrd)){
        header("location:index.php?error=password is required");
        exit();
    }else{
       $sql = "SELECT * FROM users WHERE user_name = '$uname' AND pass_word='$passwrd'";
       $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result)){
        
       }else{
        header("location:index.php?error=wrong username or password");
        exit();
       }
    }
}else{
    header("location:index.php");
    exit();
}
?>













