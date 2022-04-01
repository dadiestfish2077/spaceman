<?php
require_once('config.php');
?>
<?php


if(isset($_POST)){
    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $email          = $_POST['email'];
    $password       = ($_POST['password']);
    
    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES(?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $email, $password]);
    if($result){
        echo "successfully saved.";
    }else{
        echo 'there were errors while saving the data.';
    }

}else{
    echo 'No data';

}