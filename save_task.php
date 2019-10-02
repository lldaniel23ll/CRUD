<?php
include('db.php');
    if(isset($_POST["save_task"])){
        $title=$_POST["title"];
        $description=$_POST["description"];

        $query="INSERT INTO task(tittle, description) values ('$title', '$description')";
        $result=mysqli_query($conn, $query);
        if(!$result){
            die ('Failed');
        }
        $_SESSION['message']='Task saved succefully';
        $_SESSION['message_type']='success';
        
        header("Location: index.php");
    }
?>