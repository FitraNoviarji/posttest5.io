<?php
    if(isset($_GET['idtiket'])){
        $id = $_GET['idtiket'];
    }

    $result = mysqli_query($db,
        "DELETE FROM tiket WHERE id ='$idtiket', '$judulfilm ' ");
