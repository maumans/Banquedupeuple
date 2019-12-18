<?php
    include("header.php");

    
    

    if(isset($_POST["enregistrer"]))
    {
        $nom=htmlspecialchars($_POST["nom"]);
        $prenom=htmlspecialchars($_POST["prenom"]);
        $adresse=htmlspecialchars($_POST["adresse"]);
        $tel=$_POST["index"].htmlspecialchars($_POST["tel"]);

        $solde=htmlspecialchars($_POST["compte"]);
        
        ajouterClient($nom,$prenom,$adresse,$tel);

        $lid=lastId();
        foreach($lid as $c)
        {
            ajouterCompte($solde,$c[0]);
        }

        
    }
?>
<nav class="nav nav-pills nav-justified pt-3 container">
        <a class="nav-item nav-link <?=active("ajout")?>"  href="ajout.php">Client</a>
        <a class="nav-item nav-link <?=active("ajoutCompte")?>"  href="ajoutCompte.php">Compte</a>
</nav>

<div class="container">
    <div class="row">
        <div class=" offset-md-3 col-md-6 border mt-4 bg-dark py-2" style="border-radius:30px;">
            <div class=" offset-md-4 col-md-4 border text-center rounded-circle mt-1">
                <h1 class="text-light">Client</h1>
            </div>
            
            <form action="" method="post" class="offset-md-2 col-md-8 is-invalid ">
                <input type="text" name="nom" placeholder="Nom du client" class="form-control mt-4" required>
                <input type="text" name="prenom" placeholder="Prenom du client" class="form-control mt-4" required>
                <input type="text" name="adresse" placeholder="Adresse du client" class="form-control mt-4" required>
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <select name="index" id="" class="form-control custom-select">
                            <option value="+221">+221</option>
                            <option value="+224">+224</option>
                            <option value="+242">+242</option>
                        </select>

                    </div>

                    <input type="tel" name="tel" placeholder="Telephone du client" class="form-control" required>
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Montant du compte</span>
                    </div>

                    <input type="text" placeholder="FCFA" class="form-control" name="compte" required>

                </div>


                <div class="row mt-4">
                    <div class="col-md-3">
                        <button class="btn btn-danger">Annuler</button>
                    </div>
                    <div class="offset-md-4 col-md-3">
                        <button class="btn btn-success" name="enregistrer">Enregistrer</button>
                    </div>

                </div>

                


            </form>
        </div>

    </div>

</div>



<?php
    
    include("footer.php");

?>