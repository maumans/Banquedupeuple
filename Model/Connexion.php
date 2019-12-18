<?php
    function connexion()
    {
        $host="localhost";
        $dbname="banquebd";
        $user="root";
        $password="";
        

        $dns="mysql:host=$host;dbname=$dbname";
        try
        {
            $db=new PDO($dns,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }
        catch(PDOException $ex)
        {
            die($ex->getMessage());
        }
        return $db;
    }
    

?>