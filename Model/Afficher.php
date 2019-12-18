<?php
    require_once("connexion.php");

    function afficherClient()
    {
        $sql="SELECT * FROM client";
        $db=connexion();

        return $db->query($sql)->fetchAll();
    }

    function afficherClientS($id)
    {
        $sql="SELECT * FROM client WHERE id_Cl=$id";
        $db=connexion();

        return $db->query($sql)->fetchAll();
    }

    function afficherCompte()
    {
        $sql="SELECT * FROM compte";
        $db=connexion();

        return $db->query($sql)->fetchAll();
    }

    function afficherCompteS($id)
    {
        $sql="SELECT * FROM compte WHERE id_Cle=$id";
        $db=connexion();

        return $db->query($sql)->fetchAll();
    }
?>