<?php
    require_once("connexion.php");
    
    $id=$_GET['id'];

    function supprimerClient($id)
    {
        $db=connexion();

        $sql="DELETE FROM client WHERE id_Cl=$id";

        $db->exec($sql);

        $sqld="DELETE FROM compte WHERE id_Cle=$id";

        $db->exec($sqld);

        header("location:../View/suppression.php"); 
    }

    
        supprimerClient($id);


    ?>