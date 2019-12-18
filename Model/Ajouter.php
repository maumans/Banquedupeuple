<?php
    require_once("connexion.php");

    function ajouterClient($nom,$prenom,$adresse,$tel)
    {
        $db=connexion();

        $sql="INSERT INTO client VALUES(null,'$nom','$prenom','$adresse','$tel')";

        $db->exec($sql);
    }

    function ajouterCompte($solde,$idCle)
    {
        $sql="INSERT INTO compte VALUES(null,$solde,$idCle)";
        $db=connexion();

        $db->exec($sql);
    }

    function lastId()
    {
        $sql="SELECT MAX(id_Cl) FROM client";
        $db=connexion();

        return $db->query($sql);
    }

?>