<?php

    try {

        $connect = new PDO("mysql:host=localhost;dbname=bieren", "root", "");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connected succesfully";

    } catch (PDOException $e) {

        //echo "failed " . $e->getMessage();
        
    }

?>