<?php
    include('db.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM task where id=$id";
        $result=mysqli_query($conn,$query);
        if(!$query){
            die ('Failed');
        }
        $_SESSION['message']='Tak Removed';
        $_SESSION['message_type']='danger';
        header("Location: index.php");
    }
?>