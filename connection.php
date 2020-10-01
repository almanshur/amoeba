<?php

$host   = "localhost";
$uname  = "root";
$pass   = "";
$dbname = "dbSikapta";

try
    {
        $dbConf = new PDO ("mysql:host($host);$dbname($dbname)", $uname, $pass);
        $dbConf->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch (PDOException $e) 
    {
        echo $e->Massage();
    }