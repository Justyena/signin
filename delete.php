<?php
if(isset($_POST["id"]))
{
    $conn = new mysqli("localhost", "root", "root", "login_main");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $id = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM workspaces WHERE id = '$id'";
    if($conn->query($sql)){
         
        header("Location: main.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();  
}
?>