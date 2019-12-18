<?php
    require_once("connexion.php");
    $id=$_GET['id'];

    function supprimerCompte($id)
    {
        $db=connexion();

        $sql="DELETE FROM compte WHERE numCpt=$id";

        $db->exec($sql);

        header("location:../View/suppressionCompte.php");
    }
    
        supprimerCompte($id);

    ?>